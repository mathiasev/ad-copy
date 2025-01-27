<form action="{{ route('copy-groups.store') }}" method="POST">
    @csrf
    <input type="hidden" id="campaign_id" name="campaign_id" value="{{ $campaign->id }}">
    <x-input-label for="name" :value="__('Name')" />
    <x-text-input id="name" name="name" class="block mt-1 w-full" type="text" required autofocus />
    <x-input-error :messages="$errors->get('name')" class="mt-2" />

    <x-input-label for="channel" :value="__('Channel')" />
    <x-input-select name="channel_id" id="channel_id" class="block mt-1 w-full" required>
        @foreach ($channels as $channel)
            <option value="{{ $channel->id }}">{{ $channel->name }}</option>
        @endforeach
    </x-input-select>
    <x-input-error :messages="$errors->get('channel')" class="mt-2" />

    <x-input-label for="description" :value="__('Description')" />
    <textarea name="description" id="description" rows="3" class="block mt-1 w-full" placeholder="Description"></textarea>
    <x-input-error :messages="$errors->get('description')" class="mt-2" />

    <div class="flex items-center justify-end mt-4">
        <x-primary-button class="ms-4">
            {{ __('Create') }}
        </x-primary-button>
    </div>
</form>
