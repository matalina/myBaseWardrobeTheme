<article class="post">
	<h1><a href="{{ wardrobe_url('post/'.$post->slug) }}">{{ $post->title }}</a></h1>
	<div class="date"><i class="icon-calendar"></i> {{ date("l, F j, Y", strtotime($post->publish_date)) }}</div>
	<div class="content">
		{{ $post->parsed_content }}
	</div>
	@include(theme_view('inc.tags'))
</article>