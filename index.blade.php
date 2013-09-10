@extends(theme_view('layout'))

@section('title')
  {{ site_title() }}
@stop

@section('content')
	<section>
		@foreach ($posts as $post)
      @include(theme_view('inc.post'))
    @endforeach
    <hr/>
    {{ $posts->links() }}
	</section>
@stop
