<x-app-layout>
    <x-slot name="header">
        <span class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight flex">
            <a href="{{ route('clients.show', [$campaign->client]) }}" title="{{ __('Go to client') }}">
                <span class="text-gray-400 dark:text-gray-500 mr-4">{{ $campaign->client->name }}</span>
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
                    <x-campaign.campaign-info :campaign="$campaign" />

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
                                x-transition:leave-end="transform opacity-0 scale-95" class="">
                                <div class="p-2 w-full" role="none">
                                    <x-copy-group.create-form :channels="$channels" :campaign="$campaign" />
                                </div>
                            </div>
                        </div>

                        <!-- Copy Groups -->
                        @if ($campaign->copyGroups->count())

                            <div class="mt-4">
                                <x-copy-group.copy-group-wrapper>
                                    @foreach ($campaign->copyGroups as $copyGroup)
                                        <x-copy-group.copy-group-item :copyGroup="$copyGroup" :campaign="$campaign" />
                                    @endforeach
                                </x-copy-group.copy-group-wrapper>
                            </div>
                        @endif
                    </div>

                    @if ($campaign->activity()->count())
                        <div class="row-end-2">
                            Activity
                            <div class="mt-4">
                                <x-activity.activity-wrapper :activity="$campaign->activity()" />
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
