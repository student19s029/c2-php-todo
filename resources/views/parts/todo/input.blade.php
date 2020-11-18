<div class="form-group">
    <label for="title">タスク名</label>
    <input type="text" class="form-control" name="title" placeholder="ゴミ出し" required>
</div>
<div class="form-group">
    <label for="due_date">期限</label>
    <input type="date" class="form-control" name="due_date" placeholder="2020/10/31" required>
</div>
<input type="hidden" name="_token" value="{{ csrf_token() }}">