<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <form method="POST" action="{{ route('login') }}" class="w-full text-white">
        @csrf
        <div class="grid grid-cols-5 w-full min-h-screen h-full">
            <div class="col-span-2 flex items-center justify-center">
                <div class="bg-white rounded-md shadow-2xl text-black w-[85%] border py-10 px-3">
                    <h1 class="text-center text-2xl font-bold font-sans">Tech Connect</h1>
                    <p class="text-center text-sm">Sistem Informasi Manajemen Sekolah</p>
                    <div class="flex flex-col items-center justify-center">
                        <h1 class="mt-5 text-lg font-bold font-sans">Login</h1>
                        <div class="">
                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full bg-black text-white" type="email" name="email"
                                    :value="old('email')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="block mt-1 w-full bg-black text-white" type="password" name="password"
                                    required autocomplete="current-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Remember Me -->
                            <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox"
                                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                        name="remember">
                                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>

                            <div class="flex flex-col-reverse gap-2 items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif

                                <x-primary-button class="ms-3">
                                    {{ __('Log in') }}
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
