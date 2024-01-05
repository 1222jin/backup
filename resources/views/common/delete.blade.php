

    
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">データ削除：管理者用</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-left ml-5 font-weight-bold">
      <div class="mb-3">
            
      </div>
      <div class="mb-3">
            Name : <span id="data_name"></span>
      </div>
      <div class="mb-3">
            Email : <span id="data_email"></span>
      </div>
      <div class="mb-3">
            
      </div>
      </div>
      <div class="modal-footer">
      <form method="POST" action="/index/delete" onsubmit="return showAlert()">
        @csrf
        @method('DELETE')
       
        <button type="submit" class="btn btn-primary" id="pass_to_modal" >confirm delete</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </form>
      <script>
      function showAlert() {
        var confirmation = confirm("本当に削除しますか？");
        if (confirmation) {    
            alert("処理が完了しました！");
            return true;
        } else {
            return false;
        }
      }
      </script>
      </div>
    </div>
  </div>
</div>

