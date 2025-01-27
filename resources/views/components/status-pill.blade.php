<span @class([
    'w-fit rounded-full  px-2 py-1 text-xs font-medium  ring-1 ring-inset ',
    'ring-green-600/20 bg-green-50 text-green-700' => $status == 'approved',
    'ring-blue-600/20 bg-blue-50 text-blue-700' => $status == 'scheduled',
    'ring-yellow-600/20 bg-yellow-50 text-yellow-700' => $status == 'in-market',
    'ring-red-600/20 bg-red-50 text-red-700' => $status == 'rejected',
    'ring-gray-600/20 bg-gray-50 text-gray-700' => $status == 'draft',
    'ring-purple-600/20 bg-purple-50 text-purple-700' => $status == 'complete',
])>
    <span class="sr-only">{{ __('Status') }} </span>
    {{ ucfirst($status) }}
    {{ $slot }}
</span>
