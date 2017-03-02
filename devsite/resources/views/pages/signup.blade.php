@extends('layouts.default')

@section('title', 'Devsite | Sign up')
	
@section('content')
	<div class="container-fluid">			
		<div class="row">
			<div class="col-xs-12">				
				<!-- Registration Form -->	
				<form action="{{ route('signuppost') }}" id="registration_form" method="POST" name="form" class="form-horizontal" autocomplete="off">
					<div class="registration-container panel panel-default">
						<div class="_panel-heading text-center">Sign up for Devsite</div>

						<div class="panel-body">
							<!-- Show errors if there are any. -->
							@if(count($errors) > 0)
								<ul>
									@foreach($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							@endif

							<!-- Name -->
							<div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
								<label for="first_name" class="col-xs-3 control-label">First Name</label>
								<div class="col-xs-9">
							  		<input type="text" name="first_name" class="form-control" id="first_name" placeholder="First" value="{{ Request::old('first_name') }}">
								</div>
							</div>

							<div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
								<label for="last_name" class="col-xs-3 control-label">Last Name</label>
								<div class="col-xs-9">
								    <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last" value="{{ Request::old('last_name') }}">
								</div>
							</div>

							<!-- Username -->
							<div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
								<label for="username" class="col-xs-3 control-label">Username</label>
								<div class="col-xs-9">
							    	<input type="text" name="username" class="form-control" id="username" placeholder="Username" value="{{ Request::old('username') }}">
							    </div>
							</div>

							<!-- Email Address -->
							<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}" id="email_address_form">
								<label for="email_address" class="col-xs-3 control-label">Email Address</label>
								<div class="col-xs-9">
									<input type="email" name="email" class="form-control" id="email_address" placeholder="ex. my_email@yahoo.com" value="{{ Request::old('email') }}">
								</div>
							</div>

							<!-- Password -->
							<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
								<label for="password" class="col-xs-3 control-label">Password</label>
								<div class="col-xs-9">
									<input type="password" name="password" class="form-control" id="password" placeholder="your password" value="{{ Request::old('password') }}">
								</div>
							</div>

							<div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
								<label for="password_confirmation" class="col-xs-3 control-label">Confirm Password</label>
								<div class="col-xs-9">
							  		<input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Re-enter your password" value="{{ Request::old('password_confirmation') }}">			
							  	</div>
							</div>

							<!-- Birthdate (birthdate have a javascript function used in scripts.js > call())-->
							<div class="form-group {{ $errors->has('month') ? 'has-error' : '' }}"> 
								<label for="month" class="col-xs-3 control-label">Birthdate</label>
								<!-- Month -->
								<!-- call() is on scripts.js -->
								<div class="col-xs-9 form-inline">
									<select class="form-control" id="month" name="month" onchange="setDate()" style="width:120px;">
										<option value="">Month</option>
										<option value="1">Jan</option> 
										<option value="2">Feb</option> 
										<option value="3">Mar</option>
										<option value="4">Apr</option> 
										<option value="5">May</option> 
										<option value="6">Jun</option>
										<option value="7">Jul</option> 
										<option value="8">Aug</option> 
										<option value="9">Sep</option>
										<option value="10">Oct</option> 
										<option value="11">Nov</option> 
										<option value="12">Dec</option>
									</select>

									<!-- Day (Calculated in the scripts.js) -->
									<select class="form-control" name="day" style="width:120px;">
										<option value="">Day</option>								
									</select>

									<!-- Year (Calculated in the scripts.js) -->
									<select class="form-control" name="year" style="width:120px;">
										<option value="">Year</option>
									</select>
								</div>
							</div>

							<!-- Country -->
							<div class="form-group {{ $errors->has('country_id') ? 'has-error' : '' }}">
								<label for="country" class="col-xs-3 control-label">Country</label>
								<div class="col-xs-9">
									<select class="form-control" name="country_id" id="country">
										<option value="">Select a Country</option>
										@foreach($countries as $country)
											<option value="{{ $country->id }}" 
												@if (old('country_id') == $country->id) 
													selected='selected' 
												@endif> {{ $country->name }}
											</option>
										@endforeach
									</select>
								</div>
							</div>

							<!-- Sex -->
							<div class="form-group {{ $errors->has('sex') ? 'has-error' : '' }}">
								<label class="col-xs-3 control-label">Sex &nbsp;&nbsp;</label>
								<div class="col-xs-9 radio">
									<label class="radio-inline control-label">
								  		<input type="radio" name="sex" value="f"
								  			@if (old('sex') == 'f')
								  				checked='checked'
								  			@endif> Female
									</label>

									<label class="radio-inline control-label">
								  		<input type="radio" name="sex" value="m"
								  			@if (old('sex') == 'm')
								  				checked='checked'
								  			@endif> Male
									</label>
								</div>
							</div>

							<div class="text-right">
								<button type="submit" id="signup_btn" name="registration_signup_btn" class="btn _btn-default"><i class="glyphicon glyphicon-user"></i>&nbsp;&nbsp;Sign up</button>
								<input type="hidden" name="_token" value="{{ Session::token() }}">

								<a type="button" class="btn _btn-default-2" href="login"><i class="glyphicon glyphicon-log-in"></i>&nbsp;&nbsp;Already have an account?</a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection

@section('additional_scripts')
	<script type="text/javascript" src="js/scripts.js"></script>
@endsection