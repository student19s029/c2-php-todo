@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-10">
            <h2 class="text-muted py-3">Todo 作成</h2>
            <form action="/todo" method="POST">
                @include('parts.todo.input')
                <button class="btn btn-primary" type="submit">作成</button>
            </form>
            <hr>
            @include('parts.button.back')
        </div>
    </div>
@endsection