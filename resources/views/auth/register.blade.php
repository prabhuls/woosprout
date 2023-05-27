<x-guest-layout>
    <form id="signupForm" method="POST" action="{{ route('register') }}" data-parsley-validate>
        @csrf

        <div class="flex justify-between">
            <!-- First Name -->
            <div class=" w-1/2 mr-2">
                <x-input-label for="first_name" :value="__('First Name')" />
                <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="first_name" data-parsley-trigger="blur" />
                <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
            </div>

            <!-- Last Name -->
            <div class=" w-1/2">
                <x-input-label for="last_name" :value="__('Last Name')" />
                <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="last_name" data-parsley-trigger="blur" />
                <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
            </div>
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" data-parsley-type="email" data-parsley-trigger="blur" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" data-parsley-minlength="8" data-parsley-trigger="blur" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" data-parsley-equalto="#password" data-parsley-trigger="blur" data-parsley-equalto-message="Passwords should match." />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Invite code -->
        <div class="mt-4">
            <x-input-label for="invite_code" :value="__('Invite Code')" />
            <x-text-input id="invite_code" class="block mt-1 w-full" type="text" name="invite_code" :value="old('invite_code')" required autofocus autocomplete="invite_code" data-parsley-trigger="blur" />
            <x-input-error :messages="$errors->get('invite_code')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Sign up') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>