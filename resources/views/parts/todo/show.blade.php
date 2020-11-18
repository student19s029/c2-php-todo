@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-10">
            <h2 class="text-muted py-3">Todo 作成</h2>
            <form action="/todo" method="POST">
                @include('parts.todo.input')
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <button class="btn btn-primary my-2" type="submit">作成</button>
            </form>
            <hr>
            @include('parts.button.back')
        </div>
    </div>
@endsection 