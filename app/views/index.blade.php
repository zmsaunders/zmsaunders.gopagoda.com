@extends('wrapper.main');

@section('body')
<div class="container-fluid layer">
	<div class="row-fluid top-content">
		<div class="span4">
			<h2 class="foundicon-edit">I write.</h2>
			<p class="lead pad-top">Php, Javascript, Html, and Css are what I love, and I'm damn good at it. I'm trying to be damn good at many more.</p>
		</div>
		<div class="span4">
			<h2 class="foundicon-graph">I optimize.</h2>
			<p class="lead pad-top">It's not done until it's shipped, and it's not shipped until it's fast. A faster web is a better web.</p>
		</div>
		<div class="span4">
			<h2 class="foundicon-refresh">I do it over again.</h2>
			<p class="lead pad-top">There is always room for improvement, regardless of the project. It can always be refactored, improved, and sped up.</p>
		</div>
	</div>
	<div class="row-fluid top-content hidden-phone">
		<div class="span4">
			<div class="img-rounded workflow-image">
				<img src="/assets/img/code.png" alt="Look at all of that sweet, sweet code!" />
			</div>
		</div>
		<div class="span4">
			<div class="img-rounded workflow-image">
				<img src="/assets/img/relic.png" alt="We can rebuild him. We have the technology!" />
			</div>
		</div>
		<div class="span4">
			<div class="img-rounded workflow-image">
				<img src="/assets/img/gitlog.png" alt="And who says a git log can't be pretty?" />
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span10">
			<h1 class="foundicon-idea">About Me</h1>
			<p class="lead">TLDR: My name's Zach, and I'm addicted to beautiful code.</p>
			<p>The long version: I'm a web developer living in wonderful Dayton, Ohio. I work for <a href="http://www.lastar.com">these guys</a>, and am obsessed with code. I started out as a web designer and developer, but quickly realized that the left side of my brain was in charge. Over the last 10 years I've gone from a know-nothing kid to a web professional. If you want to get in touch, try <a href="https://github.com/zmsaunders">Github</a>, <a href="https://plus.google.com/114276494256837250077">Google+</a>, or <a href="www.linkedin.com/in/zachsaunders/">LinkedIn</a>.</p>
		</div>
		<div class="span2 self-shot">
			<img src="http://gravatar.com/avatar/4a1aae93c55d5c3754e97a3fea6beaea?s=400" alt="Hello, Beautiful." class="img-circle" />
		</div>
	</div>
</div>
@stop