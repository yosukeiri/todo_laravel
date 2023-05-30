@extends('layout')

@section('title')
TODO
@endsection

@section('content')
<div class="wrapper">
<div class="todo-list">
    <dl class="dl_head">
        <dt>タスク内容</dt>
        <dd class="deadline">締切</dd>
        <dd class="status">進捗</dd>
        <dd class="button-area"></dd>
        <dd class="button-area"></dd>
    </dl>
    @foreach ($todos as $todo)
    <dl>
        <dt>{{ $todo->todo }}</dt>
        <dd class="deadline">{{ $todo->deadline }}</dd>
        <dd class="status">{{ $todo->status }}</dd>
        <dd class="button-area"><a href={{ route('edit',['id'=>$todo->id]) }}>更新</a></dd>
        <dd class="button-area">
            <form action="deleteTodo/{{$todo->id}}" method="post">
            @csrf
            @method('delete')
                <button type="submit">削除</button>
            </form>
        </dd>
    </dl>
    @endforeach
</div>
</div>

@endsection