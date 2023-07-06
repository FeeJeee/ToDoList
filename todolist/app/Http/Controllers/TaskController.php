<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index(){

        $tasks = Auth::user()->tasks;

//        dd($tasks);

        return view('tasks.index', array(
            'tasks' => $tasks
        ));
    }

    public function create(){

//        dd($name);

        return view('tasks.new_task');

    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|min:3|max:255'
        ]);
//

        Task::create([
            'name' => $request->name,
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route('task');
    }

    public function delete(Task $task){
        if ($task->user_id == Auth::user()->id){
            $task->delete();
        }

        return redirect()->route('tasks');
    }
}
