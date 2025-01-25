<x-app-layout>
    <x-slot name="header">
        <span class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight flex">
            <a href="{{ route('clients.show', [$campaign->client]) }}" title="{{ __('Go to client') }}">
                <span class="text-gray-400 dark:text-gray-500 mr-4">{{$campaign->client->name}}</span>
            </a>
            <h1>
                {{ $campaign->name }}
            </h1>
        </span>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
                <div
                    class="mx-auto grid max-w-2xl grid-cols-1 grid-rows-1 items-start gap-x-8 gap-y-8 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                    <div class="lg:col-start-3 lg:row-end-1">
                        <h2 class="sr-only">Summary</h2>
                        <div class="rounded-lg bg-gray-50/90 ring-1 shadow-xs ring-gray-900/5">
                            <dl class="flex flex-wrap">
                                <div class="mt-4 flex w-full flex-none gap-x-4 px-6">
                                    <dt class="flex-none">
                                        <span class="sr-only">Status</span>
                                        <svg class="h-6 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true" data-slot="icon">
                                            <path
                                                d="M5.25 12a.75.75 0 0 1 .75-.75h.01a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75H6a.75.75 0 0 1-.75-.75V12ZM6 13.25a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 0 0 .75-.75V14a.75.75 0 0 0-.75-.75H6ZM7.25 12a.75.75 0 0 1 .75-.75h.01a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75H8a.75.75 0 0 1-.75-.75V12ZM8 13.25a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 0 0 .75-.75V14a.75.75 0 0 0-.75-.75H8ZM9.25 10a.75.75 0 0 1 .75-.75h.01a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75H10a.75.75 0 0 1-.75-.75V10ZM10 11.25a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 0 0 .75-.75V12a.75.75 0 0 0-.75-.75H10ZM9.25 14a.75.75 0 0 1 .75-.75h.01a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75H10a.75.75 0 0 1-.75-.75V14ZM12 9.25a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 0 0 .75-.75V10a.75.75 0 0 0-.75-.75H12ZM11.25 12a.75.75 0 0 1 .75-.75h.01a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75H12a.75.75 0 0 1-.75-.75V12ZM12 13.25a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 0 0 .75-.75V14a.75.75 0 0 0-.75-.75H12ZM13.25 10a.75.75 0 0 1 .75-.75h.01a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75H14a.75.75 0 0 1-.75-.75V10ZM14 11.25a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 0 0 .75-.75V12a.75.75 0 0 0-.75-.75H14Z">
                                            </path>
                                            <path fill-rule="evenodd"
                                                d="M5.75 2a.75.75 0 0 1 .75.75V4h7V2.75a.75.75 0 0 1 1.5 0V4h.25A2.75 2.75 0 0 1 18 6.75v8.5A2.75 2.75 0 0 1 15.25 18H4.75A2.75 2.75 0 0 1 2 15.25v-8.5A2.75 2.75 0 0 1 4.75 4H5V2.75A.75.75 0 0 1 5.75 2Zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75Z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </dt>
                                    <dd class="text-sm/6 text-gray-500">
                                        {{ucfirst($campaign->status)}}
                                    </dd>
                                </div>
                                <div class="mt-4 flex w-full flex-none gap-x-4 px-6">
                                    <dt class="flex">
                                        <svg class="h-6 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true" data-slot="icon">
                                            <path fill-rule="evenodd"
                                                d="M2.5 4A1.5 1.5 0 0 0 1 5.5V6h18v-.5A1.5 1.5 0 0 0 17.5 4h-15ZM19 8.5H1v6A1.5 1.5 0 0 0 2.5 16h15a1.5 1.5 0 0 0 1.5-1.5v-6ZM3 13.25a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 0 1.5h-1.5a.75.75 0 0 1-.75-.75Zm4.75-.75a.75.75 0 0 0 0 1.5h3.5a.75.75 0 0 0 0-1.5h-3.5Z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </dt>
                                    <dd class="text-sm/6 text-gray-500">
                                        {{__('Created at')}} <time
                                            datetime="{{$campaign->created_at}}">{{$campaign->created_at->format('d M Y
                                            @ H:i')}}</time>
                                    </dd>
                                </div>
                                <div class="mt-4 flex w-full flex-none gap-x-4 px-6">
                                    <dt class="flex">
                                        <svg class="h-6 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true" data-slot="icon">
                                            <path fill-rule="evenodd"
                                                d="M2.5 4A1.5 1.5 0 0 0 1 5.5V6h18v-.5A1.5 1.5 0 0 0 17.5 4h-15ZM19 8.5H1v6A1.5 1.5 0 0 0 2.5 16h15a1.5 1.5 0 0 0 1.5-1.5v-6ZM3 13.25a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 0 1.5h-1.5a.75.75 0 0 1-.75-.75Zm4.75-.75a.75.75 0 0 0 0 1.5h3.5a.75.75 0 0 0 0-1.5h-3.5Z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </dt>
                                    <dd class="text-sm/6 text-gray-500">
                                        {{__('Last updated')}} <time
                                            datetime="{{$campaign->updated_at}}">{{$campaign->updated_at->format('d M Y
                                            @ H:i')}}</time>
                                    </dd>
                                </div>
                                <div class="flex-auto py-6 pl-6">
                                    <dt class="text-sm/6 font-semibold text-gray-400">Description</dt>
                                    <dd class="mt-1 text-base font-normal text-gray-900">
                                        {{$campaign->description}}
                                    </dd>
                                </div>
                            </dl>
                            <!-- <div class="mt-6 border-t border-gray-900/5 px-6 py-6">
                                <a href="#" class="text-sm/6 font-semibold text-gray-900">Download receipt <span
                                        aria-hidden="true">→</span></a>
                            </div> -->
                        </div>
                    </div>

                    <div class="-mx-4 px-4 py-8  sm:mx-0  lg:col-span-2 lg:row-span-2 lg:row-end-2">
                        <div class="copy-group-form" x-data="{ open: false }">
                            <x-secondary-button class="" @click="open = ! open">
                                {{ __('Create a new copy group') }}
                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </x-secondary-button>
                            <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95" class=""
                                @click.away="open = false">
                                <div class="p-2 w-full" role="none">
                                    <x-copy-group.create-form :channels="$channels" :campaign="$campaign" />
                                </div>
                            </div>
                        </div>

                        <!-- Copy Groups -->
                        @if($campaign->copyGroups->count())
                        <div class="mt-4">
                            <x-copy-group.copy-group-wrapper>
                                @foreach($campaign->copyGroups as $copyGroup)
                                <x-copy-group.copy-group-item :copyGroup="$copyGroup" :campaign="$campaign" />
                                @endforeach
                            </x-copy-group.copy-group-wrapper>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>