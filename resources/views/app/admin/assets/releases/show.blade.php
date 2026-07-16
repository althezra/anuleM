<x-app-layout>
    @section('title', 'ReleaseDetails')

    <div class="space-y-6 px-4">

        <!-- Header Section -->
        <div class="flex flex-col sm:flex-row sm:items-center gap-3">
            <div class="text-xl md:text-3xl font-semibold text-gray-900">Release Details: JAPAN - Famous Dex</div>
            <div
                class="bg-[#17A248] text-white px-4 md:px-8 py-2 rounded-full text-sm font-semibold w-fit flex items-center gap-2">
                <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-info-icon lucide-info">
                        <circle cx="12" cy="12" r="10" />
                        <path d="M12 16v-4" />
                        <path d="M12 8h.01" />
                    </svg></span>Takedown Requested
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex flex-wrap items-center gap-2 sm:gap-3">
            <a href="{{ route('admin.releases') }}"
                class="px-4 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] rounded-sm text-sm font-medium cursor-pointer text-center">
                Back
            </a>
            <div
                class="px-4 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] rounded-sm text-sm font-medium cursor-pointer text-center transition-colors">
                Edit
            </div>
            <div
                class="px-4 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] rounded-sm text-sm font-medium cursor-pointer text-center transition-colors">
                Download
            </div>

            <!-- Divider -->
            <div class="w-full sm:w-[2px] h-1 sm:h-10 bg-[#424242] my-1 sm:my-0"></div>

            <div
                class="px-4 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] rounded-sm text-sm font-medium cursor-pointer text-center transition-colors">
                Approve
            </div>
            <button @click.prevent="$store.modals.openEditModal()"
                class="px-4 py-2 text-[#F5F5F5] bg-[#FF0707] hover:bg-[#CC0606] active:bg-[#990505] rounded-sm text-sm font-medium cursor-pointer text-center transition-colors">
                Reject
            </button>
        </div>



        {{-- Release Information --}}
        <div class="flex items-center space-x-3">
            <div
                class="w-12 h-12 rounded-full flex items-center justify-center text-white font-bold text-xl bg-[#302995] relative">
                1
            </div>
            <h2 class="text-xl md:text-2xl font-semibold text-[#2F2F2F]">
                Release Information
            </h2>
        </div>


        <div class="flex flex-col lg:flex-row gap-6 lg:gap-8">
            <!-- Album Cover -->
            <div class="flex-shrink-0">
                <img src="{{ asset('luna-assets/luna-media/no-coverart.jpg') }}" alt="Albumcover"
                    class="w-full lg:w-81 lg:h-81 bg-gray-200 flex items-center justify-center object-cover">
            </div>


            <!-- Release Information -->
            <div class="flex-1 space-y-4">
                <!-- Release no -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Release Title</label>
                    <input type="text" value="JAPAN"
                        class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                        disabled>
                </div>

                <!-- Primary title -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Primary Artist</label>
                    <input type="text" value="Famous Dex"
                        class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                        disabled>
                </div>

                <!-- Featured title -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Featured Artist</label>
                    <input type="text" value="-"
                        class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                        disabled>
                </div>

                <!-- Record Label -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Record Label</label>
                    <input type="text" value="PT. Meluna Media Kreativitas Indonesia"
                        class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                        disabled>
                </div>
            </div>
        </div>

        <!-- Bottom Section - Responsive Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6 mt-8">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">User (Uploader)</label>
                <input type="text" value="User"
                    class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                    disabled>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Release Date</label>
                <input type="text" value="Jul 11, 2025"
                    class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                    disabled>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">UPC/EAN</label>
                <input type="text" value="198005123123"
                    class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                    disabled>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Submitted Date</label>
                <input type="text" value="Jul 9, 2025"
                    class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                    disabled>
            </div>
        </div>


        <!-- Release Info Section -->
        <div class="mt-6">
            <h2 class="text-xl font-semibold text-[#1F1F1F] mb-4">Release Info</h2>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Left Column -->
                <div class="space-y-4">
                    <!-- Release Type -->
                    <div class="w-full flex flex-col gap-2">
                        <label class="text-xl font-semibold xl:text-sm text-[#1F1F1F]">Release Type</label>
                        <input type="text" value="Album"
                            class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                            disabled>
                    </div>

                    <!-- Submission Type -->
                    <div class="w-full flex flex-col gap-2">
                        <label class="text-xl font-semibold xl:text-sm text-[#1F1F1F]">Submission Type</label>
                        <input type="text" value="Re-Release"
                            class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                            disabled>
                    </div>

                    <!-- Primary Genre and Sub-genre in one row -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Primary Genre -->
                        <div class="w-full flex flex-col gap-2">
                            <label class="text-xl font-semibold xl:text-sm text-[#1F1F1F]">Primary Genre</label>
                            <input type="text" value="HipHop/Rap"
                                class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                                disabled>
                        </div>

                        <!-- Sub-genre -->
                        <div class="w-full flex flex-col gap-2">
                            <label class="text-xl font-semibold xl:text-sm text-[#1F1F1F]">Sub-genre</label>
                            <input type="text" value="Lo-fi Hip-Hop"
                                class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                                disabled>
                        </div>
                    </div>

                    <!-- Main Language -->
                    <div class="w-full flex flex-col gap-2">
                        <label class="text-xl font-semibold xl:text-sm text-[#1F1F1F]">Main Language</label>
                        <input type="text" value="English"
                            class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                            disabled>
                    </div>

                    <!-- Availability -->
                    <div class="w-full flex flex-col gap-2">
                        <label class="text-xl font-semibold xl:text-sm text-[#1F1F1F]">Availability</label>
                        <input type="text" value="English"
                            class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                            disabled>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="space-y-4">
                    <!-- Copyright (C Line) -->
                    <div class="w-full flex flex-col gap-2">
                        <label class="text-xl font-semibold xl:text-sm text-[#1F1F1F]">Copyright (C Line)</label>
                        <input type="text" value="© 2025 Famous Dex"
                            class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                            disabled>
                    </div>

                    <!-- Publishing (P Line) -->
                    <div class="w-full flex flex-col gap-2">
                        <label class="text-xl font-semibold xl:text-sm text-[#1F1F1F]">Publishing (P Line)</label>
                        <input type="text" value="℗ 2025 Meluna Records"
                            class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                            disabled>
                    </div>

                    <!-- Description -->
                    <div class="w-full flex flex-col gap-2">
                        <label class="text-xl font-semibold xl:text-sm text-[#1F1F1F]">Description</label>
                        <textarea rows="6"
                            class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out disabledresize-none"
                            disabled>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate illo labore, qui neque natus id eos rerum itaque sunt nisi similique vero voluptates facilis ullam dolores, explicabo quis reiciendis earum quaerat. Reprehenderit iure magnam vero quod dolorem dolorum nisi ipsa dignissimos, animi enim accusamus expedita soluta velit numquam possimus quisquam voluptate at officiis quasi sunt veritatis quis? Amet ut culpa molestias voluptatibus quod eligendi! Sint rem laudantium explicabo perspiciatis vitae non beatae provident voluptatibus officia.</textarea>

                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6">
            <h2 class="text-xl font-semibold mb-4">Contributor Info</h2>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                <div class="space-y-4">
                    {{-- Composer --}}
                    <div class="w-full flex flex-col gap-2">
                        <label class="text-xl font-semibold xl:text-sm text-[#1F1F1F]">Composer</label>
                        <input type="text" value="John Doe"
                            class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                            disabled>
                    </div>

                    {{-- Lyricist --}}
                    <div class="w-full flex flex-col gap-2">
                        <label class="text-xl font-semibold xl:text-sm text-[#1F1F1F]">Lyricist</label>
                        <input type="text" value="Jane Smith"
                            class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                            disabled>
                    </div>

                    {{-- Producer --}}
                    <div class="w-full flex flex-col gap-2">
                        <label class="text-xl font-semibold xl:text-sm text-[#1F1F1F]">Producer</label>
                        <input type="text" value="Famous Dex"
                            class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                            disabled>
                    </div>
                </div>

                <div class="space-y-4">
                    {{-- Arranger --}}
                    <div class="w-full flex flex-col gap-2">
                        <label class="text-xl font-semibold xl:text-sm text-[#1F1F1F]">Arranger</label>
                        <input type="text" value="-"
                            class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                            disabled>
                    </div>

                    {{-- Mixing Engineer --}}
                    <div class="w-full flex flex-col gap-2">
                        <label class="text-xl font-semibold xl:text-sm text-[#1F1F1F]">Mixing Engineer</label>
                        <input type="text" value="-"
                            class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                            disabled>
                    </div>

                    {{-- Mastering Engineer --}}
                    <div class="w-full flex flex-col gap-2">
                        <label class="text-xl font-semibold xl:text-sm text-[#1F1F1F]">Primary Genre</label>
                        <input type="text" value="-"
                            class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                            disabled>
                    </div>
                </div>

            </div>

        </div>


        <div class="grid grid-cols-1 xl:grid-cols-12 gap-2 xl:gap-4">
            <div class="col-span-1 xl:col-span-12 flex flex-col gap-2 xl:gap-4">

                <div class="flex items-center space-x-3">
                    <div
                        class="w-12 h-12 rounded-full flex items-center justify-center text-white font-bold text-xl bg-[#302995] relative">
                        2
                    </div>
                    <h2 class="text-xl md:text-2xl font-semibold text-[#2F2F2F]">
                        Tracks Information
                    </h2>
                </div>
                <div class="mb-1">
                    <h1 class="text-xl flex justify-center xl:justify-start font-semibold">Tracklist</h1>
                </div>

                <div class="grid grid-cols-1 xl:grid-cols-1 gap-2">
                    <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-2">
                        <div class="inline-flex justify-between items-center">
                            <span class="font-semibold">Tracks</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-audio-lines-icon lucide-audio-lines text-[#302995]">
                                <path d="M2 10v3" />
                                <path d="M6 6v11" />
                                <path d="M10 3v18" />
                                <path d="M14 8v7" />
                                <path d="M18 5v13" />
                                <path d="M22 10v3" />
                            </svg>

                        </div>
                        <h5 class="text-lg flex items-end gap-2">
                            <span id="totalReleases" class="text-3xl font-bold">0</span>
                            Tracks
                        </h5>
                    </div>
                </div>

                <!-- Table Container -->
                <div id="tableContainer">
                    <table id="releasesTable">
                        <thead>
                            <tr>
                                <th><span>No</span></th>
                                <th><span>Title</span></th>
                                <th><span>ISRC</span></th>
                                <th><span>Duration</span></th>
                                <th><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-arrow-down-up-icon lucide-arrow-down-up">
                                            <path d="m3 16 4 4 4-4" />
                                            <path d="M7 20V4" />
                                            <path d="m21 8-4-4-4 4" />
                                            <path d="M17 4v16" />
                                        </svg></span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data akan diisi oleh JavaScript -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="mt-6">

            {{-- Distribute Information --}}
            <div class="flex items-center space-x-3 mb-4">
                <div
                    class="w-12 h-12 rounded-full flex items-center justify-center text-white font-bold text-xl bg-[#302995] relative">
                    3
                </div>
                <h2 class="text-xl md:text-2xl font-semibold text-[#2F2F2F]">
                    Distribute Information
                </h2>
            </div>
            <!-- Platform Selection -->
            <div>
                <h2 class="text-xl font-semibold text-black mb-4">Platform Link</h2>

                <div class="mb-4">
                    <div class="flex flex-wrap gap-3 mb-3">
                        <!-- Spotify -->
                        <label
                            class="inline-flex items-center px-4 py-3 lg:px-5 lg:py-5 bg-[#F5F5F5] border-none rounded-sm cursor-pointer hover:bg-gray-50">
                            <img src="{{ asset('images/spotify.png') }}" class="w-20 h-auto object-contain">
                        </label>

                        <!-- Apple Music -->
                        <label
                            class="inline-flex items-center px-4 py-3 lg:px-5 lg:py-5 bg-[#F5F5F5] border-none rounded-sm cursor-pointer hover:bg-gray-50">
                            <img src="{{ asset('images/applemusic.png') }}" class="w-20 h-auto object-contain">
                        </label>

                        <!-- YouTube Music -->
                        <label
                            class="inline-flex items-center px-4 py-3 lg:px-5 lg:py-5 bg-[#F5F5F5] border-none rounded-sm cursor-pointer hover:bg-gray-50">
                            <img src="{{ asset('images/ytmusic.png') }}" class="w-20 h-auto object-contain">
                        </label>

                        <!-- Instagram -->
                        <label
                            class="inline-flex items-center px-4 py-3 lg:px-5 lg:py-5 bg-[#F5F5F5] border-none rounded-sm cursor-pointer hover:bg-gray-50">
                            <img src="{{ asset('images/instagram.png') }}" class="w-20 h-auto object-contain">
                        </label>

                        <!-- TikTok -->
                        <label
                            class="inline-flex items-center px-4 py-3 lg:px-5 lg:py-5 bg-[#F5F5F5] border-none rounded-sm cursor-pointer hover:bg-gray-50">
                            <img src="{{ asset('images/tiktok.png') }}" class="w-20 h-auto object-contain">
                        </label>
                    </div>
                </div>
            </div>

        </div>

        <div x-data>
            <div x-show="$store.modals.viewModalOpen" x-transition:enter="transition ease-out duration-150"
                x-transition:enter-start="opacity-0 transform" x-transition:enter-end="opacity-100 transform"
                x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 transform"
                x-transition:leave-end="opacity-0 transform" class="fixed inset-0 z-50 overflow-y-auto" x-cloak>
                <!-- Backdrop -->
                <div class="fixed inset-0 bg-black opacity-25 transition-opacity"
                    x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                    @click="$store.modals.closeViewModal()"></div>
                <!-- Modal Content -->

                <div class="flex items-center justify-center min-h-screen p-4">
                    <div class="relative bg-white rounded-lg shadow-xl w-full p-7 max-w-6xl mx-auto transform transition-all"
                        @click.outside="$store.modals.closeTrackModal()">

                        <!-- Header -->
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xl font-semibold text-gray-900">Track Details</h2>
                            <button @click="$store.modals.closeViewModal()"
                                class="text-gray-400 hover:text-gray-600 cursor-pointer">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>

                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 h-full">

                            <!-- Left Column - Form Fields -->
                            <div class="space-y-4">

                                <div class="bg-white px-6 py-2 border border-[#D6D6D6] w-full rounded-md">
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="text-lg font-semibold text-[#1F1F1F]">JAPAN</span>
                                        <button class="cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-download-icon lucide-download">
                                                <path d="M12 15V3" />
                                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                                                <path d="m7 10 5 5 5-5" />
                                            </svg>
                                        </button>
                                    </div>

                                    <!-- Progress Bar -->
                                    <div class="relative">
                                        <div class="flex items-center space-x-2">
                                            <button class="cursor-pointer">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-play-icon lucide-play text-[#302995]">
                                                    <path
                                                        d="M5 5a2 2 0 0 1 3.008-1.728l11.997 6.998a2 2 0 0 1 .003 3.458l-12 7A2 2 0 0 1 5 19z" />
                                                </svg>
                                            </button>
                                            <div class="w-full h-1 bg-[#D6D6D6] rounded-full">
                                                <div class="w-1/4 h-1 bg-[#302995] rounded-full"></div>
                                            </div>
                                        </div>
                                        <div class="flex justify-between text-sm text-[#1F1F1F] mt-1">
                                            <span class="ml-6">0:47</span>
                                            <span>3:15</span>
                                        </div>
                                    </div>
                                </div>




                                <!-- Track Title -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Track
                                        Title</label>
                                    <input type="text" value="JAPAN"
                                        class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                                        disabled>
                                </div>

                                <!-- ISRC -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">ISRC</label>
                                    <input type="text" value="GBAHSxxxxxxxx"
                                        class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                                        disabled>
                                </div>

                                <!-- Explicit Content -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Explicit
                                        Content</label>
                                    <input type="text" value="YES"
                                        class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                                        disabled>
                                </div>

                                <!-- Lyrics Language -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Lyrics
                                        Language</label>
                                    <input type="text" value="English"
                                        class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                                        disabled>
                                </div>

                                <!-- Attributes -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Attributes</label>
                                    <input type="text" placeholder="-"
                                        class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                                        disabled>
                                </div>

                                <!-- Primary Artist -->
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Primary
                                        Artist</label>
                                    <input type="text" value="Famous Dex"
                                        class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                                        disabled>
                                </div>
                            </div>

                            <!-- Right Column - Description -->
                            <div class="h-full flex flex-col">
                                <textarea
                                    class="w-full h-full px-4 py-2 bg-[#F5F5F5] border text-[#1F1F1F] border-[#D6D6D6] rounded-md outline-none focus:border-[#302995] transition duration-150 ease-in-out resize-none text-sm leading-relaxed"
                                    disabled>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eu leo sed ex euismod porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aenean scelerisque massa tellus, ut lobortis massa accumsan eu. Pellentesque sit amet porttitor enim. Donec posuere mauris eget diam faucibus, quis maximus..
justo bibendum. Nullam lobortis consectetur urna, in posuere felis fermentum feugiat. Curabitur id tempus mi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam porta a arcu eu
finibus. Suspendisse eget nisl enim. Mauris eget velit feugiat justo consequat dapibus eget tristique turpis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nam in interdum erat, vitae finibus nisl.
Morbi sed tincidunt erat. Phasellus tempus, lectus a ultricies luctus, libero risus varius mi, vitae convallis tellus ligula eu neque. Maecenas vel congue mi. Nulla tincidunt ex euismod lectus ultrices fringilla. Duis sit amet
condimentum mauris. Nulla facilisi. Pellentesque nec mi mattis ipsum fermentum egestas vitae nec nibh. Nunc sed dui laoreet, placerat nisl eget, ornare neque. Ut nec pretium turpis. Phasellus fermentum ligula eu ex tristique tincidunt. Donec faucibus consequat eros sit amet rutrum.</textarea>
                            </div>
                        </div>
                        <!-- Loading -->
                        <div x-show="$store.modals.loadingIn" x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                            class="absolute inset-0 flex items-center justify-center bg-[#F5F5F5] rounded-md z-10">
                            <div
                                class="w-16 h-16 border-4 border-[#302995] border-t-[#302995]/50 rounded-full animate-spin">
                            </div>
                        </div>

                        <div x-show="$store.modals.loadingOut" x-transition:enter="transition ease-in duration-150"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            class="absolute inset-0 flex items-center justify-center bg-[#F5F5F5] rounded-md z-10">
                            <div
                                class="w-16 h-16 border-4 border-[#302995] border-t-[#302995]/50 rounded-full animate-spin">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div x-show="$store.modals.editModalOpen" x-transition:enter="transition ease-out duration-150"
                x-transition:enter-start="opacity-0 transform" x-transition:enter-end="opacity-100 transform"
                x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 transform"
                x-transition:leave-end="opacity-0 transform" class="fixed inset-0 z-50 overflow-y-auto" x-cloak>
                <!-- Backdrop -->
                <div class="fixed inset-0 bg-black opacity-25 transition-opacity"
                    x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                    @click="$store.modals.closeViewModal()"></div>
                <!-- Modal Content -->
                <div class="flex items-center justify-center min-h-screen p-4">
                    <div class="relative bg-[#F5F5F5] p-5 rounded-md w-full max-w-xl mx-auto transform transition-all"
                        @click.outside="$store.modals.closeEditModal()">
                        <div x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100">

                            <div class="mb-2">
                                <h2 class="text-xl font-semibold text-black">Reject Takedown Request
                                </h2>
                            </div>

                            <div>

                                <!-- Reason Textarea -->
                                <label for="reason"
                                    class="block text-md font-semibold text-[#3F3F3F] mb-1">Reason</label>
                                <div class="mb-4">
                                    <textarea rows="6"
                                        class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"></textarea>
                                </div>

                                <!-- Action Buttons -->
                                <div class="flex space-x-3">
                                    <button @click="$store.modals.closeEditModal()"
                                        class="flex-1 px-4 py-2 text-[#302995] border border-[#302995] rounded-md hover:bg-gray-50 font-medium cursor-pointer">
                                        Cancel
                                    </button>
                                    <button @click="$store.modals.submitTakedown()"
                                        class="flex-1 px-4 py-2 bg-[#F40000] text-white rounded-md hover:bg-red-700 focus:outline-none  font-medium cursor-pointer">
                                        Reject
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Loading -->
                        <div x-show="$store.modals.loadingIn" x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                            class="absolute inset-0 flex items-center justify-center bg-[#F5F5F5] rounded-md z-10">
                            <div
                                class="w-16 h-16 border-4 border-[#302995] border-t-[#302995]/50 rounded-full animate-spin">
                            </div>
                        </div>

                        <div x-show="$store.modals.loadingOut" x-transition:enter="transition ease-in duration-150"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            class="absolute inset-0 flex items-center justify-center bg-[#F5F5F5] rounded-md z-10">
                            <div
                                class="w-16 h-16 border-4 border-[#302995] border-t-[#302995]/50 rounded-full animate-spin">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script>
            document.addEventListener('alpine:init', function () {
                Alpine.store('modals', {
                    createModalOpen: false,
                    editModalOpen: false,
                    viewModalOpen: false,
                    loadingIn: false,
                    loadingOut: false,
                    editReleaseData: {
                        id: null,
                        no: '',
                        title: '',
                        ISRC: '',
                        Duration: ''
                    },
                    viewReleaseData: {
                        id: null,
                        no: '',
                        title: '',
                        ISRC: '',
                        Duration: ''
                    },
                    openCreateModal() {
                        this.createModalOpen = true;
                    },
                    closeCreateModal() {
                        this.createModalOpen = false;
                    },
                    openEditModal(data) {
                        this.loadingIn = true;
                        this.viewModalOpen = false;
                        this.editModalOpen = true;
                        setTimeout(() => {
                            this.editReleaseData = data;
                            this.loadingIn = false;
                        }, 500);
                    },
                    closeEditModal() {
                        this.loadingOut = true;
                        setTimeout(() => {
                            this.loadingOut = false;
                            this.editReleaseData = {
                                id: null,
                                no: '',
                                title: '',
                                ISRC: '',
                                Duration: ''
                            };
                        }, 500);
                        this.editModalOpen = false;
                    },
                    openViewModal(data) {
                        this.loadingIn = true;
                        this.viewModalOpen = true;
                        setTimeout(() => {
                            this.viewReleaseData = data;
                            this.loadingIn = false;
                        }, 500);
                    },
                    closeViewModal() {
                        this.loadingOut = true;
                        setTimeout(() => {
                            this.loadingOut = false;
                            this.viewReleaseData = {
                                id: null,
                                no: '',
                                title: '',
                                ISRC: '',
                                Duration: ''
                            };
                        }, 500);
                        this.viewModalOpen = false;
                    }
                });
            });

            document.addEventListener('DOMContentLoaded', function () {
                // Sample data untuk testing - tambahkan data di sini
                const releasesData = [
                    {
                        id: 1,
                        no: "1",
                        title: "JAPAN",
                        ISRC: "GBAHSxxxxxxxx",
                        Duration: "3:15",
                    },
                ];

                // Update total count
                document.getElementById('totalReleases').textContent = releasesData.length;

                // Add sample data to table if needed
                const tableBody = document.querySelector('#releasesTable tbody');
                releasesData.forEach(release => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
          <td>
                <span class="font-semibold text-sm xl:text-md">${release.no}</span>
          </td>
          <td>
              <span class="font-semibold text-sm xl:text-md">${release.title}</span>
          </td>
          <td>
              <span class="font-semibold text-sm xl:text-md">${release.ISRC}</span>
          </td>
          <td>
                      <span class="font-semibold text-sm xl:text-md">${release.Duration}</span>
          </td>
          <td>
              <div class="flex h-15 items-center gap-2 opacity-0 group-hover:opacity-100 transition duration-150 ease-in-out">
                  <button type="button" class="view-more-btn rounded-full p-2 text-[#302995] bg-transparent hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 text-center cursor-pointer transition duration-150 ease-in-out"
                      data-id="${release.id}"
                      data-no="${release.no}"
                      data-title="${release.title}"
                      data-release-date="${release.ISRC}"
                      data-Duration="${release.Duration}">
                  </button>
              </div>
          </td>
      `;
                    tableBody.appendChild(row);
                });


                const dataTable = new simpleDatatables.DataTable("#releasesTable", {
                    searchable: true,
                    sortable: false,
                    fixedHeight: false,
                    fixedWidth: false,
                    perPage: 5,
                    perPageSelect: [5, 10, 15, 20, 25, ['All', -1]],
                    labels: {
                        placeholder: "Search entries...",
                        perPage: "Show {select} entries per page",
                        noRows: "No matching Releases found",
                        info: "Showing {start} to {end} of {rows} entries",
                    },
                    classes: {
                        active: "lunatable-active",
                        bottom: "lunatable-bottom",
                        container: "lunatable-container",
                        cursor: "datatable-cursor",
                        dropdown: "datatable-dropdown",
                        ellipsis: "datatable-ellipsis",
                        empty: "datatable-empty",
                        headercontainer: "datatable-headercontainer",
                        info: "datatable-info",
                        input: "lunatable-input",
                        loading: "datatable-loading",
                        pagination: "lunatable-pagination",
                        paginationList: "lunatable-pagination-list",
                        search: "datatable-search",
                        selector: "lunatable-selector",
                        sorter: "datatable-sorter text-left",
                        table: "lunatable-table",
                        top: "lunatable-top",
                        wrapper: "lunatable-wrapper",
                    },
                });

                function applyCustomStyles() {
                    document.querySelector(".lunatable-wrapper")?.classList.add("flex", "flex-col", "gap-2");
                    document.querySelector(".lunatable-table")?.classList.add("w-full", "max-w-full");
                    document.querySelector(".lunatable-pagination-list")?.classList.add("grid", "xl:flex", "grid-cols-5", "gap-2");
                    document.querySelector(".lunatable-top")?.classList.add(
                        "bg-[#F5F5F5]", "px-6", "py-4", "rounded-md", "flex", "flex-col", "xl:flex-row", "gap-2", "items-center", "justify-between"
                    );
                    document.querySelector(".lunatable-bottom")?.classList.add(
                        "bg-[#F5F5F5]", "px-6", "py-4", "rounded-md", "flex", "flex-col", "xl:flex-row", "gap-2", "items-center", "justify-between"
                    );
                    document.querySelector(".lunatable-container")?.classList.add(
                        "bg-[#F5F5F5]", "px-6", "pb-4", "rounded-md", "flex", "flex-row", "gap-2", "overflow-x-auto", "overflow-y-auto"
                    );
                    document.querySelector(".lunatable-input")?.classList.add(
                        "px-4", "py-2", "rounded-sm", "outline-none", "text-[#1F1F1F]", "placeholder:text-[#D6D6D6]", "border", "border-[#D6D6D6]", "focus:border-[#1F1F1F]", "transition", "duration-150", "ease-in-out"
                    );
                    document.querySelector(".lunatable-selector")?.classList.add(
                        "mx-2", "px-2", "py-2", "rounded-sm", "outline-none", "text-[#1F1F1F]", "placeholder:text-[#D6D6D6]", "border", "border-[#D6D6D6]", "focus:border-[#1F1F1F]", "cursor-pointer", "transition", "duration-150", "ease-in-out"
                    );

                    const table = document.querySelector(".lunatable-table");
                    const pagination = document.querySelector(".lunatable-pagination-list");

                    if (pagination) {
                        pagination.querySelectorAll("li").forEach(li => {
                            li.classList.add("flex", "justify-center", "items-center")

                            const a = li.querySelector("a");
                            if (a) {
                                if (li.classList.contains("lunatable-active")) {
                                    a.classList.add(
                                        "rounded-sm", "text-[#F5F5F5]", "bg-[#302995]",
                                        "hover:bg-[#13115A]", "active:bg-[#0A0843]",
                                        "transition", "duration-150", "ease-in-out", "px-4", "py-2"
                                    );
                                } else {
                                    a.classList.add(
                                        "rounded-sm", "hover:bg-[#E0E0E0]/50",
                                        "active:bg-[#E0E0E0]/75", "transition",
                                        "duration-150", "ease-in-out", "px-4", "py-2"
                                    );
                                }
                            }
                        });
                    }

                    const searchWrapper = document.querySelector(".datatable-search");
                const searchInput = searchWrapper?.querySelector("input");

                if (searchWrapper && searchInput) {
                    searchWrapper.className = "";
                    searchWrapper.classList.add("relative", "w-full", "sm:w-72");

                    searchInput.className = "";
                    searchInput.classList.add(
                        "w-full",
                        "rounded-sm", "border", "border-[#D6D6D6]",
                        "pl-4", "pr-10", "py-2",
                        "focus:border-[#302995]",
                        "transition", "duration-150", "ease-in-out",
                        "outline-none", "text-sm", "placeholder-[#282828]"
                    );

                    if (!searchWrapper.querySelector(".search-icon")) {
                        const icon = document.createElement("span");
                        icon.className = "search-icon absolute inset-y-0 right-3 flex items-center text-[#282828] pointer-events-none";
                        icon.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-search">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
        `;
                        searchWrapper.appendChild(icon);
                    }
                }

                if (table) {
                    table.classList.add(
                        "w-full",
                        "border-collapse",
                        "text-xs",
                        "sm:text-sm",
                        "lg:text-md"
                    );

                    table.querySelectorAll("thead tr th").forEach(th => {
                        th.classList.add(
                            "text-left",
                            "py-2",
                            "pe-10",
                            "sm:py-4",
                            "sm:pe-4",
                            "sticky",
                            "top-0",
                            "bg-[#F5F5F5]",
                            "font-semibold",
                            "whitespace-nowrap",
                            "text-xs",
                            "sm:text-sm",
                            "lg:text-md"
                        );
                    });

                    table.querySelectorAll("tbody tr").forEach(tr => {
                        tr.classList.add(
                            "border-b",
                            "border-[#D6D6D6]",
                            "group"
                        );
                    });

                    table.querySelectorAll("tbody tr td").forEach(td => {
                        td.classList.add(
                            "py-2",
                            "pe-10",
                            "sm:py-3",
                            "sm:pe-4",
                            "align-middle",
                            "whitespace-nowrap"
                        );
                    });
                }


                    document.querySelectorAll('.view-more-btn').forEach(btn => {
                        if (!btn.querySelector('svg')) {
                            btn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-ellipsis-vertical-icon lucide-ellipsis-vertical"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>`;
                        }
                        btn.addEventListener('click', function () {
                            const data = {
                                id: this.dataset.id,
                                no: this.dataset.no,
                                title: this.dataset.title,
                                ISRC: this.dataset.ISRC,
                                Duration: this.dataset.Duration
                            };

                            // Access Alpine store from vanilla JS
                            window.Alpine.store('modals').openViewModal(data);
                        });
                    });

                    const sortDurationBtn = document.querySelector('.sort-Duration-btn');
                    if (sortDurationBtn) {
                        sortDurationBtn.addEventListener('click', function () {
                            // Fungsi untuk sorting berdasarkan Duration
                            console.log('Sort by Duration clicked');
                            // Implementasikan logika sorting di sini
                        });
                    }
                }

                applyCustomStyles();

                // Set up datatables events
                dataTable.on("datatable.page", applyCustomStyles);
                dataTable.on("datatable.page:before", applyCustomStyles);
                dataTable.on("datatable.search", applyCustomStyles);
                dataTable.on("datatable.search:before", applyCustomStyles);
                dataTable.on("datatable.sort", applyCustomStyles);
                dataTable.on("datatable.perpage", applyCustomStyles);
                dataTable.on("datatable.perpage:before", applyCustomStyles);
            });
        </script>
        @push('scripts')
        @endpush
</x-app-layout>