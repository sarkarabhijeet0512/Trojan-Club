
                                    @foreach ($posts as $post)
                                        <div class="post-bar">
                                            <div class="post_topbar">
                                                <div class="usy-dt">
                                                    <img style="height: 2rem;" src="{{ $post->post_img }}" alt="">
                                                    <div class="usy-name">
                                                        <h3>{{ $post->user['first_name'].' '.$post->user['last_name'] }}</h3>
                                                        <span><img src="images/clock.png" alt="">{{ $post->created_at }}</span>
                                                    </div>
                                                </div>
                                                <div class="ed-opts">
                                                    <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                                    <ul class="ed-options">
                                                        <li><a href="#" title="">Edit Post</a></li>
                                                        <li><a href="#" title="">Unsaved</a></li>
                                                        <li><a href="#" title="">Unbid</a></li>
                                                        <li><a href="#" title="">Close</a></li>
                                                        <li><a href="#" title="">Hide</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="epi-sec">
                                                <ul class="descp">
                                                    <li><img src="images/icon8.png" alt=""><span>Trojan Member</span></li>
                                                    <li><img src="images/icon9.png" alt=""><span>{{ $post->regno }}</span></li>
                                                </ul>
                                                <ul class="bk-links">
                                                    <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                    <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                    <!-- <li><a href="#" title="" class="bid_now">Bid Now</a></li> -->
                                                </ul>
                                            </div>
                                            <div class="job_descp">
                                                <!-- <h3>{{ $post->image }}</h3> -->
                                                <div style="text-align: center;">
                                                    <img style="float: none!important" src="{{ $post->image }}">
                                                </div>
                                                
                                                <!-- <ul class="job-dt">
                                                    <li><a href="#" title="">Full Time</a></li>
                                                    <li><span>$30 / hr</span></li>
                                                </ul> -->
                                                <p>{{ $post->post_description }}<a href="#" title=""> view more</a></p>
                                                <!-- <ul class="skill-tags">
                                                    <li><a href="#" title="">HTML</a></li>
                                                    <li><a href="#" title="">PHP</a></li>
                                                    <li><a href="#" title="">CSS</a></li>
                                                    <li><a href="#" title="">Javascript</a></li>
                                                    <li><a href="#" title="">Wordpress</a></li>     
                                                </ul> -->
                                                <div class="">
                                                <ul class="like-com">
                                                    <li>
                                                        <i @if ( App\Helpers\helpers::dislike($post->id)): class="fas fa-thumbs-up like-btn" @else: class="far fa-thumbs-up like-btn" @endif data-id="{{ $post->id }}"></i>
                                                        <span class="likes">{{ App\Helpers\helpers::getLikes($post->id)
                                                         }}</span>
                                                    </li> 
                                                    <li><a href="" class="com comment_section" data-id="{{ $post->id }}"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
                                                </ul>
                                                <!-- <a href="#"><i class="fas fa-eye"></i>Views 50</a> -->
                                            </div>
                                            </div>
                                            <!-- comment view -->
                                            <div style="padding: 20px">
                                            <!-- comment view -->
                                            <div class="job-status-bar">
                                                <div class="post-comment">
                                                    <div class="cm_img">
                                                        <img src="images/resources/bg-img4.png" alt="">
                                                    </div>

                                                                
                                                            </div>
                                                    <div class="comment_box">
                                                        <form action="/comments" method="post" name="comment" id="{{ $post->id }}">
                                                            @csrf
                                                             <input type="hidden" name="post_id" id="post_id{{ $post->id }}" value="{{ $post->id }}">
                                                            <input type="hidden" name="user_id" id="user_id{{ $post->id }}" value="{{ Auth::user()->id }}">
                                                            <span class="text{{ $post->id }}">
                                                           <input type="text" name="comment" id="comment{{ $post->id }}" placeholder="Post a comment"></span>  
                                                        </form>
                                                    </div>
                                                    <div id="data{{ $post->id }}" class="m-2">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        @endforeach
                              