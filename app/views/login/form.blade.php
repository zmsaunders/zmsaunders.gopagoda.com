@extends('wrapper.main')

@section('body')
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
				{{ Form::open(array('class' => 'form-login')) }}
					<h2 class="form-signin-heading">Please log in</h2>
					@if(Session::get('error'))
						Sorry, your username or password was incorrect.
					@endif
					<input type="text" class="input-block-level" placeholder="Email address" name="email">
					<input type="password" class="input-block-level" placeholder="Password" name="password">
					<label class="checkbox">
						<input type="checkbox" value="remember" name="remember"> Remember me
					</label>
					<button class="btn btn-primary" type="submit">Make it so.</button>
				{{ Form::close() }}
			</div>
		</div>
	</div>
@stop