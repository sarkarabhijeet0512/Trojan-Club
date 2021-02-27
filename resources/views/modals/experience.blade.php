    <div class="modal fade" id="ExperienceModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="border:0px;">
                <div class="modal-header" style="background-color:#244363;color:#fff;">
              <h5 class="modal-title mx-auto">Experience Settings</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"  style="margin-left:0;">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                 <form  method="POST"  action="">     
                        <!-- {{ csrf_field() }}  -->
                        <div class="response" style="border-radius:5px;line-height:30px;height:30px;color:#FFFFFF;text-align:center;visibility:hidden;margin-bottom:8px"></div>
                        <!-- Designation -->
                        <div class="input-group mb-2"> 
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                            </div> 
                            <input id="text" name="text" type="text" class="form-control" value="" autofocus="true" placeholder="Designation" required/>   
                            <div class="invalid-feedback"></div>       
                          </div>
                          <!-- Organizarion -->
                          <div class="input-group mb-2"> 
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-building"></i>
                                </div>
                            </div> 
                            <input value="{{ Auth::user()->organisation }}" type="text" name="org" id="org" class="form-control" autofocus="true" placeholder="Organisation" required/>   
                            <div class="invalid-feedback"></div>       
                          </div>
                        <button type="submit" class="btn btn-sm btn-primary btn-block mt-2">SUBMIT</button>                                                     
                  </form>
            </div>
          </div>
        </div>
    </div>

