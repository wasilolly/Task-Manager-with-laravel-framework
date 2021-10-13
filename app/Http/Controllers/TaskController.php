<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('task.index', [
            'tasks' => Task::latest()->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('task.create', [
            'users' => User::latest()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $attributes = $this->validateTask($request);
        $attributes['taskcreator_id'] = 1;
        $attributes['completed'] = 0;
        $attributes['slug'] = Str::slug($request->title);
        Task::create($attributes);

        return redirect('/task')->with('success', 'New task created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('task.show', [
            'task' => Task::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('task.edit', [
            'task' => Task::find($id),
            'users' => User::latest()->get()
        ]);
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
        $attributes = $this->validateTask($request);
        $task =  Task::find($id);
        $attributes['taskcreator_id'] = 1;
        $attributes['completed'] = 0;
        $attributes['slug'] = Str::slug($request->title);
        $task->update($attributes);
        return redirect('/task')->with('success', 'Task updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete;
        return redirect('/task')->with('success', 'Task Deleted');
    }

    public function validateTask(Request $request)
    {
        $attributes = $request->validate([
            'title' => 'required',
            'due' => 'required',
            'description' => 'required',
            'assigneduser_id' => ['required', Rule::exists('users', 'id')]
        ]);

        return $attributes;
    }

    public function completed($id){
       
        $task = Task::find($id);
        $task->completed =1;
        $task->update();
        return redirect('/task')->with('success', 'Task marked completed');
    }
}
