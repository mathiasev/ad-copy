<li {{$attributes->merge(['class' => 'col-span-1 flex rounded-md shadow-sm'])}}>
    @if(!isset($image))
    <div
        class="flex w-16 shrink-0 items-center justify-center rounded-l-md bg-green-500 text-sm font-medium text-white">
        RC
    </div>
    @else
    {{$image}}
    @endif
    <div
        class="flex flex-1 items-center justify-between truncate rounded-r-md border-b border-r border-t border-gray-200 bg-white">
        <div class="flex-1 truncate px-4 py-2 text-sm">
            <a href="#" class="font-medium text-gray-900 hover:text-gray-600">{{$slot}}
            </a>
            <p class="text-gray-500">8 Members</p>
        </div>
        <div class="shrink-0 pr-2">
            <button type="button"
                class="inline-flex size-8 items-center justify-center rounded-full bg-transparent bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                <span class="sr-only">Open options</span>
                <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                    <path
                        d="M10 3a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM10 8.5a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM11.5 15.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                </svg>
            </button>
        </div>
    </div>
</li>