<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->meta_description ?? $page->siteDescription }}">
        <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->sitename }}"/>
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->siteDescription }}" />
        <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->sitename }}</title>
        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">
        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->sitename }} Atom Feed">
        @stack('meta')
        <!--begin::Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
            WebFont.load({
                google: {"families": ["Poppins:300,400,500,600,700"]},
                active: function () {
                    sessionStorage.fonts = true;
                }
            });
        </script>
        <!--end::Fonts -->
        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body>
        <div class="theme-light bg-primary text-darker font-body">
            <!--Nav-->
            @include('_layouts.partials.navigation')
            <!-- // Nav !-->

            <!-- Content !-->
            <div class="pt-16">
                @stack('header')

                <div>
                    @yield('body')
                </div>
            </div>
            <!-- // Content !-->

            <!--Footer-->
            @include('_layouts.partials.footer')
            <!--// Footer-->
        </div>
        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
        @stack('scripts')
    </body>
</html>
