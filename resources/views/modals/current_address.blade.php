    <div class="modal fade" id="current_addressModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="border:0px;">
                <div class="modal-header" style="background-color:#244363;color:#fff;">
              <h5 class="modal-title mx-auto" >Location Settings </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"  style="margin-left:0;">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container">
  <div class="row">
                  <div class="col-sm">
                <form  method="POST"  action="">     
                        <div class="response" style="border-radius:5px;line-height:30px;height:30px;color:#FFFFFF;text-align:center;visibility:hidden;margin-bottom:8px"></div>
                              <h2 class="bg-warning rounded-pill w-50 text-center p-3">Current Address</h2><hr>
                              <label class="bg-primary text-center  text-white rounded-pill w-25 text-center p-2 mb-2">House No.</label>
                                <input type="text" name="house"  value="{{ Auth::user()->per_house }}" class="form-control mb-2">
                              <label class="bg-primary text-center  text-white rounded-pill w-25 text-center p-2 mb-2">Street</label>
                                <input type="text" name="street"  value="{{ Auth::user()->per_street }}" class="form-control mb-2">
                              <label class="bg-primary text-center  text-white rounded-pill w-25 text-center p-2 mb-2">City</label>
                                <input type="text" name="city"  value="{{ Auth::user()->per_city }}" class="form-control mb-2">
                              <label class="bg-primary text-center  text-white rounded-pill w-25 text-center p-2 mb-2">State</label>
                                <input type="text" name="state" value="{{ Auth::user()->per_state }}" class="form-control mb-2">
                              <label class="bg-primary text-center  text-white rounded-pill w-25 text-center p-2 mb-2">country </label>   
                                <input type="text" name="country"  value="{{ Auth::user()->per_country }}" class="form-control mb-2">
                              <label class="bg-primary text-center  text-white rounded-pill w-25 text-center p-2 mb-2">Pin Code</label>
                                <input type="number" name="pin" value="{{ Auth::user()->per_pin }}" class="form-control mb-2">
                            <div class="invalid-feedback"></div>       
                        <button  type="submit" class="btn btn-sm btn-primary btn-block mt-2">SUBMIT</button>             
                  </form>
                </div>
              </div>
            </div>
                 
          </div>
        </div>
      </div>
  </div>

