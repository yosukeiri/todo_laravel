<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getTodos()
    {
        $todos = Todo::all();
        return view('index',['todos' => $todos]);
    }
    public function createTodos()
    {
        return view('create');
    }
    public function editTodos($id)
    {
        $todo = Todo::find($id);
        return view('edit',['todo' => $todo]);
    }
    public function updateTodos(Request $request)
    {
        $input = $request->all();
        logger($input);
        $todo = Todo::find($input["id"]);
        $todo->fill($input);
        $todo->save();
        return redirect('/');
    }
}
