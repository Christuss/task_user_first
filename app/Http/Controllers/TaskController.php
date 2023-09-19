<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
        $task = response()-> json(Task::all());
        return $task;
    }

    public function show($id){
        $task = response()->json(Task::find($id));
        return $task;
    }
    public function destroy($id){
        Task::find($id)->delete();
        // a view miatt kell
        return redirect('/task/list');
    }

    public function store(Request $request) {
        $task = new Task();
        $task->title = $request->title;
        $task->description  =$request->description;
        $task->end_date = $request->usre_id;
        $task->status = $request->status;
        $task->save();
        // a view miatt...
        return redirect(('/task/list'));
    }

    public function update(Request $request, $id) {
        $task = Task::find($id);
        $task->title = $request->title;
        $task->description  =$request->description;
        $task->end_date = $request->usre_id;
        $task->status = $request->status;
        $task->save();
        // a view miatt...
        return redirect(('/task/list'));
    }

    public function listView() {
        $task = Task::all();
        return view('task.list', ['tasks' => $task]);
    }
}
