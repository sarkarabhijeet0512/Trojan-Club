    <div class="modal fade" id="InformationModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="border:0px;">
                <div class="modal-header" style="background-color:#244363;color:#fff;">
              <h5 class="modal-title mx-auto" id="SkillsModal">Change Email Address </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"  style="margin-left:0;">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                 <form  id="SkillsModal" method="POST"  action="">     
                        <!-- {{ csrf_field() }}  -->
                        <div class="response" style="border-radius:5px;line-height:30px;height:30px;color:#FFFFFF;text-align:center;visibility:hidden;margin-bottom:8px"></div>
                        <div class="input-group mb-2"> 
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div> 
                            <input id="email" name="email" type="email" class="form-control" value="" autofocus="true" placeholder="Email" required/>   
                            <div class="invalid-feedback"></div>       
                        </div>
                        <button id="SkillsModal" type="submit" class="btn btn-sm btn-primary btn-block mt-2">SUBMIT</button>                                                     
                  </form>
            </div>
          </div>
        </div>
    </div>

