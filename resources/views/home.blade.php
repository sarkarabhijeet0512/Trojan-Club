@push('scripts')
    <script type="text/javascript" src="css/alumi_assets/js/main_ajax.js"></script>
    <script type="text/javascript" src="css/alumi_assets/js/comment_ajax.js"></script>
    <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "22rem";
  document.getElementById("main").style.marginRight = "22rem";
  // document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginRight = "0";
  // document.body.style.backgroundColor = "white";
}
</script>
 <script>
      function triggerClick(e) {
      document.querySelector('#profileImage').click();
    }
    function displayImage(e) {
      $("#status").empty();
      if (e.files[0]) {
      var file = e.files[0];
      var imagefile = file.type;
      var match= ["image/jpeg","image/png","image/jpg","image/gif"];
      if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]) || (imagefile==match[3]))){

      $("#status").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>"+"<br>");
      return false;
        
      }else{
        var reader = new FileReader();
        reader.onload = function(e){
          document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
      }
    }
  }
  </script>

@endpush('scripts')
@extends('layouts.app')
@section('content')
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            <main>
                <!-- newcode -->
                <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="col-lg-3 pd-right-none no-pd">
                <div class="right-sidebar">
                  <div class="widget widget-about">
                    <img src="images/wd-logo.png" alt="">
                    <h3>Track Time on Workwise</h3>
                    <span>Pay only for the Hours worked</span>
                    <div class="sign_link">
                      <h3><a href="sign-in.html" title="">Sign up</a></h3>
                      <a href="#" title="">Learn More</a>
                    </div>
                  </div><!--widget-about end-->
                  <div class="widget widget-jobs">
                    <div class="sd-title">
                      <h3>Top Jobs</h3>
                      <i class="la la-ellipsis-v"></i>
                    </div>
                    <div class="jobs-list">
                      <div class="job-info">
                        <div class="job-details">
                          <h3>Senior Product Designer</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                        </div>
                        <div class="hr-rate">
                          <span>$25/hr</span>
                        </div>
                      </div><!--job-info end-->
                      <div class="job-info">
                        <div class="job-details">
                          <h3>Senior UI / UX Designer</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                        </div>
                        <div class="hr-rate">
                          <span>$25/hr</span>
                        </div>
                      </div><!--job-info end-->
                        <div class="job-info">
                          <div class="job-details">
                            <h3>Junior Seo Designer</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                          </div>
                          <div class="hr-rate">
                            <span>$25/hr</span>
                          </div>
                        </div><!--job-info end-->
                        <div class="job-info">
                          <div class="job-details">
                            <h3>Senior PHP Designer</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                          </div>
                          <div class="hr-rate">
                            <span>$25/hr</span>
                          </div>
                        </div><!--job-info end-->
                        <div class="job-info">
                          <div class="job-details">
                            <h3>Senior Developer Designer</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                          </div>      
                        <div class="hr-rate">
                          <span>$25/hr</span>
                        </div>
                      </div><!--job-info end-->
                    </div><!--jobs-list end-->
                  </div><!--widget-jobs end-->
                  <div class="widget widget-jobs">
                    <div class="sd-title">
                      <h3>Most Viewed This Week</h3>
                      <i class="la la-ellipsis-v"></i>
                    </div>
                    <div class="jobs-list">
                      <div class="job-info">
                        <div class="job-details">
                          <h3>Senior Product Designer</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                        </div>
                        <div class="hr-rate">
                          <span>$25/hr</span>
                        </div>
                      </div><!--job-info end-->
                      <div class="job-info">
                        <div class="job-details">
                          <h3>Senior UI / UX Designer</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                        </div>
                        <div class="hr-rate">
                          <span>$25/hr</span>
                        </div>
                      </div><!--job-info end-->
                      <div class="job-info">
                        <div class="job-details">
                          <h3>Junior Seo Designer</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                        </div>
                        <div class="hr-rate">
                          <span>$25/hr</span>
                        </div>
                      </div><!--job-info end-->
                    </div><!--jobs-list end-->
                  </div><!--widget-jobs end-->
                  <div class="widget suggestions full-width">
                    <div class="sd-title">
                      <h3>Most Viewed People</h3>
                      <i class="la la-ellipsis-v"></i>
                    </div><!--sd-title end-->
                    <div class="suggestions-list">
                      <div class="suggestion-usd">
                        <img src="images/resources/s1.png" alt="">
                        <div class="sgt-text">
                          <h4>Jessica William</h4>
                          <span>Graphic Designer</span>
                        </div>
                        <span><i class="la la-plus"></i></span>
                      </div>
                      <div class="suggestion-usd">
                        <img src="images/resources/s2.png" alt="">
                        <div class="sgt-text">
                          <h4>John Doe</h4>
                          <span>PHP Developer</span>
                        </div>
                        <span><i class="la la-plus"></i></span>
                      </div>
                      <div class="suggestion-usd">
                        <img src="images/resources/s3.png" alt="">
                        <div class="sgt-text">
                          <h4>Poonam</h4>
                          <span>Wordpress Developer</span>
                        </div>
                        <span><i class="la la-plus"></i></span>
                      </div>
                      <div class="suggestion-usd">
                        <img src="images/resources/s4.png" alt="">
                        <div class="sgt-text">
                          <h4>Bill Gates</h4>
                          <span>C &amp; C++ Developer</span>
                        </div>
                        <span><i class="la la-plus"></i></span>
                      </div>
                      <div class="suggestion-usd">
                        <img src="images/resources/s5.png" alt="">
                        <div class="sgt-text">
                          <h4>Jessica William</h4>
                          <span>Graphic Designer</span>
                        </div>
                        <span><i class="la la-plus"></i></span>
                      </div>
                      <div class="suggestion-usd">
                        <img src="images/resources/s6.png" alt="">
                        <div class="sgt-text">
                          <h4>John Doe</h4>
                          <span>PHP Developer</span>
                        </div>
                        <span><i class="la la-plus"></i></span>
                      </div>
                      <div class="view-more">
                        <a href="#" title="">View More</a>
                      </div>
                    </div><!--suggestions-list end-->
                  </div>
                </div><!--right-sidebar end-->
              </div>
