<div class="flex flex-col gap-y-2">
    <div class="flex justify-between">
        {{ var_dump($copyVariation->data) }}
        <form class="mr-0 ml-auto flex items-center gap-x-2"
            action="{{ route('copy-variations.update', $copyVariation) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" id="copy_group_id" name="copy_group_id" value="{{ $copyGroup->id }}">
            <x-status-button-group :status="$copyVariation->status" class="mr-0 ml-auto" />
            <button type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Save</span>
            </button>
        </form>
    </div>
</div>
