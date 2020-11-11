@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-10">
        <h2 class="text-muted py-3">{{ $todo->title }}</h2>
        <table class="table">
            <thead>
            <tr>
                <th>タイトル</th>
                <th>期限</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td  style="width: 300px">{{ $todo->title }}</td>
                <td>{{ $todo->due_date }}</td>
            </tr>
            </tbody>
        </table>
        <button class="btn btn-primary" type="button" onclick="history.back()">戻る</button>
        @include('parts.button.back')
    </div>
@endsection