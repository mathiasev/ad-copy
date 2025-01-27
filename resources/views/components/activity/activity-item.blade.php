<li class="relative flex gap-x-4">
    <div class="absolute :not(:first-child):-bottom-6 left-0 top-0 flex w-6 justify-center">
        <div class="w-px bg-gray-200"></div>
    </div>
    <div class="relative flex size-6 flex-none items-center justify-center bg-none">
        <div class="size-1.5 rounded-full bg-gray-100 ring-1 ring-gray-300"></div>
    </div>
    <p class="flex-auto py-0.5 text-xs/5 text-gray-500"><span
            class="font-medium text-gray-900">{{$item->causer->name??__('System')}}</span>
        {{$item->description}}</p>
    <time dateteime="{{$item->created_at}}"
        class="flex-none py-0.5 text-xs/5 text-gray-500">{{$item->created_at->diffForHumans()}}</time>
</li>