</div>

<div id="main" class="d-xl-none d-lg-none d-md-none d-sm-inline d-inline">
  <span class="button" style="font-size:30px;cursor:pointer" onclick="openNav()"><i class="fas fa-angle-double-right"></i>Click On for Side Pannel</span>
</div>
                <!-- new code -->
            <div class="main-section">
                <div class="container">
                    <div class="main-section-data">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 pd-left-none no-pd d-xl-inline d-lg-inline d-md-inline d-sm-none d-none">
                                <div class="main-left-sidebar no-margin fixed-content">
                                    <div class="user-data full-width">
                                        <div class="user-profile">
                                            <div class="username-dt">
                                                <div class="usr-pic">
                                                    <img src="{{ Auth::user()->image }}" alt="">
                                                </div>
                                            </div><!--username-dt end-->
                                            <div class="user-specs">
                                                <h3>{{ Auth::user()->name }}</h3>
                                                <span>{{ Auth::user()->organisation }}</span><br>
                                                <span>{{ Auth::user()->designation }}</span>
                                            </div>
                                        </div><!--user-profile end-->
                                        <ul class="user-fw-status">
                                            <li>
                                                <h4>Following</h4>
                                                <span>{{ $following }}</span>
                                            </li>
                                            <li>
                                                <h4>Followers</h4>
                                                <span></span>
                                            </li>
                                            <li>
                                                <a href="{{ route('user_profile')}}" title="">View Profile</a>
                                            </li>
                                        </ul>
                                    </div><!--user-data end-->
                                    <div class="suggestions full-width">
                                        <div class="sd-title">
                                            <h3>Suggestions</h3>
                                            <i class="la la-ellipsis-v"></i>
                                        </div><!--sd-title end-->
                                        <div class="suggestions-list">
                                          @foreach($suggestions as $sug )
                                            <div class="suggestion-usd">
                                                <img style="height: 2rem" src="{{ $sug->image }}" alt="">
                                                <div class="sgt-text">
                                                    <h4>{{ $sug->name }}</h4>
                                                    <span>{{ $sug->designation }}  </span>
                                                </div>
                                                <span><i @if(App\Helpers\helpers::follow(1)): class="fas fa-thumbs-up follow-btn" @else: class="fas fa-user-plus follow-btn" @endif data-id=""> Follow</i></span>
                                            </div>
                                            @endforeach
                                                <!-- <span><i class="la la-plus"></i></span> -->
                                            </div>
                                            <div class="view-more">
                                                <a href="#" title="">View More</a>
                                            </div>
                                        </div><!--suggestions-list end-->
                                    <!-- </div>suggestions end -->
                                    <div class="tags-sec full-width">
                                        <ul>
                                            <li><a href="#" title="">Help Center</a></li>
                                            <li><a href="#" title="">About</a></li>
                                            <li><a href="#" title="">Privacy Policy</a></li>
                                            <li><a href="#" title="">Community Guidelines</a></li>
                                            <li><a href="#" title="">Cookies Policy</a></li>
                                            <li><a href="#" title="">Career</a></li>
                                            <li><a href="#" title="">Language</a></li>
                                            <li><a href="#" title="">Copyright Policy</a></li>
                                        </ul>
                                        <div class="cp-sec">
                                            <img src="images/logo2.png" alt="">
                                            <p><img src="images/cp.png" alt="">Copyright 2017</p>
                                        </div>
                                    </div><!--tags-sec end-->
                                </div><!--main-left-sidebar end-->
                            </div>
                            <div class="col-lg-6 col-md-8 no-pd">
                                <div class="main-ws-sec scrollable-content">
                                    <div class="post-topbar">
                                        <div class="user-picy">
                                            <img src="{{ asset(Auth::user()->image) }}" alt="">
                                        </div>
                                        <div class="post-st">
                                            <ul>
                                                
                                                <li><a class="post_project" href="#" title="">Post a Project</a></li>
                                                <li><a class="post-jb active" href="#" title="">Post a Job</a></li>
                                                <!-- <li><button class="btn" type="button"><span class="fa fa-microphone fa-lg"></span></button></li>
                                                <li><button class="btn" type="button"><span class="fa fa-music fa-lg"></span></button></li>              -->
                                            </ul>
                                        </div><!--post-st end-->
                                        <!-- create a new post -->
                                        <div>
                                            <div class="">
                                                <!-- <div class="card card-info">
                                                    <div class="card-block">
                                                        <textarea placeholder="Whats on your mind!" class="pb-cmnt-textarea"></textarea>
                                                        
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <!-- create new post end -->
                                    </div><!--post-topbar end-->
                                     <!-- top profiles -->
                                        <div class="top-profiles">
                                            <div class="pf-hd">
                                                <h3>Top Profiles</h3>
                                                <i class="la la-ellipsis-v"></i>
                                            </div><i class=""></i>
                                            <div class="profiles-slider">
                                            @foreach ($random_post as $random)
                                                <div class="user-profy">
                                                    <img src="{{ $random->image }}" style="height: 4rem;border-radius: 50%" alt="">
                                                    <h3>{{ $random->first_name }}</h3>
                                                    <span>{{ $random->designation }}</span>
                                                    <ul>
                                                        <li><a class="hire"><i @if(App\Helpers\helpers::follow($random->id)): class="fas fa-thumbs-up follow-btn" @else: class="fas fa-user-plus follow-btn" @endif data-id="{{ $random->id }}"></i> Follow</a><span class="follow">{{ App\Helpers\helpers::getFollows($random->id) }}</span>
                                                        </li>
                                                        <li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
                                                        <!-- <li><a href="#" title="" class="hire">hire</a></li> -->
                                                    </ul>
                                                    <a href="/{{$random->id}}" title="">View Profile</a>
                                                </div><!--user-profy end-->
                                            @endforeach

                                            </div><!--profiles-slider end-->
                                        </div><!--top-profiles end-->
                                    <div class="posts-section">
                                            <div  id="post-data">
                                                @include('main_page_posts')
                                            </div>
                                            <div class="process-comm" style="display: none;">
                                                <div class="spinner">
                                                    <div class="bounce1"></div>
                                                    <div class="bounce2"></div>
                                                    <div class="bounce3"></div>
                                                </div>
                                            </div>
                                        </div><!--posts-section end-->
                                </div><!--main-ws-sec end-->
                            </div>
                            <div class="col-lg-3 pd-right-none no-pd d-xl-inline d-lg-inline d-md-inline d-sm-none d-none">
                                <div class="right-sidebar fixed-content">
                                    <!-- <div class="widget widget-about">
                                        <img src="images/wd-logo.png" alt="">
                                        <h3>Track Time on Workwise</h3>
                                        <span>Pay only for the Hours worked</span>
                                        <div class="sign_link">
                                            <h3><a href="#" title="">Sign up</a></h3>
                                            <a href="#" title="">Learn More</a>
                                        </div>
                                    </div> --><!--widget-about end-->
                                    <div class="widget widget-jobs">
                                        <div class="sd-title">
                                            <h3>Latest News</h3>
                                            <i class="la la-ellipsis-v"></i>
                                        </div>
                                        <div class="jobs-list">
                                          <marquee direction ="up" behavior="slide" scrollamount="5" scrolldelay="5" height="100%" onMouseOver="this.stop()" onMouseOut="this.start()">
                                            @foreach ($latest_news as $news)
                                            <div class="job-info">
                                                <div class="job-details">
                                                    <h3>Senior Product Designer</h3>
                                                    <p>{{ $news->news }}</p>
                                                </div>
                                                <div class="hr-rate">
                                                    <span>$25/hr</span>
                                                </div>
                                            </div><!--job-info end-->
                                            @endforeach
                                          </marquee>
                                            <!--job-info end-->
                                        </div><!--jobs-list end-->
                                    </div><!--widget-jobs end-->
                                    <div class="widget widget-jobs">
                                        <div class="sd-title">
                                            <h3>Most Viewed This Week</h3>
                                            <i class="la la-ellipsis-v"></i>
                                        </div>
                                        <div class="jobs-list">
                                            <div class="job-info">
                                                <div class="job-details">
                                                    <h3>Senior Product Designer</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                                </div>
                                                <div class="hr-rate">
                                                    <span>$25/hr</span>
                                                </div>
                                            </div><!--job-info end-->
                                            <div class="job-info">
                                                <div class="job-details">
                                                    <h3>Senior UI / UX Designer</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                                </div>
                                                <div class="hr-rate">
                                                    <span>$25/hr</span>
                                                </div>
                                            </div><!--job-info end-->
                                            <div class="job-info">
                                                <div class="job-details">
                                                    <h3>Junior Seo Designer</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                                </div>
                                                <div class="hr-rate">
                                                    <span>$25/hr</span>
                                                </div>
                                            </div><!--job-info end-->
                                        </div><!--jobs-list end-->
                                    </div><!--widget-jobs end-->
                                    <div class="widget suggestions full-width">
                                        <div class="sd-title">
                                            <h3>Most Viewed People</h3>
                                            <i class="la la-ellipsis-v"></i>
                                        </div><!--sd-title end-->
                                        <div class="suggestions-list">
                                            <div class="suggestion-usd">
                                                <img src="images/resources/s1.png" alt="">
                                                <div class="sgt-text">
                                                    <h4>Jessica William</h4>
                                                    <span>Graphic Designer</span>
                                                </div>
                                                <span><i class="la la-plus"></i></span>
                                            </div>
                                            <div class="suggestion-usd">
                                                <img src="images/resources/s2.png" alt="">
                                                <div class="sgt-text">
                                                    <h4>John Doe</h4>
                                                    <span>PHP Developer</span>
                                                </div>
                                                <span><i class="la la-plus"></i></span>
                                            </div>
                                            <div class="suggestion-usd">
                                                <img src="images/resources/s3.png" alt="">
                                                <div class="sgt-text">
                                                    <h4>Poonam</h4>
                                                    <span>Wordpress Developer</span>
                                                </div>
                                                <span><i class="la la-plus"></i></span>
                                            </div>
                                            <div class="suggestion-usd">
                                                <img src="images/resources/s4.png" alt="">
                                                <div class="sgt-text">
                                                    <h4>Bill Gates</h4>
                                                    <span>C &amp; C++ Developer</span>
                                                </div>
                                                <span><i class="la la-plus"></i></span>
                                            </div>
                                            <div class="suggestion-usd">
                                                <img src="images/resources/s5.png" alt="">
                                                <div class="sgt-text">
                                                    <h4>Jessica William</h4>
                                                    <span>Graphic Designer</span>
                                                </div>
                                                <span><i class="la la-plus"></i></span>
                                            </div>
                                            <div class="suggestion-usd">
                                                <img src="images/resources/s6.png" alt="">
                                                <div class="sgt-text">
                                                    <h4>John Doe</h4>
                                                    <span>PHP Developer</span>
                                                </div>
                                                <span><i class="la la-plus"></i></span>
                                            </div>
                                            <div class="view-more">
                                                <a href="#" title="">View More</a>
                                            </div>
                                        </div><!--suggestions-list end-->
                                    </div>
                                </div><!--right-sidebar end-->
                            </div>
                        </div>
                    </div><!-- main-section-data end-->
                </div> 
            </div>
            <div class="goto-top2">
  <p class="goto-top" id="goto-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></p>
   <!-- <p id="goto-topJS"><i class="fa fa-chevron-up" aria-hidden="true"></i></p> -->
 </div>
        </main>

       <div class="post-popup pst-pj">
            <div class="post-project">
                <!-- <h3>Post a project</h3> -->
                <div class="post-project-fields">
                    @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <!-- inner eliments -->
                          <form action="/feeds" method="post" enctype="multipart/form-data">
                        @csrf
                        <h3>Create Post</h3>
                        <div class="" style="overflow-y: scroll;max-height: 24rem;">
                                <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                                <input type="file" name="avatar" onChange="displayImage(this)" id="profileImage" style="display: none;">
                                
                                <div class="text-center" style="position: relative;" >
                                  <div id="status"></div>
                                <textarea class="description" name="description" placeholder="What's on your mind,{{Auth::user()->first_name }} ?"></textarea>
                                <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
                                    <img src="" onClick="triggerClick()"  id="profileDisplay" style="width: -webkit-fill-available;">
                                    
                                </div>
                          </div>
                          <div class="post-icons">
                                <span class="fa fa-video-camera fa-lg" onClick="triggerClick()"></span>
                                <span class="fa fa-microphone fa-lg"></span>
                                <span class="fa fa-music fa-lg"></span>
                                <span class="far fa-grin"></span>             
                          </div>
                        
                          <ul>
                              <li><button class="active" type="submit" value="post">Post</button></li>
                              <li><a href="#" title="">Cancel</a></li>
                          </ul>
                    </form>
                </div>
              <a href="#" title=""><i class="la la-times-circle-o"></i></a>
            </div>
        </div>
        <!-- comment popup -->
        <div class="comment-popup pst-pj">
            <div class="comment-project">
                <h3>Comments</h3>
                <div class="comment-project-fields">
                    <!-- <form action="/feeds" method="post"> -->
                        <div class="comment-section">
                        <div class="comment-sec">
                          <!-- comment view -->
                          <!--  -->
                          <div id="hash">
                          <div id="loading" class="loader" ><img src='images/ajax/ajax-loader.gif' width="200" height="200"><br>Loading..</div>
                            
                          </div><br>
                                            
                                            <div style="padding: 20px">

                                            @foreach ($commentByid as $comments)
                                                
                                                <div class="col-md-2">

                                                <img style="height: 2rem;" src="" alt="">
                                                </div>
                                                 <div class="col-md-10" style="width:fit-content;background-color: #dee2e6;padding: 15px;font-size: 15px;border-radius: 10px;float: left;margin-bottom: 10px;margin-inline-start: 10px;box-shadow: 0 0 4px -2px #868e96;">

                                                <h3>{{ $comments->user['first_name'].' '.$comments->user['last_name'] }} </h3>
                                                <p>{{ $comments->comment }}</p> 
                                                <span style="margin-left: 4px;"><img style="margin-top: 2px" src="images/clock.png" alt="">3 min ago</span> 
                                                <a href="#" title="" class="active"><i class="fa fa-reply-all"></i>Reply</a>
                                                </div>
                                                
                                            @endforeach
                                            </div>
                                            
                                            <!-- comment view -->
                        </div><!--comment-sec end-->
                        <div class="post-comment">
                          <div class="cm_img">
                            <img src="images/resources/bg-img4.png" alt="">
                          </div>
                          <div class="comment_box">
                            <form>
                              <input type="text" placeholder="Post a comment">
                              <button type="submit">Send</button>
                            </form>
                          </div>
                        </div><!--post-comment end-->
                      </div>
                    <!-- </form> -->
                </div><!--post-project-fields end-->
                <a href="#" title=""><i class="la la-times-circle-o"></i></a>
            </div>
        </div>
        <!-- comment popup -->
        <div class="post-popup job_post">
            <div class="post-project">
                <h3>Post a job</h3>
                <div class="post-project-fields">
                    <form>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" name="title" placeholder="Title">
                            </div>
                            <div class="col-lg-12">
                                <div class="inp-field">
                                    <select>
                                        <option>Category</option>
                                        <option>Category 1</option>
                                        <option>Category 2</option>
                                        <option>Category 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <input type="text" name="skills" placeholder="Skills">
                            </div>
                            <div class="col-lg-6">
                                <div class="price-br">
                                    <input type="text" name="price1" placeholder="Price">
                                    <i class="la la-dollar"></i>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="inp-field">
                                    <select>
                                        <option>Full Time</option>
                                        <option>Half time</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <textarea name="description" placeholder="Description"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <ul>
                                    <li><button class="active" type="submit" value="post">Post</button></li>
                                    <li><a href="#" title="">Cancel</a></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div><!--post-project-fields end-->
                <a href="#" title=""><i class="la la-times-circle-o"></i></a>
            </div><!--post-project end-->
        </div><!--post-project-popup end-->

