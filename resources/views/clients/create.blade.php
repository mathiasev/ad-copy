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
                    <form method="POST" action="{{ route('clients.store') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name')" required autofocus />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Logo -->
                        <div class="mt-4">
                            <x-input-label for="logo" :value="__('Logo')" />
                            <x-text-input id="logo" class="block mt-1 w-full" type="url" name="logo"
                                :value="old('logo')" />
                            <x-input-error :messages="$errors->get('logo')" class="mt-2" />
                        </div>

                        <!-- Primary Colour -->
                        <div class="mt-4">
                            <x-input-label for="primary_color" :value="__('Primary Color')" />

                            <x-text-input id="primary_color" class="block mt-1 w-full" type="color"
                                name="primary_color" />

                            <x-input-error :messages="$errors->get('primary_color')" class="mt-2" />
                        </div>

                        <!-- Secondary Colour -->
                        <div class="mt-4">
                            <x-input-label for="secondary_color" :value="__('Secondary Color')" />

                            <x-text-input id="secondary_color" class="block mt-1 w-full" type="color"
                                name="secondary_color" />

                            <x-input-error :messages="$errors->get('secondary_color')" class="mt-2" />
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