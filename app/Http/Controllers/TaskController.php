<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Auth::user()
                     ->tasks()
                     ->latest()
                     ->get();

        return view('tasks.index', compact('tasks'));
    }


    public function create()
    {
        return view('tasks.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
        ]);


        Auth::user()->tasks()->create([
            'title' => $request->title,
            'description' => $request->description,
        ]);


        return redirect('/tasks')
            ->with('success','Task created successfully');
    }


    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }


    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title'=>'required'
        ]);


        $task->update([
            'title'=>$request->title,
            'description'=>$request->description
        ]);


        return redirect('/tasks');
    }


    public function destroy(Task $task)
    {
        $task->delete();

        return redirect('/tasks');
    }
}
