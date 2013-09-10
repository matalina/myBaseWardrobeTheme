@extends(theme_view('layout'))

@section('title')
  {{ $post->title }}
@stop

@section('content')
	<section>
		<article class="post">
			<h1>{{ $post->title }}</h1>
			<div class="date"><i class="icon-calendar"></i>  {{ date("l, F j, Y", strtotime($post->publish_date)) }}</div>
			<div class="content">
				{{ $post->parsed_content }}
			</div>
			@include(theme_view('inc.tags'))
		</article>
	</section>
@stop

