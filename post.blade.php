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

			<div class="social-icons">
				<span class='st_facebook' displayText='Facebook'></span>
				<span class='st_twitter' displayText='Tweet'></span>
				<span class='st_linkedin' displayText='LinkedIn'></span>
				<span class='st_pinterest' displayText='Pinterest'></span>
				<span class='st_googleplus' displayText='Google +'></span>
				<span class='st_email' displayText='Email'></span>
				<span class='st_digg' displayText='Digg'></span>
				<span class='st_reddit' displayText='Reddit'></span>
				<span class='st_delicious' displayText='Delicious'></span>
				<span class='st_sharethis' displayText='ShareThis'></span>
			</div>

			{{ Disqus::comments() }}
		</article>
	</section>
@stop

