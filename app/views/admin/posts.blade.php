@extends('wrapper.main')

@section('body')
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<h2>Create a Post</h2>

					{{ Form::open() }}

						@if ($errors->count() > 0)
							<p>Please coprrect the following issues:</p>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						@endif
						<div class="row-fluid">
							<div class="span6">
								<label>Post Title</label>
								{{ Form::text('title', null, array('class' => 'span12', 'placeholder' => 'Enter the title of the post')) }}
							</div>
							<div class="span6">
								<label>Slug Title</label>
								{{ Form::text('slug', null, array('class' => 'span12', 'placeholder' => 'The URL segment that should be used for this post')) }}
							</div>
						</div>
						<div class="row-fluid">
							<div class="span12">
								<label>Body Copy</label>
								{{ Form::textarea('body', null, array('class' => 'span12', 'placeholder' => 'Mardown and html supported', 'rows' => '15')) }}
							</div>
						</div>
						<button class="btn btn-primary" type="submit">Create Post</button>
					{{ Form::close() }}
			</div>
		</div>
		<hr />
		<div class="row-fluid">
			<div class="span12">
				<h2>Edit a post</h2>
				@if ($posts)
					<ul>
						@foreach($posts as $post)
							<li><a href="{{URL::action('AdminPostController@getEdit', $post->id)}}">{{ $post->title }}</a></li>
						@endforeach
					</ul>
				@else
					<p>No Posts found!</p>
				@endif
			</div>
		</div>
	</div>
@stop