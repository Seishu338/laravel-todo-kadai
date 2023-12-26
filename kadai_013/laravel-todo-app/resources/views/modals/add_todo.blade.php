<div class="modal fade" id="addTodoModal{{$goal->id}}" tabindex="-1" aria-labelledby="addTodoModalLabel{{$goal->id}}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addTodoModal{{$goal->id}}">Todoの追加</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('goals.todos.store', $goal)}}" method="post">
        @csrf
      <div class="modal-body">
        <label>Todo</label>
        <input type="text" class="form-control" name="content">
        </label>
        <label>詳細</label>
        <input type="text" class="form-control" name="description">
        <div class="d-flex flex-wrap">
          @foreach($tags as $tag)
          <label>
            <div class="d-flex alingn-items-center mt-3 me-3">
              <input type="checkbox" name="tag_ids[]" value="{{$tag->id}}">
              <span class="badge bg-secondary ms-1">{{$tag->name}}</span>
            </div>
          </label>
          @endforeach
        </div>
     </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">登録</button>
      </div>
      </form>
    </div>
  </div>
</div>