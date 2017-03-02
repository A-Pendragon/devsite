@extends('layouts.default')

@section('title', 'Devsite | Log in')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">				
				<!-- Login Form -->
				<form action="{{ route('loginpost') }}" name="form" method="post" data-toggle="validator">
					<div class="login-container panel panel-default">
						<div class="_panel-heading">Log in to Devsite</div>

						<div class="panel-body">
							<!-- Show errors if there are any. -->
							@if(count($errors) > 0)
								<ul>
									@foreach($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							@endif

							<!-- Email -->
					  		<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
						    	<input type="email" name="email" class="form-control" id="email" placeholder="Email">
						 	</div>

						 	<!-- Password -->
						  	<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
							    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
						 	</div>

						 	<!-- Remember me -->
					 		<div class="form-group">
						  		<label id="remember">
						  			<input type="checkbox" name="remember"> Remember me
						  		</label>
						  	</div>
					 		
					 		<!-- Buttons -->
					  		<button type="submit" id="login_btn" name="login_login_btn" class="btn _btn-default btn-block"><i class="glyphicon glyphicon-log-in"></i>&nbsp;&nbsp;Log in</button>
					  		<input type="hidden" name="_token" value="{{ Session::token() }}">

					  		<a type="button" class="btn _btn-default-2 btn-block" href="signup"><i class="glyphicon glyphicon-user"></i>&nbsp;&nbsp;Sign up</a>
					  	</div>
				  	</div>
				</form>				
			</div>						
		</div>
	</div>
@endsection