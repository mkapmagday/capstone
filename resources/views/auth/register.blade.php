<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />

                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />

                @if (\Session::has('resident_not_found'))
                {!! \Session::get('resident_not_found') !!}
                @endif
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="pnum" :value="__('Phone Number')" />
                <x-text-input id="pnum" type="text" name="pnum" minlength="12" value="63" />
            </div>
            <div class="mt-4">
                <x-input-label for="address" :value="__('Address')" />
                <x-text-input id="address" type="text" name="address" />
            </div>
            <div class="mt-4">
                <x-input-label for="bdate" :value="__('Date of Birth')" />
                <x-text-input id="bdate" type="date" name="bdate" />
            </div>
            <div class="mt-4">
                <x-input-label for="years" :value="__('Years')" />
                <x-text-input id="years" type="text" name="years" />
            </div>
            <div class="mt-4">

                <x-input-label for="months" :value="__('Months')" />
                <x-text-input id="months" type="text" name="months" />

            </div>
            <div class="mt-4">
                <x-input-label for="municipality" :value="__('Municipality')" />
                <x-text-input id="municipality" type="text" name="municipality" />
            </div>
            <div class="mt-4">
                <x-input-label for="age" :value="__('Age')" />
                <x-text-input id="age" type="text" name="age" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>