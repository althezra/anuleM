<x-app-layout>
    @section('title', 'reports')

    <x-slot name="header">
        <h1 class="text-4xl font-semibold text-center xl:text-left">Reports</h1>
    </x-slot>

    <div class="grid grid-cols-1 xl:grid-cols-12 gap-2 xl:gap-4">
        <div class="col-span-1 xl:col-span-12 flex flex-col gap-2 xl:gap-4">

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 xl:gap-2">
                <!-- Total Balance Card -->
                <div class="bg-[#F5F5F5] px-6 py-4 rounded-md h-32 flex items-center">
                    <div class="flex-1">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-medium text-[#1F1F1F]">Total Balance</h3>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-dollar-sign-icon lucide-circle-dollar-sign text-[#302995]">
                                    <circle cx="12" cy="12" r="10" />
                                    <path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8" />
                                    <path d="M12 18V6" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 mb-1">
                            <div class="flex items-baseline gap-2">
                                <span class="text-3xl font-bold text-[#1F1F1F]">0</span>
                                <span class="text-lg text-[#1F1F1F]">USD</span>
                            </div>
                        </div>
                        <p class="text-sm text-[#2C1F1F]">Last updated March 17, 2025</p>
                    </div>
                </div>

                <!-- Last Transaction Card -->
                <div class="bg-[#F5F5F5] px-6 py-4 rounded-md h-32 flex items-center">
                    <div class="flex-1">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-medium text-[#1F1F1F]">Last Transaction</h3>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-arrow-left-right-icon lucide-arrow-left-right text-[#302995]">
                                    <path d="M8 3 4 7l4 4" />
                                    <path d="M4 7h16" />
                                    <path d="m16 21 4-4-4-4" />
                                    <path d="M20 17H4" />
                                </svg>
                            </div>
                        </div>
                        <div class="mb-1">
                            <span class="text-3xl font-bold text-gray-900">0</span>
                        </div>
                        <p class="text-sm text-[#2C1F1F]">Last updated March 17, 2025</p>
                    </div>
                </div>

                <!-- Last Statement Card -->
                <div class="bg-[#F5F5F5] px-6 py-4 rounded-md h-32 flex items-center">
                    <div class="flex-1">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-medium text-[#1F1F1F]">Last Statement</h3>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-arrow-left-right-icon lucide-arrow-left-right text-[#302995]">
                                    <path d="M8 3 4 7l4 4" />
                                    <path d="M4 7h16" />
                                    <path d="m16 21 4-4-4-4" />
                                    <path d="M20 17H4" />
                                </svg>
                            </div>
                        </div>
                        <div class="mb-1">
                            <span class="text-3xl font-bold text-gray-900">0</span>
                        </div>
                        <p class="text-sm text-[#2C1F1F]">Last updated March 17, 2025</p>
                    </div>
                </div>
            </div>


            <!-- Stats -->
            {{-- <div class="grid grid-cols-1 xl:grid-cols-1 gap-2">
                <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-2">
                    <div class="inline-flex justify-between items-center">
                        <span class="font-medium">Request</span>
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
                        <span id="totalReleases" class="text-3xl font-bold"></span>
                        Request
                    </h5>
                </div>
            </div> --}}



            <!-- Table Container -->
            <table id="reportsTable">
                <thead>
                    <tr>
                        <th>Periode</th>
                        <th>Gross Earnings</th>
                        <th><span>Fees &amp; Taxes</span></th>
                        <th>Next Earnings</th>
                        <th>
                            Status
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <!-- Data akan diisi oleh JavaScript -->
                </tbody>
            </table>

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
                    title: '',
                    artist: '',
                    releaseDate: '',
                    status: ''
                },
                viewReleaseData: {
                    id: null,
                    title: '',
                    artist: '',
                    releaseDate: '',
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
                            title: '',
                            artist: '',
                            releaseDate: '',
                            statis: '',
                            status: ''
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
                            title: '',
                            artist: '',
                            releaseDate: '',
                            statis: '',
                            status: ''
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
                    title: "Juni 2025",
                    artist: "0",
                    releaseDate: "0",
                    statis: "0",
                    status: "Processing",
                },
                {
                    id: 3,
                    title: "Mei 2025",
                    artist: "0",
                    releaseDate: "0",
                    statis: "0",
                    status: "Final",
                },
            ];

            // Update total count
            // document.getElementById('totalReleases').textContent = releasesData.length;

            // Add sample data to table if needed
            const tableBody = document.querySelector('#reportsTable tbody');
            releasesData.forEach(release => {
                const row = document.createElement('tr');
                row.innerHTML = `
                                <td>
                                    <div class="inline-flex justify-between items-center gap-4 w-full">
                                            <span class="font-semibold">${release.title}</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="font-semibold text-sm xl:text-md">${release.artist}</span>
                                </td>
                                <td>
                                    <span class="font-semibold text-sm xl:text-md">${release.releaseDate}</span>
                                </td>
                                <td>
                                    <span class="font-semibold text-sm xl:text-md">${release.statis}</span>
                                </td>
                                <td>
                                    <div class="inline-flex justify-between items-center gap-4 w-full">
									<div class="inline-flex items-center gap-6">
										<span class="font-semibold">${release.status}</span>
									</div>
									<div class="flex h-15 items-center gap-2 transition duration-150 ease-in-out">
										<button class="view-more-btn rounded-full p-2 text-[#302995] bg-transparent hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 text-center cursor-pointer transition duration-150 ease-in-out">
                                        </button>
                                        <div class="dropdown-menu hidden absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg z-10">
                                            <a href={{ route('user.report.summary') }} class="block px-4 py-2 hover:bg-gray-100">View Details</a>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Download CSV</a>
                                        </div>
									</div>
								</div>
        </td>
                            `;
                tableBody.appendChild(row);
            });



            const dataTable = new simpleDatatables.DataTable("#reportsTable", {
                searchable: true,
                sortable: false,
                fixedHeight: false,
                fixedWidth: false,
                perPage: 5,
                perPageSelect: [5, 10, 15, 20, 25, ['All', -1]],
                labels: {
                    placeholder: "Search",
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



                function initViewMoreButtons() {
                    document.querySelectorAll('.view-more-btn').forEach(btn => {
                        if (!btn.querySelector('svg')) {
                            btn.insertAdjacentHTML("beforeend", `
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="1"/>
                    <circle cx="12" cy="5" r="1"/>
                    <circle cx="12" cy="19" r="1"/>
                </svg>
            `);
                        }

                        btn.addEventListener('click', (e) => {
                            e.stopPropagation();
                            const menu = btn.nextElementSibling;
                            if (menu) {
                                document.querySelectorAll('.dropdown-menu').forEach(d => {
                                    if (d !== menu) d.classList.add('hidden');
                                });
                                menu.classList.toggle('hidden');
                            }
                        });
                    });
                }

                initViewMoreButtons();

                document.addEventListener('click', () => {
                    document.querySelectorAll('.dropdown-menu').forEach(menu => menu.classList.add('hidden'));
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
