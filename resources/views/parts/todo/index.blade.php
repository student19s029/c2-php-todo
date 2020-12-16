@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-10">
            <h2 class="text-muted py-3 float-left">やること一覧</h2>
            <div class="float-right my-3"><!-- 新規作成ボタン -->
                <a href="/todo/create/" class="btn btn-primary"><i class="fas fa-plus mr-2"></i>新規作成</a>
            </div>
            <table class="table">
                <thead><!-- テーブルヘッダー -->
                <tr>
                    <th width="50%">タイトル</th>
                    <th width="20%">期限</th>
                    <th width="15%"></th>
                    <th width="15%"></th>
                </tr>
                </thead>
                <tbody><!-- テーブルボディー -->
                @foreach($todo_list as $todo)
                    <tr>
                        <td><!-- タイトル -->
                            <a href="/todo/{{ $todo->id }}">
                                {{ $todo->title }}
                            </a>
                        </td>
                        <td><!-- 期限 -->
                        {{ $todo->due_date }}
                        </td>
                        <td><!-- 状態 -->
                            {{ $todo->getStatusText() }}
                        </td>
                        <th><!-- 編集ボタン -->
                            <a href="/todo/{{ $todo->id }}/edit" class="btn btn-success"><i class="fas fa-edit mr-2"></i>編集</a>
                        </th>
                        <th><!-- 削除ボタン -->
                            <form action="/todo/{{ $todo->id }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt mr-2"></i>削除</button>
                            </form>
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $todo_list->links() }}
        </div>
    </div>
@endsection