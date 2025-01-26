<form action="{{ route('copy-variations.store') }}" method="POST">
  @csrf
  <input type="hidden" id="copy_group_id" name="copy_group_id" value="{{$copyGroup->id}}">

  <div>
    <x-input-label for="data" :value="__('Data')" />
    <x-text-area name="data" id="data" class="block mt-1 w-full" type="text" required />
    <x-input-error :messages="$errors->get('data')" class="mt-2" />

  </div>

  <div class="flex items-center justify-end mt-4">
    <x-primary-button class="ms-4">
      {{ __('Create') }}
    </x-primary-button>
  </div>
</form>