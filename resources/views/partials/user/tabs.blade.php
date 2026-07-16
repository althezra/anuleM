<div class="bg-[#F5F5F5] p-1 rounded-md
            grid grid-cols-2 md:flex md:flex-col gap-2">
    <!-- Summary -->
    <a href="{{ route('user.report.summary') }}"
       class="flex items-center justify-center md:justify-start w-full py-2 px-4 gap-2 rounded-sm
        @if (request()->routeIs('report.summary')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
        @else hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 @endif
        transition duration-150 ease-in-out">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 shrink-0" fill="none"
             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <rect width="18" height="18" x="3" y="3" rx="2" />
            <path d="M3 9a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2" />
            <path d="M3 11h3c.8 0 1.6.3 2.1.9l1.1.9c1.6 1.6 4.1 1.6 5.7 0l1.1-.9c.5-.5 1.3-.9 2.1-.9H21" />
        </svg>
        <span class="text-sm md:text-base font-medium">Summary</span>
    </a>

    <!-- Analytics -->
    <a href="{{ route('user.report.analytics') }}"
       class="flex items-center justify-center md:justify-start w-full py-2 px-4 gap-2 rounded-sm
        @if (request()->routeIs('user.report.analytics')) bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-[#F5F5F5]
        @else hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 @endif
        transition duration-150 ease-in-out">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 shrink-0" fill="none"
             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M13 17V9" />
            <path d="M18 17v-3" />
            <path d="M3 3v16a2 2 0 0 0 2 2h16" />
            <path d="M8 17V5" />
        </svg>
        <span class="text-sm md:text-base font-medium">Analytics</span>
    </a>
</div>
