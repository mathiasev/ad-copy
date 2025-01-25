<li {{$attributes->merge(['class' => 'col-span-1 flex rounded-md shadow-sm'])}}>

    <div
        class="flex flex-1 items-center justify-between truncate rounded-r-md border-b border-r border-t border-gray-200 bg-white">
        <div class="flex-1 truncate px-4 py-2 text-sm">
            <!-- <a href="{{ route('clients.show', $client) }}" class="font-medium text-gray-900 hover:text-gray-600"> -->
            {{ $copyGroup->name }}
            <!-- </a> -->
            <p class="text-gray-500">
                <!-- Notes -->
            </p>
        </div>
    </div>
</li>