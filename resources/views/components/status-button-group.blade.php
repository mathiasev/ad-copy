{{-- draft', 'approved', 'scheduled', 'in-market', 'complete', 'rejected --}}

<select name="status" id="status"
    class="text-sm p-1 px-3 font-medium text-gray-700 bg-white rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">

    <option value="draft"
        class="inline-flex items-center gap-x-2 rounded-l-md border border-transparent ring-gray-600/20 bg-gray-50 text-gray-700 px-4 py-2 text-sm font-medium  shadow-sm  focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
        Draft
    </option>
    <option value="approved"
        class="inline-flex items-center gap-x-2 border border-transparent ring-green-600/20 bg-green-50 text-green-700 px-4 py-2 text-sm font-medium  shadow-sm  focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
        Approve
    </option>
    <option value="scheduled"
        class="inline-flex items-center gap-x-2 border border-transparent ring-blue-600/20 bg-blue-50 text-blue-700 px-4 py-2 text-sm font-medium  shadow-sm  focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
        Scheduled
    </option>
    <option value="in-market"
        class="inline-flex items-center gap-x-2 border border-transparent ring-yellow-600/20 bg-yellow-50 text-yellow-700 px-4 py-2 text-sm font-medium  shadow-sm  focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2">
        In Market
    </option>
    <option value="complete"
        class="inline-flex items-center gap-x-2 border border-transparent ring-purple-600/20 bg-purple-50 text-purple-700 px-4 py-2 text-sm font-medium  shadow-sm  focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2">
        Complete
    </option>
    <option value="rejected"
        class="inline-flex items-center gap-x-2 rounded-r-md border border-transparent ring-red-600/20 bg-red-50 text-red-700 px-4 py-2 text-sm font-medium  shadow-sm  focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
        Rejected
    </option>

</select>
<button type="submit">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd"
            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
            clip-rule="evenodd" />
    </svg>
    <span class="sr-only">Save</span>
</button>
