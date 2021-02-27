

@extends('layouts.app')
<head>
    <title>user-profile-edit
    </title>
      <link href="https://fonts.googleapis.com/css?family=Butcherman&display=swap" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <style type="text/css">

    .my-style{ 
            float: left;
            width: 100%;
            background-color: #fff;
            border-left: 1px solid #e5e5e5;
            border-bottom: 1px solid #e5e5e5;
            border-right: 1px solid #e5e5e5;
            -webkit-box-shadow: 1px 0 4px rgba(0,0,0,0.24);
            -moz-box-shadow: 1px 0 4px rgba(0,0,0,0.24);
            -ms-box-shadow: 1px 0 4px rgba(0,0,0,0.24);
            -o-box-shadow: 1px 0 4px rgba(0,0,0,0.24);
            box-shadow: 1px 0 4px rgba(0,0,0,0.24);
            border-radius: 7px;
    }

    .h1{
            padding-top: 17px; 
            margin-left: 8px;
            color: #363636;
            font-size: 36px;
            font-weight: 300;
    }

    .borders{
            border: 0.5px solid #c8d2c8;
            box-shadow:1px 2px 9px #c8d2c8;
            padding:inherit;
            padding-top:40px;
            padding-block-end: 29px;
            border-radius: 7px;
            color: #9f9f9f;
            font-family: "Montserrat-L";
        }
        
     .buttons
            {
            padding: 7px;
            font-family: inherit;
            margin-left: 17px;
            background-color: #1a265c87;
            color: white;
            }   
      .headline{
          margin: 10px;
      } 
      .imageContainer > img:hover {
              width: 250px;
              height: 250px;
              } 
       .form-div {       
                        /*margin-top: 100px; */
                        /*border: 1px solid #e0e0e0;    */
                        width: -webkit-fill-available; 
                    }
            #profileDisplay { display: block; height: 210px; width: 80%; margin: 0px auto; border-radius: 50%; }
            .img-placeholder {
              width: 80%;
              color: white;
              height: 100%;
              background: black;
              opacity: .7;
              height: 210px;
              border-radius: 50%;
              z-index: 2;
              position: absolute;
              left: 50%;
              transform: translateX(-50%);
              display: none;
            }
            .img-placeholder h4 {
              margin-top: 40%;
              color: white;
            }
            .img-div:hover .img-placeholder {
              display: block;
              cursor: pointer;
            }

     </style>
    </head>

@section('content')


<section class="cover-sec">
	<img src="images/resources/cover-img.jpg" alt="">
	<a href="#" title=""><i class="fa fa-camera"></i> Change Image</a>
</section>


