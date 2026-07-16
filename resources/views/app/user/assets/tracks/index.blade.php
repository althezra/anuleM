<x-app-layout>
    @section('title', 'tracks')

    <x-slot name="header">
        <h1 class="text-4xl font-semibold text-center xl:text-left">Tracks</h1>
    </x-slot>

    <div class="grid grid-cols-1 xl:grid-cols-12 gap-2 xl:gap-4">
        <div class="col-span-1 xl:col-span-12 flex flex-col gap-2 xl:gap-4">

            <div class="grid grid-cols-1 xl:grid-cols-1 gap-2">
                <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-2">
                    <div class="inline-flex justify-between items-center">
                        <span class="font-semibold">Tracks</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
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
                        <span id="totaltracks" class="text-3xl font-bold">0</span>
                        Tracks
                    </h5>
                </div>
            </div>

            <!-- Table Container -->
            <div id="tableContainer">
                <table id="tracksTable">
                    <thead>
                        <tr>
                            <th><span>Track Title</span></th>
                            <th><span>Artist</span></th>
                            <th><span>ISRC</span></th>
                            <th><span>Duration</span></th>
                            <th><button type="button"
                                    class="sort-status-btn rounded-full p-1 bg-transparent hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 text-center cursor-pointer transition duration-150 ease-in-out">
                                    <i data-lucide="arrow-down-up" class="w-4 h-4 text-black "></i>
                                </button>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Data akan diisi oleh JavaScript -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div x-data="{
                trackModalOpen: false,
                loading: true,
                trackData: {
                    title: 'JAPAN',
                    type: 'Single',
                    version: 'Remix',
                    primaryArtist: 'Famous Dex',
                    lyricsLanguage: 'English',
                    explicit: 'YES',
                    isrc: 'GBAHSxxxxxxxx',
                    duration: '3:21',
                    currentTime: '0:47'
                },
                
                openTrackModal() {
                    this.trackModalOpen = true;
                    this.loading = true;
                    // Simulate loading delay with smoother transition
                    setTimeout(() => {
                        this.loading = false;
                    }, 2000);
                },
                
                closeTrackModal() {
                    this.trackModalOpen = false;
                    this.loading = true;
                }
            }">
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
                <div class="relative bg-[#F5F5F5] px-6 py-4 rounded-md gap-4 w-full max-w-6xl mx-auto transform transition-all"
                    @click.outside="$store.modals.closeEditModal()">
                    <div x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100">

                        <!-- Header -->
                        <div class="inline-flex justify-between items-center w-full mb-4">
                            <span class="font-semibold text-3xl text-[#1F1F1F]">Track Details</span>
                            <button @click="$store.modals.closeViewModal()" class="p-1 hover:bg-gray-200 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-x-icon lucide-x cursor-pointer">
                                    <path d="M18 6 6 18" />
                                    <path d="m6 6 12 12" />
                                </svg>
                            </button>
                        </div>

                        <!-- Main Content with Gap-6 (Desktop tetap sama) -->
                        <div class="flex flex-col lg:flex-row gap-6">

                            <!-- Left Column - Album Art and Progress -->
                            <div class="flex-shrink-0">
                                <!-- Album Art Container -->
                                <div class="relative">
                                    <img src="{{ asset('luna-assets/luna-media/no-coverart.jpg') }}" alt="Album Cover"
                                        class="w-full lg:w-100 object-cover">
                                </div>

                                <div class="bg-white p-4 border border-[#D6D6D6] w-full lg:w-100">
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="text-lg font-semibold text-[#1F1F1F]"
                                            x-text="trackData.title"></span>
                                    </div>

                                    <!-- Progress Bar -->
                                    <div class="relative">
                                        <div class="flex items-center space-x-2">
                                            <button>
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
                                            <span x-text="trackData.currentTime"></span>
                                            <span x-text="trackData.duration"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Right Column - Track Details Form -->
                            <div class="flex-1 space-y-4">
                                <!-- Track Title -->
                                <div class="w-full flex flex-col gap-2">
                                    <label class="text-xl font-semibold xl:text-sm text-[#1F1F1F]">Track
                                        Title</label>
                                    <input type="text" x-model="trackData.title"
                                        class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out">
                                </div>

                                <!-- Type -->
                                <div class="w-full flex flex-col gap-2">
                                    <label class="text-xl font-semibold xl:text-sm text-[#1F1F1F]">Type</label>
                                    <input type="text" x-model="trackData.type"
                                        class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out">
                                </div>

                                <!-- Track Version -->
                                <div class="w-full flex flex-col gap-2">
                                    <label class="text-xl font-semibold xl:text-sm text-[#1F1F1F]">Track
                                        Version</label>
                                    <input type="text" x-model="trackData.version"
                                        class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out">
                                </div>

                                <!-- Primary Artist -->
                                <div class="w-full flex flex-col gap-2">
                                    <label class="text-xl font-semibold xl:text-sm text-[#1F1F1F]">Primary
                                        Artist</label>
                                    <input type="text" x-model="trackData.primaryArtist"
                                        class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out">
                                </div>

                                <!-- Lyrics Language -->
                                <div class="w-full flex flex-col gap-2">
                                    <label class="text-xl font-semibold xl:text-sm text-[#1F1F1F]">Lyrics
                                        Language</label>
                                    <input type="text" x-model="trackData.lyricsLanguage"
                                        class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out">
                                </div>

                                <!-- Explicit -->
                                <div class="w-full flex flex-col gap-2">
                                    <label class="text-xl font-semibold xl:text-sm text-[#1F1F1F]">Explicit</label>
                                    <input type="text" x-model="trackData.explicit"
                                        class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out">
                                </div>

                                <!-- ISRC -->
                                <div class="w-full flex flex-col gap-2">
                                    <label class="text-xl font-semibold xl:text-sm text-[#1F1F1F]">ISRC</label>
                                    <input type="text" x-model="trackData.isrc"
                                        class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out">
                                </div>
                            </div>
                        </div>

                        <!-- Action Buttons - Responsive -->
                        <div
                            class="flex flex-col sm:flex-row justify-end items-stretch sm:items-center gap-2 mt-4 sm:mt-6">
                            <button type="button"
                                class="rounded-sm px-4 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-center cursor-pointer transition duration-150 ease-in-out text-sm sm:text-base">
                                Download
                            </button>
                            <a href="{{ route('user.show') }}"
                                class="rounded-sm px-4 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-center cursor-pointer transition duration-150 ease-in-out text-sm sm:text-base">
                                View Release Details
                            </a>
                            <button type="button"
                                class="rounded-sm px-4 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-center cursor-pointer transition duration-150 ease-in-out text-sm sm:text-base">
                                Edit Track Metadata
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
    </div>

    <script>
        document.addEventListener('alpine:init', function () {
            Alpine.store('modals', {
                createModalOpen: false,
                editModalOpen: false,
                viewModalOpen: false,
                loadingIn: false,
                loadingOut: false,
                edittrackData: {
                    id: null,
                    title: '',
                    artist: '',
                    trackDate: '',
                    status: ''
                },
                viewtrackData: {
                    id: null,
                    title: '',
                    artist: '',
                    trackDate: '',
                    status: ''
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
                        this.edittrackData = data;
                        this.loadingIn = false;
                    }, 500);
                },
                closeEditModal() {
                    this.loadingOut = true;
                    setTimeout(() => {
                        this.loadingOut = false;
                        this.edittrackData = {
                            id: null,
                            title: '',
                            artist: '',
                            trackDate: '',
                            status: ''
                        };
                    }, 500);
                    this.editModalOpen = false;
                },
                openViewModal(data) {
                    this.loadingIn = true;
                    this.viewModalOpen = true;
                    setTimeout(() => {
                        this.viewtrackData = data;
                        this.loadingIn = false;
                    }, 500);
                },
                closeViewModal() {
                    this.loadingOut = true;
                    setTimeout(() => {
                        this.loadingOut = false;
                        this.viewtrackData = {
                            id: null,
                            title: '',
                            artist: '',
                            trackDate: '',
                            status: ''
                        };
                    }, 500);
                    this.viewModalOpen = false;
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            // Sample data untuk testing - tambahkan data di sini
            const tracksData = [
                {
                    id: 1,
                    title: "JAPAN",
                    artist: "Famous Dex",
                    trackDate: "US-S1Z-25-00001",
                    status: "3:21",
                },
                {
                    id: 3,
                    title: "JAPAN",
                    artist: "Famous Dex",
                    trackDate: "US-S1Z-25-00001",
                    status: "3:21",
                },
            ];

            // Update total count
            document.getElementById('totaltracks').textContent = tracksData.length;

            // Add sample data to table if needed
            const tableBody = document.querySelector('#tracksTable tbody');
            tracksData.forEach(track => {
                const row = document.createElement('tr');
                row.innerHTML = `
        <td>
            <div class="inline-flex justify-between items-center gap-4 w-full">
                <div class="inline-flex items-center xl:gap-6 gap-2">
                    <img src="{{ asset('luna-assets/luna-media/no-coverart.jpg') }}" 
                      alt="Album Cover" 
                      class="w-15 h-15 object-cover flex-shrink-0">
                    <span class="font-semibold">${track.title}</span>
                </div>
            </div>
        </td>
        <td>
            <span class="font-semibold">${track.artist}</span>
        </td>
        <td>
            <span class="font-semibold">${track.trackDate}</span>
        </td>
        <td>
            <span class="font-semibold">
                ${track.status}
            </span>
        </td>
        <td>
            <div class="flex h-15 items-center gap-2 opacity-0 group-hover:opacity-100 transition duration-150 ease-in-out">
                <button type="button" class="view-more-btn rounded-full p-2 text-[#302995] bg-transparent hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 text-center cursor-pointer transition duration-150 ease-in-out"
                    data-id="${track.id}"
                    data-title="${track.title}"
                    data-artist="${track.artist}"
                    data-track-date="${track.trackDate}"
                    data-status="${track.status}">
                </button>
            </div>
        </td>
    `;
                tableBody.appendChild(row);
            });



            const dataTable = new simpleDatatables.DataTable("#tracksTable", {
                searchable: true,
                sortable: false,
                fixedHeight: false,
                fixedWidth: false,
                perPage: 5,
                perPageSelect: [5, 10, 15, 20, 25, ['All', -1]],
                labels: {
                    placeholder: "Search entries...",
                    perPage: "Show {select} entries per page",
                    noRows: "No matching tracks found",
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

            // Fungsi untuk membuat button Add Track
            function createAddTrackButton() {
                const button = document.createElement('button');
                button.type = 'button';
                button.className = 'add-track-btn ease-in-out flex items-center justify-center';
                button.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-list-filter-plus-icon lucide-list-filter-plus"><path d="M10 18h4"/>
                <path d="M11 6H3"/><path d="M15 6h6"/><path d="M18 9V3"/><path d="M7 12h8"/>
            </svg>
        `;

                button.addEventListener('click', function () {
                    window.Alpine.store('modals').openCreateModal();
                });

                return button;
            }

            // Fungsi untuk membuat button Filter/Menu (contoh button kedua)
            function createFilterButton() {
                const button = document.createElement('button');
                button.type = 'button';
                button.className = 'filter-btn ease-in-out flex items-center justify-center';
                button.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-columns3-icon lucide-columns-3"><rect width="18" height="18" x="3" y="3" rx="2"/>
                <path d="M9 3v18"/><path d="M15 3v18"/>
            </svg>
        `;

                button.addEventListener('click', function () {
                    console.log('Filter button clicked');
                    // Tambahkan logika filter di sini
                });

                return button;
            }

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
                            title: this.dataset.title,
                            artist: this.dataset.artist,
                            trackDate: this.dataset.trackDate,
                            status: this.dataset.status
                        };

                        // Access Alpine store from vanilla JS
                        window.Alpine.store('modals').openViewModal(data);
                    });
                });

                const sortStatusBtn = document.querySelector('.sort-status-btn');
                if (sortStatusBtn) {
                    sortStatusBtn.addEventListener('click', function () {
                        // Fungsi untuk sorting berdasarkan status
                        console.log('Sort by status clicked');
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
</x-app-layout>