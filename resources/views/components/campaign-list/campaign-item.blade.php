<li class="flex items-center justify-between gap-x-6 py-5">
    <div class="min-w-0">
        <div class="flex items-start gap-x-3">
            <a href="{{route('campaigns.show', [$client, $campaign])}}" class="hover:underline">

                <p class="text-base font-semibold text-gray-900 dark:text-gray-300">{{$campaign->name}}</p>
            </a>
            <p
                class="mt-0.5 whitespace-nowrap rounded-md bg-yellow-50 px-1.5 py-0.5 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">
                {{$campaign->status}}</p>
        </div>
        <div class="mt-1 flex items-center gap-x-2 text-xs/5 text-gray-500">
            <p class="whitespace-nowrap">Created <time
                    datetime="{{$campaign->created_at}}">{{$campaign->created_at->format('d M Y @ H:i')}}</time></p>
            <svg viewBox="0 0 2 2" class="size-0.5 fill-current">
                <circle cx="1" cy="1" r="1" />
            </svg>
            <p class="truncate">Created by {{$campaign->createdBy->name}}</p>
        </div>
    </div>
    <div class="flex flex-none items-center gap-x-4">
        <a href="{{route('campaigns.show',[$client, $campaign]) }}"
            class="hidden rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:block">View
            <span class="sr-only">, {{$campaign->name}} campaign</span></a>
        <div class="relative flex-none">
            <button type="button" class="-m-2.5 block p-2.5 text-gray-500 hover:text-gray-900"
                id="options-menu-4-button" aria-expanded="false" aria-haspopup="true">
                <span class="sr-only">Open options</span>
                <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                    <path
                        d="M10 3a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM10 8.5a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM11.5 15.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                </svg>
            </button>

        </div>
    </div>
</li>