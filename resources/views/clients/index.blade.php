<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-items-end w-full">
                    <x-primary-link href="{{ route('clients.create') }}">
                        {{ __("Create a new client") }}
                    </x-primary-link>
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Clients") }}

                    <div>
                        <h2 class="text-sm font-medium text-gray-500">{{ __("Your clients") }}</h2>
                        <x-client-list.client-wrapper>
                            @foreach($clients as $client)
                            <x-client-list.client-item :client="$client" />
                            @endforeach
                        </x-client-list.client-wrapper>

                    </div>




                </div>
            </div>
        </div>
    </div>
</x-app-layout>