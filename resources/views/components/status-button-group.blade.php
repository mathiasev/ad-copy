{{-- draft', 'approved', 'scheduled', 'in-market', 'complete', 'rejected --}}

<x-input-select name="status" id="status" @class([
    $status == 'draft' ? 'bg-gray-50 text-gray-700' : '',
    $status == 'approved' ? 'bg-green-50 text-green-700' : '',
    $status == 'scheduled' ? 'bg-blue-50 text-blue-700' : '',
    $status == 'in-market' ? 'bg-yellow-50 text-yellow-700' : '',
    $status == 'complete' ? 'bg-purple-50 text-purple-700' : '',
    $status == 'rejected' ? 'bg-red-50 text-red-700' : '',
])>
    <option value="draft" @if ($status == 'draft') selected @endif
        class="inline-flex items-center gap-x-2 rounded-l-md border border-transparent ring-gray-600/20 bg-gray-50 text-gray-700 px-4 py-2 text-sm font-medium  shadow-sm  focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
        Draft
    </option>
    <option value="approved" @if ($status == 'approved') selected @endif
        class="inline-flex items-center gap-x-2 border border-transparent ring-green-600/20 bg-green-50 text-green-700 px-4 py-2 text-sm font-medium  shadow-sm  focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
        Approve
    </option>
    <option value="scheduled" @if ($status == 'scheduled') selected @endif
        class="inline-flex items-center gap-x-2 border border-transparent ring-blue-600/20 bg-blue-50 text-blue-700 px-4 py-2 text-sm font-medium  shadow-sm  focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
        Scheduled
    </option>
    <option value="in-market" @if ($status == 'in-market') selected @endif
        class="inline-flex items-center gap-x-2 border border-transparent ring-yellow-600/20 bg-yellow-50 text-yellow-700 px-4 py-2 text-sm font-medium  shadow-sm  focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2">
        In Market
    </option>
    <option value="complete" @if ($status == 'complete') selected @endif
        class="inline-flex items-center gap-x-2 border border-transparent ring-purple-600/20 bg-purple-50 text-purple-700 px-4 py-2 text-sm font-medium  shadow-sm  focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2">
        Complete
    </option>
    <option value="rejected" @if ($status == 'rejected') selected @endif
        class="inline-flex items-center gap-x-2 rounded-r-md border border-transparent ring-red-600/20 bg-red-50 text-red-700 px-4 py-2 text-sm font-medium  shadow-sm  focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
        Rejected
    </option>

</x-input-select>
