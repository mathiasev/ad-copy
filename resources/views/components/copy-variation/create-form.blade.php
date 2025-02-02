<form action="{{ route('copy-variations.store') }}" method="POST" x-data="{
    format: 'text',
    data: {}
}">
    @csrf
    <input type="hidden" id="copy_group_id" name="copy_group_id" value="{{ $copyGroup->id }}">

    <x-input-select name="type" id="status" x-model="format" required>
        <option value="text" selected>Text</option>
        <option value="image">Image</option>
        <option value="video">Video</option>
    </x-input-select>

    <div x-show="format == 'text'">
        <x-input-label for="text" :value="__('Text')" />
        <x-text-input name="text" id="text" class="block mt-1 w-full" type="text" x.model="data.text" />
    </div>
    <div x-show="format == 'image'">
        <x-input-label for="image" :value="__('Image')" />
        <x-text-input name="image" id="image" class="block mt-1 w-full" type="url" x-model="data.image" />
    </div>
    <div x-show="format == 'video'">
        <x-input-label for="video" :value="__('Video')" />
        <x-text-input name="video" id="video" class="block mt-1 w-full" type="url" x-model="data.video" />
    </div>
    <x-input-error :messages="$errors->get('data')" class="mt-2" />

    <input type="text" name="data" x-bind:value="JSON.stringify(data)" />
    <div class="flex items-center justify-end mt-4">
        <x-primary-button class="ms-4">
            {{ __('Create') }}
        </x-primary-button>
    </div>
</form>
