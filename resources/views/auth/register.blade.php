<x-guest-layout>
    @section('title', 'Become a Member')
    {{-- <form method="POST" action="{{ route('register') }}">
    @csrf

    <div>
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <div class="mt-4">
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <div class="mt-4">
        <x-input-label for="password" :value="__('Password')" />

        <x-text-input id="password" class="block mt-1 w-full"
            type="password"
            name="password"
            required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <div class="mt-4">
        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

        <x-text-input id="password_confirmation" class="block mt-1 w-full"
            type="password"
            name="password_confirmation" required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <div class="flex items-center justify-end mt-4">
        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>

        <x-primary-button class="ms-4">
            {{ __('Register') }}
        </x-primary-button>
    </div>
    </form> --}}
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="bg-[#F5F5F5] p-10 flex flex-col gap-8 rounded-md max-w-full xl:max-w-120 w-full xl:w-120">
            <div class="w-full flex flex-col gap-5">
                <div class="flex flex-row justify-between gap-2 items-center">
                    <div class="flex justify-start items-center">
                        <x-application-logo class="h-8" />
                    </div>
                    <div class="flex justify-end items-center">
                        <h1 class="text-xl xl:text-2xl font-semibold text-[#302995] text-right">Become a Member</h1>
                    </div>
                </div>
                <h4 class="text-sm xl:text-base text-[#1F1F1F]">Please fill out this form to become a member</h4>
            </div>
            <div class="flex flex-col gap-4">
                <div class="w-full flex flex-col gap-2">
                    <label for="name" class="text-xs xl:text-sm text-[#1F1F1F]">Full Name</label>
                    <input type="text"
                        class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out"
                        name="name" id="name" placeholder="Full Name" autocomplete="off" required>
                    <span class="text-xs text-[#1F1F1F]">Use real names not using company names / label names / stage
                        names.</span>
                </div>
                <div class="w-full flex flex-col gap-2">
                    <label for="email" class="text-xs xl:text-sm text-[#1F1F1F]">Email Address</label>
                    <input type="email"
                        class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out"
                        name="email" id="email" placeholder="Email" autocomplete="off" required>
                </div>
                <div class="w-full flex flex-col gap-2 relative">
                    <label for="password" class="text-xs xl:text-sm text-[#1F1F1F]">Password</label>
                    <div class="relative w-full">
                        <input type="password"
                            class="bg-[#F5F5F5] w-full ps-4 pe-14 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out"
                            name="password" id="password" placeholder="Password" autocomplete="off" required>
                        {{-- Tombol Mata Ungu --}}
                        <button type="button"
                            class="absolute right-0 mx-4 p-1 top-1/2 transform -translate-y-1/2 rounded-sm text-[#302995] hover:text-[#13115A] focus:outline-none transition duration-150 ease-in-out cursor-pointer"
                            onclick="let pwd = document.getElementById('password'); let eyeOpen = this.children[0]; let eyeClosed = this.children[1]; pwd.type = pwd.type === 'password' ? 'text' : 'password'; eyeOpen.classList.toggle('hidden'); eyeClosed.classList.toggle('hidden');">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-eye hidden">
                                <path
                                    d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                                <circle cx="12" cy="12" r="3" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-eye-closed">
                                <path d="m15 18-.722-3.25" />
                                <path d="M2 8a10.645 10.645 0 0 0 20 0" />
                                <path d="m20 15-1.726-2.05" />
                                <path d="m4 15 1.726-2.05" />
                                <path d="m9 18 .722-3.25" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="w-full flex flex-col gap-2 relative">
                    <label for="password_confirmation" class="text-xs xl:text-sm text-[#1F1F1F]">Confirm
                        Password</label>
                    <div class="relative w-full">
                        <input type="password"
                            class="bg-[#F5F5F5] w-full ps-4 pe-14 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out"
                            name="password_confirmation" id="password_confirmation" placeholder="Confirm Password"
                            autocomplete="off" required>
                        {{-- Tombol Mata Ungu --}}
                        <button type="button"
                            class="absolute right-0 mx-4 p-1 top-1/2 transform -translate-y-1/2 rounded-sm text-[#302995] hover:text-[#13115A] focus:outline-none transition duration-150 ease-in-out cursor-pointer"
                            onclick="let pwd = document.getElementById('password_confirmation'); let eyeOpen = this.children[0]; let eyeClosed = this.children[1]; pwd.type = pwd.type === 'password' ? 'text' : 'password'; eyeOpen.classList.toggle('hidden'); eyeClosed.classList.toggle('hidden');">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-eye hidden">
                                <path
                                    d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0" />
                                <circle cx="12" cy="12" r="3" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-eye-closed">
                                <path d="m15 18-.722-3.25" />
                                <path d="M2 8a10.645 10.645 0 0 0 20 0" />
                                <path d="m20 15-1.726-2.05" />
                                <path d="m4 15 1.726-2.05" />
                                <path d="m9 18 .722-3.25" />
                            </svg>
                        </button>
                    </div>
                </div>
                @error('password')
                <div
                    class="bg-red-100 border border-red-400 text-red-700 text-sm rounded px-4 py-2 mt-2 relative flex items-start gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-circle-alert-icon lucide-circle-alert">
                        <circle cx="12" cy="12" r="10" />
                        <line x1="12" x2="12" y1="8" y2="12" />
                        <line x1="12" x2="12.01" y1="16" y2="16" />
                    </svg>
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="inline-flex justify-start items-center gap-2">
                <label for="tos" class="rounded-sm border p-[2px] border-[#D6D6D6] flex cursor-pointer">
                    <input type="checkbox"
                        class="rounded-sm appearance-none bg-[#F5F5F5] checked:bg-[#302995] p-2 transition duration-150 ease-in-out cursor-pointer"
                        name="tos" id="tos" required />
                </label>
                <label for="tos"
                    class="text-sm text-[#1F1F1F] text-left inline-flex items-center cursor-pointer">By clicking, I
                    agree to the&nbsp;<a href=""
                        class="text-[#302995] hover:text-[#13115A] active:text-[#0A0843] font-semibold">Terms of
                        Service</a>.</label>
            </div>
            <button type="submit"
                class="w-full rounded-sm px-4 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] transition duration-150 ease-in-out cursor-pointer">Register</button>
            <a href="{{ route('login') }}"
                class="text-sm text-[#302995] hover:text-[#13115A] active:text-[#0A0843] font-medium text-center">Back
                to Login</a>
        </div>
    </form>
</x-guest-layout>