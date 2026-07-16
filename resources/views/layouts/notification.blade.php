<section class="flex flex-col gap-2">
    @php
        $businessCount = \App\Models\BusinessInformation::where('userOwned', Auth::id())->count();
    @endphp

    @if ($businessCount === 0)
    <div x-data="{ businessInformationAlert: true }"
        x-show="businessInformationAlert"
        x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0 transform"
        x-transition:enter-end="opacity-100 transform"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 transform"
        x-transition:leave-end="opacity-0 transform"
        class="bg-yellow-50 border border-yellow-600 flex flex-row justify-between px-4 py-2 gap-4 items-center rounded-md text-xs md:text-base text-yellow-600">
        <div class="p-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert">
                <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"/>
                <path d="M12 9v4"/>
                <path d="M12 17h.01"/>
            </svg>
        </div>
        <span>You have not completed your Business Information. Please complete your Business Information <a href="{{ route('profile.edit') }}" class="font-semibold">here</a> to avoid termination of service.</span>
        <button type="button" class="rounded-full p-2 hover:bg-yellow-200/50 active:bg-yellow-200/75 cursor-pointer transition duration-150 ease-in-out" @click="businessInformationAlert = false">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x">
                <path d="M18 6 6 18"/>
                <path d="m6 6 12 12"/>
            </svg>
        </button>
    </div>
    @endif

    @if (config('app.debug'))
    <div x-data="{ showGreenNotification: true }"
                    x-show="showGreenNotification"
                    x-transition:enter="transition ease-out duration-150"
                    x-transition:enter-start="opacity-0 transform"
                    x-transition:enter-end="opacity-100 transform"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 transform"
                    x-transition:leave-end="opacity-0 transform"
                    class="bg-red-50 border border-red-600 flex flex-row justify-between px-4 py-2 gap-4 items-center rounded-md text-xs md:text-base text-red-600">
                    <div class="p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-party-popper"><path d="M5.8 11.3 2 22l10.7-3.79"/><path d="M4 3h.01"/><path d="M22 8h.01"/><path d="M15 2h.01"/><path d="M22 20h.01"/><path d="m22 2-2.24.75a2.9 2.9 0 0 0-1.96 3.12c.1.86-.57 1.63-1.45 1.63h-.38c-.86 0-1.6.6-1.76 1.44L14 10"/><path d="m22 13-.82-.33c-.86-.34-1.82.2-1.98 1.11c-.11.7-.72 1.22-1.43 1.22H17"/><path d="m11 2 .33.82c.34.86-.2 1.82-1.11 1.98C9.52 4.9 9 5.52 9 6.23V7"/><path d="M11 13c1.93 1.93 2.83 4.17 2 5-.83.83-3.07-.07-5-2-1.93-1.93-2.83-4.17-2-5 .83-.83 3.07.07 5 2Z"/></svg>
                    </div>
                    <span>You are currently using the <span class="underline">Development Version</span> of <span class="font-semibold">Meluna Super Platform</span>!</span>
                    <button type="button" class="rounded-full p-2 hover:bg-red-200/50 active:bg-red-200/75 cursor-pointer transition duration-150 ease-in-out" @click="showGreenNotification = false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                    </button>
                </div>
                @endif
	{{-- <div x-data="{ showGreenNotification: true }"
		x-show="showGreenNotification"
		x-transition:enter="transition ease-out duration-150"
		x-transition:enter-start="opacity-0 transform"
		x-transition:enter-end="opacity-100 transform"
		x-transition:leave="transition ease-in duration-150"
		x-transition:leave-start="opacity-100 transform"
		x-transition:leave-end="opacity-0 transform"
		class="bg-green-50 border border-green-600 flex flex-row justify-between px-4 py-2 gap-4 items-center rounded-md text-green-600">
		<div class="p-2">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-party-popper">
				<path d="M5.8 11.3 2 22l10.7-3.79"/>
				<path d="M4 3h.01"/>
				<path d="M22 8h.01"/>
				<path d="M15 2h.01"/>
				<path d="M22 20h.01"/>
				<path d="m22 2-2.24.75a2.9 2.9 0 0 0-1.96 3.12c.1.86-.57 1.63-1.45 1.63h-.38c-.86 0-1.6.6-1.76 1.44L14 10"/>
				<path d="m22 13-.82-.33c-.86-.34-1.82.2-1.98 1.11c-.11.7-.72 1.22-1.43 1.22H17"/>
				<path d="m11 2 .33.82c.34.86-.2 1.82-1.11 1.98C9.52 4.9 9 5.52 9 6.23V7"/>
				<path d="M11 13c1.93 1.93 2.83 4.17 2 5-.83.83-3.07-.07-5-2-1.93-1.93-2.83-4.17-2-5 .83-.83 3.07.07 5 2Z"/>
			</svg>
		</div>
		<span>You are currently using the <span class="underline">Unreleased Version</span> of <span class="font-semibold">Meluna Super Platform</span>!</span>
		<button type="button" class="rounded-full p-2 hover:bg-green-200/50 active:bg-green-200/75 cursor-pointer transition duration-150 ease-in-out" @click="showGreenNotification = false">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x">
				<path d="M18 6 6 18"/>
				<path d="m6 6 12 12"/>
			</svg>
		</button>
	</div> --}}
	{{-- <div x-data="{ showYellowNotification: true }"
		x-show="showYellowNotification"
		x-transition:enter="transition ease-out duration-150"
		x-transition:enter-start="opacity-0 transform"
		x-transition:enter-end="opacity-100 transform"
		x-transition:leave="transition ease-in duration-150"
		x-transition:leave-start="opacity-100 transform"
		x-transition:leave-end="opacity-0 transform"
		class="bg-yellow-50 border border-yellow-600 flex flex-row justify-between px-4 py-2 gap-4 items-center rounded-md text-yellow-600">
		<div class="p-2">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert">
				<path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"/>
				<path d="M12 9v4"/>
				<path d="M12 17h.01"/>
			</svg>
		</div>
		<span>You have multiple third-party claims that are still active. Contact Meluna's Copyright Infringement Team immediately via <a href="mailto:copyright-infringement@meluna.co.id" class="font-semibold">copyright-infringement@meluna.co.id</a> to resolve these issues and to avoid suspension of your account.</span>
		<button type="button" class="rounded-full p-2 hover:bg-yellow-200/50 active:bg-yellow-200/75 cursor-pointer transition duration-150 ease-in-out" @click="showYellowNotification = false">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x">
				<path d="M18 6 6 18"/>
				<path d="m6 6 12 12"/>
			</svg>
		</button>
	</div> --}}
</section>
