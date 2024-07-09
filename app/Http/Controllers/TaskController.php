<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function claimTask(Request $request)
    {
        $username = $request->input('username');
        $taskTitle = $request->input('task')['title'];

        // Fetch user by Telegram username
        $user = User::where('telegram_username', $username)->first();

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        // Check if the task is already claimed by the user
        if ($this->isTaskClaimed($user, $taskTitle)) {
            return response()->json(['error' => 'Task already claimed by user'], 400);
        }

        // Update user's points based on the task reward
        $taskPoints = $this->getTaskPoints($taskTitle); // Implement this method to get points from title
        $user->points += $taskPoints;
        $user->save();

        // Return updated user points
        return response()->json(['points' => $user->points]);
    }

    public function claimedTasks(Request $request)
    {
        $username = $request->input('username');

        // Fetch user by Telegram username
        $user = User::where('telegram_username', $username)->first();

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        // Fetch user's claimed tasks
        $claimedTasks = $user->claimedTasks()->pluck('title')->toArray();

        return response()->json($claimedTasks);
    }

    private function isTaskClaimed(User $user, $taskTitle)
    {
        return $user->claimedTasks()->where('title', $taskTitle)->exists();
    }

    private function getTaskPoints($taskTitle)
    {
        // Implement logic to fetch points based on task title
        switch ($taskTitle) {
            case 'Twitter':
                return 1000;
            case 'Telegram':
                return 1000;
            case 'YouTube':
                return 1000;
            default:
                return 0;
        }
    }
}
