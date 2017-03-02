@extends('layouts.profile')

@section('title', 'Profile')

@section('content')
	<div class="container-fluid default-padding">
		<div class="row">
			<!-- Profile info -->
			<div class="col-xs-4 remove-margin-padding">
				<div class="profile-info-container">
					<a href="changeprofilepic">
						<img src="/uploads/profile_pics/{{ $user->profile_pic }}" class="thumbnail profile-pic img-responsive" alt="Profile Pic">
					</a>
					
					<h3 class="profile-info profile-name">
						<b>
							{{ $user->first_name . ' ' . $user->last_name }}
						</b>
					</h3>

					<h4 class="profile-info profile-username">
						{{ '(' . $user->username . ')' }}
					</h4>

					<p class="profile-info profile-bio">
						{{ $user->biography }}
					</p>

					<hr class="profile-info"/>
					<a href="#" class="profile-info profile-email"><span class="glyphicon glyphicon-envelope"></span>
						{{ $user->email }}
					</a>

					<p profile-info><span class="glyphicon glyphicon-gift"></span>
						 {{ $user->birthdate }}
					</p>

					<p profile-info><span class="glyphicon glyphicon-globe"></span>
						<?php 					
							$country_id = $user->country_id;
							$country = DB::table('countries')->where('id', $country_id)->first();
						?>
						{{ $country->name }}
					</p>

					<p profile-info>							
						<?php
							$sex = $user->sex;
						?>
						@if($sex == 'm')
							{{ 'Male' }}
						@else
							{{ 'Female' }}
						@endif							
					</p>
				</div>
			</div><!-- /Profile info -->

			<!-- Nav -->
			<div class="col-xs-8 remove-margin-padding">
				<div class="panel panel-default">
					<div class="panel-body profile-nav">
						<!-- Navs --><!-- 
						 --><a href="profile" type="button" class="btn _btn-transparent">Posts</a><!-- 
						 --><a href="" type="button" class="btn _btn-transparent">Apps</a><!-- 
						 --><a href="" type="button" class="btn _btn-transparent">Following</a><!-- 
						 --><a href="" type="button" class="btn _btn-transparent">Followers</a><!-- 
						 --><a href="basicinfo" type="button" class="btn _btn-transparent pull-right">Edit Profile</a>
					</div>
				</div>
			</div>

			<!-- Posts -->
			<div class="col-xs-8 remove-margin-padding">					
				@foreach($posts->reverse() as $post)
					<?php 
						$user_id = $post->user_id;
						$users = DB::table('users')->where('id', $user_id)->first();
						$tags = explode(',', $post->tags);
					?>
					<div class="panel panel-default">
						<div class="panel-body">								
							<div class="media">
								<!-- Post settings -->
								<div class="dropdown post-settings">
									<a class="_btn-link dropdown-toggle" type="button" data-toggle="dropdown">
										<span class="glyphicon glyphicon-menu-down"></span>
									</a>
									<ul class="dropdown-menu">
						            	<li><a href="#"><i class="glyphicon glyphicon-exclamation-sign"></i>&nbsp;&nbsp;Report post</a></li>
					       		 	</ul>
								</div>
								<div class="media-left">
									<!-- Post icon -->
									<a href="">
										<img src="{{ asset('uploads/posts/icons/' . $post->icon) }}" class="media-object post-home-icon">
									</a>
								</div>
								<div class="media-body">												
									<!-- Post title  -->
									<h3 class="post-title media-heading">{{ $post->title }}</h3>
									<!-- Post genre -->
									<span class="post-genre">{{ $post->genre }}</span>			
								</div>
							</div>

							<button type="button" class="btn _btn-default post-download-btn"><i class="glyphicon glyphicon-download-alt"></i>&nbsp;&nbsp;Download</button>

							<div class="post-tags">
								<?php foreach ($tags as $tag) { ?>
									<span class="label label-default"><?php echo ltrim(strtoupper($tag)); ?></span>
								<?php } ?>
							</div>

							<div class="post-img">
								<img src="{{ asset('uploads/posts/images/' . $post->images) }}" class="img-responsive">
							</div>

							<div class="post-description">							
								<p>{{ $post->description }}</p>
							</div>											

							<div class="post-interaction">
								<a href="#">Rate</a> | 
								<a href="#">Comment</a>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection