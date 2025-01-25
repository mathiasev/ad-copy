<form action="{{ route('copy-groups.store') }}" method="POST">
    @csrf
    <x-input-label for="name" :value="__('Name')" />
    <x-text-input id="name" name="name" class="block mt-1 w-full" type="text" required autofocus />
    <x-input-error :messages="$errors->get('name')" class="mt-2" />

    <x-input-label for="channel" :value="__('Channel')" />
    <select name="channel" id="channel" class="block mt-1 w-full bg-gray-700" type="text" required>
        @foreach($channels as $channel)
        <option value="{{$channel->slug}}">{{$channel->name}}</option>
        @endforeach
    </select>
    <x-input-error :messages="$errors->get('channel')" class="mt-2" />

    <div class="flex items-center justify-end mt-4">
        <x-primary-button class="ms-4">
            {{ __('Create') }}
        </x-primary-button>
    </div>
</form>