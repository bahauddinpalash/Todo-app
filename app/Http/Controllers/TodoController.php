<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }
    public function create(){
        return view('todos.create');
    }
    public function store(request $request){
        $this->validate($request, [
            'name' => 'required | min:6 | max: 20',
            'details' => 'required'
        ]);

        $todo = new Todo();
        $todo->name = $request->name;
        $todo->details = $request->details;
        $todo->completed = false;
        $todo->save();
        session()->flash('success', 'Task successfully created');
        return redirect()->route('todos.index');

    }
    public function show($id){
        $todo = Todo::find($id);
        return view('todos.show', compact('todo'));

    }

    public function edit($id){
        $todo = Todo::find($id);
        return view('todos.edit', compact('todo'));
    }
    public function update(request $request, $id){
        $this->validate($request, [
            'name' => 'required | min:6 | max: 20',
            'details' => 'required'
        ]);

        $todo = Todo::find($id);
        $todo->name = $request->name;
        $todo->details = $request->details;
        $todo->completed = false;
        $todo->save();
        session()->flash('success', 'Task successfully updated');
        return redirect()->route('todos.index');

    }
    public function destroy($id){
        Todo::find($id)->delete();
        session()->flash('success', 'Task successfully deleted');
        return redirect()->route('todos.index');
    }
    public function completed($id){
        $todo = Todo::find($id);
        $todo->completed = true;
        $todo->save();
        session()->flash('success', 'Task successfully completed');
        return redirect()->route('todos.index');
    }
}
