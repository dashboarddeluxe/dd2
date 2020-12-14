<nav id="js-nav-menu" class="nav-menu hidden lg:hidden">
    <ul class="my-0">
{{--
        <li class="px-6 md:px-16">
            <a
                title="{{ $page->siteName }}"
                href="/"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('') ? 'active text-blue' : '' }}"
            >Home</a>
        </li>
--}}

@foreach ($groups as $group)
        <li class="px-4 md:px-16">
            <a
                href="#{{ $group->getFilename() }}"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/about') ? 'active text-blue' : '' }}"
                onclick="navMenu.toggle()"
            >{{ $group->title }}</a>
        </li>
@endforeach

{{--
        <li class="px-6 md:px-16">
            <a
                title="{{ $page->siteName }} About"
                href="/about"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/about') ? 'active text-blue' : '' }}"
            >About</a>
        </li>

        <li class="px-6 md:px-16">
            <a
                title="{{ $page->siteName }} Blog"
                href="/blog"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/blog') ? 'active text-blue' : '' }}"
            >Blog</a>
        </li>
--}}

{{--
        <li class="px-6 md:px-16">
            <a
                title="{{ $page->siteName }} Contact"
                href="/contact"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/contact') ? 'active text-blue' : '' }}"
            >Contact</a>
        </li>
--}}
    </ul>
</nav>
