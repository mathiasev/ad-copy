<x-guest-layout>
    <h1 class="text-gray-700 dark:text-gray-200 text-xl font-semibold text-center">
        {{ __('Ad Copy') }}
    </h1>
    <div class="flex flex-col justify-center items-center pt-6 gap-3">
        <p class="text-gray-500 text-center">
            {{ __('Develop, review and approve ad copy for your ddigital marketing campaigns.') }}
        </p>
        <div class="flex flex-col justify-center items-center gap-3">
            <x-primary-link class="w-full" href="{{ route('login') }}">
                {{ __('Already have an account? ') }} <span class="!font-black pl-2">{{__('Login')}}</span>
            </x-primary-link>
            <x-secondary-link class="w-full" href="{{ route('register') }}">
                {{ __('Don\'t have an account? ') }} <span class="!font-black pl-2">{{__('Register')}}</span>
            </x-secondary-link>
        </div>
</x-guest-layout>