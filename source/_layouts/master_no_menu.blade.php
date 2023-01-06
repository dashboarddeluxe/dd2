<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

        <meta property="og:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="{{ $page->type ?? 'website' }}" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}" />

        <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">
        {{--
        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">
        --}}
        @if ($page->production)
        {{--
            <!-- Insert analytics code here -->
        --}}
        @endif
        {{--
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
        --}}
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>

    <body class="flex flex-col justify-between min-h-screen bg-indigo-100 text-gray-800 leading-normal font-sans antialiased">
        <div class="fixed inset-x-0 top-0">
        <header class="flex items-center shadow bg-black py-2 z-50 h-16" role="banner">
            <div class="container flex items-center max-w-8xl mx-auto px-6 md:px-16">
                <div class="flex items-center">
                    <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                        {{--
                        <img class="h-8 md:h-10 mr-2" src="/img/logo.png" alt="{{ $page->siteName }} logo" />
                        --}}
                        <h1 class="text-lg md:text-2xl font-bold text-white my-0">{{ $page->siteName }}</h1>
                    </a>
                </div>
            </div>

        </header>
        </div>

{{--
@if ($page->getPath() === '')
    @include('_components.hero')
    <main role="main" class="flex-auto w-full container max-w-8xl mx-auto px-6 pb-8 pt-8 md:px-16">
@else
--}}
    <main role="main" class="flex-auto w-full container max-w-8xl mx-auto px-6 pb-8 pt-20 md:px-16">
{{--
@endif
--}}
            @yield('body')
        </main>

        <footer class="bg-gray-900 text-gray-500 text-center text-md py-8" role="contentinfo">
            <ul class="flex flex-col md:flex-row justify-center list-none">
                <li class="md:mr-2">
                {{--
                <div class="mb-2"><img class="h-8 mx-auto" src="/img/logo.png" alt="{{ $page->siteName }} logo" /></div>
                --}}
                    <div>&copy; Dashboard Deluxe, {{ date('Y') }}</div>
                </li>
                {{--
                <li class="md:mr-2">
                    &copy; <a href="https://jorap.com" title="JoRap.com" class="text-blue-400 hover:text-blue-200">JoRap.com</a> {{ date('Y') }}.
                </li>
                <li>
                    Built with <a href="http://jigsaw.tighten.co" title="Jigsaw by Tighten"  class="text-blue-400 hover:text-blue-200">Jigsaw</a>
                    and <a href="https://tailwindcss.com" title="Tailwind CSS, a utility-first CSS framework" class="text-blue-400 hover:text-blue-200">Tailwind CSS</a>.
                </li>
                --}}
            </ul>
        </footer>
    </body>
</html>
