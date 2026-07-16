<x-guest-layout>
    @section('title', 'Login')
    {{-- <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form> --}}
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="bg-[#F5F5F5] p-10 flex flex-col gap-8 rounded-md max-w-full xl:max-w-120 w-full xl:w-120">
            <div class="w-full flex flex-col gap-5">
                <div class="flex flex-row justify-between gap-2 items-center">
                    <div class="flex justify-start items-center">
                        <x-application-logo class="h-8" />
                    </div>
                    <div class="flex justify-end items-center">
                        <h1 class="text-xl xl:text-2xl font-semibold text-[#302995] text-right">Login</h1>
                    </div>
                </div>
                <h4 class="text-sm xl:text-base text-[#1F1F1F]">Please log in with your account to access this page</h4>
            </div>
            <div class="flex flex-col gap-4">
                <div class="w-full flex flex-col gap-2">
                    <label for="email" class="text-xs xl:text-sm text-[#1F1F1F]">Email Address</label>
                    <x-text-input type="email" name="email" placeholder="Email" required/>
                    {{-- <input type="email" class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out" name="email" id="email" placeholder="Email" autocomplete="off" required> --}}
                </div>
                <div class="w-full flex flex-col gap-2 relative">
                    <label for="password" class="text-xs xl:text-sm text-[#1F1F1F]">Password</label>
                    {{-- <div class="relative w-full">
                        <input type="password" class="bg-[#F5F5F5] w-full ps-4 pe-14 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out" name="password" id="password" placeholder="Password" autocomplete="off" required>
                        <button type="button" class="absolute right-0 mx-4 p-1 top-1/2 transform -translate-y-1/2 rounded-sm text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] transition duration-150 ease-in-out cursor-pointer"
                            onclick="let pwd = document.getElementById('password'); let eyeOpen = this.children[0]; let eyeClosed = this.children[1]; pwd.type = pwd.type === 'password' ? 'text' : 'password'; eyeOpen.classList.toggle('hidden'); eyeClosed.classList.toggle('hidden');">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye hidden">
                                <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"/>
                                <circle cx="12" cy="12" r="3"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye-closed">
                                <path d="m15 18-.722-3.25"/>
                                <path d="M2 8a10.645 10.645 0 0 0 20 0"/>
                                <path d="m20 15-1.726-2.05"/>
                                <path d="m4 15 1.726-2.05"/>
                                <path d="m9 18 .722-3.25"/>
                            </svg>
                        </button>
                    </div> --}}
                    <x-text-input type="password" name="password" placeholder="Password" required/>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-2 w-full">
                <div class="inline-flex justify-start items-center gap-2">
                    <label for="remember_me" class="rounded-sm border p-[2px] border-[#D6D6D6] flex cursor-pointer">
                        <input type="checkbox" class="rounded-sm appearance-none bg-[#F5F5F5] checked:bg-[#302995] p-2 transition duration-150 ease-in-out cursor-pointer" name="remember_me" id="remember_me" />
                    </label>
                    <label for="remember_me" class="text-sm text-[#1F1F1F] text-left cursor-pointer">Keep me signed in</label>
                </div>
                <div class="flex justify-end items-center">
                    <a href="{{ route('password.request') }}" class="text-sm text-[#302995] hover:text-[#13115A] active:text-[#0A0843] font-semibold text-right">Forgot Password?</a>
                </div>
            </div>
            <button type="submit" class="w-full rounded-sm px-4 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] transition duration-150 ease-in-out cursor-pointer">Login</button>
            <a href="{{ route('register') }}" class="text-sm text-[#302995] hover:text-[#13115A] active:text-[#0A0843] font-medium text-center">Become a Member</a>
        </div>
    </form>
</x-guest-layout>
