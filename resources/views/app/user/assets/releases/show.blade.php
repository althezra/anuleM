<x-app-layout>
    @section('title', 'ReleaseDetails')

    <div class="space-y-6 px-4">

        <!-- Header Section -->
        <div class="flex flex-col sm:flex-row sm:items-center gap-3">
            <div class="text-xl md:text-3xl font-semibold text-gray-900">Release Details: JAPAN - Famous Dex</div>
            <div class="bg-[#17A248] text-white px-4 md:px-8 py-1 rounded-full text-sm font-semibold w-fit">Approved
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex sm:flex items-center gap-3">
            <button @click.prevent="$store.modals.openTakedownModal()"
                class="px-4 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] rounded-sm text-sm font-medium cursor-pointer text-center">
                Request Takedown
            </button>
            <button @click.prevent="$store.modals.openEditModal()"
                class="px-4 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] rounded-sm text-sm font-medium cursor-pointer text-center transition-colors">
                Request Metadata Edit
            </button>
        </div>

        <!-- Main Summary & Artwork Section -->
        <div class="text-xl md:text-2xl font-semibold text-[#2F2F2F]">Main Summary & Artwork</div>

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
                        readonly>
                </div>

                <!-- Primary title -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Primary Artist</label>
                    <input type="text" value="Famous Dex"
                        class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                        readonly>
                </div>

                <!-- Featured title -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Featured Artist</label>
                    <input type="text" value="-"
                        class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                        readonly>
                </div>

                <!-- Record Label -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Record Label</label>
                    <input type="text" value="PT. Meluna Media Kreativitas Indonesia"
                        class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                        readonly>
                </div>
            </div>
        </div>

        <!-- Bottom Section - Responsive Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6 mt-8">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">User (Uploader)</label>
                <input type="text" value="User"
                    class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                    readonly>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Release Date</label>
                <input type="text" value="Jul 11, 2025"
                    class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                    readonly>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">UPC/EAN</label>
                <input type="text" value="198005123123"
                    class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                    readonly>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Submitted Date</label>
                <input type="text" value="Jul 9, 2025"
                    class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                    readonly>
            </div>
        </div>
        <hr class="xl:w-[98rem] w-full border-t-4 mx-auto border-[#E0E0E0] mt-4 mb-4">

        <div class="grid grid-cols-1 xl:grid-cols-12 gap-2 xl:gap-4">
            <div class="col-span-1 xl:col-span-12 flex flex-col gap-2 xl:gap-4">
                <div class="mb-1">
                    <h1 class="text-3xl flex justify-center xl:justify-start font-semibold">Tracklist</h1>
                </div>

                <div class="grid grid-cols-1 xl:grid-cols-1 gap-2">
                    <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-2">
                        <div class="inline-flex justify-between items-center">
                            <span class="font-semibold">Releases</span>
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
                            Releases
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


        <div x-data>
            <div x-show="$store.modals.takedownModalOpen" x-transition:enter="transition ease-out duration-150"
                x-transition:enter-start="opacity-0 transform" x-transition:enter-end="opacity-100 transform"
                x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 transform"
                x-transition:leave-end="opacity-0 transform" class="fixed inset-0 z-50 overflow-y-auto" x-cloak>
                <!-- Backdrop -->
                <div class="fixed inset-0 bg-black opacity-25 transition-opacity"
                    x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                    @click="$store.modals.closeTakedownModal()"></div>
                <!-- Modal Content -->

                <div class="flex items-center justify-center min-h-screen p-4">
                    <div class="relative bg-white rounded-lg shadow-xl w-full p-6 max-w-xl mx-auto transform transition-all"
                        @click.outside="$store.modals.closeTrackModal()">

                        <!-- Header with Warning Icon -->
                        <div class="flex items-center justify-between mb-2">
                            <h2 class="text-xl font-semibold text-black">Confirm Takedown Request</h2>
                            <div class="flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-triangle-alert-icon lucide-triangle-alert text-[#F40000]">
                                    <path
                                        d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3" />
                                    <path d="M12 9v4" />
                                    <path d="M12 17h.01" />
                                </svg>
                            </div>
                        </div>

                        <div>
                            <!-- Warning Message -->
                            <p class="text-[#555555] font-medium text-sm mb-4 leading-relaxed">
                                This action will submit a request to remove the release <strong>JAPAN</strong> from all
                                digital platforms (Spotify, Apple Music, etc.). This process can take several days to a
                                few weeks and is not easily reversible.
                            </p>

                            <!-- Reason Textarea -->
                            <div class="mb-4">
                                <textarea x-model="$store.modals.takedownData.reason"
                                    placeholder="Enter your reason here..." rows="4"
                                    class="bg-[#FFFFFF] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out">
                        </textarea>
                            </div>

                            <!-- Checkbox -->
                            <div class="mb-4">
                                <div class="flex items-start space-x-3">
                                    <input type="checkbox" class="mt-1 h-4 w-4 border-gray-300 rounded cursor-pointer">
                                    <span class="text-sm text-[#424242] leading-relaxed">
                                        I understand that my release will be deleted from all platforms and this process
                                        may be permanent.
                                    </span>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex space-x-3">
                                <button @click="$store.modals.closeTakedownModal()"
                                    class="flex-1 px-4 py-2 text-[#302995] border border-[#302995] rounded-md hover:bg-gray-50 font-medium cursor-pointer">
                                    Cancel
                                </button>
                                <button @click="$store.modals.submitTakedown()"
                                    class="flex-1 px-4 py-2 bg-[#F40000] text-white rounded-md hover:bg-red-700 font-medium cursor-pointer">
                                    Send Takedown Request
                                </button>
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
                    <div class="relative bg-white rounded-lg shadow-xl w-full p-6 max-w-xl mx-auto transform transition-all"
                        @click.outside="$store.modals.closeEditModal()">
                        <div x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100">

                            <div class="flex items-center justify-between mb-4">
                                <h2 class="text-xl font-semibold text-black">Metadata Edit Request</h2>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-alert-icon lucide-circle-alert text-[#302995]">
                                    <circle cx="12" cy="12" r="10" />
                                    <line x1="12" x2="12" y1="8" y2="12" />
                                    <line x1="12" x2="12.01" y1="16" y2="16" />
                                </svg>
                            </div>

                            <div>
                                <!-- Info Message -->

                                <div class="flex flex-col mb-6 space-y-2">
                                    <p class="text-sm font-medium text-[#646464]"><span>1. </span>Changes to a live
                                        release require admin approval and may take several days to update on all
                                        platforms.</p>
                                    <p class="text-sm font-medium text-[#646464]"><span>2. </span>Not all data can be
                                        changed, such as the original audio file, ISRC, and primary artist name.</p>
                                    <p class="text-sm font-medium text-[#646464]"><span>3. </span>Please ensure all
                                        submitted changes are correct to avoid rejection.</p>
                                </div>

                                <!-- Action Buttons -->
                                <div class="flex space-x-3 text-center">
                                    <button @click="$store.modals.closeEditModal()"" 
                            class=" flex-1 px-4 py-2 text-[#241F70] border border-[#241F70] rounded-md hover:bg-gray-50
                                        focus:outline-none focus:ring-2 focus:ring-gray-500 font-medium cursor-pointer">
                                        Cancel
                                    </button>
                                    <a href="{{ route('user.edit') }}"
                                        class="flex-1 px-4 py-2 bg-[#302995] rounded-md text-white font-medium cursor-pointer">
                                        I Understand, Continue
                                    </a>
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

            <!-- Release Info Section -->
            <div class="mt-6">
                <h2 class="text-2xl font-semibold text-[#1F1F1F] mb-4">Release Info</h2>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Left Column -->
                    <div class="space-y-4">
                        <!-- Release Type -->
                        <div class="w-full flex flex-col gap-2">
                            <label class="text-xl font-semibold xl:text-sm text-[#1F1F1F]">Release Type</label>
                            <input type="text" value="Single"
                                class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                                readonly>
                        </div>

                        <!-- Primary Genre -->
                        <div class="w-full flex flex-col gap-2">
                            <label class="text-xl font-semibold xl:text-sm text-[#1F1F1F]">Primary Genre</label>
                            <input type="text" value="HipHop/Rap"
                                class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                                readonly>
                        </div>

                        <!-- Sub-genre -->
                        <div class="w-full flex flex-col gap-2">
                            <label class="text-xl font-semibold xl:text-sm text-[#1F1F1F]">Sub-genre</label>
                            <input type="text" value="Lo-fi Hip-Hop"
                                class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                                readonly>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="space-y-4">
                        <!-- Lyrics Language -->
                        <div class="w-full flex flex-col gap-2">
                            <label class="text-xl font-semibold xl:text-sm text-[#1F1F1F]">Lyrics Language</label>
                            <input type="text" value="English"
                                class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                                readonly>
                        </div>

                        <!-- Copyright (C Line) -->
                        <div class="w-full flex flex-col gap-2">
                            <label class="text-xl font-semibold xl:text-sm text-[#1F1F1F]">Copyright (C Line)</label>
                            <input type="text" value="© 2025 Famous Dex"
                                class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                                readonly>
                        </div>

                        <!-- Publishing (P Line) -->
                        <div class="w-full flex flex-col gap-2">
                            <label class="text-xl font-semibold xl:text-sm text-[#1F1F1F]">Publishing (P Line)</label>
                            <input type="text" value="© 2025 Meluna Records"
                                class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                                readonly>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contributor Info Section -->
            <div class="mt-6">
                <h2 class="text-2xl font-semibold text-[#1F1F1F] mb-4">Contributor Info</h2>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Left Column -->
                    <div class="space-y-4">
                        <!-- Composer -->
                        <div class="w-full flex flex-col gap-2">
                            <label class="text-xl font-semibold xl:text-sm text-[#1F1F1F]">Composer</label>
                            <input type="text" value="John Doe"
                                class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                                readonly>
                        </div>

                        <!-- Lyricist -->
                        <div class="w-full flex flex-col gap-2">
                            <label class="text-xl font-semibold xl:text-sm text-[#1F1F1F]">Lyricist</label>
                            <input type="text" value="Jane Smith"
                                class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                                readonly>
                        </div>

                        <!-- Producer -->
                        <div class="w-full flex flex-col gap-2">
                            <label class="text-xl font-semibold xl:text-sm text-[#1F1F1F]">Producer</label>
                            <input type="text" value="Famous Dex"
                                class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                                readonly>
                        </div>
                    </div>

                    <!-- Right Column - Empty for now, can add more contributor fields -->
                    <div class="space-y-4">
                        <!-- Additional contributor fields can be added here -->
                    </div>
                </div>
            </div>
            <hr class="xl:w-[98rem] w-full border-t-4 mx-auto border-[#E0E0E0] mt-4 mb-4">

            <div class="mt-6">
                <!-- Platform Selection -->
                <div>
                    <h2 class="text-2xl font-semibold text-black mb-4">Platform Link</h2>

                    <div class="mb-4">
                        <div class="flex flex-wrap gap-3 mb-3">
                            <!-- Spotify -->
                            <label
                                class="inline-flex items-center px-4 py-3 lg:px-5 lg:py-5 bg-[#F5F5F5] border-none rounded-sm cursor-pointer hover:bg-gray-50">
                                <img src="{{ asset('images/spotify.png') }}" class="w-15 lg:w-20 h-auto object-contain">
                            </label>

                            <!-- Apple Music -->
                            <label
                                class="inline-flex items-center px-4 py-3 lg:px-5 lg:py-5 bg-[#F5F5F5] border-none rounded-sm cursor-pointer hover:bg-gray-50">
                                <img src="{{ asset('images/applemusic.png') }}" class="w-15 lg:w-20 h-auto object-contain">
                            </label>

                            <!-- YouTube Music -->
                            <label
                                class="inline-flex items-center px-4 py-3 lg:px-5 lg:py-5 bg-[#F5F5F5] border-none rounded-sm cursor-pointer hover:bg-gray-50">
                                <img src="{{ asset('images/ytmusic.png') }}" class="w-15 lg:w-20 h-auto object-contain">
                            </label>

                            <!-- Instagram -->
                            <label
                                class="inline-flex items-center px-4 py-3 lg:px-5 lg:py-5 bg-[#F5F5F5] border-none rounded-sm cursor-pointer hover:bg-gray-50">
                                <img src="{{ asset('images/instagram.png') }}" class="w-15 lg:w-20 h-auto object-contain">
                            </label>

                            <!-- TikTok -->
                            <label
                                class="inline-flex items-center px-4 py-3 lg:px-5 lg:py-5 bg-[#F5F5F5] border-none rounded-sm cursor-pointer hover:bg-gray-50">
                                <img src="{{ asset('images/tiktok.png') }}" class="w-15 lg:w-20 h-auto object-contain">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <x-slot name="script">
            <script>
                document.addEventListener('alpine:init', function () {
                    Alpine.store('modals', {
                        createModalOpen: false,
                        takedownModalOpen: false,
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
                        openTakedownModal() {
                            this.loadingIn = true;
                            this.takedownModalOpen = true;
                            setTimeout(() => {
                                this.loadingIn = false;
                            }, 500);
                        },
                        closeTakedownModal() {
                            this.loadingOut = true;
                            setTimeout(() => {
                                this.loadingOut = false;
                            }, 500);
                            this.takedownModalOpen = false;
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
        </x-slot>

</x-app-layout>