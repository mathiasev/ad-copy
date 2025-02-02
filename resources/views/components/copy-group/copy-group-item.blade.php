<div class="py-6 sm:flex">
    <dt class="font-medium text-gray-900 flex flex-col dark:text-gray-300 sm:w-64 sm:flex-none sm:pr-6">
        <x-status-pill :status="$copyGroup->status" />

        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-200">{{ $copyGroup->name }}</h3>

        <p class="text-gray-400 dark:text-gray-500">
            {{ __('Created') }} <time
                datetime="{{ $copyGroup->updated_at }}">{{ $copyGroup->created_at->diffForHumans() }}</time>
        </p>

        <p class="text-gray-400 dark:text-gray-500">
            <span class="sr-only">Channel </span>
            {{ $copyGroup->channel->name }}
        </p>

        <p class="text-gray-500 dark:text-gray-500">
            {{ $copyGroup->description }}
        </p>


        @if ($copyGroup->statusCount())
            <dl>
                @foreach ($copyGroup->statusCount() as $status => $count)
                    <dt class="text-sm/6 font-semibold text-gray-400"><x-status-pill :status="$status" />
                        {{ $count }}</dd>
                @endforeach
            </dl>
        @endif

    </dt>
    <dd class="mt-1 justify-between gap-x-6 sm:mt-0 sm:flex-auto flex flex-col gap-4">
        <div class="text-gray-900 dark:text-gray-400 ">
            <!-- Table of items -->
            <div class="flex flex-col gap-y-2">
                <div class="flex flex-col gap-y-2">
                    <div class="flex flex-col gap-y-2">
                        @foreach ($copyGroup->copyVariations as $copyVariation)
                            <x-copy-variation.variation-item :copyVariation="$copyVariation" :copyGroup="$copyGroup" />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div x-data="{ open: false }">
            <button type="button" @click="open = ! open"
                class="font-semibold text-indigo-600 hover:text-indigo-500">Add</button>
            <div x-show="open" x-transition:enter="transition ease-out duration-100"
                x-transition:enter-start="transform opacity-0 scale-95"
                x-transition:enter-end="transform opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75"
                x-transition:leave-start="transform opacity-100 scale-100"
                x-transition:leave-end="transform opacity-0 scale-95">
                <div class="p-2 w-full" role="none">
                    <x-copy-variation.create-form :copyGroup="$copyGroup" :campaign="$campaign" :channels="$copyGroup->channel->all()" />
                </div>
            </div>
        </div>
    </dd>
</div>
