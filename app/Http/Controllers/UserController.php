<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Task;
use App\Models\Referral;
use App\Models\Game;

class UserController extends Controller
{
    public function storeUser(Request $request)
    {
        $user = User::updateOrCreate(
            ['telegram_username' => $request->username],
        );

        return response()->json(['user' => $user]);
    }

    public function getUserDetails($username)
    {
        $user = User::where('telegram_username', $username)->first();

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        return response()->json(['user' => $user]);
    }

    public function updateUserPoints(Request $request)
    {
        $user = User::where('telegram_username', $request->username)->first();
        $user->points += $request->points;
        $user->save();

        return response()->json(['points' => $user->points]);
    }
}
