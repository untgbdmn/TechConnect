<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <form method="POST" action="{{ route('register') }}" class="w-full text-white">
        @csrf
        <div class="grid grid-cols-5 w-full min-h-screen h-full">
            <div class="col-span-2 flex items-center justify-center">
                <div class="bg-white rounded-md shadow-2xl text-black w-[85%] border py-10 px-3">
                    <h1 class="text-center text-2xl font-bold font-sans">Tech Connect</h1>
                    <p class="text-center text-sm">Sistem Informasi Manajemen Sekolah</p>
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="mt-5 text-lg font-bold font-sans">Register</h1>
                        <div class="w-full px-4">

                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                    :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                    :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                    required autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-4">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                    name="password_confirmation" required autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>

                                <x-primary-button class="ms-4">
                                    {{ __('Register') }}
                                </x-primary-button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <di class="col-span-3">
                <div class="w-full h-full overflow-hidden">
                    <img src={{ asset('assets/banner.jpg') }} alt="" class="h-full w-full overflow-hidden">
                </div>
            </di>
        </div>
    </form>
</x-guest-layout>
