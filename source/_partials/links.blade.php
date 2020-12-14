<div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-1 gap-4 mb-4">
    @foreach ($groups as $group)
    <div class="overflow-hidden shadow-lg">
        <div class="shadow-outline h-full">
            <span class="bookmark" id="{{ $group->getFilename() }}"></span>
            @if ($group->title)
            <div class="px-4 py-2 bg-gray-800">
                <h2 class="text-xl text-white">
                    {{ $group->title }}

                </h2>
            </div>
            @endif
            <div class="px-4 pb-4 pt-2 bg-blue-100">
                <p class="text-gray-700 text-base">
                    @if ($group->links)
                    <div class="grid grid-cols-1 xl:grid-cols-2">
                        @foreach ($group->links as $links)
                        <div
                            @foreach ($links as $link)
                            @if ($loop->first)
                                @if ($link[1] === "heading")
                                    class="xl:col-span-2 border-b-2 border-gray-400 pt-2" >
                                    <div class="font-bold">{{$link[0]}}</div>
                                @else
                                    >
                                    <a href="{!!$link[1]!!}" target="_blank" rel="noopener noreferrer">{{$link[0]}}</a>
                                @endif
                            @else
                            <div class="sm:inline-block"><span class="inline sm:hidden">-&nbsp;</span><span class="hidden sm:inline">|&nbsp;</span><a href="{{$link[1]}}" target="_blank"
                                    rel="noopener noreferrer">{{$link[0]}}</a></div>
                            @endif
                            @endforeach
                        </div>
                        @endforeach
                    </div>
                    @endif

                </p>
            </div>
        </div>
    </div>
    @endforeach
</div>
