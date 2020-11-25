<div class="form-group">
    <label for="title">タスク名</label>
    <input type="text" class="form-control" name="title" placeholder="ゴミ出し" value="{{ $todo && $todo->title ? $todo->title: '' }}" required>
</div>
<div class="form-group">
    <label for="due_date">期限</label>
    <input type="date" class="form-control" name="due_date" placeholder="2020-10-31" value="{{ $todo && $todo->due_date ? $todo->due_date: '' }}" required>
</div>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 