<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Show the dashboard with user favorites.
     *
     * @return \Illuminate\View\View
     */
    public function showFavorites()
{
    // Fetch all users and their favorite properties
    $users = User::with('favorites.property')->get();

    return view('admin.user_favorites', compact('users'));
}

}
;