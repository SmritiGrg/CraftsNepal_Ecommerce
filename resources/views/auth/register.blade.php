{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <!-- First Name -->
            <div>
                <x-input-label for="first_name" :value="__('First Name')" class="!text-slate-600" />
                <x-text-input id="first_name"
                    class="block mt-1 w-full !text-slate-400 !bg-white !border-gray-300 focus:ring-gray-500 focus:border-gray-500"
                    type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="given-name" />
                <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
            </div>

            <!-- Last Name -->
            <div>
                <x-input-label for="last_name" :value="__('Last Name')" class="!text-slate-600" />
                <x-text-input id="last_name"
                    class="block mt-1 w-full !text-slate-400 !bg-white !border-gray-300 focus:ring-gray-500 focus:border-gray-500"
                    type="text" name="last_name" :value="old('last_name')" required autocomplete="family-name" />
                <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
            </div>

            <!-- Phone Number -->
            <div>
                <x-input-label for="phone_number" :value="__('Phone Number')" class="!text-slate-600" />
                <x-text-input id="phone_number"
                    class="block mt-1 w-full !text-slate-400 !bg-white !border-gray-300 focus:ring-gray-500 focus:border-gray-500"
                    type="text" name="phone_number" :value="old('phone_number')" required autocomplete="tel" />
                <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
            </div>

            <!-- City -->
            <div>
                <x-input-label for="city" :value="__('City')" class="!text-slate-600" />
                <x-text-input id="city"
                    class="block mt-1 w-full !text-slate-400 !bg-white !border-gray-300 focus:ring-gray-500 focus:border-gray-500"
                    type="text" name="city" :value="old('city')" required autocomplete="address-level2" />
                <x-input-error :messages="$errors->get('city')" class="mt-2" />
            </div>

            <!-- Address -->
            <div>
                <x-input-label for="address" :value="__('Address')" class="!text-slate-600" />
                <x-text-input id="address"
                    class="block mt-1 w-full !text-slate-400 !bg-white !border-gray-300 focus:ring-gray-500 focus:border-gray-500"
                    type="text" name="address" :value="old('address')" required autocomplete="address-line1" />
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </div>

            <!-- Image -->
            <div>
                <x-input-label for="image" :value="__('Profile Image')" class="!text-slate-600" />
                <x-text-input id="image"
                    class="block mt-1 w-full !text-slate-400 !bg-white !border-gray-300 focus:ring-gray-500 focus:border-gray-500"
                    type="file" name="image" accept="image/*" />
                <x-input-error :messages="$errors->get('image')" class="mt-2" />
            </div>

        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" class="!text-slate-600" />
            <x-text-input id="email"
                class="block mt-1 w-full !text-slate-400 !bg-white !border-gray-300 focus:ring-purple-500 focus:border-purple-500"
                type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="!text-slate-600" />

            <x-text-input id="password"
                class="block mt-1 w-full !text-slate-400 !bg-white !border-gray-300 focus:ring-purple-500 focus:border-purple-500"
                type="password" name="password" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="!text-slate-600" />

            <x-text-input id="password_confirmation"
                class="block mt-1 w-full !text-slate-400 !bg-white !border-gray-300 focus:ring-purple-500 focus:border-purple-500"
                type="password" name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex flex-col items-center justify-center mt-4">
            <a class="underline text-sm text-gray-400 hover:text-gray-500 rounded-md mb-4" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button
                class="w-full inline-flex items-center justify-center bg-gradient-to-r from-orange-100 via-orange-200 to-orange-100 hover:bg-gradient-to-r hover:from-orange-200 hover:via-orange-300 hover:to-orange-400 text-black">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
<x-guest-layout>

    <div class="w-full relative lg:w-1/3 flex flex-col items-center justify-center p-12 bg-no-repeat bg-cover bg-center"
        style="background-image: url('assets/img/side.jpeg')">
        <div class="absolute top-4 left-4">
            <a href="/">
                <img src="{{ asset('assets/img/Logo_Crafts-removebg.png') }}" alt="Logo"
                    class="w-24 h-24 object-contain">
            </a>
        </div>
        <h1 class="text-5xl font-bold text-center tracking-wider text-slate-50">Welcome</h1>
        <div>
            <p class="text-2xl font-bold text-center tracking-wider text-slate-50">One of Us?</p>
        </div>
        <div>
            <a href="{{ route('login') }}"><button type="button"
                    class="text-black bg-gradient-to-r from-orange-100 via-orange-200 to-orange-100 hover:bg-gradient-to-r hover:from-orange-200 hover:via-orange-300 hover:to-orange-400  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">LOGIN</button></a>
        </div>
    </div>
    <div class="w-full lg:w-2/3 py-9 px-9">
        <h1 class="text-3xl font-bold text-center text-gray-700 mb-6 tracking-wider">Sign Up to Start Shopping</h1>
        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <!-- First Name -->
                <div>
                    <x-input-label for="first_name" :value="__('First Name')" class="!text-slate-600" />
                    <x-text-input id="first_name"
                        class="block mt-1 w-full !text-slate-400 !bg-white !border-gray-300 focus:ring-gray-500 focus:border-gray-500"
                        type="text" name="first_name" :value="old('first_name')" required autofocus
                        autocomplete="given-name" />
                    <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                </div>

                <!-- Last Name -->
                <div>
                    <x-input-label for="last_name" :value="__('Last Name')" class="!text-slate-600" />
                    <x-text-input id="last_name"
                        class="block mt-1 w-full !text-slate-400 !bg-white !border-gray-300 focus:ring-gray-500 focus:border-gray-500"
                        type="text" name="last_name" :value="old('last_name')" required autocomplete="family-name" />
                    <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                </div>

                <!-- Phone Number -->
                <div>
                    <x-input-label for="phone_number" :value="__('Phone Number')" class="!text-slate-600" />
                    <x-text-input id="phone_number"
                        class="block mt-1 w-full !text-slate-400 !bg-white !border-gray-300 focus:ring-gray-500 focus:border-gray-500"
                        type="text" name="phone_number" :value="old('phone_number')" required autocomplete="tel" />
                    <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
                </div>

                <!-- City -->
                <div>
                    <x-input-label for="city" :value="__('City')" class="!text-slate-600" />
                    <x-text-input id="city"
                        class="block mt-1 w-full !text-slate-400 !bg-white !border-gray-300 focus:ring-gray-500 focus:border-gray-500"
                        type="text" name="city" :value="old('city')" required autocomplete="address-level2" />
                    <x-input-error :messages="$errors->get('city')" class="mt-2" />
                </div>

                <!-- Address -->
                <div>
                    <x-input-label for="address" :value="__('Address')" class="!text-slate-600" />
                    <x-text-input id="address"
                        class="block mt-1 w-full !text-slate-400 !bg-white !border-gray-300 focus:ring-gray-500 focus:border-gray-500"
                        type="text" name="address" :value="old('address')" required autocomplete="address-line1" />
                    <x-input-error :messages="$errors->get('address')" class="mt-2" />
                </div>

                <!-- Image -->
                <div>
                    <x-input-label for="image" :value="__('Profile Image')" class="!text-slate-600" />
                    <x-text-input id="image"
                        class="block mt-1 w-full !text-slate-400 !bg-white !border-gray-300 focus:ring-gray-500 focus:border-gray-500"
                        type="file" name="image" accept="image/*" />
                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
                </div>

            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" class="!text-slate-600" />
                <x-text-input id="email"
                    class="block mt-1 w-full !text-slate-400 !bg-white !border-gray-300 focus:ring-purple-500 focus:border-purple-500"
                    type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" class="!text-slate-600" />

                <x-text-input id="password"
                    class="block mt-1 w-full !text-slate-400 !bg-white !border-gray-300 focus:ring-purple-500 focus:border-purple-500"
                    type="password" name="password" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="!text-slate-600" />

                <x-text-input id="password_confirmation"
                    class="block mt-1 w-full !text-slate-400 !bg-white !border-gray-300 focus:ring-purple-500 focus:border-purple-500"
                    type="password" name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex flex-col items-center justify-center mt-4">
                <a class="underline text-sm text-gray-400 hover:text-gray-500 rounded-md mb-4"
                    href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button
                    class="w-full inline-flex items-center justify-center bg-gradient-to-r from-orange-100 via-orange-200 to-orange-100 hover:bg-gradient-to-r hover:from-orange-200 hover:via-orange-300 hover:to-orange-400 text-black">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
