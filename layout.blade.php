<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('title')</title>
    <link href="{{ asset(theme_path('css/style.css')) }}" rel="stylesheet" media="screen">
    <link href="{{ asset(theme_path('css/print.css')) }}" rel="stylesheet" media="print">
    <!--[if lt IE 9]>
        <link href="{{ asset(theme_path('css/ie.css')) }}" rel="stylesheet" media="screen">
    <![endif]-->
</head>
<body>
    <header>
        <h1><a href="{{ wardrobe_url('/') }}">{{ site_title() }}</a></h1>
    </header>
    <nav>
        <ul>
            <li><i class="icon-rss"></i> <a href="{{ wardrobe_url('rss') }}">RSS</a></li>
        </ul>
    </nav>
    <main class="content">
        @yield('content')
    </main>
    <footer>
        <p>Powered by <a href="http://wardrobecms.com">Wardrobe</a></p>
    </footer>
</body>
</html>