<main>
    <div class="main-section">
        <div class="container">
            <div class="main-section-data">
                <div class="row">
                    <div class="col-md-3">
                        <div class="main-left-sidebar">
                            <div class="user_profile">
                                <div class="user-pro-img">
                                    <div class="imageContainer">
                                        <div class="row">
                                            <div class=" form-div">
                                              
                                            	<form style="padding: 8px;" action="/profile" method="Post" enctype="multipart/form-data" >
                                              @csrf
	                                              	 @if (session('status'))
                                                  <div class="alert alert-success" role="alert">
                                                      {{ session('status') }}
                                                  </div>
                                                  @endif
	                                              	<div class="form-group text-center" style="position: relative;" >
	                                                <span class="img-div">
	                                                <div class="text-center img-placeholder"  onClick="triggerClick()">
	                                                <i style="padding: 88px 0px;" class="fa fa-camera"><br>upload photo</i></div>
	                                                <img src="{{ Auth::user()->image }}" onClick="triggerClick()" id="profileDisplay">
	                                                </span>
                                                  <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->

	                                                <input type="file" name="avatar" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
	                             					</div>
	                                                <div class="form-group">
	                                                <button type="submit" name="submit" class="btn btn-primary btn-block">Save User</button>
	                                             	</div>
                                        		</form>
                                      		</div>
                                    	</div>
                                    </div>    
                        		</div>
                        		<!--user-profile end-->
                               	<h1 style="text-align: left;font-size: 20px;margin-left: 13px;padding: 2px;">Social Links</h1>
                             	<div class="post-st" >
                                	<ul>
										<li><a class="post-jb active" href="#" title="" style="margin: -37px;margin-right: 8px;">edit</a></li>
		                        	</ul>
		                        </div><!--post-st end-->
		                        <hr>
		                        <ul class="social_links">
		                                            <!--li><a href="#" title=""><i class="la la-globe"> </i></a>
		                                            </li-->
	                            <li><a href="https://www.{{ Auth::user()->per_house }}" title="" target="blank"><i class="fa fa-facebook-square" style="word-break: break-all;" ></i>{{ Auth::user()->per_house }} </a></li>
	                            <li><a href="{{ Auth::user()->per_house }}" title=""><i class="fa fa-twitter" style="word-break:break-all;"></i>{{ Auth::user()->per_house }} </a></li>
	                        	<li><a href="{{ Auth::user()->per_house }}" title=""><i class="fa fa-instagram" style="word-break: break-all;"></i>{{ Auth::user()->per_house }} </a></li>
	                            <li><a href="{{ Auth::user()->per_house }}" title=""><i class="fa fa-linkedin" style="word-break: break-all;"></i>{{ Auth::user()->per_house }}  </a></li>
	                            </ul>
		                    </div>
                        </div>
                    </div>
                    <!-- Right side form-->
                    <div class="col-md-9">
                        <form action="/data/save" method="Post">
                        	@csrf 
                        	<div class="my-style">
                            	<div class="form-group col-md-12"> 
                                <h1 class="h1">Edit Profile</h1>
                        		<hr>
                                <br>
                                <div class="borders" >
								<span style="font-size: 19px;">Personal Information</span>
                                <hr>
                                <div class="row">
	                                <div class="form-group col-md-4">
		                                <label>Firstname</label>
		                                <input type="text" name="fname" id="fname" value="{{ Auth::user()->first_name }}" class="form-control">
	                                </div>
                                    <div class="form-group col-md-4">
	                                    <label>Middlename</label>
	                                    <input type="text" name="mname" id="mname" value="{{ Auth::user()->middle_name }}" class="form-control">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Lastname</label>
                                        <input type="text" name="lname" id="lname" value="{{ Auth::user()->last_name }}" class="form-control"> 
                                    </div>
                                </div>
                                <br><br>
	                                <div class="row">
	                                    <div class="form-group col-md-8">
	                                        <label>E-mail</label>
	                                        <input type="Email" name="email" id="email" value="{{ Auth::user()->email }}" class="form-control">
	                                    </div>
	                                    <div class="form-group col-md-4">
	                                        <label>Phone No</label>
	                                        <input type="Phone" name="phone" id="phone" value="{{ Auth::user()->phoneno }}" class="form-control">
	                                    </div>
	                                    <br>
	                                </div>
	                            </div>
                                <br><br>
                                    <div class="borders">
                                       	<span class="form-group" style="font-size: 19px;padding-left: 14px;">Permanent Address</span>
                                        <hr class="headline">
                                        <div class="row">
	                                        <div class="form-group col-md-4">
	                                        <label>House No.</label>
	                                        <input type="text" name="phouse" id= "phouse" value="{{ Auth::user()->per_house }}" class="form-control">
	                                        </div>
	                                        <div class="form-group col-md-4">
	                                        <label>Street</label>
								            <input type="text" name="pstreet" id= "pstreet" value="{{ Auth::user()->per_street }}" class="form-control">
	                                        </div>
	                                        <div class="form-group col-md-4">
	                                        <label>City</label>
	                                        <input type="text" name="pcity" id= "pcity" value="{{ Auth::user()->per_city }}" class="form-control">
	                                        </div>
	                                    </div>
                                        <br><br>
                                        <div class="row">
                            				<div class="form-group col-md-4">
                        					<label>State</label>
                                            <input type="text" name="pstate" id= "pstate" value="{{ Auth::user()->per_state }}" class="form-control">
                                        	</div>
                                        <div class="form-group col-md-4">
                                            <label>country </label>   
                                            <input type="text" name="pcountry" id= "pcountry" value="{{ Auth::user()->per_country }}" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label>Pin Code</label>
                                            <input type="number" name="ppin" id= "ppin" value="{{ Auth::user()->per_pin }}" class="form-control">
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    </div>
                                    <br><br>
    								<div class="borders">
                                                <span  class="form-group" style="font-size: 19px;    padding-left: 14px;" >Present Address</span>
                                               <hr class="headline">
                                                 <br>
					                                <div class="row">
					                                <div class="form-group col-md-4">
					                                 <label>House No.</label>
					                                    <input type="text" name="house" id= "house" value="{{ Auth::user()->temp_house }}" class="form-control">
					                                </div>
					                                <div class="form-group col-md-4">
					                                    <label>Street</label>
					                                    <input type="text" name="street" id= "street" value="{{ Auth::user()->temp_street }}" class="form-control">
					                                </div>
					                                <div class="form-group col-md-4">
					                                    <label>City</label>
					                                    <input type="text" name="city" id= "city" value="{{ Auth::user()->temp_city }}" class="form-control">
					                                </div>
					                            </div>
                                    			<br><br>  

                                    <div class="row">
                                <div class="form-group col-md-4">
                                        
                                    <label>State</label>
                                    <input type="text" name="state" id= "state" value="{{ Auth::user()->temp_state }}" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>country </label>   
                                    <input type="text" name="country" id= "country" value="{{ Auth::user()->temp_country }}" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Pin Code</label>
                                    <input type="number" name="pin" id= "pin" value="{{ Auth::user()->temp_pin }}" class="form-control">
                                </div>
                             </div>
                             <br>
                             <br>
                             
                            </div>
                        
                        <br>
                                        
                                
                                        <div  class="borders" >

                                            <span style="font-size: 19px;padding-left: 14px;">Information</span>
                                            <hr>
                                
                                            <div class="row">
                                                <div class="form-group col-md-4">
                                                <label ><b>Branch</b></label><br>
                                                <select class="form-control" id="branch" name="branch"><br>
                                                    <option value="" selected>select</option>
                                                    <option value="CSE">CSE</option>
                                                    <option value="IT">IT</option>
                                                </select><br>

                    
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label ><b>Batch</b></label><br>
                                            <select class="form-control" id="batch" name="batch">
                                                <option value="1999-2003">1999-2003</option>
                                                <option value="2000-2004<">2000-2004</option>
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
                                                <option value="2019-2023" selected>2019-2023</option>
                                                <option value="2020-2024">2020-2024</option>
                                            </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label ><b>Status</b></label><br>
                                            <select class="form-control" id="status" name="status"><br>
                                                <option value="" selected>Select</option>
                                                <option value="passout">Passout</option>
                                                <option value="current">Current</option>
                                            </select>
                                                </div>
                                            </div>

                                            <br>
                                            <br>
                                            <div class="row">
                                                
                                                <div class="form-group col-md-8">
                                                    <label>Designation</label>
                                                    <input value="{{ Auth::user()->designation }}" type="text" name="designation" id="email" class="form-control">
                                                </div>
                                                
                                                <div class="form-group col-md-4">
                                                    <label>Organisation</label>
                                                    <input value="{{ Auth::user()->organisation }}" type="text" name="org" id="org" class="form-control">
                                                </div>
                                            	<div class="form-group col-md-4">
                                                    <label>Experince</label>
                                                    <input value="{{ Auth::user()->experience }}" type="text" name="exp" id="exp" class="form-control">
                                                </div>
                                                <br>
                                                <div class="clearfix">
                                                    <button class="btn btn-primary" type="submit" name="submit" id="submit" value="Save">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

                    <div class="post-popup job_post">
      <div class="post-project">
        <h3>Social Links</h3>
        <div class="post-project-fields">
          <form action="social_links_data.php" method="post">
            <div class="row">
              
                <ul class="social_links">
                                            
                                            <li>
                                              <div class="fa fa-facebook-square" style="margin: 9px;" > Facebook</div>
                                              <div>
                                                <input type="text" style="margin: 7px;" name="facebook" id="facebook" value="" ></div>
                                              </li>
                                              <li>
                                              <div class="fa fa-twitter" style="margin: 9px;" > Twitter</div>
                                              <div><input type="text" style="margin: 7px;" name="twitter" id="twitter" value="" ></div>
                                              </li>
                                              <li>
                                                <div class="fa fa-instagram" style="margin: 9px;" > Instagram</div>
                                              <div><input type="text" style="margin: 7px;" name="instagram" id="instagram" value="" ></div></li>
                                              <li><div class="fa fa-linkedin" style="margin: 9px;" > LinkedIn</div>
                                              <div><input type="text" name="linkedIn" id="linkedIn" style="margin: 7px;" value="" ></div></li>
                                            
                                        </ul>
              
              
              
                                      <div class="col-lg-12">
                                        <ul>
                                          <li><button class="active" type="submit" name="submit" id="submit" value="submit">Save</button></li>
                                          <li><a href="#" title="">Cancel</a></li>
                                        </ul>
                                      </div>
                                    </div>
                                  </form>
                                </div><!--post-project-fields end-->
                                <a href="#" title=""><i class="la la-times-circle-o"></i></a>
                              </div><!--post-project end-->
                            </div><!--post-project-popup end-->


</main>
<script>
  function triggerClick(e) {
  document.querySelector('#profileImage').click();
}
function displayImage(e) {
  if (e.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e){
      document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
    }
    reader.readAsDataURL(e.files[0]);
  }
}
</script>

@endsection('content')