<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800  shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-items-end w-full">
                    <form method="POST" action="{{ route('campaigns.store') }}">
                        @csrf

                        <!-- Client -->
                        <div>
                            @if(!$client)
                            <x-input-label for="client_id" :value="__('Client ID')" />
                            @endif
                            <x-text-input name="client_id" id="client_id" class="block mt-1 w-full"
                                type="{{$client? 'hidden' : 'text'}}" :value="old('client_id') ?? $client" required />
                            <x-input-error :messages="$errors->get('client_id')" class="mt-2" />
                        </div>

                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" name="name" class="block mt-1 w-full" type="text"
                                :value="old('name')" required autofocus />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Description -->
                        <div class="mt-4">
                            <x-input-label for="description" :value="__('Description')" />
                            <x-text-area name="description" id="description" class="block mt-1 w-full" type="text"
                                :value="old('description')" />
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <!-- Status -->
                        <div class="mt-4">
                            <x-input-label for="status" :value="__('Status')" />

                            <select id="status" name="status" class="block mt-1 w-full bg-gray-700" type="text"
                                :value="old('status')" required>
                                <option class="bg-gray-700" value="draft">Draft</option>
                                <option class="bg-gray-700" value="approved">Approved</option>
                                <option class="bg-gray-700" value="scheduled">Scheduled</option>
                                <option class="bg-gray-700" value="in-market">In-Market</option>
                                <option class="bg-gray-700" value="complete">Complete</option>
                                <option class="bg-gray-700" value="rejected">Rejected</option>
                            </select>

                            <x-input-error :messages="$errors->get('status')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Create') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>