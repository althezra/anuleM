<x-app-layout>
    @section('title', 'Dashboard')
    <x-slot name="header">
        <h1 class="text-4xl font-semibold">Hi, {{ Str::words(Auth::user()->name, 1, '') }}!</h1>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}

    @if (Auth::user()->role == 2)
    <div class="grid grid-cols-1 xl:grid-cols-12 gap-2 xl:gap-4">
        <div class="col-span-1 xl:col-span-9 order-last xl:order-first flex flex-col gap-2 xl:gap-4">
            <div class="grid grid-cols-1 xl:grid-cols-3 gap-2">
                <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-2">
                    <div class="inline-flex justify-between items-center">
                        <span class="font-medium">Balance</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="text-[#302995] lucide lucide-dollar-sign-circle"><circle cx="12" cy="12" r="10"/><path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"/><path d="M12 18V6"/></svg>
                    </div>
                    <h5 class="text-lg flex items-end gap-2"><span class="text-3xl font-bold">0</span>USD</h5>
                    <span class="text-sm">Last updated on March 17, 2025</span>
                </div>
                <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-2">
                    <div class="inline-flex justify-between items-center">
                        <span class="font-medium">Total Streams</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="text-[#302995] lucide lucide-audio-lines"><path d="M2 10v3"/><path d="M6 6v11"/><path d="M10 3v18"/><path d="M14 8v7"/><path d="M18 5v13"/><path d="M22 10v3"/></svg>
                    </div>
                    <h5 class="text-lg flex items-end gap-2"><span class="text-3xl font-bold">0</span></h5>
                    <span class="text-sm">Last updated on March 17, 2025</span>
                </div>
                <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-2">
                    <div class="inline-flex justify-between items-center">
                        <span class="font-medium">Total Downloads</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="text-[#302995] lucide lucide-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" x2="12" y1="15" y2="3"/></svg>
                    </div>
                    <h5 class="text-lg flex items-end gap-2"><span class="text-3xl font-bold">0</span></h5>
                    <span class="text-sm">Last updated on March 17, 2025</span>
                </div>
                <div class="col-span-1 xl:col-span-3 grid grid-cols-1 xl:grid-cols-4 gap-2">
                    <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-2">
                        <div class="inline-flex justify-between items-center">
                            <span class="font-medium">Releases</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="text-[#302995] lucide lucide-gallery-vertical-end"><path d="M7 2h10"/><path d="M5 6h14"/><rect width="18" height="12" x="3" y="10" rx="2"/></svg>
                        </div>
                        <h5 class="text-lg flex items-end gap-2">
                            <span class="text-3xl font-bold">
                                0
                            </span>
                            Release
                        </h5>
                    </div>
                    <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-2">
                        <div class="inline-flex justify-between items-center">
                            <span class="font-medium">Artists</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="text-[#302995] lucide lucide-users-round"><path d="M18 21a8 8 0 0 0-16 0"/><circle cx="10" cy="8" r="5"/><path d="M22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-.45-8.3"/></svg>
                        </div>
                        <h5 class="text-lg flex items-end gap-2">
                            <span class="text-3xl font-bold">
                                0
                            </span>
                            Artist
                        </h5>
                    </div>
                    <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-2">
                        <div class="inline-flex justify-between items-center">
                            <span class="font-medium">Record Labels</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="text-[#302995]"><circle cx="12" cy="12" r="10"/><path d="M6 12c0-1.7.7-3.2 1.8-4.2"/><circle cx="12" cy="12" r="2"/><path d="M18 12c0 1.7-.7 3.2-1.8 4.2"/></svg>
                        </div>
                        <h5 class="text-lg flex items-end gap-2">
                            <span class="text-3xl font-bold">
                                @php
                                    $labels = \App\Models\RecordLabel::where('user_id', Auth::id());
                                @endphp
                                {{ $labels->count() }}
                            </span>
                            Record Label
                        </h5>
                    </div>
                    <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-2">
                        <div class="inline-flex justify-between items-center">
                            <span class="font-medium">Publishers</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="text-[#302995] lucide lucide-building"><rect width="16" height="20" x="4" y="2" rx="2" ry="2"/><path d="M9 22v-4h6v4"/><path d="M8 6h.01"/><path d="M16 6h.01"/><path d="M12 6h.01"/><path d="M12 10h.01"/><path d="M12 14h.01"/><path d="M16 10h.01"/><path d="M16 14h.01"/><path d="M8 10h.01"/><path d="M8 14h.01"/></svg>
                        </div>
                        <h5 class="text-lg flex items-end gap-2">
                            <span class="text-3xl font-bold">
                                0
                            </span>
                            Publisher
                        </h5>
                    </div>
                </div>
            </div>
            <div x-data="{
                activeSlide: 0,
                xlBreakpoint: 650,
                screenSize: window.innerWidth,
                albums: [
                    { image: '/luna-assets/luna-media/no-coverart.jpg', title: 'Summer Vibes', artist: 'DJ FlowMaster', link: '/album/summer-vibes' },
                    { image: '/luna-assets/luna-media/no-coverart.jpg', title: 'Midnight Dreams', artist: 'Luna Eclipse', link: '/album/midnight-dreams' },
                    { image: '/luna-assets/luna-media/no-coverart.jpg', title: 'Urban Rhythm', artist: 'Metro Beats', link: '/album/urban-rhythm' },
                    { image: '/luna-assets/luna-media/no-coverart.jpg', title: 'Ocean Waves', artist: 'Coral Symphony', link: '/album/ocean-waves' },
                    { image: '/luna-assets/luna-media/no-coverart.jpg', title: 'Desert Rose', artist: 'Sahara Wind', link: '/album/desert-rose' },
                    { image: '/luna-assets/luna-media/no-coverart.jpg', title: 'Mountain Echo', artist: 'Alpine Sounds', link: '/album/mountain-echo' },
                    { image: '/luna-assets/luna-media/no-coverart.jpg', title: 'City Lights', artist: 'Urban Collective', link: '/album/city-lights' },
                    { image: '/luna-assets/luna-media/no-coverart.jpg', title: 'Jungle Beats', artist: 'Wild Rhythm', link: '/album/jungle-beats' },
                    { image: '/luna-assets/luna-media/no-coverart.jpg', title: 'Electric Sky', artist: 'Neon Dreams', link: '/album/electric-sky' },
                    { image: '/luna-assets/luna-media/no-coverart.jpg', title: 'Acoustic Soul', artist: 'Wooden Echo', link: '/album/acoustic-soul' },
                    { image: '/luna-assets/luna-media/no-coverart.jpg', title: 'Sunset Groove', artist: 'Horizon Beats', link: '/album/sunset-groove' },
                    { image: '/luna-assets/luna-media/no-coverart.jpg', title: 'Morning Dew', artist: 'Dawn Chorus', link: '/album/morning-dew' },
                    { image: '/luna-assets/luna-media/no-coverart.jpg', title: 'Electric Sky', artist: 'Neon Dreams', link: '/album/electric-sky' }
                ],
                isXl() {
                    return this.screenSize >= this.xlBreakpoint;
                },
                itemsPerSlide() {
                    return this.isXl() ? 4 : 2;
                },
                slides() {
                    const itemsPerSlide = this.itemsPerSlide();
                    let result = [];
                    for (let i = 0; i < this.albums.length; i += itemsPerSlide) {
                        result.push(this.albums.slice(i, i + itemsPerSlide));
                    }
                    return result;
                },
                next() {
                    const maxSlide = this.slides().length - 1;
                    this.activeSlide = this.activeSlide === maxSlide ? 0 : this.activeSlide + 1;
                },
                prev() {
                    const maxSlide = this.slides().length - 1;
                    this.activeSlide = this.activeSlide === 0 ? maxSlide : this.activeSlide - 1;
                },
                goToSlide(index) {
                    this.activeSlide = index;
                },
                handleResize() {
                    // Store the old value to check if we need to adjust active slide
                    const oldSlideCount = this.slides().length;

                    // Update screen size
                    this.screenSize = window.innerWidth;

                    // Get new slide count
                    const newSlideCount = this.slides().length;

                    // Adjust active slide if needed to prevent out-of-bounds
                    if (this.activeSlide >= newSlideCount) {
                        this.activeSlide = newSlideCount - 1;
                    }
                }
            }"
            x-init="$nextTick(() => {
                // Initialize resize handler
                window.addEventListener('resize', () => {
                    handleResize();
                });
            })"
            class="relative">
                <!-- Main carousel container -->
                <div class="relative overflow-hidden rounded-md">
                    <!-- Slides container -->
                    <div class="flex transition-transform duration-500 ease-in-out" :style="`transform: translateX(-${activeSlide * 100}%);`">
                        <!-- Individual slide items -->
                        <template x-for="(slide, slideIndex) in slides()" :key="slideIndex">
                            <div class="min-w-full">
                                <!-- Grid layout -->
                                <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
                                    <template x-for="(item, itemIndex) in slide" :key="itemIndex">
                                        <div class="flex flex-col">
                                            <!-- Album link -->
                                            <a :href="item.link" class="group">
                                                <div class="bg-[#F5F5F5] p-4 rounded-md">
                                                    <!-- 1:1 Image container -->
                                                    <div class="relative w-full aspect-square rounded-md overflow-hidden mb-2">
                                                        <img :src="item.image" :alt="item.title" class="w-full h-full object-cover transition-transform duration-150 group-hover:scale-105">
                                                    </div>
                                                    <!-- Title and artist information -->
                                                    <div class="w-full">
                                                        <h3 x-text="item.title" class="text-sm font-semibold text-[#302995] truncate"></h3>
                                                        <p x-text="item.artist" class="text-xs text-gray-600 truncate"></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>

                <!-- Navigation arrows -->
                <button @click="prev()" class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-[#F5F5F5] hover:bg-[#EAEAEA] active:bg-[#E5E5E5] text-[#302995] p-2 rounded-full cursor-pointer transition duration-150 ease-in-out focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-left"><path d="m15 18-6-6 6-6"/></svg>
                </button>
                <button @click="next()" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-[#F5F5F5] hover:bg-[#EAEAEA] active:bg-[#E5E5E5] text-[#302995] p-2 rounded-full cursor-pointer transition duration-150 ease-in-out focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg>
                </button>

                <!-- Indicator dots -->
                <div class="flex justify-center mt-4 gap-2">
                    <div class="flex gap-2 p-2 rounded-md bg-[#F5F5F5]">
                        <template x-for="(_, index) in slides()" :key="index">
                            <button @click="goToSlide(index)" :class="{'bg-[#302995]': activeSlide === index, 'bg-gray-300': activeSlide !== index}" class="w-2 h-2 rounded-full cursor-pointer transition duration-150 ease-in-out focus:outline-none"></button>
                        </template>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-1 xl:col-span-3 order-first xl:order-last flex flex-col gap-2">
            <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-4">
                <div class="inline-flex justify-between items-center">
                    <span class="font-medium">Network Relationship</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="text-[#302995] lucide lucide-youtube"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/><path d="m10 15 5-3-5-3z"/></svg>
                </div>
                <div class="inline-flex items-center gap-4">
                    <div class="rounded-full p-3 bg-[#D6D6D6]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 -960 960 960" fill="#5C5C5C"><path d="M80-120v-720h400v160h400v560H80Zm80-80h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm160 480h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm160 480h320v-400H480v80h80v80h-80v80h80v80h-80v80Zm160-240v-80h80v80h-80Zm0 160v-80h80v80h-80Z"/></svg>
                    </div>
                    <div class="flex flex-col">
                        <h5 class="text-lg font-semibold">[Merlin] Meluna</h5>
                        <span class="text-sm">Since 2025</span>
                    </div>
                </div>
                <a href="" class="w-full rounded-sm px-4 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-center transition duration-150 ease-in-out">Manage Channels</a>
            </div>
            <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-4">
                <div class="inline-flex justify-between items-center">
                    <span class="font-medium">Quick Actions</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="text-[#302995] lucide lucide-square-slash"><rect width="18" height="18" x="3" y="3" rx="2"/><line x1="9" x2="15" y1="15" y2="9"/></svg>
                </div>
                <div class="flex flex-col items-center justify-center gap-2">
                    <a href="" class="w-full rounded-sm px-4 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-center transition duration-150 ease-in-out">Create a New Release</a>
                    <a href="{{ route('artists') }}" class="w-full rounded-sm px-4 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-center transition duration-150 ease-in-out">Create a New Artist</a>
                    <a href="" class="w-full rounded-sm px-4 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-center transition duration-150 ease-in-out">Create a New Record Label</a>
                </div>
            </div>
            <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-4">
                <div class="inline-flex justify-between items-center">
                    <span class="font-medium">What's Up in Meluna HQ?</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="text-[#302995] lucide lucide-newspaper"><path d="M15 18h-5"/><path d="M18 14h-8"/><path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-4 0v-9a2 2 0 0 1 2-2h2"/><rect x="10" y="6" width="8" height="4" rx="1"/></svg>
                </div>
                <div class="inline-flex items-center justify-center gap-4">
                    <h5 class="text-sm">There's Nothing New in Meluna</h5>
                </div>
            </div>
        </div>
    </div>
    @endif

    @if (Auth::user()->role == 0 || Auth::user()->role == 1)
    <div class="grid grid-cols-1 xl:grid-cols-12 gap-2 xl:gap-4">
        <div class="col-span-1 xl:col-span-9 order-last xl:order-first flex flex-col gap-2 xl:gap-4">
            <div class="grid grid-cols-1 xl:grid-cols-3 gap-2">
                <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-2">
                    <div class="inline-flex justify-between items-center">
                        <span class="font-medium">Balance</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="text-[#302995] lucide lucide-dollar-sign-circle"><circle cx="12" cy="12" r="10"/><path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"/><path d="M12 18V6"/></svg>
                    </div>
                    <h5 class="text-lg flex items-end gap-2"><span class="text-3xl font-bold">0</span>USD</h5>
                    <span class="text-sm">Last updated on March 17, 2025</span>
                </div>
                <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-2">
                    <div class="inline-flex justify-between items-center">
                        <span class="font-medium">Total Streams</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="text-[#302995] lucide lucide-audio-lines"><path d="M2 10v3"/><path d="M6 6v11"/><path d="M10 3v18"/><path d="M14 8v7"/><path d="M18 5v13"/><path d="M22 10v3"/></svg>
                    </div>
                    <h5 class="text-lg flex items-end gap-2"><span class="text-3xl font-bold">0</span></h5>
                    <span class="text-sm">Last updated on March 17, 2025</span>
                </div>
                <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-2">
                    <div class="inline-flex justify-between items-center">
                        <span class="font-medium">Total Downloads</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="text-[#302995] lucide lucide-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" x2="12" y1="15" y2="3"/></svg>
                    </div>
                    <h5 class="text-lg flex items-end gap-2"><span class="text-3xl font-bold">0</span></h5>
                    <span class="text-sm">Last updated on March 17, 2025</span>
                </div>
                <div class="col-span-1 xl:col-span-3 grid grid-cols-1 xl:grid-cols-4 gap-2">
                    <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-2">
                        <div class="inline-flex justify-between items-center">
                            <span class="font-medium">Releases</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="text-[#302995] lucide lucide-gallery-vertical-end"><path d="M7 2h10"/><path d="M5 6h14"/><rect width="18" height="12" x="3" y="10" rx="2"/></svg>
                        </div>
                        <h5 class="text-lg flex items-end gap-2">
                            <span class="text-3xl font-bold">
                                0
                            </span>
                            Release
                        </h5>
                    </div>
                    <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-2">
                        <div class="inline-flex justify-between items-center">
                            <span class="font-medium">Artists</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="text-[#302995] lucide lucide-users-round"><path d="M18 21a8 8 0 0 0-16 0"/><circle cx="10" cy="8" r="5"/><path d="M22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-.45-8.3"/></svg>
                        </div>
                        <h5 class="text-lg flex items-end gap-2">
                            <span class="text-3xl font-bold">
                                0
                            </span>
                            Artist
                        </h5>
                    </div>
                    <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-2">
                        <div class="inline-flex justify-between items-center">
                            <span class="font-medium">Record Labels</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="text-[#302995]"><circle cx="12" cy="12" r="10"/><path d="M6 12c0-1.7.7-3.2 1.8-4.2"/><circle cx="12" cy="12" r="2"/><path d="M18 12c0 1.7-.7 3.2-1.8 4.2"/></svg>
                        </div>
                        <h5 class="text-lg flex items-end gap-2">
                            <span class="text-3xl font-bold">
                                @php
                                    $labels = \App\Models\RecordLabel::where('user_id', Auth::id());
                                @endphp
                                {{ $labels->count() }}
                            </span>
                            Record Label
                        </h5>
                    </div>
                    <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-2">
                        <div class="inline-flex justify-between items-center">
                            <span class="font-medium">Publishers</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="text-[#302995] lucide lucide-building"><rect width="16" height="20" x="4" y="2" rx="2" ry="2"/><path d="M9 22v-4h6v4"/><path d="M8 6h.01"/><path d="M16 6h.01"/><path d="M12 6h.01"/><path d="M12 10h.01"/><path d="M12 14h.01"/><path d="M16 10h.01"/><path d="M16 14h.01"/><path d="M8 10h.01"/><path d="M8 14h.01"/></svg>
                        </div>
                        <h5 class="text-lg flex items-end gap-2">
                            <span class="text-3xl font-bold">
                                0
                            </span>
                            Publisher
                        </h5>
                    </div>
                </div>

                @if (Auth::user()->role == 0 || Auth::user()->role == 1)
                <div class="col-span-1 xl:col-span-3 grid grid-cols-1 xl:grid-cols-2 gap-2">
                    <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-2">
                        <div class="inline-flex justify-between items-center">
                            <span class="font-medium">Active Users</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-[#302995] lucide lucide-user-round-icon lucide-user-round"><circle cx="12" cy="8" r="5"/><path d="M20 21a8 8 0 0 0-16 0"/></svg>
                        </div>
                        <h5 class="text-lg flex items-end gap-2">
                            <span class="text-3xl font-bold">
                                0
                            </span>
                        </h5>
                    </div>
                    <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-2">
                        <div class="inline-flex justify-between items-center">
                            <span class="font-medium">Banned Users</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-[#302995] lucide lucide-user-round-x-icon lucide-user-round-x"><path d="M2 21a8 8 0 0 1 11.873-7"/><circle cx="10" cy="8" r="5"/><path d="m17 17 5 5"/><path d="m22 17-5 5"/></svg>
                        </div>
                        <h5 class="text-lg flex items-end gap-2">
                            <span class="text-3xl font-bold">
                                0
                            </span>
                        </h5>
                    </div>
                </div>
                <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-2">
                    <div class="inline-flex justify-between items-center">
                        <span class="font-medium">Artist</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-[#302995] lucide lucide-users-round-icon lucide-users-round"><path d="M18 21a8 8 0 0 0-16 0"/><circle cx="10" cy="8" r="5"/><path d="M22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-.45-8.3"/></svg>
                    </div>
                    <h5 class="text-lg flex items-end gap-2"><span class="text-3xl font-bold">0</span>Artist</h5>
                </div>
                <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-2">
                    <div class="inline-flex justify-between items-center">
                        <span class="font-medium">Singles</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-[#302995] lucide lucide-disc-icon lucide-disc"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="2"/></svg>
                    </div>
                    <h5 class="text-lg flex items-end gap-2"><span class="text-3xl font-bold">0</span>Singles</h5>
                </div>
                <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-2">
                    <div class="inline-flex justify-between items-center">
                        <span class="font-medium">EPs</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-[#302995] lucide lucide-disc2-icon lucide-disc-2"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="4"/><path d="M12 12h.01"/></svg>
                    </div>
                    <h5 class="text-lg flex items-end gap-2"><span class="text-3xl font-bold">0</span>EPs</h5>
                </div>
                <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-2">
                    <div class="inline-flex justify-between items-center">
                        <span class="font-medium">Albums</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-[#302995] lucide lucide-disc-album-icon lucide-disc-album"><rect width="18" height="18" x="3" y="3" rx="2"/><circle cx="12" cy="12" r="5"/><path d="M12 12h.01"/></svg>
                    </div>
                    <h5 class="text-lg flex items-end gap-2"><span class="text-3xl font-bold">0</span>Albums</h5>
                </div>
                <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-2">
                    <div class="inline-flex justify-between items-center">
                        <span class="font-medium">Releases</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-[#302995] lucide lucide-layers-icon lucide-layers"><path d="M12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83z"/><path d="M2 12a1 1 0 0 0 .58.91l8.6 3.91a2 2 0 0 0 1.65 0l8.58-3.9A1 1 0 0 0 22 12"/><path d="M2 17a1 1 0 0 0 .58.91l8.6 3.91a2 2 0 0 0 1.65 0l8.58-3.9A1 1 0 0 0 22 17"/></svg>
                    </div>
                    <h5 class="text-lg flex items-end gap-2"><span class="text-3xl font-bold">0</span>Releases</h5>
                </div>
                <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-2">
                    <div class="inline-flex justify-between items-center">
                        <span class="font-medium">Tracks</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-[#302995] lucide lucide-file-music-icon lucide-file-music"><path d="M10.5 22H18a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v8.4"/><path d="M8 18v-7.7L16 9v7"/><circle cx="14" cy="16" r="2"/><circle cx="6" cy="18" r="2"/></svg>
                    </div>
                    <h5 class="text-lg flex items-end gap-2"><span class="text-3xl font-bold">0</span>Tracks</h5>
                </div>
                @endif
            </div>
            <div x-data="{
                activeSlide: 0,
                xlBreakpoint: 650,
                screenSize: window.innerWidth,
                albums: [
                    { image: '/luna-assets/luna-media/no-coverart.jpg', title: 'Summer Vibes', artist: 'DJ FlowMaster', link: '/album/summer-vibes' },
                    { image: '/luna-assets/luna-media/no-coverart.jpg', title: 'Midnight Dreams', artist: 'Luna Eclipse', link: '/album/midnight-dreams' },
                    { image: '/luna-assets/luna-media/no-coverart.jpg', title: 'Urban Rhythm', artist: 'Metro Beats', link: '/album/urban-rhythm' },
                    { image: '/luna-assets/luna-media/no-coverart.jpg', title: 'Ocean Waves', artist: 'Coral Symphony', link: '/album/ocean-waves' },
                    { image: '/luna-assets/luna-media/no-coverart.jpg', title: 'Desert Rose', artist: 'Sahara Wind', link: '/album/desert-rose' },
                    { image: '/luna-assets/luna-media/no-coverart.jpg', title: 'Mountain Echo', artist: 'Alpine Sounds', link: '/album/mountain-echo' },
                    { image: '/luna-assets/luna-media/no-coverart.jpg', title: 'City Lights', artist: 'Urban Collective', link: '/album/city-lights' },
                    { image: '/luna-assets/luna-media/no-coverart.jpg', title: 'Jungle Beats', artist: 'Wild Rhythm', link: '/album/jungle-beats' },
                    { image: '/luna-assets/luna-media/no-coverart.jpg', title: 'Electric Sky', artist: 'Neon Dreams', link: '/album/electric-sky' },
                    { image: '/luna-assets/luna-media/no-coverart.jpg', title: 'Acoustic Soul', artist: 'Wooden Echo', link: '/album/acoustic-soul' },
                    { image: '/luna-assets/luna-media/no-coverart.jpg', title: 'Sunset Groove', artist: 'Horizon Beats', link: '/album/sunset-groove' },
                    { image: '/luna-assets/luna-media/no-coverart.jpg', title: 'Morning Dew', artist: 'Dawn Chorus', link: '/album/morning-dew' },
                    { image: '/luna-assets/luna-media/no-coverart.jpg', title: 'Electric Sky', artist: 'Neon Dreams', link: '/album/electric-sky' }
                ],
                isXl() {
                    return this.screenSize >= this.xlBreakpoint;
                },
                itemsPerSlide() {
                    return this.isXl() ? 4 : 2;
                },
                slides() {
                    const itemsPerSlide = this.itemsPerSlide();
                    let result = [];
                    for (let i = 0; i < this.albums.length; i += itemsPerSlide) {
                        result.push(this.albums.slice(i, i + itemsPerSlide));
                    }
                    return result;
                },
                next() {
                    const maxSlide = this.slides().length - 1;
                    this.activeSlide = this.activeSlide === maxSlide ? 0 : this.activeSlide + 1;
                },
                prev() {
                    const maxSlide = this.slides().length - 1;
                    this.activeSlide = this.activeSlide === 0 ? maxSlide : this.activeSlide - 1;
                },
                goToSlide(index) {
                    this.activeSlide = index;
                },
                handleResize() {
                    // Store the old value to check if we need to adjust active slide
                    const oldSlideCount = this.slides().length;

                    // Update screen size
                    this.screenSize = window.innerWidth;

                    // Get new slide count
                    const newSlideCount = this.slides().length;

                    // Adjust active slide if needed to prevent out-of-bounds
                    if (this.activeSlide >= newSlideCount) {
                        this.activeSlide = newSlideCount - 1;
                    }
                }
            }"
            x-init="$nextTick(() => {
                // Initialize resize handler
                window.addEventListener('resize', () => {
                    handleResize();
                });
            })"
            class="relative">
                <!-- Main carousel container -->
                <div class="relative overflow-hidden rounded-md">
                    <!-- Slides container -->
                    <div class="flex transition-transform duration-500 ease-in-out" :style="`transform: translateX(-${activeSlide * 100}%);`">
                        <!-- Individual slide items -->
                        <template x-for="(slide, slideIndex) in slides()" :key="slideIndex">
                            <div class="min-w-full">
                                <!-- Grid layout -->
                                <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
                                    <template x-for="(item, itemIndex) in slide" :key="itemIndex">
                                        <div class="flex flex-col">
                                            <!-- Album link -->
                                            <a :href="item.link" class="group">
                                                <div class="bg-[#F5F5F5] p-4 rounded-md">
                                                    <!-- 1:1 Image container -->
                                                    <div class="relative w-full aspect-square rounded-md overflow-hidden mb-2">
                                                        <img :src="item.image" :alt="item.title" class="w-full h-full object-cover transition-transform duration-150 group-hover:scale-105">
                                                    </div>
                                                    <!-- Title and artist information -->
                                                    <div class="w-full">
                                                        <h3 x-text="item.title" class="text-sm font-semibold text-[#302995] truncate"></h3>
                                                        <p x-text="item.artist" class="text-xs text-gray-600 truncate"></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>

                <!-- Navigation arrows -->
                <button @click="prev()" class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-[#F5F5F5] hover:bg-[#EAEAEA] active:bg-[#E5E5E5] text-[#302995] p-2 rounded-full cursor-pointer transition duration-150 ease-in-out focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-left"><path d="m15 18-6-6 6-6"/></svg>
                </button>
                <button @click="next()" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-[#F5F5F5] hover:bg-[#EAEAEA] active:bg-[#E5E5E5] text-[#302995] p-2 rounded-full cursor-pointer transition duration-150 ease-in-out focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg>
                </button>

                <!-- Indicator dots -->
                <div class="flex justify-center mt-4 gap-2">
                    <div class="flex gap-2 p-2 rounded-md bg-[#F5F5F5]">
                        <template x-for="(_, index) in slides()" :key="index">
                            <button @click="goToSlide(index)" :class="{'bg-[#302995]': activeSlide === index, 'bg-gray-300': activeSlide !== index}" class="w-2 h-2 rounded-full cursor-pointer transition duration-150 ease-in-out focus:outline-none"></button>
                        </template>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-1 xl:col-span-3 order-first xl:order-last flex flex-col gap-2">
            <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-4">
                <div class="inline-flex justify-between items-center">
                    <span class="font-medium">Network Relationship</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="text-[#302995] lucide lucide-youtube"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/><path d="m10 15 5-3-5-3z"/></svg>
                </div>
                <div class="inline-flex items-center gap-4">
                    <div class="rounded-full p-3 bg-[#D6D6D6]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 -960 960 960" fill="#5C5C5C"><path d="M80-120v-720h400v160h400v560H80Zm80-80h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm160 480h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm160 480h320v-400H480v80h80v80h-80v80h80v80h-80v80Zm160-240v-80h80v80h-80Zm0 160v-80h80v80h-80Z"/></svg>
                    </div>
                    <div class="flex flex-col">
                        <h5 class="text-lg font-semibold">[Merlin] Meluna</h5>
                        <span class="text-sm">Since 2025</span>
                    </div>
                </div>
                <a href="" class="w-full rounded-sm px-4 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-center transition duration-150 ease-in-out">Manage Channels</a>
            </div>
            <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-4">
                <div class="inline-flex justify-between items-center">
                    <span class="font-medium">Quick Actions</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="text-[#302995] lucide lucide-square-slash"><rect width="18" height="18" x="3" y="3" rx="2"/><line x1="9" x2="15" y1="15" y2="9"/></svg>
                </div>
                <div class="flex flex-col items-center justify-center gap-2">
                    <a href="" class="w-full rounded-sm px-4 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-center transition duration-150 ease-in-out">Create a New Release</a>
                    <a href="{{ route('artists') }}" class="w-full rounded-sm px-4 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-center transition duration-150 ease-in-out">Create a New Artist</a>
                    <a href="" class="w-full rounded-sm px-4 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-center transition duration-150 ease-in-out">Create a New Record Label</a>
                </div>
            </div>
            <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-4">
                <div class="inline-flex justify-between items-center">
                    <span class="font-medium">What's Up in Meluna HQ?</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="text-[#302995] lucide lucide-newspaper"><path d="M15 18h-5"/><path d="M18 14h-8"/><path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-4 0v-9a2 2 0 0 1 2-2h2"/><rect x="10" y="6" width="8" height="4" rx="1"/></svg>
                </div>
                <div class="inline-flex items-center justify-center gap-4">
                    <h5 class="text-sm">There's Nothing New in Meluna</h5>
                </div>
            </div>
        </div>
    </div>
    @endif
</x-app-layout>
