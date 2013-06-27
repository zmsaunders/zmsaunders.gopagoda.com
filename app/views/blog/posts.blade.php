@extends('wrapper.main')

@section('body')
	<div class="container-fluid">
		@if (count($posts) > 0)
			@foreach ($posts as $post)
				<h2>{{$post->title}}</h2>
				<p>{{$post->summary}} - <a href="{{ URL::action('BlogController@getPost', $post->slug) }}">Read More</a></p>
				<hr />
			@endforeach
		@else
			<h2 class="foundicon-error">Nothing Here</h2>
			<p>There doesn't seem to be anything here. Please check back later.</p>
		@endif
	</div>
@stop