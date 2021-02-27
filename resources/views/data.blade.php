
							
							@foreach ($posts as $post)
                            
									<!-- <div id="post-data"> -->
										<div class="post-bar" >
											<div class="post_topbar">
												<div class="usy-dt">
													<img style height="58px" src="{{ $post->post_img }}"alt="profile image">
													<div class="usy-name">
														<h3>{{ $post->user['first_name'].' '.$post->user['last_name'] }}</h3>
														<span><img src=" images/clock.png" alt="">{{ $post->created_at }}  </span>
													</div>
												</div>
												<div class="ed-opts">
													<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
													<ul class="ed-options">
														<li><button class="btn btn-sm border-0 float-right waves-effect waves-float" type="button" data-toggle="modal" data-target="#EditModal"><i class="fas fa-pencil-alt mr-2"></i>Edit Post</button></li>
														<li><a href="{{ URL('/dashboard/medicinepending/'.$post->id )}}" class="btn-del" id="btn-del" title=""><i  class="fa fa-trash"></i> Delete Post</a></li>
														<!-- <li><a href="#" title="">Unbid</a></li> -->
														<li><a href="#" title="">Close</a></li>
														<li><a href="#" title="">Hide</a></li>
													</ul>
												</div>
											</div>
											<div class="epi-sec">
												<ul class="descp">
													<li><img src=" images/icon8.png" alt=""><span>{{ Auth::user()->designation }}</span></li>
													<li><img src=" images/icon9.png" alt=""><span>{{  $post->regno }}</span></li>
												</ul>
												<ul class="bk-links">
													<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
													<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
												</ul>
											</div>
											<div class="job_descp">
												<h3>{{ $post->post_title }}</h3>
												<!--ul class="job-dt">
													<li><a href="#" title="">Full Time</a></li>
													<li><span>$30 / hr</span></li>
												</ul-->
												<p>{{ $post->post_description }}</p>
												<!--ul class="skill-tags">
													<li><a href="#" title="">HTML</a></li>
													<li><a href="#" title="">PHP</a></li>
													<li><a href="#" title="">CSS</a></li>
													<li><a href="#" title="">Javascript</a></li>
													<li><a href="#" title="">Wordpress</a></li> 	
												</ul-->
											</div>
											<div class="job-status-bar">
												<ul class="like-com">
													<li>
														<i @if ( App\Helpers\helpers::dislike($post->id)): class="fa fa-thumbs-up like-btn" @else: class="fas fa-heart like-btn" @endif data-id="{{ $post->id }}"></i>
                                                        <span class="likes">{{ App\Helpers\helpers::getLikes($post->id)
                                                         }}</span>
													</li> 
													<li><a href="#" title="" class="com"><img src=" images/com.png" alt=""> Comment 15</a></li>
												</ul>
												<a><i class="la la-eye"></i>Views 50</a>
											</div>
										</div>
									<!-- </div> -->
										@endforeach