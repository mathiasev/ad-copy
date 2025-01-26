<div class="py-6 sm:flex">
    <dt class="font-medium text-gray-900 flex flex-col dark:text-gray-300 sm:w-64 sm:flex-none sm:pr-6">
        <span class="bg-gray-500 text-gray-800  text-xs font-bold uppercase mb-1 px-2.5 py-0.5 rounded-full w-fit">
            <span class="sr-only">{{__('Status')}} </span>
            {{ucfirst($copyGroup->status)}}
        </span>

        <h3>{{$copyGroup->name}}</h3>

        <span class="text-gray-400 dark:text-gray-500">
            {{__('Updated:')}} <time datetime="{{$copyGroup->updated_at}}">{{$copyGroup->created_at->format('d M Y @
                H:i')}}</time>
        </span>

        <span class="text-gray-400 dark:text-gray-500">
            <span class="sr-only">Channel </span>
            {{$copyGroup->channel->name}}
        </span>

    </dt>
    <dd x-data="{ open: false }" class="mt-1 flex justify-between gap-x-6 sm:mt-0 sm:flex-auto">
        <div class="text-gray-900 dark:text-gray-400">
            <!-- Table of items -->
            <div class="flex flex-col gap-y-2">
                <div class="flex flex-col gap-y-2">
                    <div class="flex flex-col gap-y-2">
                        @foreach($copyGroup->copyVariations as $copyVariation)
                        <div class="flex flex-col gap-y-2">
                            {{$copyVariation->data}}
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <button type="button" @click="open = ! open"
            class="font-semibold text-indigo-600 hover:text-indigo-500">Update</button>
        <div x-show="open" x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95" @click.away="open = false">
            <div class="p-2 w-full" role="none">
                <x-copy-variation.create-form :copyGroup="$copyGroup" :campaign="$campaign"
                    :channels="$copyGroup->channel->all()" />
            </div>
        </div>
    </dd>
</div>