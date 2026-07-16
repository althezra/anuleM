<x-app-layout>
    @section('title', 'Users Management')
    <x-slot name="header">
        <h1 class="text-4xl font-semibold text-center xl:text-left">Users Management</h1>
    </x-slot>

    <div class="grid grid-cols-1 xl:grid-cols-12 gap-2 xl:gap-4">
        <div class="col-span-1 xl:col-span-12 flex flex-col gap-2 xl:gap-4">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 xl:gap-2">
                <!-- Total Balance Card -->
                <div class="bg-[#F5F5F5] px-6 py-4 rounded-md h-32 flex items-center">
                    <div class="flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-md font-medium text-[#1F1F1F]">Active Users</h3>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-user-check-icon lucide-user-check text-[#302995]">
                                    <path d="m16 11 2 2 4-4" />
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                    <circle cx="9" cy="7" r="4" />
                                </svg>
                            </div>
                        </div>
                        <div class="mb-1">
                            <span class="text-3xl font-bold text-[#1F1F1F]">0</span>
                        </div>
                        <p class="text-sm text-[#2C1F1F]">Last updated Juni 17, 2025</p>
                    </div>
                </div>

                <!-- Last Transaction Card -->
                <div class="bg-[#F5F5F5] px-6 py-4 rounded-md h-32 flex items-center">
                    <div class="flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-md font-medium text-[#1F1F1F]">New Users</h3>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-user-plus-icon lucide-user-plus text-[#302995]">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                    <circle cx="9" cy="7" r="4" />
                                    <line x1="19" x2="19" y1="8" y2="14" />
                                    <line x1="22" x2="16" y1="11" y2="11" />
                                </svg>
                            </div>
                        </div>
                        <div class="mb-1">
                            <span class="text-3xl font-bold text-[#1F1F1F]">0</span>
                        </div>
                        <p class="text-sm text-[#2C1F1F]">Last updated Juni 17, 2025</p>
                    </div>
                </div>

                <!-- Last Statement Card -->
                <div class="bg-[#F5F5F5] px-6 py-4 rounded-md h-32 flex items-center">
                    <div class="flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-md font-medium text-[#1F1F1F]">Suspended Accounts</h3>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-user-lock-icon lucide-user-lock text-[#302995]">
                                    <circle cx="10" cy="7" r="4" />
                                    <path d="M10.3 15H7a4 4 0 0 0-4 4v2" />
                                    <path d="M15 15.5V14a2 2 0 0 1 4 0v1.5" />
                                    <rect width="8" height="5" x="13" y="16" rx=".899" />
                                </svg>
                            </div>
                        </div>
                        <div class="mb-1">
                            <span class="text-3xl font-bold text-[#1F1F1F]">0</span>
                        </div>
                        <p class="text-sm text-[#2C1F1F]">Last updated Juni 17, 2025</p>
                    </div>
                </div>
            </div>

            <!-- Table Container -->
            <div id="tableContainer">
                <table id="admintracksTable">
                    <thead>
                        <tr>
                            <th><span>Username</span></th>
                            <th><span>Full Name</span></th>
                            <th><span>Email</span></th>
                            <th><span>Release</span></th>
                            <th><span>Lifetime Earnings</span></th>
                            <th><span>Registration Date</span></th>
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
                <div class="relative bg-[#F5F5F5] p-7 rounded-lg shadow-xl w-full max-w-5xl mx-auto transform transition-all"
                    @click.outside="$store.modals.closeEditModal()">
                    <div x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100">

                        <!-- Header -->
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-2xl font-semibold">Request Details</h2>
                            <button @click="$store.modals.closeViewModal()"
                                class="text-gray-400 hover:text-gray-600 cursor-pointer">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>

                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                            <!-- User Info -->
                            <div class="flex items-center gap-3">
                                <img src="{{ route('avatar') }}?name={{ Auth::user()->name }}&
				                                    @if (request()->routeIs('profile.edit')) background=F5F5F5&color=302995
                                                    @else
                                                    background=302995&color=BCB7F2 @endif
				                                    " alt="Avatar" class="rounded-full h-12 flex-shrink-0" loading="lazy">
                                <div>
                                    <div class="font-semibold text-xl text-gray-900">Rama Raditia
                                    </div>
                                    <div class="text-sm text-gray-500">Pending</div>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="flex flex-wrap gap-2">
                                <a href="{{ route('admin.userprofile') }}"
                                    class="rounded-sm px-6 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-center cursor-pointer transition duration-150 ease-in-out">
                                    View User Profile
                                </a>
                                <a href="{{ route('admin.release_by') }}"
                                    class="rounded-sm px-6 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-center cursor-pointer transition duration-150 ease-in-out">
                                    View All Release
                                </a>
                                <button
                                    class="rounded-sm px-6 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-center cursor-pointer transition duration-150 ease-in-out">
                                    Login as User
                                </button>
                                <button
                                    class="rounded-sm px-6 py-2 text-[#F5F5F5] bg-[#FF0707] hover:bg-[#CC0606] active:bg-[#990505] text-center cursor-pointer transition duration-150 ease-in-out">
                                    Susppend
                                </button>
                                <button
                                    class="rounded-sm px-6 py-2 text-[#F5F5F5] bg-[#FF0707] hover:bg-[#CC0606] active:bg-[#990505] text-center cursor-pointer transition duration-150 ease-in-out">
                                    Delete
                                </button>
                            </div>
                        </div>
                        <hr class="w-auto border-t-1 mx-auto border-[#E0E0E0] mt-2 mb-2">

                        <!-- Content Grid -->
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                            <!-- Key Statistics -->
                            <div>
                                <div class="text-lg font-semibold text-gray-900 mb-3">
                                    Key Statistics</div>

                                <div class="space-y-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Total
                                            Releases</label>
                                        <input type="text" value="0"
                                            class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                                            readonly>
                                    </div>

                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Lifetime
                                            Earnings</label>
                                        <input type="text" value="0"
                                            class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                                            readonly>
                                    </div>

                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Registration
                                            Date</label>
                                        <input type="text" value="19 August 2025"
                                            class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                                            readonly>
                                    </div>
                                </div>
                            </div>

                            <!-- Main Information -->
                            <div>
                                <div class="text-lg font-semibold text-gray-900 mb-3">Recent Activity</div>

                                <div class="space-y-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">New Release
                                            Submitted</label>
                                        <input type="text"
                                            value="Aug 21, 2025 - Submitted release 'Morning Song' for review."
                                            class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                                            readonly>
                                    </div>

                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Payout
                                            Requested</label>
                                        <input type="text" value="Aug 20, 2025 - Requested a payout of $300.00."
                                            class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                                            readonly>
                                    </div>

                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Login</label>
                                        <input type="text" value="Aug 21, 2025 - Logged into the platform."
                                            class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                                            readonly>
                                    </div>
                                </div>
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


    <script>// Script khusus untuk admintracksTable dengan tampilan original
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
                    release: '',
                    status: ''
                },
                viewtrackData: {
                    id: null,
                    title: '',
                    artist: '',
                    trackDate: '',
                    release: '',
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
                            release: '',
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
                            release: '',
                            status: ''
                        };
                    }, 500);
                    this.viewModalOpen = false;
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            // Hanya proses admintracksTable
            const adminTracksTable = document.querySelector('#admintracksTable');

            if (!adminTracksTable) {
                console.log('admintracksTable not found - user might not be admin');
                return;
            }

            console.log('Processing admintracksTable for admin user...');

            // Sample data untuk admin tracks
            const admintracksData = [
                {
                    id: 1,
                    user: "Famous Dex",
                    fullname: "Rama Raditia",
                    email: "R@gmail.com",
                    release: "0",
                    lifetime: "0",
                    date: "Aug 20, 2025"
                },
                {
                    id: 3,
                    user: "Famous Dex",
                    fullname: "Rama Raditia",
                    email: "R@gmail.com",
                    release: "0",
                    lifetime: "0",
                    date: "Aug 20, 2025"
                },
            ];


            // Populate table dengan tampilan original
            const tableBody = adminTracksTable.querySelector('tbody');
            if (tableBody) {
                // Clear existing rows
                tableBody.innerHTML = '';

                admintracksData.forEach(track => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                                <td>
                                    <div class="inline-flex justify-between items-center gap-4 w-full">
                                            <span class="font-semibold">${track.user}</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="font-semibold text-sm xl:text-md">${track.fullname}</span>
                                </td>
                                <td>
                                    <span class="font-semibold text-sm xl:text-md">${track.email}</span>
                                </td>
                                <td>
                                    <span class="font-semibold text-sm xl:text-md">${track.release}</span>
                                </td>
                                <td>
                                    <span class="font-semibold text-sm xl:text-md">${track.lifetime}</span>
                                </td>
                                <td>
                                    <span class="font-semibold text-sm xl:text-md">${track.date}</span>
                                </td>
                <td>
                    <div class="flex h-15 items-center gap-2 opacity-0 group-hover:opacity-100 transition duration-150 ease-in-out">
                        <button type="button" class="view-more-btn rounded-full p-2 text-[#302995] bg-transparent hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 text-center cursor-pointer transition duration-150 ease-in-out"
                            data-id="${track.id}"
                            data-title="${track.title}"
                            data-artist="${track.artist}"
                            data-track-date="${track.trackDate}"
                            data-release="${track.release}"
                            data-status="${track.status}">
                        </button>
                    </div>
                </td>
            `;
                    tableBody.appendChild(row);
                });
            }

            // Initialize SimpleDatatables dengan konfigurasi original
            let adminDataTable = null;
            try {
                adminDataTable = new simpleDatatables.DataTable("#admintracksTable", {
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

                console.log('SimpleDatatables initialized for admintracksTable');
            } catch (error) {
                console.error('Error initializing SimpleDatatables:', error);
                return;
            }

            // Functions untuk button creation (original)
            function createAddTrackButton() {
                const button = document.createElement('button');
                button.type = 'button';
                button.className = 'add-track-btn ease-in-out flex items-center justify-center';
                button.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-list-filter-plus-icon lucide-list-filter-plus">
                <path d="M10 18h4"/>
                <path d="M11 6H3"/>
                <path d="M15 6h6"/>
                <path d="M18 9V3"/>
                <path d="M7 12h8"/>
            </svg>
        `;

                button.addEventListener('click', function () {
                    window.Alpine.store('modals').openCreateModal();
                });

                return button;
            }

            function createFilterButton() {
                const button = document.createElement('button');
                button.type = 'button';
                button.className = 'filter-btn ease-in-out flex items-center justify-center';
                button.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-columns3-icon lucide-columns-3">
                <rect width="18" height="18" x="3" y="3" rx="2"/>
                <path d="M9 3v18"/>
                <path d="M15 3v18"/>
            </svg>
        `;

                button.addEventListener('click', function () {
                    console.log('Filter button clicked');
                    // Add filter logic here
                });

                return button;
            }

            // Apply custom styles (original styling)
            function applyCustomStyles() {
                document.querySelector(".lunatable-wrapper")?.classList.add("flex", "flex-col", "gap-2");
                document.querySelector(".lunatable-table")?.classList.add("w-full", "max-w-full");
                document.querySelector(".lunatable-pagination-list")?.classList.add("grid", "xl:flex", "grid-cols-5", "gap-2");
                document.querySelector(".lunatable-top")?.classList.add(
                    "bg-[#F5F5F5]", "px-6", "py-4", "rounded-md", "flex", "flex-col", "xl:flex-row", "gap-2", "items-center", "justify-between"
                );

                // Add buttons next to search
                const topSection = document.querySelector(".lunatable-top");
                if (topSection) {
                    const existingButtons = topSection.querySelectorAll('.add-track-btn, .filter-btn');
                    existingButtons.forEach(btn => btn.remove());

                    const searchElement = topSection.querySelector('.datatable-search');
                    if (searchElement) {
                        let searchContainer = searchElement.parentElement;

                        if (!searchContainer.classList.contains('search-button-container')) {
                            searchContainer = document.createElement('div');
                            searchContainer.className = 'search-button-container flex items-center gap-2';
                            searchElement.parentElement.insertBefore(searchContainer, searchElement);
                            searchContainer.appendChild(searchElement);
                        }

                        const addButton = createAddTrackButton();
                        const filterButton = createFilterButton();
                        searchContainer.appendChild(addButton);
                        searchContainer.appendChild(filterButton);
                    }
                }

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
                        li.classList.add("flex", "justify-center", "items-center");

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

                // Setup view more buttons
                document.querySelectorAll('.view-more-btn').forEach(btn => {
                    if (!btn.querySelector('svg')) {
                        btn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-ellipsis-vertical-icon lucide-ellipsis-vertical"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>`;
                    }

                    // Remove existing listeners to prevent duplication
                    const newBtn = btn.cloneNode(true);
                    btn.parentNode.replaceChild(newBtn, btn);
                });

                // Re-add event listeners to view more buttons
                document.querySelectorAll('.view-more-btn').forEach(btn => {
                    btn.addEventListener('click', function () {
                        const data = {
                            id: this.dataset.id,
                            title: this.dataset.title,
                            artist: this.dataset.artist,
                            trackDate: this.dataset.trackDate,
                            release: this.dataset.release,
                            status: this.dataset.status
                        };

                        if (window.Alpine && window.Alpine.store) {
                            window.Alpine.store('modals').openViewModal(data);
                        }
                    });
                });
            }

            // Initialize icons
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }

            // Apply initial styles
            setTimeout(() => {
                applyCustomStyles();
            }, 100);

            // Set up event listeners
            if (adminDataTable) {
                adminDataTable.on("datatable.page", applyCustomStyles);
                adminDataTable.on("datatable.page:before", applyCustomStyles);
                adminDataTable.on("datatable.search", applyCustomStyles);
                adminDataTable.on("datatable.search:before", applyCustomStyles);
                adminDataTable.on("datatable.sort", applyCustomStyles);
                adminDataTable.on("datatable.perpage", applyCustomStyles);
                adminDataTable.on("datatable.perpage:before", applyCustomStyles);
            }

            console.log('Admin tracks table setup complete');
        });</script>
</x-app-layout>