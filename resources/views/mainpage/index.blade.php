@include('layouts.header')
<script>
        jQuery(document).ready(function () {
            $('#time').syotimer({
                year: <?php echo $Year ?>,
                month: <?php echo $Mon ?>,
                day: <?php echo $Day ?>,
                hour: <?php echo $Hours ?>,
                minute: <?php echo $min ?>,
            });
        });
    </script>
    <style type="text/css">
        .line-clamps{
            text-align: justify;
            /*width: 18rem;*/
            /*height: 48px;*/
            /* overflow: hidden; */
            /* text-overflow: ellipsis; */
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
@section('content')
    <!--End header wrapper-->

    <!--Begin content wrapper-->
    <div class="content-wrapper">
        <!--begin slider-->
        <div class="slider-hero">
            <div class="sliders-wrap columns1">
                @foreach($slider as $banner)
                <div class="item">
                    <img src="{{ $banner->image }}" alt="">
                    <div class="owl-caption">
                        <div class="container">
                            <div class="content-block">
                                <h2 class="text-center">
                                    <span class="text-bold">{{ $banner->heading }}</span> <br />
                                    <span class="text-white">{{ $banner->description }}</span>
                                </h2>
                                <a href="#" class="bnt bnt-theme read-story">READ STORY</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!--end slider--> 
        <!--begin upcoming event-->
        <div class="upcoming-event">
            <div class="container">
                <div class="row">
                    <div class="area-img col-md-5 col-sm-12 col-xs-12">
                        <img class="img-responsive animated zoomIn" src="images/even-img.jpg" alt="">
                    </div>
                    <div class="area-content col-md-7 col-sm-12 col-xs-12">
                        <div class="area-top">
                            <div class="row">
                                <div class="col-sm-10 col-xs-9">
                                    <h5 class="heading-light no-margin animated fadeInRight">UPCOMING EVENT</h5>
                                    <h2 class="heading-bold animated fadeInLeft">{{ $event->event_title }}</h2>
                                    <span>
                                        <span class="icon map-icon"></span>
                                        <span class="text-place text-light animated fadeInRight">Sayidan Street, Gondomanan, 8993, San Francisco, CA</span>
                                    </span>
                                </div>
                                <div class="col-sm-2 col-xs-3">
                                    <div class="area-calendar calendar animated slideInRight">
                                        <span class="day text-bold">{{ $Day }}</span>
                                        <span class="month text-light">{{ $M }}</span>
                                        <span class="year text-light bg-year">{{ $Year }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="area-bottom">
                            <div id="time" class="pull-left animated slideInLeft"></div>
                            <a href="/programs" class="bnt bnt-theme join-now pull-right animated fadeIn">Join Now</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--end upcoming event-->

        <!--begin alumni dashboard-->
        <!-- <div class="alumni-dashboard">
            <div class="container">
                <div class="title title-dashboard type1">
                    <h3 class="heading-light no-margin"> My Sayidan Alumni Dashboard </h3>
                </div>
                <div class="area-content">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="icon mail-icon"></div>
                            <div class="box-content">
                                <h4 class="heading-regular"> Checking Message </h4>
                                <p class="text-content text-margin text-light ">
                                    Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="icon account-icon"></div>
                            <div class="box-content">
                                <h4 class="heading-regular"> Update My Information </h4>
                                <p class="text-content text-margin text-light">
                                    Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="icon group-icon"></div>
                            <div class="box-content">
                                <h4 class="heading-regular"> Join with Alumni Forum </h4>
                                <p class="text-content text-margin text-light">
                                    Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="icon search-icon"></div>
                            <div class="box-content">
                                <h4 class="heading-regular"> Search Alumni Directory </h4>
                                <p class="text-content text-margin text-light">
                                    Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam.
                                </p>
                            </div>
                        </div>
                        <div class="login-dashboard text-center col-sm-12 col-xs-12">
                            <a href="login-page.html" class="bnt bnt-theme login-links">LOG IN TO ALUMNI DASHBOARD</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!--end alumni dashboard-->

        <!--begin block links-->
        <div class="block-links">
            <div class="container">
                <div class="row">
                    <div class="block-news col-md-4 col-sm-12 col-xs-12">
                        <div class="column-news">
                            <div class="title-links">
                                <h3 class="heading-regular">Latest News</h3>
                            </div>
                            <div class="post-wrapper" style="overflow-y: scroll;height: 48.4rem;">
                                @foreach($News as $LatestNews)
                                <div class="post-item clearfix ">
                                    <div class="image-frame post-photo-wrapper">
                                        <a href="#"> <img src="{{ $LatestNews->image }}" alt=""></a>
                                    </div>
                                    <div class="post-desc-wrapper">
                                        <div class="post-desc">
                                            <div class="post-title"><h6 class="heading-regular" style="margin-top: -4px"><a href="#">{{ $LatestNews->title }}</a></h6></div>
                                            <div class="post-excerpt">
                                                <p class="line-clamps">{{ $LatestNews->description }}</p>
                                                <a href="#" class="float-right">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="view-all"><a href="blog.html">View All News</a></div>
                        </div>
                    </div>
                    <div class="block-career col-md-4 col-sm-12 col-xs-12">
                        <div class="column-career">
                            <div class="title-links">
                                <h3 class="heading-regular">Career Opportunity</h3>
                            </div>
                            <div class="career-content">
                                <div class="company-item clearfix">
                                    <div class="company-logo">
                                        <img src="images/company-logo1.png" alt="">
                                    </div>
                                    <div class="company-desc-wrapper">
                                        <div class="company-desc">
                                            <div class="company-title"><h6 class="heading-regular"><a href="#">Creative Director at StartTrek Inc</a></h6></div>
                                            <div class="company-excerpt">
                                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="company-item clearfix">
                                    <div class="company-logo">
                                        <img src="images/company-logo2.png" alt="">
                                    </div>
                                    <div class="company-desc-wrapper">
                                        <div class="company-desc">
                                            <div class="company-title"><h6 class="heading-regular"><a href="#">Chief Technologies Officer at Microtek Inc</a></h6></div>
                                            <div class="company-excerpt">
                                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="company-item clearfix">
                                    <div class="company-logo">
                                        <img src="images/company-logo3.png" alt="">
                                    </div>
                                    <div class="company-desc-wrapper">
                                        <div class="company-desc">
                                            <div class="company-title"><h6 class="heading-regular"><a href="#">Senior UI/UX Manager at Kidos Inc</a></h6></div>
                                            <div class="company-excerpt">
                                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="company-item clearfix">
                                    <div class="company-logo">
                                        <img src="images/company-logo4.png" alt="">
                                    </div>
                                    <div class="company-desc-wrapper">
                                        <div class="company-desc">
                                            <div class="company-title"><h6 class="heading-regular"><a href="#">Finance Officer at  Atomic Inc</a></h6></div>
                                            <div class="company-excerpt">
                                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="view-all"><a href="career-opportunity.html">View All Career Opportunity</a></div>
                        </div>

                    </div>
                    <div class="block-event-calendar col-md-4 col-sm-12 col-xs-12">
                        <div class="column-calendar">
                            <div class="title-links">
                                <h3 class="heading-regular">Event Calendar</h3>
                            </div>
                            <div class="content-calendar bg-calendar no-padding">
                                <div class="top-section">
                                    <h6 class="heading-light">April 2016</h6>
                                    <span class="icon calendar-icon pull-right"></span>
                                </div>
                                <div class="list-view">
                                @foreach($Eventcalander as $calanderEvent)
                                <?php
                                    $Week_c = date("D",strtotime($calanderEvent->event_date));
                                    $Mon_c  = date("M",strtotime($calanderEvent->event_date));
                                    $day_c  = date("d",strtotime($calanderEvent->event_date)); 
                                ?> 
                                    <div class="view-item">
                                        <div class="date-item">
                                            <span class="dates text-light">{{ $Week_c }}</span>
                                            <span class="day text-bold color-theme">{{ $day_c }}</span>
                                            <span class="month text-light">{{ $Mon_c }}</span>
                                        </div>
                                        <div class="date-desc-wrapper">
                                            <div class="date-desc">
                                                <div class="date-title"><h6 class="heading-regular">{{ $calanderEvent->event_title }}</h6></div>
                                                <div class="date-excerpt">
                                                    <p>Organizer: TROJAN Alumni Association</p>
                                                </div>
                                                <div class="place">
                                                    <span class="icon map-icon"></span>
                                                    <span class="text-place">Gondomanan Street 209, California</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                              </div>
                            <div class="view-all"><a href="programs-events.html">View All Events</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end block links-->

        <!--begin alumni interview-->
        <div class="alumni-interview">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 pull-right">
                        <div class="interview-wrapper">
                            <div class="interview-title">
                                <h4 class="heading-light text-capitalize">Alumni Interview</h4>
                                <h1 class="heading-light text-capitalize">Hannah Jordan</h1>
                            </div>
                            <div class="interview-desc text-left">
                                <p class="text-light">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.</p>
                            </div>
                            <div class="interview-see-story">
                                <a href="story-single.html" class="see-story bnt text-uppercase">SEE HANNAH STORY</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--end alumni interview-->

        <!--begin twitter stream-->
        <div class="twitter-stream">
            <div class="container">
                <div class="twitter-wrapper text-center">
                    <div class="twitter-icon color-theme">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </div>
                    <div class="twitter-content">
                        <div class="twitter-desc">
                            <p class="text-light text-center">“I feel fortunate to be joining my classmates in welcoming the Class of
                                2016 to the Sayidan alumni community <a href="#">@SayidanEdu</a> <a href="#">@SayidanEdu</a>“</p>
                            <div class="twitter-user">
                                <span class="avatar-user"><img src="images/avatar.png" alt=""></span>
                                <span class="name">@KathleenLittle</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end twitter stream-->

        <!--begin instagream-->
        <div class="instagream">
            <div class="instagram-feed clearfix">
                <ul class="list-item no-margin">
                    <li class="no-padding no-margin no-style" style="width: 12%"><a href="#"><img  src="images/ins-img1.jpg" alt=""></a></li>
                    <li class="no-padding no-margin no-style" style="width: 19%"><a href="#"><img  src="images/ins-img2.jpg" alt=""></a></li>
                    <li class="no-padding no-margin no-style" style="width: 19%"><a href="#"><img  src="images/ins-img3.jpg" alt=""></a></li>
                    <li class="no-padding no-margin no-style" style="width: 19%"><a href="#"><img  src="images/ins-img4.jpg" alt=""></a></li>
                    <li class="no-padding no-margin no-style" style="width: 19%"><a href="#"><img  src="images/ins-img5.jpg" alt=""></a></li>
                    <li class="no-padding no-margin no-style" style="width: 12%"><a href="#"><img  src="images/ins-img6.jpg" alt=""></a></li>
                </ul>
                <div class="instagram-feed-user text-center">
                    <div class="user-wrapper">
                        <span class="icon-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></span>
                        <span class="name-user">@SayidanEdu</span>
                    </div>
                </div>
            </div>
        </div>
        <!--end instagream-->

        <!--begin newsletter-->
        <div class="newsletter newsletter-parallax">
           <div class="container">
               <div class="newsletter-wrapper text-center">
                   <div class="newsletter-title">
                       <h2 class="heading-light">Keep Up and Join Our Newsletter</h2>
                       <p class="text-white">Duis autem vel eum iriure dolor in hendrerit in vulputate.</p>
                   </div>
                   <form name="subscribe-form" target="_blank" class="form-inline">
                       <input type="text" class="form-control text-center form-text-light" name="EMAIL" value="" placeholder="E-mail Address" >
                       <button type="submit" class="button bnt-theme">subscribe</button>
                   </form>
               </div>
           </div>
        </div>
        <!--end newsletter-->

    </div>
    
    <!--End content wrapper-->
    <!--Begin footer wrapper-->
    @include('layouts.footer')
    <!--End footer wrapper-->
</div>
