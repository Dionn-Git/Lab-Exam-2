<?php
namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller {
    public function index() {
        $tasks = Task::latest()->get(); 
        return view('tasks.index', compact('tasks'));
    }

    public function create() {
        return view('tasks.create');
    }

    public function store(Request $request) {
        Task::create($request->all());
        return redirect()->route('tasks.index');
    }

    public function destroy(Task $task) {
        $task->delete();
        return redirect()->route('tasks.index');
    }

    public function edit(Task $task) {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task) {
        $request->validate(['title' => 'required', 'priority' => 'required']);
    
        $task->update($request->all());
    
        return redirect()->route('tasks.index')->with('success', 'Task updated!');
    }
}