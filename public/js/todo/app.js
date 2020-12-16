$(function() {
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
  
    $("body").on("click", ".delete-btn", function (e) {
      // e.preventDefault();
      const todo_id = $(this).data('todo_id');
      const todo_title = $(this).data('todo_title');
      $('.modal-body').text(`「${todo_title}」のTodoを削除しますか？`);
      $('.confirm-btn').attr('data-todo_id', todo_id);
    });
  
    $("body").on("click", ".confirm-btn", function (e) {
      const todo_id = $(this).data('todo_id');
      $.ajax({
        url: `/todo/${todo_id}`,
        type: "DELETE",
      })
        .done((res) => {
          if (res.result === true) {
            window.location.href = '/todo';
          } else {
            alert("Todoの削除に失敗しました。");
            console.log(res.reason);
          }
        })
        .fail((error) => {
          alert("Todoの削除に失敗しました。");
          console.log(error);
        });
    })
  }); 