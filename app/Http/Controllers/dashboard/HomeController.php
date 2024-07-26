<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Message;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function  index(){
        $messages=Message::all();
        $users=User::all();
        $admins=Admin::all();
        $properties=Property::all();
        return view('admin.home',compact('messages','users','admins','properties'));

    }
    public function destroy($id)
    {
        // Find the property and its related users
        $property = Property::findOrFail($id);
        
        // Find all users who have favorited this property
        $favorites = Favorite::where('property_id', $id)->get();
        $users = $favorites->pluck('user');

        // Notify users
        Notification::send($users, new PropertyDeleted($property));

        // Delete the property
        $property->delete();

        return redirect()->back()->with('success', 'Property deleted and users notified.');
    }
}

