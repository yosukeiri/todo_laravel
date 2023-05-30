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
    public function deleteTodo(Request $request,$id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        return redirect('/');
    }
    public function createPage()
    {
        return view('create');
    }
    public function createTodo(Request $request)
    {
        $input = $request->all();
        logger($input);
        $todo = new Todo;
        $todo->todo = $input['todo'];
        $todo->deadline = $input['deadline'];
        $todo->status = 'notstart';
        $todo->save();
        return redirect('/');
    }
    public function editTodo($id)
    {
        $todo = Todo::find($id);
        return view('edit',['todo' => $todo]);
    }
    public function updateTodo(Request $request)
    {
        $input = $request->all();
        logger($input);
        $todo = Todo::find($input['id']);
        $todo->fill($input);
        $todo->save();
        return redirect('/');
    }
}
