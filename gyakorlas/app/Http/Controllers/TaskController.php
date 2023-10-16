<?php

namespace App\Http\Controllers;

use App\Models\events;
use App\Models\users;
use Illuminate\Console\View\Components\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $tasks = response()->json(events::all());
        return $tasks;
    }

    public function show($id){
        $tasks = response()->json(events::find($id));
        return $tasks;
    }

    public function destroy($id){
        events::find($id)->delete();
        return redirect('/task/list');
    }

    public function store(Request $request){
        $task = new events();
        $task->title = $request->title;
        $task->description = $request->description;
        $task->end_date = $request->end_date;
        $task->user_id = $request->user_id;
        $task->status = $request->status;
        $task->save();
        return redirect('/task/list');
    }

    public function update(Request $request, $id){
        $task = events::find($id);
        $task->title = $request->title;
        $task->description = $request->description;
        $task->end_date = $request->end_date;
        $task->user_id = $request->user_id;
        $task->status = $request->status;
        $task->save();
        return redirect('/task/list');
    }

    public function listView(){
        $tasks = events::all();
        return view('task.list', ['tasks' => $tasks]);
    }

    public function newView(){
        $users = events::all();
        return view('task.new', ['users' => $users]);
    }

    public function editView($id){
        $users = events::all();
        $task = events::find($id);
        return view('task.edit', ['users' => $users, 'task' => $task]);
    }
}
