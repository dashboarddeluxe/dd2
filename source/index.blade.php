@extends('_layouts.master')

@section('body')
{{--
<h2 class="mb-8 text-center text-5xl">Blog</h2>
--}}
<div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-1 gap-4 mb-4">
@foreach ($groups as $group)
  <div class="overflow-hidden shadow-lg">
  <div class="shadow-outline h-full">
  {{--
  <img class="w-full" src="/img/post-cover-image-2.png" alt="Sunset in the mountains">
  --}}
  {{--
  @if ($group->cover_image)
  <img src="{{ $group->cover_image }}" alt="{{ $group->title }} cover image" class="h-64 w-full object-cover object-top">
  @else
  <img src="/img/blog.jpg" alt="{{ $group->title }} cover image" class="h-64 w-full object-cover object-top">
  @endif
  --}}
<span class="bookmark" id="{{ $group->getFilename() }}"></span>
  @if ($group->title)
    <div class="px-4 py-2 bg-gray-800">
    <h2 class="text-xl"><a href="{{ $group->getUrl() }}" title="Read {{ $group->title }}" class="text-white font-bold">{{ $group->title }}</a></h2>
    </div>
    @endif
    <div class="px-4 py-4 bg-blue-100">
    <p class="text-gray-700 text-base">
      {!! $group !!}
    </p>
  </div>
  </div>
</div>
    @endforeach

{{--
@foreach ($posts->where('featured', true)->take(6) as $group)
  <div class="max-w-sm rounded-lg overflow-hidden shadow-lg">
  <div class="shadow-outline h-full">

  <img class="w-full" src="/img/post-cover-image-2.png" alt="Sunset in the mountains">

  @if ($group->cover_image)
  <img src="{{ $group->cover_image }}" alt="{{ $group->title }} cover image" class="h-64 w-full object-cover object-top">
  @else
  <img src="/img/blog.jpg" alt="{{ $group->title }} cover image" class="h-64 w-full object-cover object-top">
  @endif
  <div class="px-6 py-4 bg-blue-100">
    <h2 class="font-bold text-2xl mb-2"><a href="{{ $group->getUrl() }}" title="Read {{ $group->title }}" class="text-gray-900 font-extrabold">{{ $group->title }}</a></h2>
    <p class="text-gray-700 text-base mb-2">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
    </p>
  </div>
  </div>
</div>
    @endforeach
--}}
</div>

{{--
    @foreach ($posts->where('featured', true) as $group)
        <div class="w-full mb-6">
            @if ($group->cover_image)
                <img src="{{ $group->cover_image }}" alt="{{ $group->title }} cover image" class="mb-6">
            @endif

            <p class="text-gray-700 font-medium my-2">
                {{ $group->getDate()->format('F j, Y') }}
            </p>

            <h2 class="text-3xl mt-0">
                <a href="{{ $group->getUrl() }}" title="Read {{ $group->title }}" class="text-gray-900 font-extrabold">
                    {{ $group->title }}
                </a>
            </h2>

            <p class="mt-0 mb-4">{!! $group->getExcerpt() !!}</p>

            <a href="{{ $group->getUrl() }}" title="Read - {{ $group->title }}" class="uppercase tracking-wide mb-4">
                Read
            </a>
        </div>

        @if (! $loop->last)
            <hr class="border-b my-6">
        @endif
    @endforeach
--}}

    {{--
    @include('_components.newsletter-signup')
    --}}

{{--
    @foreach ($posts->where('featured', false)->take(6)->chunk(2) as $row)
        <div class="flex flex-col md:flex-row md:-mx-6">
            @foreach ($row as $post)
                <div class="w-full md:w-1/2 md:mx-6">
                    @include('_components.post-preview-inline')
                </div>

                @if (! $loop->last)
                    <hr class="block md:hidden w-full border-b mt-2 mb-6">
                @endif
            @endforeach
        </div>

        @if (! $loop->last)
            <hr class="w-full border-b mt-2 mb-6">
        @endif
    @endforeach
--}}

@stop