<div id="main" class="d-xl-none d-lg-none d-md-none d-sm-inline d-inline">
  <span class="button" style="font-size:30px;cursor:pointer" onclick="openNav()"><i class="fas fa-angle-double-right"></i></span>
</div> 


        <!-- slider information bar end -->

        <div class="chatbox-list">
            <div class="chatbox">
                <div class="chat-mg">
                    <a href="#" title=""><img src="images/resources/usr-img1.png" alt=""></a>
                    <span>2</span>
                </div>
                <div class="conversation-box">
                    <div class="con-title mg-3">
                        <div class="chat-user-info">
                            <img src="images/resources/us-img1.png" alt="">
                            <h3>John Doe <span class="status-info"></span></h3>
                        </div>
                        <div class="st-icons">
                            <a href="#" title=""><i class="la la-cog"></i></a>
                            <a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
                            <a href="#" title="" class="close-chat"><i class="la la-close"></i></a>
                        </div>
                    </div>
                    <div class="chat-hist mCustomScrollbar" data-mcs-theme="dark">
                        <div class="chat-msg">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                            <span>Sat, Aug 23, 1:10 PM</span>
                        </div>
                        <div class="date-nd">
                            <span>Sunday, August 24</span>
                        </div>
                        <div class="chat-msg st2">
                            <p>Cras ultricies ligula.</p>
                            <span>5 minutes ago</span>
                        </div>
                        <div class="chat-msg">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                            <span>Sat, Aug 23, 1:10 PM</span>
                        </div>
                    </div><!--chat-list end-->
                    <div class="typing-msg">
                        <form>
                            <textarea placeholder="Type a message here"></textarea>
                            <button type="submit"><i class="fa fa-send"></i></button>
                        </form>
                        <ul class="ft-options">
                            <li><a href="#" title=""><i class="la la-smile-o"></i></a></li>
                            <li><a href="#" title=""><i class="la la-camera"></i></a></li>
                            <li><a href="#" title=""><i class="fa fa-paperclip"></i></a></li>
                        </ul>
                    </div><!--typing-msg end-->
                </div><!--chat-history end-->
            </div>
            <div class="chatbox">
                <div class="chat-mg">
                    <a href="#" title=""><img src="images/resources/usr-img2.png" alt=""></a>
                </div>
                <div class="conversation-box">
                    <div class="con-title mg-3">
                        <div class="chat-user-info">
                            <img src="images/resources/us-img1.png" alt="">
                            <h3>John Doe <span class="status-info"></span></h3>
                        </div>
                        <div class="st-icons">
                            <a href="#" title=""><i class="la la-cog"></i></a>
                            <a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
                            <a href="#" title="" class="close-chat"><i class="la la-close"></i></a>
                        </div>
                    </div>
                    <div class="chat-hist mCustomScrollbar" data-mcs-theme="dark">
                        <div class="chat-msg">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                            <span>Sat, Aug 23, 1:10 PM</span>
                        </div>
                        <div class="date-nd">
                            <span>Sunday, August 24</span>
                        </div>
                        <div class="chat-msg st2">
                            <p>Cras ultricies ligula.</p>
                            <span>5 minutes ago</span>
                        </div>
                        <div class="chat-msg">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                            <span>Sat, Aug 23, 1:10 PM</span>
                        </div>
                    </div><!--chat-list end-->
                    <div class="typing-msg">
                        <form>
                            <textarea placeholder="Type a message here"></textarea>
                            <button type="submit"><i class="fa fa-send"></i></button>
                        </form>
                        <ul class="ft-options">
                            <li><a href="#" title=""><i class="la la-smile-o"></i></a></li>
                            <li><a href="#" title=""><i class="la la-camera"></i></a></li>
                            <li><a href="#" title=""><i class="fa fa-paperclip"></i></a></li>
                        </ul>
                    </div><!--typing-msg end-->
                </div><!--chat-history end-->
            </div>
            <div class="chatbox">
                <div class="chat-mg bx">
                    <a href="#" title=""><img src="images/chat.png" alt=""></a>
                    <span>2</span>
                </div>
                <div class="conversation-box">
                    <div class="con-title">
                        <h3>Messages</h3>
                        <a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
                    </div>
                    <div class="chat-list">
                        <div class="conv-list active">
                            <div class="usrr-pic">
                                <img src="images/resources/usy1.png" alt="">
                                <span class="active-status activee"></span>
                            </div>
                            <div class="usy-info">
                                <h3>John Doe</h3>
                                <span>Lorem ipsum dolor <img src="images/smley.png" alt=""></span>
                            </div>
                            <div class="ct-time">
                                <span>1:55 PM</span>
                            </div>
                            <span class="msg-numbers">2</span>
                        </div>
                        <div class="conv-list">
                            <div class="usrr-pic">
                                <img src="images/resources/usy2.png" alt="">
                            </div>
                            <div class="usy-info">
                                <h3>John Doe</h3>
                                <span>Lorem ipsum dolor <img src="images/smley.png" alt=""></span>
                            </div>
                            <div class="ct-time">
                                <span>11:39 PM</span>
                            </div>
                        </div>
                        <div class="conv-list">
                            <div class="usrr-pic">
                                <img src="images/resources/usy3.png" alt="">
                            </div>
                            <div class="usy-info">
                                <h3>John Doe</h3>
                                <span>Lorem ipsum dolor <img src="images/smley.png" alt=""></span>
                            </div>
                            <div class="ct-time">
                                <span>0.28 AM</span>
                            </div>
                        </div>
                    </div><!--chat-list end-->
                </div><!--conversation-box end-->
            </div>
        </div><!--chatbox-list end-->

    </div><!--theme-layout end-->        
               
@endsection
