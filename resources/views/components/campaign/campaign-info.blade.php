<div class="lg:col-start-3 lg:row-end-1" x-data="{ isEditing: false }">
    <h2 class="sr-only">Summary</h2>
    <div x-show="!isEditing" class="rounded-lg bg-gray-50/90 ring-1 shadow-xs ring-gray-900/5">
        <dl class="flex flex-wrap">
            <div class="mt-4 flex w-full flex-none gap-x-4 px-6">
                <dt class="flex-none">
                    <span class="sr-only">Status</span>
                    <svg class="h-6 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                        data-slot="icon">
                        <path
                            d="M5.25 12a.75.75 0 0 1 .75-.75h.01a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75H6a.75.75 0 0 1-.75-.75V12ZM6 13.25a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 0 0 .75-.75V14a.75.75 0 0 0-.75-.75H6ZM7.25 12a.75.75 0 0 1 .75-.75h.01a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75H8a.75.75 0 0 1-.75-.75V12ZM8 13.25a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 0 0 .75-.75V14a.75.75 0 0 0-.75-.75H8ZM9.25 10a.75.75 0 0 1 .75-.75h.01a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75H10a.75.75 0 0 1-.75-.75V10ZM10 11.25a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 0 0 .75-.75V12a.75.75 0 0 0-.75-.75H10ZM9.25 14a.75.75 0 0 1 .75-.75h.01a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75H10a.75.75 0 0 1-.75-.75V14ZM12 9.25a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 0 0 .75-.75V10a.75.75 0 0 0-.75-.75H12ZM11.25 12a.75.75 0 0 1 .75-.75h.01a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75H12a.75.75 0 0 1-.75-.75V12ZM12 13.25a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 0 0 .75-.75V14a.75.75 0 0 0-.75-.75H12ZM13.25 10a.75.75 0 0 1 .75-.75h.01a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75H14a.75.75 0 0 1-.75-.75V10ZM14 11.25a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 0 0 .75-.75V12a.75.75 0 0 0-.75-.75H14Z">
                        </path>
                        <path fill-rule="evenodd"
                            d="M5.75 2a.75.75 0 0 1 .75.75V4h7V2.75a.75.75 0 0 1 1.5 0V4h.25A2.75 2.75 0 0 1 18 6.75v8.5A2.75 2.75 0 0 1 15.25 18H4.75A2.75 2.75 0 0 1 2 15.25v-8.5A2.75 2.75 0 0 1 4.75 4H5V2.75A.75.75 0 0 1 5.75 2Zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75Z"
                            clip-rule="evenodd"></path>
                    </svg>
                </dt>
                <dd class="text-sm/6 text-gray-500">
                    {{ucfirst($campaign->status)}}
                </dd>
            </div>
            <div class="mt-4 flex w-full flex-none gap-x-4 px-6">
                <dt class="flex">
                    <svg class="h-6 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                        data-slot="icon">
                        <path fill-rule="evenodd"
                            d="M2.5 4A1.5 1.5 0 0 0 1 5.5V6h18v-.5A1.5 1.5 0 0 0 17.5 4h-15ZM19 8.5H1v6A1.5 1.5 0 0 0 2.5 16h15a1.5 1.5 0 0 0 1.5-1.5v-6ZM3 13.25a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 0 1.5h-1.5a.75.75 0 0 1-.75-.75Zm4.75-.75a.75.75 0 0 0 0 1.5h3.5a.75.75 0 0 0 0-1.5h-3.5Z"
                            clip-rule="evenodd"></path>
                    </svg>
                </dt>
                <dd class="text-sm/6 text-gray-500">
                    {{__('Created at')}} <time datetime="{{$campaign->created_at}}">{{$campaign->created_at->format('d M
                        Y
                        @ H:i')}}</time>
                </dd>
            </div>
            <div class="mt-4 flex w-full flex-none gap-x-4 px-6">
                <dt class="flex">
                    <svg class="h-6 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                        data-slot="icon">
                        <path fill-rule="evenodd"
                            d="M2.5 4A1.5 1.5 0 0 0 1 5.5V6h18v-.5A1.5 1.5 0 0 0 17.5 4h-15ZM19 8.5H1v6A1.5 1.5 0 0 0 2.5 16h15a1.5 1.5 0 0 0 1.5-1.5v-6ZM3 13.25a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 0 1.5h-1.5a.75.75 0 0 1-.75-.75Zm4.75-.75a.75.75 0 0 0 0 1.5h3.5a.75.75 0 0 0 0-1.5h-3.5Z"
                            clip-rule="evenodd"></path>
                    </svg>
                </dt>
                <dd class="text-sm/6 text-gray-500">
                    {{__('Last updated')}} <time datetime="{{$campaign->updated_at}}">{{$campaign->updated_at->format('d
                        M Y
                        @ H:i')}}</time>
                </dd>
            </div>
            <div class="flex-auto py-6 pl-6">
                <dt class="text-sm/6 font-semibold text-gray-400">Description</dt>
                <dd class="mt-1 text-base font-normal text-gray-900">
                    {{$campaign->description}}
                </dd>

            </div>
        </dl>
        <div class="pt-4 pb-6 pr-6 flex justify-end">
            <x-secondary-button class="" @click="isEditing = ! isEditing">
                {{ __('Edit') }}
            </x-secondary-button>
        </div>

    </div>
    <form x-show="isEditing" class="rounded-lg bg-gray-50/90 ring-1 shadow-xs ring-gray-900/5"
        action="{{ route('campaigns.update', $campaign) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" id="campaign_id" name="campaign_id" value="{{$campaign->id}}">
        <dl class="flex flex-wrap">
            <div class="mt-4 flex w-full flex-none gap-x-4 px-6">
                <dt class="flex-none">
                    <span class="sr-only">Status</span>
                    <svg class="h-6 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                        data-slot="icon">
                        <path
                            d="M5.25 12a.75.75 0 0 1 .75-.75h.01a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75H6a.75.75 0 0 1-.75-.75V12ZM6 13.25a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 0 0 .75-.75V14a.75.75 0 0 0-.75-.75H6ZM7.25 12a.75.75 0 0 1 .75-.75h.01a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75H8a.75.75 0 0 1-.75-.75V12ZM8 13.25a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 0 0 .75-.75V14a.75.75 0 0 0-.75-.75H8ZM9.25 10a.75.75 0 0 1 .75-.75h.01a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75H10a.75.75 0 0 1-.75-.75V10ZM10 11.25a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 0 0 .75-.75V12a.75.75 0 0 0-.75-.75H10ZM9.25 14a.75.75 0 0 1 .75-.75h.01a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75H10a.75.75 0 0 1-.75-.75V14ZM12 9.25a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 0 0 .75-.75V10a.75.75 0 0 0-.75-.75H12ZM11.25 12a.75.75 0 0 1 .75-.75h.01a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75H12a.75.75 0 0 1-.75-.75V12ZM12 13.25a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 0 0 .75-.75V14a.75.75 0 0 0-.75-.75H12ZM13.25 10a.75.75 0 0 1 .75-.75h.01a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75H14a.75.75 0 0 1-.75-.75V10ZM14 11.25a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 0 0 .75-.75V12a.75.75 0 0 0-.75-.75H14Z">
                        </path>
                        <path fill-rule="evenodd"
                            d="M5.75 2a.75.75 0 0 1 .75.75V4h7V2.75a.75.75 0 0 1 1.5 0V4h.25A2.75 2.75 0 0 1 18 6.75v8.5A2.75 2.75 0 0 1 15.25 18H4.75A2.75 2.75 0 0 1 2 15.25v-8.5A2.75 2.75 0 0 1 4.75 4H5V2.75A.75.75 0 0 1 5.75 2Zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75Z"
                            clip-rule="evenodd"></path>
                    </svg>
                </dt>
                <dd class="text-sm/6 text-gray-500">
                    {{ucfirst($campaign->status)}}
                </dd>
            </div>
            <div class="mt-4 flex w-full flex-none gap-x-4 px-6">
                <dt class="flex">
                    <svg class="h-6 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                        data-slot="icon">
                        <path fill-rule="evenodd"
                            d="M2.5 4A1.5 1.5 0 0 0 1 5.5V6h18v-.5A1.5 1.5 0 0 0 17.5 4h-15ZM19 8.5H1v6A1.5 1.5 0 0 0 2.5 16h15a1.5 1.5 0 0 0 1.5-1.5v-6ZM3 13.25a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 0 1.5h-1.5a.75.75 0 0 1-.75-.75Zm4.75-.75a.75.75 0 0 0 0 1.5h3.5a.75.75 0 0 0 0-1.5h-3.5Z"
                            clip-rule="evenodd"></path>
                    </svg>
                </dt>
                <dd class="text-sm/6 text-gray-500">
                    {{__('Created at')}} <time datetime="{{$campaign->created_at}}">{{$campaign->created_at->format('d M
                        Y
                        @ H:i')}}</time>
                </dd>
            </div>
            <div class="mt-4 flex w-full flex-none gap-x-4 px-6">
                <dt class="flex">
                    <svg class="h-6 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                        data-slot="icon">
                        <path fill-rule="evenodd"
                            d="M2.5 4A1.5 1.5 0 0 0 1 5.5V6h18v-.5A1.5 1.5 0 0 0 17.5 4h-15ZM19 8.5H1v6A1.5 1.5 0 0 0 2.5 16h15a1.5 1.5 0 0 0 1.5-1.5v-6ZM3 13.25a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 0 1.5h-1.5a.75.75 0 0 1-.75-.75Zm4.75-.75a.75.75 0 0 0 0 1.5h3.5a.75.75 0 0 0 0-1.5h-3.5Z"
                            clip-rule="evenodd"></path>
                    </svg>
                </dt>
                <dd class="text-sm/6 text-gray-500">
                    {{__('Last updated')}} <time datetime="{{$campaign->updated_at}}">{{$campaign->updated_at->format('d
                        M Y
                        @ H:i')}}</time>
                </dd>
            </div>
            <div class="mt-4 flex w-full flex-none gap-x-4 px-6 flex-col">
                <dt class="text-sm/6 font-semibold text-gray-400">Name</dt>
                <dd class="mt-1 text-base font-normal text-gray-900">
                    <x-text-input name="name" id="name" class="w-full" value="{{$campaign->name}}" />
                </dd>
            </div>
            <div class="mt-4 flex w-full flex-none gap-x-4 px-6 flex-col">
                <dt class="text-sm/6 font-semibold text-gray-400">Description</dt>
                <dd class="mt-1 text-base font-normal text-gray-900">
                    <textarea name="description" id="description"
                        class="w-full h-24 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                        placeholder="Description" rows="3">{{$campaign->description}}</textarea>
                </dd>
            </div>
        </dl>
        <div class="pt-4 pb-6 pr-6 flex justify-end">
            <x-primary-button class="">
                {{ __('Update') }}
            </x-primary-button>
        </div>
    </form>
</div>