<nav class="hidden lg:flex items-center justify-end text-lg">
{{--
    <a title="{{ $page->siteName }}" href="/"
        class="ml-6 text-gray-500 hover:text-blue-400 {{ $page->isActive('/') ? 'active text-blue-400' : '' }}">
        Home
    </a>
--}}

{{--
    <a title="{{ $page->siteName }} About" href="/about"
        class="ml-6 text-gray-500 hover:text-blue-400 {{ $page->isActive('/about') ? 'active text-blue-400' : '' }}">
        About
    </a>

    <a title="{{ $page->siteName }} Blog" href="/blog"
        class="ml-6 text-gray-500 hover:text-blue-400 {{ $page->isActive('/blog') ? 'active text-blue-400' : '' }}">
        Blog
    </a>
--}}
@foreach ($groups as $group)

    <a href="#{{ $group->getFilename() }}"
        class="ml-4 text-gray-100 font-semibold text-base hover:underline">
        @if ($group->short_title)
        {{ $group->short_title }}
        @else
        {{ $group->title }}
        @endif



    </a>

@endforeach

{{--
    <a title="{{ $page->siteName }} Contact" href="/contact"
        class="ml-6 text-gray-500 hover:text-blue-400 {{ $page->isActive('/contact') ? 'active text-blue-400' : '' }}">
        Contact
    </a>
--}}
</nav>
