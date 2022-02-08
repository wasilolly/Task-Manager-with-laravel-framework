<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Task;

class UserController extends Controller
{

   public function adminDashboard()
    {
        return view('user.admin-dashboard',[
            'userCount' => User::latest()->count(),
            'users' => User::latest()->filter(['search'])->paginate(10),
            'tasks' => Task::latest()->get(),
            'taskCompleted' => Task::where('completed', 1)->get()->count(),
            'taskDue' => Task::where('completed', 0)->get()->count()
        ]);
    
    }

    public function userDashboard(User $user)
    {
        return view('user.dashboard',[
            'user' => $user, 
            'tasks' =>   Task::where('taskcreator_id', $user->id)
                            ->orWhere('assigneduser_id', $user->id)
                            ->paginate(10)
        ]);
    }
    
}
