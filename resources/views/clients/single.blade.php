<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $client->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-primary-link href="{{ route('campaigns.create', ['client' => $client]) }}">
                {{ __("Create a new campaign") }}
            </x-primary-link>

            <x-campaign-list.campaign-wrapper>
                @foreach($client->campaigns as $campaign)
                <x-campaign-list.campaign-item :campaign="$campaign" :client="$client" />
                @endforeach
            </x-campaign-list.campaign-wrapper>

        </div>
    </div>
</x-app-layout>