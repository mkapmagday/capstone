<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <table style="margin-right:50px;">
        <form method="POST" action="{{ route('register') }}">

            @csrf

            <!-- Name -->
            <tr>
                <td>
                <div class="mt-4">
                <x-input-label for="name" :value="__('Name')" />

                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />

                @if (\Session::has('resident_not_found'))
                {!! \Session::get('resident_not_found') !!}
                @endif
                </div>
            </td>

            <!-- Email Address -->
            <td>
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
            </td>
            </tr>


            <tr>
                <td>
                <div class="mt-4">
                <x-input-label for="pnum" :value="__('Phone Number')" />
                <x-text-input id="pnum" type="text" name="pnum" minlength="12" value="63" />
                </div>
                </td>

                <td>
                <div class="mt-4">
                <x-input-label for="address" :value="__('Address')" />
                <x-text-input id="address" type="text" name="address" />
                </div>
                </td>
            </tr>

            <tr>
            <td>
            <div class="mt-4">
                <x-input-label for="bdate" :value="__('Date of Birth')" />
                <x-text-input id="bdate" type="date" name="bdate" />
                </div>
            </td>

            <td>
            <div class="mt-4">
                <x-input-label for="years" :value="__('Years')" />
                <x-text-input id="years" type="text" name="years" />
            </div>
            </td>
            </tr>

            <tr>
            <td>
            
            <div class="mt-4">
                <x-input-label for="months" :value="__('Months')" />
                <x-text-input id="months" type="text" name="months" />
                </div>
            </td>
    
            <td>
            <div class="mt-4">
                <x-input-label for="municipality" :value="__('Municipality')" />
                <x-text-input id="municipality" type="text" name="municipality" />
            </div>
                </td>
            </tr>


            <tr>
            <td colspan="2">
            <div class="mt-4">
                <x-input-label for="age" :value="__('Age')" />
                <x-text-input id="age" type="text" name="age" />
            </div>
            </td>
            </tr>

            <!-- Password -->
            <tr>
            <td>
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            </td>
            <td>
            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            </td>
            </tr>

            <tr>
            <td colspan=2>
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4" onclick="return confirm('This policy sets out how we process any personal data we collect from you or that you provide to us through our website. We confirm that we will keep your information secure and that we will comply fully with all applicable Data Privacy Act or RA 10173. Information that will be provided by the user through registration to use the websites features will not be used by other person and make sure that the information are valid and not owned by other users.  That we collect from you when you visit this site. By visiting brgy386dss.com (our website) you are accepting and consenting to the practices described in this policy.')">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
            </td>
            </tr>
        </form>
        </table>
    </x-auth-card>
</x-guest-layout>