{{--
<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
	<!-- Primary Navigation Menu -->
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="flex justify-between h-16">
			<div class="flex">
				<!-- Logo -->
				<div class="shrink-0 flex items-center">
					<a href="{{ route('dashboard') }}">
						<x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
					</a>
				</div>
				<!-- Navigation Links -->
				<div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
					<x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
						{{ __('Dashboard') }}
					</x-nav-link>
				</div>
			</div>
			<!-- Settings Dropdown -->
			<div class="hidden sm:flex sm:items-center sm:ms-6">
				<x-dropdown align="right" width="48">
					<x-slot name="trigger">
						<button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
							<div>{{ Auth::user()->name }}</div>
							<div class="ms-1">
								<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
									<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
								</svg>
							</div>
						</button>
					</x-slot>
					<x-slot name="content">
						<x-dropdown-link :href="route('profile.edit')">
							{{ __('Profile') }}
						</x-dropdown-link>
						<!-- Authentication -->
						<form method="POST" action="{{ route('logout') }}">
							@csrf
							<x-dropdown-link :href="route('logout')"
								onclick="event.preventDefault();
								this.closest('form').submit();">
								{{ __('Log Out') }}
							</x-dropdown-link>
						</form>
					</x-slot>
				</x-dropdown>
			</div>
			<!-- Hamburger -->
			<div class="-me-2 flex items-center sm:hidden">
				<button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
					<svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
						<path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
						<path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
					</svg>
				</button>
			</div>
		</div>
	</div>
	<!-- Responsive Navigation Menu -->
	<div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
		<div class="pt-2 pb-3 space-y-1">
			<x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
				{{ __('Dashboard') }}
			</x-responsive-nav-link>
		</div>
		<!-- Responsive Settings Options -->
		<div class="pt-4 pb-1 border-t border-gray-200">
			<div class="px-4">
				<div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
				<div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
			</div>
			<div class="mt-3 space-y-1">
				<x-responsive-nav-link :href="route('profile.edit')">
					{{ __('Profile') }}
				</x-responsive-nav-link>
				<!-- Authentication -->
				<form method="POST" action="{{ route('logout') }}">
					@csrf
					<x-responsive-nav-link :href="route('logout')"
						onclick="event.preventDefault();
						this.closest('form').submit();">
						{{ __('Log Out') }}
					</x-responsive-nav-link>
				</form>
			</div>
		</div>
	</div>
</nav>
--}}
<aside class="hidden xl:flex flex-col gap-2 p-2 max-w-80 w-80 h-dvh sticky top-0">
    <div class="bg-[#F5F5F5] p-2 rounded-md">
        <div class="flex justify-center items-center">
            <x-application-logo class="h-12" />
        </div>
    </div>
    <div class="bg-[#F5F5F5] p-2 rounded-md">
        <a href="{{ route('profile.edit') }}"
            class="inline-flex justify-start items-center py-2 px-4 w-full gap-2 rounded-sm
			@if (request()->routeIs('profile.edit')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
			@else
			hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 @endif
			cursor-pointer transition duration-150 ease-in-out">
            <img src="{{ route('avatar') }}?name={{ Auth::user()->name }}&
				@if (request()->routeIs('profile.edit')) background=F5F5F5&color=302995
				@else
				background=302995&color=BCB7F2 @endif
				"
                alt="Avatar" class="rounded-full h-8 flex-shrink-0" loading="lazy">
            <div class="flex flex-col w-full min-w-0">
                <span
                    class="text-base
					@if (request()->routeIs('profile.edit')) text-[#F5F5F5]
					@else
					text-[#302995] @endif
					font-semibold text-left truncate">{{ Auth::user()->name }}</span>
                <span class="text-xs text-left">
                    @if (Auth::user()->role == 0)
                        Admin
                    @elseif (Auth::user()->role == 1)
                        Operator
                    @else
                        Member
                    @endif
                </span>
            </div>
        </a>
    </div>
    <div class="bg-[#F5F5F5] p-2 flex flex-col gap-2 rounded-md h-full overflow-y-auto">
        <a href="{{ route('dashboard') }}"
            class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm
			@if (request()->routeIs('dashboard')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
			@else
			hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 @endif
			cursor-pointer transition duration-150 ease-in-out">
            <div class="inline-flex justify-start items-center gap-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-house">
                    <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Z" />
                    <path d="M9 22V12h6v10" />
                </svg>
                <span class="text-base font-medium text-left">Home</span>
            </div>
        </a>
        <div
        @if (request()->routeIs('user.releases','user.show','user.tracks','user.videos')) x-data="{ open: true }"
		@else
		x-data="{ open: false }" @endif
         class="flex flex-col gap-2">
            <button type="button" @click="open = !open"
                class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 cursor-pointer transition duration-150 ease-in-out">
                <div class="inline-flex justify-start items-center gap-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-gallery-vertical-end">
                        <path d="M7 2h10" />
                        <path d="M5 6h14" />
                        <rect width="18" height="12" x="3" y="10" rx="2" />
                    </svg>
                    <span class="text-base font-medium text-left">Assets</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"
                    :class="open ? 'transform rotate-90 transition-transform duration-150' : 'transition-transform duration-150'"
                    class="lucide lucide-chevron-right">
                    <path d="m9 18 6-6-6-6" />
                </svg>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-150"
                x-transition:enter-start="opacity-0 transform -translate-y-2"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 transform translate-y-0"
                x-transition:leave-end="opacity-0 transform -translate-y-2" class="pl-12">
                <div class="flex flex-col gap-2">
                    <a href="{{ route('user.releases','user.show') }}"
                        class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm
                        @if (request()->routeIs('user.releases','user.show')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
					@else
					hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 @endif cursor-pointer transition duration-150 ease-in-out">Releases</a>
                    <a href="{{ route('user.tracks') }}"
                        class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm
                        @if (request()->routeIs('user.tracks')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
					@else
					hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 @endif cursor-pointer transition duration-150 ease-in-out">Tracks</a>
                    <a href="{{ route('user.videos') }}"
                        class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm
                        @if (request()->routeIs('user.videos')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
					@else
					hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 @endif cursor-pointer transition duration-150 ease-in-out">Videos</a>
                </div>
            </div>
        </div>
        <div @if (request()->routeIs('contributors.labels.index','artists','publishers')) x-data="{ open: true }"
		@else
		x-data="{ open: false }" @endif
            class="flex flex-col gap-2">
            <button type="button" @click="open = !open"
                class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 cursor-pointer transition duration-150 ease-in-out">
                <div class="inline-flex justify-start items-center gap-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-users-round">
                        <path d="M18 21a8 8 0 0 0-16 0" />
                        <circle cx="10" cy="8" r="5" />
                        <path d="M22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-.45-8.3" />
                    </svg>
                    <span class="text-base font-medium text-left">Contributors</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"
                    :class="open ? 'transform rotate-90 transition-transform duration-150' : 'transition-transform duration-150'"
                    class="lucide lucide-chevron-right">
                    <path d="m9 18 6-6-6-6" />
                </svg>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-150"
                x-transition:enter-start="opacity-0 transform -translate-y-2"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 transform translate-y-0"
                x-transition:leave-end="opacity-0 transform -translate-y-2" class="pl-12">
                <div class="flex flex-col gap-2">
                    <a href="{{ route('artists') }}"
                        class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm
                        @if (request()->routeIs('artists')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
					@else
					hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 @endif
                         cursor-pointer transition duration-150 ease-in-out">Artists</a>
                    <a href="{{ route('contributors.labels.index') }}"
                        class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm
					@if (request()->routeIs('contributors.labels.index')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
					@else
					hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 @endif
					cursor-pointer transition duration-150 ease-in-out">Record
                        Labels</a>
                    <a href="{{ route('publishers') }}"
                        class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm
                    @if (request()->routeIs('publishers')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
					@else
					hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 @endif
                     cursor-pointer transition duration-150 ease-in-out">Publishers</a>
                </div>
            </div>
        </div>
        <a href="{{ route('user.reports') }}"
            class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm
            @if (request()->routeIs('user.reports')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
				@else
				hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 @endif
                cursor-pointer transition duration-150 ease-in-out">
            <div class="inline-flex justify-start items-center gap-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                    stroke-linejoin="round" class="lucide lucide-file-chart-column">
                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z" />
                    <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                    <path d="M8 18v-1" />
                    <path d="M12 18v-6" />
                    <path d="M16 18v-3" />
                </svg>
                <span class="text-base font-medium text-left">Reports</span>
            </div>
        </a>
       <div @if (request()->routeIs('user.history','user.request')) x-data="{ open: true }"
		@else
		x-data="{ open: false }" @endif
         class="flex flex-col gap-2">
            <button type="button" @click="open = !open"
                class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 cursor-pointer transition duration-150 ease-in-out">
                <div class="inline-flex justify-start items-center gap-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-landmark">
                        <line x1="3" x2="21" y1="22" y2="22" />
                        <line x1="6" x2="6" y1="18" y2="11" />
                        <line x1="10" x2="10" y1="18" y2="11" />
                        <line x1="14" x2="14" y1="18" y2="11" />
                        <line x1="18" x2="18" y1="18" y2="11" />
                        <polygon points="12 2 20 7 4 7" />
                    </svg>
                    <span class="text-base font-medium text-left">Payouts</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                    stroke-linejoin="round"
                    :class="open ? 'transform rotate-90 transition-transform duration-150' : 'transition-transform duration-150'"
                    class="lucide lucide-chevron-right">
                    <path d="m9 18 6-6-6-6" />
                </svg>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-150"
                x-transition:enter-start="opacity-0 transform -translate-y-2"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 transform translate-y-0"
                x-transition:leave-end="opacity-0 transform -translate-y-2" class="pl-12">
                <div class="flex flex-col gap-2">
                    <a href="{{ route('user.history') }}"
                        class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm
                        @if (request()->routeIs('user.history')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
					@else
					hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 @endif cursor-pointer transition duration-150 ease-in-out">History</a>
                    <a href="{{ route('user.request') }}"
                        class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm
                        @if (request()->routeIs('user.request')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
					@else
					hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 @endif cursor-pointer transition duration-150 ease-in-out">Request
                        Payout</a>
                </div>
            </div>
        </div>
        <div @if (request()->routeIs('user.manage-channels','user.request-oac')) x-data="{ open: true }"
		@else
		x-data="{ open: false }" @endif class="flex flex-col gap-2">
            <button type="button" @click="open = !open"
                class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 cursor-pointer transition duration-150 ease-in-out">
                <div class="inline-flex justify-start items-center gap-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-youtube">
                        <path
                            d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17" />
                        <path d="m10 15 5-3-5-3z" />
                    </svg>
                    <span class="text-base font-medium text-left">YouTube Network</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                    stroke-linejoin="round"
                    :class="open ? 'transform rotate-90 transition-transform duration-150' : 'transition-transform duration-150'"
                    class="lucide lucide-chevron-right">
                    <path d="m9 18 6-6-6-6" />
                </svg>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-150"
                x-transition:enter-start="opacity-0 transform -translate-y-2"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 transform translate-y-0"
                x-transition:leave-end="opacity-0 transform -translate-y-2" class="pl-12">
                <div class="flex flex-col gap-2">
                    <a href="{{ route('user.manage-channels') }}"
                        class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm
                        @if (request()->routeIs('user.manage-channels')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
					@else
					hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 @endif cursor-pointer transition duration-150 ease-in-out">Manage
                        Channels</a>
                    <a href="{{  route('user.request-oac') }}"
                        class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm
                        @if (request()->routeIs('user.requeat-oac')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
					@else
					hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 @endif cursor-pointer transition duration-150 ease-in-out">Request
                        OAC</a>
                </div>
            </div>
        </div>
    </div>
    @if (Auth::user()->role == 0 || Auth::user()->role == 1)
        <div class="bg-[#F5F5F5] p-2 flex flex-col gap-2 rounded-md h-full overflow-y-auto">
            <div @if (request()->routeIs('admin.releases','admin.show','admin.tracks','admin.videos')) x-data="{ open: true }"
		        @else
		        x-data="{ open: false }" @endif class="flex flex-col gap-2">
                <button type="button" @click="open = !open"
                    class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 cursor-pointer transition duration-150 ease-in-out">
                    <div class="inline-flex justify-start items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-gallery-vertical-end">
                            <path d="M7 2h10" />
                            <path d="M5 6h14" />
                            <rect width="18" height="12" x="3" y="10" rx="2" />
                        </svg>
                        <span class="text-base font-medium text-left">Assets</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                        stroke-linejoin="round"
                        :class="open ? 'transform rotate-90 transition-transform duration-150' :
                            'transition-transform duration-150'"
                        class="lucide lucide-chevron-right">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-150"
                    x-transition:enter-start="opacity-0 transform -translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-2" class="pl-12">
                    <div class="flex flex-col gap-2">
                        <a href="{{ route('admin.releases','admin.show') }}"
                            class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm
                            @if (request()->routeIs('admin.releases','admin.show')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
			             @else
			            hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 @endif cursor-pointer transition duration-150 ease-in-out">Releases</a>
                        <a href="{{ route('admin.tracks') }}"
                            class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm
                            @if (request()->routeIs('admin.tracks')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
			             @else
			            hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 @endif cursor-pointer transition duration-150 ease-in-out">Tracks</a>
                        <a href="{{ route('admin.videos') }}"
                            class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm @if (request()->routeIs('admin.videos')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
			             @else
			            hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 @endif cursor-pointer transition duration-150 ease-in-out">Videos</a>
                    </div>
                </div>
            </div>
            <div @if (request()->routeIs('admin.artist','admin.labels','admin.publishers')) x-data="{ open: true }"
		@else
		x-data="{ open: false }" @endif
                class="flex flex-col gap-2">
                <button type="button" @click="open = !open"
                    class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 cursor-pointer transition duration-150 ease-in-out">
                    <div class="inline-flex justify-start items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-users-round">
                            <path d="M18 21a8 8 0 0 0-16 0" />
                            <circle cx="10" cy="8" r="5" />
                            <path d="M22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-.45-8.3" />
                        </svg>
                        <span class="text-base font-medium text-left">Contributors</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                        stroke-linejoin="round"
                        :class="open ? 'transform rotate-90 transition-transform duration-150' :
                            'transition-transform duration-150'"
                        class="lucide lucide-chevron-right">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-150"
                    x-transition:enter-start="opacity-0 transform -translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-2" class="pl-12">
                    <div class="flex flex-col gap-2">
                        <a href="{{ route('admin.artists.index') }}"
                            class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm
                    @if (request()->routeIs('admin.artists.*')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
					@else
					hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 @endif
                    cursor-pointer transition duration-150 ease-in-out">Artists</a>
                        <a href="{{ route('admin.labels') }}"
                            class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm
					@if (request()->routeIs('admin.labels')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
					@else
					hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 @endif
					cursor-pointer transition duration-150 ease-in-out">Record
                            Labels</a>
                        <a href="{{ route('admin.publishers') }}"
                            class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm
                    @if (request()->routeIs('admin.publishers')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
					@else
					hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 @endif
                    cursor-pointer transition duration-150 ease-in-out">Publishers</a>
                    </div>
                </div>
            </div>
            <a href="{{ route('admin.reports') }}"
                class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm
                @if (request()->routeIs('admin.reports')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
				@else
				hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 @endif
                cursor-pointer transition duration-150 ease-in-out">
                <div class="inline-flex justify-start items-center gap-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-file-chart-column">
                        <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z" />
                        <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                        <path d="M8 18v-1" />
                        <path d="M12 18v-6" />
                        <path d="M16 18v-3" />
                    </svg>
                    <span class="text-base font-medium text-left">Reports</span>
                </div>
            </a>
            <a href="{{ route('admin.payout') }}"
                class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm
			   @if (request()->routeIs('admin.payout')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
				@else
				hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75
                @endif
			    cursor-pointer transition duration-150 ease-in-out">
                <div class="inline-flex justify-start items-center gap-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-landmark">
                            <line x1="3" x2="21" y1="22" y2="22" />
                            <line x1="6" x2="6" y1="18" y2="11" />
                            <line x1="10" x2="10" y1="18" y2="11" />
                            <line x1="14" x2="14" y1="18" y2="11" />
                            <line x1="18" x2="18" y1="18" y2="11" />
                            <polygon points="12 2 20 7 4 7" />
                        </svg>
                    <span class="text-base font-medium text-left">Payout Management</span>
                </div>
            </a>
            <a href="{{ route('admin.user') }}"
                class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm
			   @if (request()->routeIs('admin.user')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
				@else
				hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75
                @endif
			    cursor-pointer transition duration-150 ease-in-out">
                <div class="inline-flex justify-start items-center gap-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-user-cog-icon lucide-user-cog">
                        <path d="M10 15H6a4 4 0 0 0-4 4v2"/><path d="m14.305 16.53.923-.382"/>
                        <path d="m15.228 13.852-.923-.383"/><path d="m16.852 12.228-.383-.923"/><path d="m16.852 17.772-.383.924"/><path d="m19.148 12.228.383-.923"/>
                        <path d="m19.53 18.696-.382-.924"/><path d="m20.772 13.852.924-.383"/><path d="m20.772 16.148.924.383"/><circle cx="18" cy="15" r="3"/><circle cx="9" cy="7" r="4"/>
                    </svg>
                    <span class="text-base font-medium text-left">Users</span>
                </div>
            </a>
            <div @if (request()->routeIs('admin.platforms')) x-data="{ open: true }"
		@else
		x-data="{ open: false }" @endif class="flex flex-col gap-2">
                <button type="button" @click="open = !open"
                    class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 cursor-pointer transition duration-150 ease-in-out">
                    <div class="inline-flex justify-start items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-settings-icon lucide-settings">
                            <path d="M9.671 4.136a2.34 2.34 0 0 1 4.659 0 2.34 2.34 0 0 0 3.319 1.915 2.34 2.34 0 0 1 2.33 4.033 2.34 2.34 0 0 0 0 3.831 2.34 2.34 0 0 1-2.33 4.033 2.34 2.34 0 0 0-3.319 1.915 2.34 2.34 0 0 1-4.659 0 2.34 2.34 0 0 0-3.32-1.915 2.34 2.34 0 0 1-2.33-4.033 2.34 2.34 0 0 0 0-3.831A2.34 2.34 0 0 1 6.35 6.051a2.34 2.34 0 0 0 3.319-1.915"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>
                        <span class="text-base font-medium text-left">Setting</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                        stroke-linejoin="round"
                        :class="open ? 'transform rotate-90 transition-transform duration-150' :
                            'transition-transform duration-150'"
                        class="lucide lucide-chevron-right">
                        <path d="m9 18 6-6-6-6" />
                    </svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-150"
                    x-transition:enter-start="opacity-0 transform -translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 transform translate-y-0"
                    x-transition:leave-end="opacity-0 transform -translate-y-2" class="pl-12">
                    <div class="flex flex-col gap-2">
                        <a href="{{ route('admin.branding') }}"
                            class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm
                @if (request()->routeIs('admin.branding')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
				@else
				hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75
                @endif cursor-pointer transition duration-150 ease-in-out">Manage Branding</a>
                        <a href=""
                            class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm
                @if (request()->routeIs('')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
				@else
				hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75
                @endif cursor-pointer transition duration-150 ease-in-out">Manage Web Settings</a>
                        <a href="{{ route('admin.platforms') }}"
                            class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm
                @if (request()->routeIs('admin.platforms')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
				@else
				hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75
                @endif cursor-pointer transition duration-150 ease-in-out">Manage Platforms</a>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="bg-[#F5F5F5] p-2 flex flex-col gap-2 rounded-md">
        <a href=""
            class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 cursor-pointer transition duration-150 ease-in-out">
            <div class="inline-flex justify-start items-center gap-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                    stroke-linejoin="round" class="lucide lucide-image">
                    <rect width="18" height="18" x="3" y="3" rx="2" ry="2" />
                    <circle cx="9" cy="9" r="2" />
                    <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21" />
                </svg>
                <span class="text-base font-medium text-left">Cover Art Generator</span>
            </div>
        </a>
    </div>
    <div class="bg-[#F5F5F5] p-2 flex flex-col gap-2 rounded-md">
        <a href=""
            class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 cursor-pointer transition duration-150 ease-in-out">
            <div class="inline-flex justify-start items-center gap-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                    stroke-linejoin="round" class="lucide lucide-info">
                    <circle cx="12" cy="12" r="10" />
                    <path d="M12 16v-4" />
                    <path d="M12 8h.01" />
                </svg>
                <span class="text-base font-medium text-left">Helpdesk</span>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-external-link">
                <path d="M15 3h6v6" />
                <path d="M10 14 21 3" />
                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
            </svg>
        </a>
    </div>
    <div class="bg-[#F5F5F5] p-2 flex flex-col gap-2 rounded-md">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 cursor-pointer transition duration-150 ease-in-out">
                <div class="inline-flex justify-start items-center gap-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-log-out">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                        <polyline points="16 17 21 12 16 7" />
                        <line x1="21" x2="9" y1="12" y2="12" />
                    </svg>
                    <span class="text-base font-medium text-left">Logout</span>
                </div>
            </button>
        </form>
    </div>
</aside>
<nav class="bg-[#F5F5F5] w-full flex xl:hidden flex-row justify-between items-center p-2">
    <!-- Logo -->
    <div class="p-2">
        <x-application-logo class="h-8" />
    </div>
    <!-- Menu Button -->
    <div x-data="{ open: false }">
        <button type="button" @click="open = !open"
            class="rounded-sm p-2 hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 cursor-pointer transition duration-150 ease-in-out">
            <!-- Menu Icon (shows when closed) -->
            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-menu">
                <line x1="4" x2="20" y1="12" y2="12" />
                <line x1="4" x2="20" y1="6" y2="6" />
                <line x1="4" x2="20" y1="18" y2="18" />
            </svg>
            <!-- X Icon (shows when open) -->
            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-x">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>
        <!-- Mobile Menu Dropdown -->
        <div x-show="open" x-transition:enter="transition ease-out duration-150"
            x-transition:enter-start="opacity-0 transform -translate-y-2"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 transform translate-y-0"
            x-transition:leave-end="opacity-0 transform -translate-y-2" class="absolute right-0 top-14 w-full z-50">
            <div class="bg-[#F5F5F5] p-2 rounded-md">
                <!-- User Profile -->
                <div class="bg-[#F5F5F5] p-2 rounded-md mb-2">
                    <a href="{{ route('profile.edit') }}"
                        class="inline-flex justify-start items-center py-2 px-4 w-full gap-2 rounded-sm
						@if (request()->routeIs('profile.edit')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
						@else
						hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 @endif
						cursor-pointer transition duration-150 ease-in-out">
                        <img src="{{ route('avatar') }}?name={{ Auth::user()->name }}&
							@if (request()->routeIs('profile.edit')) background=F5F5F5&color=302995
							@else
							background=302995&color=BCB7F2 @endif
							"
                            alt="Avatar" class="rounded-full h-8 flex-shrink-0" loading="lazy">
                        <div class="flex flex-col w-full min-w-0">
                            <span
                                class="text-base
								@if (request()->routeIs('profile.edit')) text-[#F5F5F5]
								@else
								text-[#302995] @endif
								font-semibold text-left truncate">{{ Auth::user()->name }}</span>
                            <span class="text-xs text-left">
                                @if (Auth::user()->role == 0)
                                Admin
                                @elseif (Auth::user()->role == 1)
                                Operator
                                @else
                                Member
                                @endif
                            </span>
                        </div>
                    </a>
                </div>
                <!-- Navigation Menu -->
                <div class="bg-[#F5F5F5] p-2 flex flex-col gap-2 rounded-md">
                    <!-- Home Button -->
                    <a href="{{ route('dashboard') }}"
                        class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm
						@if (request()->routeIs('dashboard')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
						@else
						hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 @endif
						cursor-pointer transition duration-150 ease-in-out">
                        <div class="inline-flex justify-start items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house">
                                <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Z" />
                                <path d="M9 22V12h6v10" />
                            </svg>
                            <span class="text-base font-medium text-left">Home</span>
                        </div>
                    </a>
                    <!-- Assets Dropdown -->
                    <div @if (request()->routeIs('user.releases','user.show','user.tracks','user.videos')) x-data="{ openAssets: true }"
		@else x-data="{ openAssets: false }" @endif class="flex flex-col gap-2">
                        <button type="button" @click="openAssets = !openAssets"
                            class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 cursor-pointer transition duration-150 ease-in-out">
                            <div class="inline-flex justify-start items-center gap-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-gallery-vertical-end">
                                    <path d="M7 2h10" />
                                    <path d="M5 6h14" />
                                    <rect width="18" height="12" x="3" y="10" rx="2" />
                                </svg>
                                <span class="text-base font-medium text-left">Assets</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                                stroke-linecap="round" stroke-linejoin="round"
                                :class="openAssets ? 'transform rotate-90 transition-transform duration-150' :
                                    'transition-transform duration-150'"
                                class="lucide lucide-chevron-right">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </button>
                        <div x-show="openAssets" x-transition:enter="transition ease-out duration-150"
                            x-transition:enter-start="opacity-0 transform -translate-y-2"
                            x-transition:enter-end="opacity-100 transform translate-y-0"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 transform translate-y-0"
                            x-transition:leave-end="opacity-0 transform -translate-y-2" class="pl-12">
                            <div class="flex flex-col gap-2">
                                <a href="{{ route('user.releases','user.show') }}"
                                    class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm
                                    @if (request()->routeIs('user.releases','user.show')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
				                @else
				              hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75
                                @endif cursor-pointer transition duration-150 ease-in-out">Releases</a>
                                <a href="{{ route('user.tracks') }}"
                                    class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm
                                @if (request()->routeIs('user.tracks')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
				                @else
				              hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75
                                @endif cursor-pointer transition duration-150 ease-in-out">Tracks</a>
                                <a href="{{ route('user.videos') }}"
                                    class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm  @if (request()->routeIs('user.videos')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
				                @else
				              hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75
                                @endif cursor-pointer transition duration-150 ease-in-out">Videos</a>
                            </div>
                        </div>
                    </div>
                    <!-- Contributors Dropdown -->
                    <div @if (request()->routeIs('user.artist','user.label','user.publishers')) x-data="{ openContributors: true }"
		@else x-data="{ openContributors: false }" @endif class="flex flex-col gap-2">
                        <button type="button" @click="openContributors = !openContributors"
                            class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 cursor-pointer transition duration-150 ease-in-out">
                            <div class="inline-flex justify-start items-center gap-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users-round">
                                    <path d="M18 21a8 8 0 0 0-16 0" />
                                    <circle cx="10" cy="8" r="5" />
                                    <path d="M22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-.45-8.3" />
                                </svg>
                                <span class="text-base font-medium text-left">Contributors</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                                stroke-linecap="round" stroke-linejoin="round"
                                :class="openContributors ? 'transform rotate-90 transition-transform duration-150' :
                                    'transition-transform duration-150'"
                                class="lucide lucide-chevron-right">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </button>
                        <div x-show="openContributors" x-transition:enter="transition ease-out duration-150"
                            x-transition:enter-start="opacity-0 transform -translate-y-2"
                            x-transition:enter-end="opacity-100 transform translate-y-0"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 transform translate-y-0"
                            x-transition:leave-end="opacity-0 transform -translate-y-2" class="pl-12">
                            <div class="flex flex-col gap-2">
                                <a href=""
                                    class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 cursor-pointer transition duration-150 ease-in-out">Artists</a>
                                <a href=""
                                    class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 cursor-pointer transition duration-150 ease-in-out">Record
                                    Labels</a>
                                <a href=""
                                    class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 cursor-pointer transition duration-150 ease-in-out">Publishers</a>
                            </div>
                        </div>
                    </div>
                    <!-- Reports -->
                    <a href=""
                        class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 cursor-pointer transition duration-150 ease-in-out">
                        <div class="inline-flex justify-start items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-file-chart-column">
                                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z" />
                                <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                                <path d="M8 18v-1" />
                                <path d="M12 18v-6" />
                                <path d="M16 18v-3" />
                            </svg>
                            <span class="text-base font-medium text-left">Reports</span>
                        </div>
                    </a>
                    <!-- Payouts Dropdown -->
                    <div x-data="{ openPayouts: false }" class="flex flex-col gap-2">
                        <button type="button" @click="openPayouts = !openPayouts"
                            class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 cursor-pointer transition duration-150 ease-in-out">
                            <div class="inline-flex justify-start items-center gap-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-landmark">
                                    <line x1="3" x2="21" y1="22" y2="22" />
                                    <line x1="6" x2="6" y1="18" y2="11" />
                                    <line x1="10" x2="10" y1="18" y2="11" />
                                    <line x1="14" x2="14" y1="18" y2="11" />
                                    <line x1="18" x2="18" y1="18" y2="11" />
                                    <polygon points="12 2 20 7 4 7" />
                                </svg>
                                <span class="text-base font-medium text-left">Payouts</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                                stroke-linecap="round" stroke-linejoin="round"
                                :class="openPayouts ? 'transform rotate-90 transition-transform duration-150' :
                                    'transition-transform duration-150'"
                                class="lucide lucide-chevron-right">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </button>
                        <div x-show="openPayouts" x-transition:enter="transition ease-out duration-150"
                            x-transition:enter-start="opacity-0 transform -translate-y-2"
                            x-transition:enter-end="opacity-100 transform translate-y-0"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 transform translate-y-0"
                            x-transition:leave-end="opacity-0 transform -translate-y-2" class="pl-12">
                            <div class="flex flex-col gap-2">
                                <a href=""
                                    class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 cursor-pointer transition duration-150 ease-in-out">History</a>
                                <a href=""
                                    class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 cursor-pointer transition duration-150 ease-in-out">Request
                                    Payout</a>
                            </div>
                        </div>
                    </div>
                    <!-- YouTube Network Dropdown -->
                    <div x-data="{ openYoutube: false }" class="flex flex-col gap-2">
                        <button type="button" @click="openYoutube = !openYoutube"
                            class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 cursor-pointer transition duration-150 ease-in-out">
                            <div class="inline-flex justify-start items-center gap-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube">
                                    <path
                                        d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17" />
                                    <path d="m10 15 5-3-5-3z" />
                                </svg>
                                <span class="text-base font-medium text-left">YouTube Network</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                                stroke-linecap="round" stroke-linejoin="round"
                                :class="openYoutube ? 'transform rotate-90 transition-transform duration-150' :
                                    'transition-transform duration-150'"
                                class="lucide lucide-chevron-right">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </button>
                        <div x-show="openYoutube" x-transition:enter="transition ease-out duration-150"
                            x-transition:enter-start="opacity-0 transform -translate-y-2"
                            x-transition:enter-end="opacity-100 transform translate-y-0"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 transform translate-y-0"
                            x-transition:leave-end="opacity-0 transform -translate-y-2" class="pl-12">
                            <div class="flex flex-col gap-2">
                                <a href=""
                                    class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 cursor-pointer transition duration-150 ease-in-out">Manage
                                    Channels</a>
                                <a href=""
                                    class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 cursor-pointer transition duration-150 ease-in-out">Request
                                    OAC</a>
                            </div>
                        </div>
                    </div>


                    @if (Auth::user()->role == 0 || Auth::user()->role == 1)
                    <div class="mt-4 mb-4">
                        <hr class="border-b-0.5 border-black"></hr>
                    </div>
                    <!-- Assets Dropdown -->
                    <div @if (request()->routeIs('user.releases','user.show','user.tracks','user.videos')) x-data="{ openAssets: true }"
		@else x-data="{ openAssets: false }" @endif class="flex flex-col gap-2">
                        <button type="button" @click="openAssets = !openAssets"
                            class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 cursor-pointer transition duration-150 ease-in-out">
                            <div class="inline-flex justify-start items-center gap-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-gallery-vertical-end">
                                    <path d="M7 2h10" />
                                    <path d="M5 6h14" />
                                    <rect width="18" height="12" x="3" y="10" rx="2" />
                                </svg>
                                <span class="text-base font-medium text-left">Assets</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                                stroke-linecap="round" stroke-linejoin="round"
                                :class="openAssets ? 'transform rotate-90 transition-transform duration-150' :
                                    'transition-transform duration-150'"
                                class="lucide lucide-chevron-right">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </button>
                        <div x-show="openAssets" x-transition:enter="transition ease-out duration-150"
                            x-transition:enter-start="opacity-0 transform -translate-y-2"
                            x-transition:enter-end="opacity-100 transform translate-y-0"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 transform translate-y-0"
                            x-transition:leave-end="opacity-0 transform -translate-y-2" class="pl-12">
                            <div class="flex flex-col gap-2">
                                <a href="{{ route('user.releases','user.show') }}"
                                    class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm
                                    @if (request()->routeIs('user.releases','user.show')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
				                @else
				              hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75
                                @endif cursor-pointer transition duration-150 ease-in-out">Releases</a>
                                <a href="{{ route('user.tracks') }}"
                                    class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm
                                @if (request()->routeIs('user.tracks')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
				                @else
				              hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75
                                @endif cursor-pointer transition duration-150 ease-in-out">Tracks</a>
                                <a href="{{ route('user.videos') }}"
                                    class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm  @if (request()->routeIs('user.videos')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
				                @else
				              hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75
                                @endif cursor-pointer transition duration-150 ease-in-out">Videos</a>
                            </div>
                        </div>
                    </div>
                    <!-- Contributors Dropdown -->
                    <div @if (request()->routeIs('user.artist','user.label','user.publishers')) x-data="{ openContributors: true }"
		@else x-data="{ openContributors: false }" @endif class="flex flex-col gap-2">
                        <button type="button" @click="openContributors = !openContributors"
                            class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 cursor-pointer transition duration-150 ease-in-out">
                            <div class="inline-flex justify-start items-center gap-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users-round">
                                    <path d="M18 21a8 8 0 0 0-16 0" />
                                    <circle cx="10" cy="8" r="5" />
                                    <path d="M22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-.45-8.3" />
                                </svg>
                                <span class="text-base font-medium text-left">Contributors</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                                stroke-linecap="round" stroke-linejoin="round"
                                :class="openContributors ? 'transform rotate-90 transition-transform duration-150' :
                                    'transition-transform duration-150'"
                                class="lucide lucide-chevron-right">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </button>
                        <div x-show="openContributors" x-transition:enter="transition ease-out duration-150"
                            x-transition:enter-start="opacity-0 transform -translate-y-2"
                            x-transition:enter-end="opacity-100 transform translate-y-0"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 transform translate-y-0"
                            x-transition:leave-end="opacity-0 transform -translate-y-2" class="pl-12">
                            <div class="flex flex-col gap-2">
                                <a href=""
                                    class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 cursor-pointer transition duration-150 ease-in-out">Artists</a>
                                <a href=""
                                    class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 cursor-pointer transition duration-150 ease-in-out">Record
                                    Labels</a>
                                <a href=""
                                    class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 cursor-pointer transition duration-150 ease-in-out">Publishers</a>
                            </div>
                        </div>
                    </div>
                    <!-- Reports -->
                    <a href="{{ route('admin.reports') }}"
                        class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm @if (request()->routeIs('admin.reports')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
						@else
						hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 @endif cursor-pointer transition duration-150 ease-in-out">
                        <div class="inline-flex justify-start items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-file-chart-column">
                                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z" />
                                <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                                <path d="M8 18v-1" />
                                <path d="M12 18v-6" />
                                <path d="M16 18v-3" />
                            </svg>
                            <span class="text-base font-medium text-left">Reports</span>
                        </div>
                    </a>
                    <!-- Payouts Dropdown -->
                    <a href="{{ route('admin.payout') }}"
                        class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm @if (request()->routeIs('admin.payout')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
						@else
						hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 @endif cursor-pointer transition duration-150 ease-in-out">
                        <div class="inline-flex justify-start items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-landmark">
                                    <line x1="3" x2="21" y1="22" y2="22" />
                                    <line x1="6" x2="6" y1="18" y2="11" />
                                    <line x1="10" x2="10" y1="18" y2="11" />
                                    <line x1="14" x2="14" y1="18" y2="11" />
                                    <line x1="18" x2="18" y1="18" y2="11" />
                                    <polygon points="12 2 20 7 4 7" />
                            </svg>
                            <span class="text-base font-medium text-left">Payout Management</span>
                        </div>
                    </a>
                    <!-- Users -->
                    <a href="{{ route('admin.user') }}"
                        class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm @if (request()->routeIs('admin.user')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
						@else
						hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 @endif cursor-pointer transition duration-150 ease-in-out">
                        <div class="inline-flex justify-start items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-user-cog-icon lucide-user-cog">
                                <path d="M10 15H6a4 4 0 0 0-4 4v2"/><path d="m14.305 16.53.923-.382"/>
                                <path d="m15.228 13.852-.923-.383"/><path d="m16.852 12.228-.383-.923"/><path d="m16.852 17.772-.383.924"/><path d="m19.148 12.228.383-.923"/>
                                <path d="m19.53 18.696-.382-.924"/><path d="m20.772 13.852.924-.383"/><path d="m20.772 16.148.924.383"/><circle cx="18" cy="15" r="3"/><circle cx="9" cy="7" r="4"/>
                            </svg>
                            <span class="text-base font-medium text-left">Users</span>
                        </div>
                    </a>
                    <!-- Settings -->
                    <div x-data="{ openPayouts: false }" class="flex flex-col gap-2">
                        <button type="button" @click="openPayouts = !openPayouts"
                            class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 cursor-pointer transition duration-150 ease-in-out">
                            <div class="inline-flex justify-start items-center gap-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-settings-icon lucide-settings">
                                    <path d="M9.671 4.136a2.34 2.34 0 0 1 4.659 0 2.34 2.34 0 0 0 3.319 1.915 2.34 2.34 0 0 1 2.33 4.033 2.34 2.34 0 0 0 0 3.831 2.34 2.34 0 0 1-2.33 4.033 2.34 2.34 0 0 0-3.319 1.915 2.34 2.34 0 0 1-4.659 0 2.34 2.34 0 0 0-3.32-1.915 2.34 2.34 0 0 1-2.33-4.033 2.34 2.34 0 0 0 0-3.831A2.34 2.34 0 0 1 6.35 6.051a2.34 2.34 0 0 0 3.319-1.915"/>
                                    <circle cx="12" cy="12" r="3"/>
                                </svg>
                                <span class="text-base font-medium text-left">Setting</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                                stroke-linecap="round" stroke-linejoin="round"
                                :class="openPayouts ? 'transform rotate-90 transition-transform duration-150' :
                                    'transition-transform duration-150'"
                                class="lucide lucide-chevron-right">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </button>
                        <div x-show="openPayouts" x-transition:enter="transition ease-out duration-150"
                            x-transition:enter-start="opacity-0 transform -translate-y-2"
                            x-transition:enter-end="opacity-100 transform translate-y-0"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 transform translate-y-0"
                            x-transition:leave-end="opacity-0 transform -translate-y-2" class="pl-12">
                            <div class="flex flex-col gap-2">
                                <a href=""
                                    class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 cursor-pointer transition duration-150 ease-in-out">Manage Branding</a>
                                <a href=""
                                    class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 cursor-pointer transition duration-150 ease-in-out">Manage Web Settings</a>
                                <a href=""
                                    class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 cursor-pointer transition duration-150 ease-in-out">Manage Platforms</a>
                            </div>
                        </div>
                    </div>
                    @endif
                    <!-- Cover Art Generator -->
                    <a href=""
                        class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 cursor-pointer transition duration-150 ease-in-out">
                        <div class="inline-flex justify-start items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-image">
                                <rect width="18" height="18" x="3" y="3" rx="2" ry="2" />
                                <circle cx="9" cy="9" r="2" />
                                <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21" />
                            </svg>
                            <span class="text-base font-medium text-left">Cover Art Generator</span>
                        </div>
                    </a>
                    <!-- Helpdesk -->
                    <a href=""
                        class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 cursor-pointer transition duration-150 ease-in-out">
                        <div class="inline-flex justify-start items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M12 16v-4" />
                                <path d="M12 8h.01" />
                            </svg>
                            <span class="text-base font-medium text-left">Helpdesk</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-external-link">
                            <path d="M15 3h6v6" />
                            <path d="M10 14 21 3" />
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                        </svg>
                    </a>
                    <!-- Logout -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="inline-flex justify-between items-center py-2 px-4 w-full gap-4 rounded-sm hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 cursor-pointer transition duration-150 ease-in-out">
                            <div class="inline-flex justify-start items-center gap-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-out">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                                    <polyline points="16 17 21 12 16 7" />
                                    <line x1="21" x2="9" y1="12" y2="12" />
                                </svg>
                                <span class="text-base font-medium text-left">Logout</span>
                            </div>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>
