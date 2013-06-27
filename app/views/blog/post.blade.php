@extends('wrapper.main')

@section('body')
	<div class="container-fluid">
		<h2>{{$post->title}} <small>{{$post->post_date}}</small></h2>
		<p class="lead">{{$post->summary}}</p>
		{{ $parser->transformMarkdown($post->body) }}
	</div>
@stop