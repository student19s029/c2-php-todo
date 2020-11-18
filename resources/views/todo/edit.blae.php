@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-10">
            <h2 class="text-muted py-3">Todo 編集</h2>
            <form action="/todo/{{ $todo->id }}" method="POST">
                @include('parts.todo.input', ['todo' => $todo])
                <button class="btn btn-primary my-2" type="submit">更新</button>
            </form>
            <hr>
            @include('parts.button.back')
        </div>
    </div>
@endsection 