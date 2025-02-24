@props(['disabled' => false])

<select @disabled($disabled)
    {{ $attributes->merge(['class' => ' w-full min-w-content appearance-none rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6']) }}>
    {{ $slot }}
</select>
