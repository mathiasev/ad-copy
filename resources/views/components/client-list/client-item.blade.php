<li {{$attributes->merge(['class' => 'col-span-1 flex rounded-md shadow-sm'])}}>
    @if($client->logo)
    <img src="{{$client->logo}}" alt="{{$client->name}}" class="w-16 h-16 object-contain bg-gray-300 rounded-l-md">
    @else
    <div
        class="flex w-16 shrink-0 items-center justify-center rounded-l-md bg-green-500 text-sm font-medium text-white">

        @php
        $name = explode(' ', $client->name);
        $initials = strtoupper($name[0][0]) . strtoupper($name[1][0]);
        @endphp

        {{$initials}}

    </div>

    @endif
    <div
        class="flex flex-1 items-center justify-between truncate rounded-r-md border-b border-r border-t border-gray-200 bg-white">
        <div class="flex-1 truncate px-4 py-2 text-sm">
            <a href="{{ route('clients.show', $client) }}" class="font-medium text-gray-900 hover:text-gray-600">
                {{ $client->name }}
            </a>
            <p class="text-gray-500">

                {{ $client->campaigns->count() }} {{__(' campaigns')}}
            </p>
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