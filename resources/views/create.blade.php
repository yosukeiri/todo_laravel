@extends('layout')

@section('title')
TODO-CREATE
@endsection

@section('content')
<div class="wrapper">
<div class="form-area">
<form action="createTodo" method="post">
@csrf
    <dl>
        <dt>TODO</dt>
        <dd><input type="text" placeholder="タスクを入力" name="todo"></dd>
    </dl>
    <dl>
        <dt>締切</dt>
        <dd><input type="date" name="deadline"></dd>
    </dl>
    <button type="submit">新規作成</button>
 </form>
</div>
</div>


@endsection