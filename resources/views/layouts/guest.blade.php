{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html> --}}
<!--
	© 2021 - 2025 PT Meluna Media Kreativitas Indonesia. All Rights Reserved.

	Want to copy our website? Can't afford to hire a developer huh? HAHAHA

	 /$$$$$$$  /$$$$$$$$       /$$      /$$           /$$
	| $$__  $$|__  $$__/      | $$$    /$$$          | $$
	| $$  \ $$   | $$         | $$$$  /$$$$  /$$$$$$ | $$ /$$   /$$ /$$$$$$$   /$$$$$$
	| $$$$$$$/   | $$         | $$ $$/$$ $$ /$$__  $$| $$| $$  | $$| $$__  $$ |____  $$
	| $$____/    | $$         | $$  $$$| $$| $$$$$$$$| $$| $$  | $$| $$  \ $$  /$$$$$$$
	| $$         | $$         | $$\  $ | $$| $$_____/| $$| $$  | $$| $$  | $$ /$$__  $$
	| $$         | $$         | $$ \/  | $$|  $$$$$$$| $$|  $$$$$$/| $$  | $$|  $$$$$$$
	|__/         |__/         |__/     |__/ \_______/|__/ \______/ |__/  |__/ \_______/
	 /$$      /$$                 /$$ /$$
	| $$$    /$$$                | $$|__/
	| $$$$  /$$$$  /$$$$$$   /$$$$$$$ /$$  /$$$$$$
	| $$ $$/$$ $$ /$$__  $$ /$$__  $$| $$ |____  $$
	| $$  $$$| $$| $$$$$$$$| $$  | $$| $$  /$$$$$$$
	| $$\  $ | $$| $$_____/| $$  | $$| $$ /$$__  $$
	| $$ \/  | $$|  $$$$$$$|  $$$$$$$| $$|  $$$$$$$
	|__/     |__/ \_______/ \_______/|__/ \_______/
	 /$$   /$$                                 /$$     /$$            /$$   /$$
	| $$  /$$/                                | $$    |__/           |__/  | $$
	| $$ /$$/   /$$$$$$   /$$$$$$   /$$$$$$  /$$$$$$   /$$ /$$    /$$ /$$ /$$$$$$    /$$$$$$   /$$$$$$$
	| $$$$$/   /$$__  $$ /$$__  $$ |____  $$|_  $$_/  | $$|  $$  /$$/| $$|_  $$_/   |____  $$ /$$_____/
	| $$  $$  | $$  \__/| $$$$$$$$  /$$$$$$$  | $$    | $$ \  $$/$$/ | $$  | $$      /$$$$$$$|  $$$$$$
	| $$\  $$ | $$      | $$_____/ /$$__  $$  | $$ /$$| $$  \  $$$/  | $$  | $$ /$$ /$$__  $$ \____  $$
	| $$ \  $$| $$      |  $$$$$$$|  $$$$$$$  |  $$$$/| $$   \  $/   | $$  |  $$$$/|  $$$$$$$ /$$$$$$$/
	|__/  \__/|__/       \_______/ \_______/   \___/  |__/    \_/    |__/   \___/   \_______/|_______/
	 /$$$$$$                 /$$                                         /$$
	|_  $$_/                | $$                                        |__/
	  | $$   /$$$$$$$   /$$$$$$$  /$$$$$$  /$$$$$$$   /$$$$$$   /$$$$$$$ /$$  /$$$$$$
	  | $$  | $$__  $$ /$$__  $$ /$$__  $$| $$__  $$ /$$__  $$ /$$_____/| $$ |____  $$
	  | $$  | $$  \ $$| $$  | $$| $$  \ $$| $$  \ $$| $$$$$$$$|  $$$$$$ | $$  /$$$$$$$
	  | $$  | $$  | $$| $$  | $$| $$  | $$| $$  | $$| $$_____/ \____  $$| $$ /$$__  $$
	 /$$$$$$| $$  | $$|  $$$$$$$|  $$$$$$/| $$  | $$|  $$$$$$$ /$$$$$$$/| $$|  $$$$$$$
	|______/|__/  |__/ \_______/ \______/ |__/  |__/ \_______/|_______/ |__/ \_______/

	Want to copy our website? Can't afford to hire a developer huh? HAHAHA

	© 2021 - 2025 PT Meluna Media Kreativitas Indonesia. All Rights Reserved.
