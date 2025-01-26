<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit') }} {{$channel->name}} channel
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800  shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-items-end w-full">
                    <form method="POST" class="max-w-xl w-full" action="{{ route('channels.update', $channel) }}">
                        @csrf
                        @method('PUT')

                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name') ?? $channel->name" required autofocus />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Description -->
                        <div class="mt-4">
                            <x-input-label for="description" :value="__('Description')" />
                            <x-text-area name="description" id="description" class="block mt-1 w-full" type="text"
                                :value="old('description') ?? $channel->description" />
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <div class="">
                            <x-input-label for="settings" :value="__('Settings')" />
                            <div class="json-editor" id="channel-settings" data-for="settings" data-schema='{
                                "items": {
                                  "properties": {
                                    "Element Name": {
                                      "title": "",
                                      "type": "string"
                                    }
                                  },
                                  "type": "object"
                                },
                                "title": "Elements",
                                "type": "array"
                              }'></div>
                            <input type="hidden" name="settings" id="settings"
                                x-model="window['editorchannel-settings'].getValue()" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Update') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>