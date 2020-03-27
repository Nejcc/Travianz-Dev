<!DOCTYPE html>
<html>
<head>
    <title>{{ config('server.name', 'Travianz') }} - @yield('title')</title>
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="imagetoolbar" content="no" />
    <meta http-equiv="content-type" content="text/html" charset="UTF-8" />
    <link href="{{ asset('css/compact.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/lang.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/mt-core.js') }}"></script>
    <script src="{{ asset('js/mt-more.js') }}"></script>
    <script src="{{ asset('js/unx.js') }}"></script>
    <script src="{{ asset('js/new.js') }}"></script>
    <script>
        window.addEvent('domready', start);
    </script>
    @yield('css')
</head>
<body class="v35 ie ie8">
<div class="wrapper">
    <img class="c1" src="{{ asset('images/x.gif') }}" id="msfilter"/>
    <div id="dynamic_header"></div>
    @include('components.header')
    <div id="mid">
        @include('components.menu')
        @yield('content')
        <br/><br/><br/><br/>
        <div id="side_info">
            @if (Auth::check())
                @include('village.list')
                {{-- quest --}}
            @endif

            @if (config('server.newsboxes.1'))
                @include('newsboxes.newsbox1')
            @endif

            @if (config('server.newsboxes.2'))
                @include('newsboxes.newsbox2')
            @endif

            @if (config('server.newsboxes.3'))
                @include('newsboxes.newsbox3')
            @endif
        </div>
        <div class="clear"></div>
        @game_footer
    </div>
    <div class="clear"></div>
    @if (Auth::check())
        @include('village.resources')
    @endif
    @include('layout.time')
</div>
<div id="ce"></div>
@yield('modal')
@yield('js')
</body>
</html>