-->
<!DOCTYPE html>
<html lang="en" x-data="{ loading: true }" x-init="window.addEventListener('load', () => loading = false)">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', '') ― PT Meluna Media Kreativitas Indonesia</title>
        <link rel="apple-touch-icon" sizes="180x180" href="/luna-assets/luna-media/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/luna-assets/luna-media/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/luna-assets/luna-media/favicon-16x16.png">
        <link rel="shortcut icon" type="image/x-icon" href="/luna-assets/luna-media/favicon.ico">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            html, body {
                font-family: "Plus Jakarta Sans", sans-serif;
            }
            #instantclick-bar {
                background: #302995;
            }
        </style>
    </head>
    <body class="bg-[#EDEDED] text-[#1F1F1F]">
        <div x-show="loading"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-80 flex items-center justify-center bg-[#F5F5F5]">
            <div class="flex flex-col justify-center items-center gap-8">
                <div class="w-18 h-18 border-4 border-[#302995] border-t-[#302995]/50 rounded-full animate-spin mx-auto">
                </div>
            </div>
        </div>
        <div class="h-dvh w-dvw flex justify-center items-center">
            {{ $slot }}
            <div x-data="{
                showToast: false,
                progress: 0,
                duration: 3000,
                timer: null,
                message: '',
                toastId: 0,
                startProgress() {
                    if (this.timer) {
                        clearInterval(this.timer);
                    }

                    this.toastId++;
                    const currentToastId = this.toastId;
                    this.showToast = true;
                    this.progress = 0;

                    const startTime = Date.now();
                    const interval = 10;

                    this.timer = setInterval(() => {
                        if (currentToastId !== this.toastId) {
                            clearInterval(this.timer);
                            return;
                        }

                        const elapsedTime = Date.now() - startTime;
                        this.progress = (elapsedTime / this.duration) * 100;

                        if (elapsedTime >= this.duration) {
                            clearInterval(this.timer);
                            this.showToast = false;
                        }
                    }, interval);
                },
                closeToast() {
                    clearInterval(this.timer);
                    this.showToast = false;
                }
            }"
                x-init="
                    @if (session('status') == 'logged-out')
                        message = 'Success! You have logged out.';
                        startProgress();
                    @elseif (session('status') && session('message'))
                        message = '{{ session('message') }}';
                        startProgress();
                    @endif
                ">

                <!-- Toast Component dengan Loading Bar -->
                <div
                    x-show="showToast"
                    x-transition:enter="transition ease-out duration-150"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    @click="closeToast()"
                    class="fixed bottom-0 xl:top-0 right-0 w-full xl:w-auto flex flex-col p-0 xl:p-2 overflow-hidden cursor-pointer"
                    style="display: none;">
                    <!-- Isi Toast -->
                    <div class="bg-[#F5F5F5] text-[#1F1F1F] rounded-none xl:rounded-sm px-6 py-4 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6 mr-2 text-green-400 lucide lucide-circle-check"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                        <span x-text="message"></span>
                    </div>

                    <!-- Loading Bar -->
                    <div class="w-full bg-[#F5F5F5] h-1">
                        <div
                            class="bg-[#302995] h-1 transition-all duration-75 ease-linear"
                            :style="`width: ${progress}%`"
                        ></div>
                    </div>
                </div>
            </div>
        </div>
        <script src="http://instantclick.io/v3.1.0/instantclick.min.js"></script>
        <script>InstantClick.init();</script>
    </body>
</html>
