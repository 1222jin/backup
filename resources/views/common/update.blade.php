
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">update 管理者用</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
            <form >
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                    <p >Id : </p>
                    </div>
                    <div class="mb-3">
                    <label for="recipient-name">名前:</label>
                    <input type="text" class="form-control border border-primary" name="name">
                    </div>
                    <div class="mb-3">
                    <label for="recipient-name">email:</label>
                    <input type="text" class="form-control border border-primary" name="email">
                    </div>
                    <div class="mb-3">
                    <label for="recipient-name">パスワード:</label>
                    <input type="text" class="form-control border border-primary" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">confirm update</button>
            </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>