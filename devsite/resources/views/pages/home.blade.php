@extends('layouts.home')

@section('title', 'Devsite')

@section('content')
	<div class="container-fluid default-padding">
		<div class="row">
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

							<hr>
								<a href="">
									<img src="/uploads/profile_pics/{{ $users->profile_pic }}" class="post-profile-pic"><b>{{ $post->user->first_name . ' ' . $post->user->last_name }}</b>
								</a>
							<hr>											

							<div class="post-interaction">
								<a href="#">Rate</a> | 
								<a href="#">Comment</a>
							</div>
						</div>
					</div>
				@endforeach
			</div>

			<div class="col-xs-4 remove-margin-padding">
				<div class="home-sidebar panel panel-default">
					<div class="_panel-heading-2">
						<h4>Ranking</h4>
					</div>
					<div class="panel-body">
						
					</div>				
				</div>

				<div class="home-sidebar panel panel-default">
					<div class="_panel-heading-2">
						<h4>Random Applications</h4>
					</div>
					<div class="panel-body">
						
					</div>
				</div>			
			</div>
		</div>
	</div>
@endsection