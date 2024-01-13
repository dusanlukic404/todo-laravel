<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(Request $request)
{
    $user = auth()->user();
    $search = $request->input('search');
    
    $todos = $search
        ? $user->todos()->where('name', 'LIKE', "%$search%")
                        ->orWhere('description', 'LIKE', "%$search%")
                        ->get()
        : $user->todos;

    return view('todos.index', ['todos' => $todos]);
}

    public function create(){
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'date' => 'required',
        ]);

        $user = auth()->user();
        $newTodo = $user->todos()->create($data);

        return redirect(route('todo.index'));
    }

    public function edit(Todo $todo){
        return view('todos.edit', ['todo' => $todo]);
    }

    public function update(Todo $todo, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'date' => 'required',
        ]);

        $todo->update($data);

        return redirect(route('todo.index'))->with('success', 'Todo updated successfully!');
    }

    public function delete(Todo $todo){
        $todo->delete();

         return redirect(route('todo.index'))->with('success', 'Todo deleted successfully!');
    }
}
