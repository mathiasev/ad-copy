{{$copyGroup->channel->settings}}

<form action="{{ route('copy-variations.store') }}" method="POST">
    @csrf
    <input type="hidden" id="campaign_id" name="campaign_id" value="{{$campaign->id}}">
    <x-input-label for="name" :value="__('Name')" />
    <x-text-input id="name" name="name" class="block mt-1 w-full" type="text" required autofocus />
    <x-input-error :messages="$errors->get('name')" class="mt-2" />

    <div>
        <x-input-label for="data" :value="__('Data')" />
        <div class="editor{{$copyGroup->id}} json-editor" data-schema='
            {
                "items": {
                  "properties": {
                      {{$copyGroup->channel->settings}},
                    "Element Name": {
                      "title": "",
                      "type": "string"
                    }
                  },
                  "type": "object"
                },
                "title": "Elements",
                "type": "array"
              }
            
            
            '
            data-for="data" id="{{$copyGroup->id}}"></div>
        <input type="hidden" name="data" id="data" />

    </div>

    <div class="flex items-center justify-end mt-4">
        <x-primary-button class="ms-4">
            {{ __('Create') }}
        </x-primary-button>
    </div>
</form>