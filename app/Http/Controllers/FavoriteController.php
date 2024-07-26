<?php

namespace App\Http\Controllers;
use App\Models\Property;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use App\Notifications\PropertyDeleted;
class FavoriteController extends Controller
{
    /**
     * Add a property to favorites.
     *
     * @param int $propertyId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addToFavorites($propertyId)
    {
        $userId = Auth::id();

        // Check if the property is already in the user's favorites
        $existingFavorite = Favorite::where('user_id', $userId)
            ->where('property_id', $propertyId)
            ->first();

        if ($existingFavorite) {
            return redirect()->back()->with('message', 'Property already in favorites');
        }

        // Add to favorites
        Favorite::create([
            'user_id' => $userId,
            'property_id' => $propertyId,
        ]);

        return redirect()->back()->with('message', 'Property added to favorites');
    }

    /**
     * Remove a property from favorites.
     *
     * @param int $propertyId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function removeFromFavorites($propertyId)
    {
        $userId = Auth::id();

        // Find the favorite and delete it
        $favorite = Favorite::where('user_id', $userId)
            ->where('property_id', $propertyId)
            ->first();

        if ($favorite) {
            $favorite->delete();
            return redirect()->back()->with('message', 'Property removed from favorites');
        }

        return redirect()->back()->with('message', 'Property not found in favorites');
    }
    public function destroy($id)
    {
        // Find the property by ID
        $property = Property::findOrFail($id);

        // Find all users who have favorited this property
        $favorites = Favorite::where('property_id', $id)->get();
        $users = $favorites->pluck('user');

        // Check if users are valid before sending notifications
        if ($users->isNotEmpty()) {
            Notification::send($users, new PropertyDeleted($property));
        } else {
            // Optionally handle the case where no users are found
            // e.g., Log an error or return a message
            \Log::info('No users to notify about the deleted property.');
        }

        // Delete the property
        $property->delete();

        // Redirect back with a success message
        return redirect()->route('property.index')->with('success', 'Property deleted successfully.');
    }
}