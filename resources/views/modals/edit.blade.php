<!-- Modal -->
<div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#244363;color:#fff;">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
                <div class="modal-body">
                  <form  id="overviewModal" method="POST"  action="">     
                        <!-- {{ csrf_field() }}  -->
                        <div class="response" style="border-radius:5px;line-height:30px;height:30px;color:#FFFFFF;text-align:center;visibility:hidden;margin-bottom:8px"></div>
                                <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                                <input type="text" class="form-control mb-2" name="title" placeholder="Title">
                                <textarea name="description" class="form-control mb-2" placeholder="Description"></textarea>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                  </form>
              </div>
            </div>
          </div>
        </div>