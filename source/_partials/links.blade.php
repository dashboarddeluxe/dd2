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
                <div class="px-4 pb-4 pt-2 bg-blue-100 text-gray-700 text-base">
                        @if ($group->links)
                            <div class="grid grid-cols-1 xl:grid-cols-2">
                                @foreach ($group->links as $links)
                                    @foreach ($links as $link)
                                        @if ($loop->first)
                                            @if ($link[1] === '<heading>')
                                                <div class="font-bold xl:col-span-2 border-b-2 border-gray-400 pt-2">{{ $link[0] }}</div>
                                            @else
                                                <ul class="list-inside">
                                                @if ($link[1] === '<subheading>')
                                                    <span class="font-bold">{{ $link[0] }}</span>
                                                @else
                                                    <li class="li1"><a href="{!!  $link[1] !!}" target="_blank"
                                                        rel="noopener noreferrer" class="py-2">{{ $link[0] }}</a></li>
                                                @endif
                                            @endif
                                        @else
                                            @if ($link[1] === '')
                                            <li class="li2">
                                            {{--
                                            <span class="inline sm:hidden">-&nbsp;</span>
                                            <span class="hidden sm:inline">|&nbsp;</span>
                                            --}}
                                            {{ $link[0] }}</li>
                                            @else
                                            <li class="li2">
                                            {{--
                                            <span class="inline sm:hidden">-&nbsp;</span>
                                            <span class="hidden sm:inline">|&nbsp;</span>
                                            --}}
                                            <a href="{{ $link[1] }}"
                                                    target="_blank" rel="noopener noreferrer" class="py-2">{{ $link[0] }}</a></li>
                                            @endif
                                        @endif
                                @endforeach
                                </ul>
                        @endforeach
                </div>
    @endif
</div>
</div>
</div>
@endforeach
</div>
