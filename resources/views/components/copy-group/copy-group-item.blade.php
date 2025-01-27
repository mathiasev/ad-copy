<div class="py-6 sm:flex">
    <dt class="font-medium text-gray-900 flex flex-col dark:text-gray-300 sm:w-64 sm:flex-none sm:pr-6">
        <span class="bg-gray-500 text-gray-800  text-xs font-bold uppercase mb-1 px-2.5 py-0.5 rounded-full w-fit">
            <span class="sr-only">{{__('Status')}} </span>
            {{ucfirst($copyGroup->status)}}
        </span>

        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-200">{{$copyGroup->name}}</h3>

        <span class="text-gray-400 dark:text-gray-500">
            {{__('Updated:')}} <time datetime="{{$copyGroup->updated_at}}">{{$copyGroup->created_at->format('d M Y @
                H:i')}}</time>
        </span>

        <span class="text-gray-400 dark:text-gray-500">
            <span class="sr-only">Channel </span>
            {{$copyGroup->channel->name}}
        </span>

        @if($copyGroup->statusCount())
        <dl>
            @foreach($copyGroup->statusCount() as $status => $count)
            <dt class="text-sm/6 font-semibold text-gray-400">{{ucfirst($status)}}</dt>
            <dd class="mt-1 text-base font-normal text-gray-900">{{$count}}</dd>
            @endforeach
        </dl>
        @endif

    </dt>
    <dd class="mt-1  justify-between gap-x-6 sm:mt-0 sm:flex-auto flex flex-col gap-4">
        <div class="text-gray-900 dark:text-gray-400 ">
            <!-- Table of items -->
            <div class="flex flex-col gap-y-2">
                <div class="flex flex-col gap-y-2">
                    <div class="flex flex-col gap-y-2">
                        @foreach($copyGroup->copyVariations as $copyVariation)
                        <div class="flex flex-col gap-y-2">
                            {{$copyVariation->data}}
                            {{$copyVariation->status}}
                            <form action="{{ route('copy-variations.update', $copyVariation) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" id="copy_group_id" name="copy_group_id" value="{{$copyGroup->id}}">
                                <span class="isolate inline-flex rounded-md shadow-sm">
                                    <button type="submit" name="status" value="draft"
                                        class="relative inline-flex items-center rounded-l-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10">Draft</button>
                                    <button type="submit" name="status" value="approved"
                                        class="relative inline-flex items-center rounded-l-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10">Approve</button>
                                    <button type="submit" name="status" value="scheduled"
                                        class="relative inline-flex items-center rounded-l-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10">Scheduled</button>
                                    <button type="submit" name="status" value="in-market"
                                        class="relative inline-flex items-center rounded-l-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10">In
                                        Market</button>
                                    <button type="submit" name="status" value="complete"
                                        class="relative inline-flex items-center rounded-l-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10">Complete</button>
                                    <button type="submit" name="status" value="rejected"
                                        class="relative inline-flex items-center rounded-l-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10">Reject</button>
                                </span>
                            </form>

                        </div>
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
                x-transition:leave-end="transform opacity-0 scale-95" @click.away="open = false">
                <div class="p-2 w-full" role="none">
                    <x-copy-variation.create-form :copyGroup="$copyGroup" :campaign="$campaign"
                        :channels="$copyGroup->channel->all()" />
                </div>
            </div>
        </div>
    </dd>
</div>