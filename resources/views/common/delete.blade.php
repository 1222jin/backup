

    
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">データ削除：管理者用</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
      <div class="mb-3">
            <p data-user-id="{{$sample->id}}"></p>
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
      <form method="POST" action="/index/delete">
        @csrf
        @method('DELETE')
       
        <button type="submit" class="btn btn-primary" id="pass_to_modal" onclick="showAlert()">confirm delete</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </form>
      </div>
    </div>
  </div>
</div>

