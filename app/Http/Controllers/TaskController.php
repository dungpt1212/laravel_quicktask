<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('task', compact('tasks'));
    }

    public function addTask(Request $request)
    {
        $validateData = $request->validate([
            'task' => 'required'
        ]);

        $task = new Task();
        $task->name = $request->get('task');
        $task->save();
        return redirect()->back()->with('status', 'Thêm thành công');
    }

    public function deleteTask(Request $request)
    {
        $task = Task::find($request['id']);
        $task->delete();
        return redirect()->back()->with('status', 'Xóa thành công');
    }
}
