    <div class="modal fade" id="EducationModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="border:0px;">
                <div class="modal-header" style="background-color:#244363;color:#fff;">
              <h5 class="modal-title mx-auto">Educations Settings</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"  style="margin-left:0;">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                 <form   method="POST"  action="">     
                        <!-- {{ csrf_field() }}  -->
                        <div class="response" style="border-radius:5px;line-height:30px;height:30px;color:#FFFFFF;text-align:center;visibility:hidden;margin-bottom:8px"></div>
                        
                              <!-- EXperience-->
                            <div class="input-group mb-2"> 
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                  <i class="fa fa-id-card" aria-hidden="true"></i>
                                </div>
                            </div> 
                            <input value="{{ Auth::user()->regno }}" type="text" name="exp" id="exp" class="form-control" autofocus="true" placeholder="Registration No" required/> 
                            <div class="input-group-text">
                                    <i class="fas fa-code-branch"></i>
                                </div>
                            <select class="form-control" id="branch" name="branch">
                                <option value="" selected>--SELECT BRANCH--</option>
                                <option value="CSE">CSE</option>
                                <option value="IT">IT</option>
                            </select>  
                            <div class="invalid-feedback"></div>       
                          </div> 
                            <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-calendar"></i>
                                </div>
                            </div>
                              <!-- <label><b>Batch</b></label><br> -->
                              <select class="form-control" id="batch" name="batch">
                                <option>--SELECT BATCH--</option>
                                <option value="1999-2003">1999-2003</option>
                                <option value="2000-2004">2000-2004</option>
                                <option value="2001-2005">2001-2005</option>
                                <option value="2002-2006">2002-2006</option>
                                <option value="2003-2007">2003-2007</option>
                                <option value="2004-2008">2004-2008</option>
                                <option value="2005-2009">2005-2009</option>
                                <option value="2006-2010">2006-2010</option>
                                <option value="2007-2011">2007-2011</option>
                                <option value="2008-2012">2008-2012</option>
                                <option value="2009-2013">2009-2013</option>
                                <option value="2010-2014">2010-2014</option>
                                <option value="2011-2015">2011-2015</option>
                                <option value="2012-2016">2012-2016</option>
                                <option value="2013-2017">2013-2017</option>
                                <option value="2014-2018">2014-2018</option>
                                <option value="2015-2019">2015-2019</option>
                                <option value="2016-2020">2016-2020</option>
                                <option value="2017-2021">2017-2021</option>
                                <option value="2018-2022">2018-2022</option>
                                <option value="2019-2023">2019-2023</option>
                                <option value="2020-2024">2020-2024</option>
                              </select>
                              <div class="input-group-text">
                                <i class="fas fa-graduation-cap"></i>
                                </div>
                              <select class="form-control" id="status" name="status"><br>

                                <option value="" selected>--SELECT STATUS--</option>
                                <option value="passout">Passout</option>
                                <option value="current">Current</option>
                              </select>
                            </div>
                            <textarea class="form-control" placeholder="SOME MEMORIES TO SHARE">
                              
                            </textarea>
                        <button  type="submit" class="btn btn-sm btn-primary btn-block mt-2">SUBMIT</button>                                                     
                  </form>
            </div>
          </div>
        </div>
    </div>

