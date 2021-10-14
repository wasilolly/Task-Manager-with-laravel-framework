<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::first();
        $task = Task::first();
        $due = Task::where('taskcreator_id', $user->id)
                             ->where('completed', 0)  
                             ->orWhere('assigneduser_id', $user->id) 
                             ->get();
       // $tasksAssigned = Task::where('assigneduser_id', $this->id);
        //ddd($due);
        return view('user.index',[
            'users' => User::latest()->paginate(10)
        ]);
    }

    public function adminDashboard()
    {

        return view('user.admin-dashboard',[
            'userCount' => User::latest()->count(),
            'users' => User::latest()->paginate(10),
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
