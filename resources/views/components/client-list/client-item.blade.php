<li id="{{$client->id}}" {{$attributes->merge(['class' => 'col-span-1 flex rounded-md shadow-sm'])}}>
    @if($client->logo)
    <img src="{{$client->logo}}" alt="{{$client->name}}" class="w-16 h-16 object-contain bg-gray-300 rounded-l-md">
    @else
    <div
        class="flex w-16 shrink-0 items-center justify-center rounded-l-md bg-green-500 text-sm font-medium text-white">

        @php
        $name = explode(' ', $client->name);
        if(count($name) > 1) {
        $initials = strtoupper($name[0][0]) . strtoupper($name[1][0]);
        } else {
        $initials = strtoupper($name[0][0]);
        }
        @endphp

        {{$initials}}

    </div>

    @endif
    <div
        class="flex flex-1 items-center justify-between w-full rounded-r-md border-b border-r border-t border-gray-200 bg-white">
        <div class="  px-4 py-2 text-sm">
            <a href="{{ route('clients.show', $client) }}" class="font-medium  text-gray-900 hover:text-gray-600">
                {{ $client->name }}
            </a>
            <p class="text-gray-500">

                {{ $client->campaigns->count() }} {{__(' campaigns')}}
            </p>
        </div>
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <button
                    class="inline-flex items-center  py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400  hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                    <div class="ms-1">
                        <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                            <path
                                d="M10 3a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM10 8.5a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM11.5 15.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                        </svg>
                    </div>
                </button>
            </x-slot>

            <x-slot name="content">
                <x-secondary-button class="w-full text-center flex gap-2 mx-auto justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                    </svg>

                    <span>{{ __('Archive') }}</span>

                </x-secondary-button>
                <form action="{{ route('clients.destroy', $client) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <x-danger-button class="w-full text-center mx-auto justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                        </svg>
                        <span>{{ __('Delete') }}</span>
                    </x-danger-button>
                </form>
            </x-slot>
        </x-dropdown>

    </div>
</li>