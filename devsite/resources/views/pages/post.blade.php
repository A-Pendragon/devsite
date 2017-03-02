@extends('layouts.default')

@section('title', 'Devsite')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<form action="{{ route('createpost') }}" method="post" name="form" autocomplete="off" enctype="multipart/form-data">
					<div class="post-container panel panel-default">
						<div class="_panel-heading">Post your application</div>

						<div class="panel-body">
							<div class="form-group">
								<div class="col-xs-12">
									<label for="title" class="control-label form-margin">Title</label>
							    	
							    	<input type="text" name="title" class="form-control">
						 	   	</div>
						 	</div>

						 	<div class="form-group">
						 	   	<div class="col-xs-12">
									<label for="desciption" class="control-label form-margin">Description</label>
							    	
							    	<textarea rows="8" type="text" name="description" class="form-control"></textarea>
						 	   	</div>
					 	   	</div>

					 	   	<div class="form-group">
						 	   	<div class="col-xs-12">
									<label for="genre" class="control-label form-margin">Genre</label>
							    	
							    	<select type="text" name="genre" class="form-control">
							    		<option>Tech</option>
							    		<option>Developer Tool</option>
							    		<option>Game</option>
							    		<option>Artificial Intelligence</option>
							    	</select>
						 	   	</div>
				 	   		</div>
						 	
						 	<div class="form-group">
						 	   	<div class="col-xs-12">
									<label for="tags" class="control-label form-margin">Tags</label>
							    	
							    	<input type="text" name="tags" class="form-control">
							    	<p class="help-block">Separate tags with a comma. (ex. racing, unity, 3d, shooting)</p>
						 	   	</div>
						 	</div>

						 	<div class="form-group">
						 	   	<div class="col-xs-12">
									<label for="icon" class="control-label form-margin">Icon</label>
							    	
							    	<input type="file" name="icon">
						 	   	</div>
						 	</div>

					 		<div class="form-group">
						 	   	<div class="col-xs-12">
									<label for="images" class="control-label form-margin">Image</label>
							    	
							    	<input type="file" name="images">
						 	   	</div>
						 	</div>

					 		<div class="form-group">
								<div class="col-xs-12">
									<label for="exampleInputFile" class="control-label form-margin">File</label>
							    	
							    	<input type="file" name="file">
						 	   		<p class="help-block">Example block-level help text here.</p>
						 	   	</div>
					 	   	</div>

					 	   	<div class="col-xs-12">
								<button type="submit" class="btn _btn-default">Post</button>
								<input type="hidden" name="_token" value="{{ Session::token() }}">
							</div>
						</div>
					</div>			    	
	 	   		</form>
			</div>
		</div>
	</div>
@endsection