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
    <dd class="mt-1 flex justify-between gap-x-6 sm:mt-0 sm:flex-auto">
        <div class="text-gray-900 dark:text-gray-400">
            <!-- Table of items -->
        </div>
        <button type="button" class="font-semibold text-indigo-600 hover:text-indigo-500">Update</button>
    </dd>
</div>