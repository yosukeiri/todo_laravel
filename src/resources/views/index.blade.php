@extends('layout')

@section('title')
"トップタイトル"
@endsection

@section('content')
<div class="wrapper">
<div class="todo-list">
    @foreach ($todos as $todo)
    <dl>
        <dt>{{ $todo->todo }}</dt>
        <dd class="deadline">{{ $todo->deadline }}</dd>
        <dd class="status">{{ $todo->status }}</dd>
        <dd><a href={{ route('edit',['id'=>$todo->id]) }}>更新</a></dd>
        <dd><button>削除</button></dd>
    </dl>
    @endforeach
</div>
</div>

@endsection