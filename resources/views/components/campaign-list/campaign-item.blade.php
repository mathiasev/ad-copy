<li class="flex items-center justify-between gap-x-6 py-5">
    <div class="min-w-0">
        <div class="flex items-start gap-x-3">
            <a href="{{route('campaigns.show', ['client' => $client, 'campaign' => $campaign])}}"
                class="hover:underline">

                <p class="text-base font-semibold text-gray-900 dark:text-gray-300">{{$campaign->name}}</p>
            </a>
            <x-status-pill :status="$campaign->status" />
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
        <a href="{{route('campaigns.show',['client'=>$client, 'campaign'=>$campaign]) }}"
            class="hidden rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:block">View
            <span class="sr-only">, {{$campaign->name}} campaign</span></a>
        <div class="relative flex-none">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button
                        class="inline-flex items-center  py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400  hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                        <div class="ms-1">
                            <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                data-slot="icon">
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
                    <form action="{{ route('campaigns.destroy', $campaign) }}" method="POST">
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
    </div>
</li>