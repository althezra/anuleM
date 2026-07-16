<x-guest-layout>
    @section('title', 'Reset Password')
    {{-- <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form> --}}
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="bg-[#F5F5F5] p-10 flex flex-col gap-8 rounded-md max-w-full xl:max-w-120 w-full xl:w-120">
            <div class="w-full flex flex-col gap-5">
                <div class="flex flex-row justify-between gap-2 items-center">
                    <div class="flex justify-start items-center">
                        <x-application-logo class="h-8" />
                    </div>
                    <div class="flex justify-end items-center">
                        <h1 class="text-xl xl:text-2xl font-semibold text-[#302995] text-right">Reset Password</h1>
                    </div>
                </div>
                <h4 class="text-sm xl:text-base text-[#1F1F1F]">Please enter your email address and we will send you instructions to reset your password</h4>
            </div>
            <div class="flex flex-col gap-4">
                <div class="w-full flex flex-col gap-2">
                    <label for="email" class="text-xs xl:text-sm text-[#1F1F1F]">Email Address</label>
                    <x-text-input type="email" name="email" placeholder="Email" required/>
                    <x-auth-session-status :status="session('status')" />
                </div>
            </div>
            <button type="submit" class="w-full rounded-sm px-4 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] transition duration-150 ease-in-out">Next</button>
            <a href="{{ route('login') }}" class="text-sm text-[#302995] hover:text-[#13115A] active:text-[#0A0843] font-medium text-center">Back to Login</a>
        </div>
    </form>
</x-guest-layout>
