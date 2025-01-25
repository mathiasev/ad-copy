<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Settings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-items-end w-full">
                    <x-primary-button onclick="history.back()">
                        {{ __("Go back") }}
                    </x-primary-button>
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div>
                        <h2 class="text-base/7 font-semibold text-gray-900 dark:text-gray-200">
                            {{__('Channels')}}
                        </h2>
                        <p class="mt-1 text-sm/6 text-gray-400">
                            {{__('Define the channels that you want to use for your campaigns.')}}
                        </p>

                        <ul role="list"
                            class="mt-6 divide-y divide-gray-100 dark:divide-gray-300 border-t border-gray-400 text-sm/6">
                            @foreach($channels as $channel)
                            <li class="flex justify-between gap-x-6 py-6">
                                <div class="font-medium text-gray-900 dark:text-gray-300">{{$channel->name}}</div>
                                <button type="button"
                                    class="font-semibold text-indigo-600 hover:text-indigo-500">Update</button>
                            </li>
                            @endforeach
                        </ul>

                        <div class=" border-t border-gray-400 pt-6" x-data="{ open: false }">
                            <button type="button" @click="open = ! open"
                                class="text-sm/6 font-semibold text-indigo-500 hover:text-indigo-500"><span
                                    aria-hidden="true">+</span> {{__('Add a new channel')}}
                            </button>
                            <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95" @click.away="open = false">
                                <div class="p-2 w-full" role="none">
                                    <x-channels.create-channel />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>