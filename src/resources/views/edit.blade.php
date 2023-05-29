@extends('layout')

@section('title')
"editタイトル"
@endsection

@section('content')
<div class="wrapper">
<div class="form-area">
<form action="update" method="post">
    @csrf
    <input type="text" hidden value={{$todo->id}} name="id" >
    <dl>
        <dt>TODO</dt>
        <dd><input type="text" placeholder="タスクを入力" name="todo" value={{ $todo->todo }} ></dd>
    </dl>
    <dl>
        <dt>締切</dt>
        <dd><input type="date" name="deadline" value={{ $todo->deadline }} ></dd>
    </dl>
    <dl>
        <dt>ステータス</dt>
        <dd>
            <select name="status" selected={{ $todo->status }}>
                <option value="notstart">未着手</option>
                <option value="doing">作業中</option>
                <option value="done">完了</option>
            </select>
        </dd>
    </dl>
    <button type="submit">更新</button>
 </form>
</div>
</div>


@endsection