<x-app-layout>
    @section('title', 'Summary')
    <div class="flex flex-col gap-4">

        <div class="flex flex-col md:flex-row gap-4">

            <div class="w-full md:w-60">
                @include('partials.admin.tabs')
            </div>

            <!-- Main Content -->
            <div class="flex-1">
                <div class="flex flex-col xl:flex-row xl:justify-between items-center gap-4 mb-6">
                    <h1 class="text-4xl font-semibold text-center xl:text-left">Reports Summary</h1>
                    <button type="button"
                        class="rounded-sm px-10 py-2 font-semibold text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-center cursor-pointer transition duration-150 ease-in-out">
                        Export Global Report
                    </button>
                </div>

                <!-- Stats Cards -->
                <div class="flex flex-col space-y-2">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 xl:gap-2">
                        <!-- Card 1 -->
                        <div class="bg-[#F5F5F5] px-6 py-4 rounded-md h-32 flex items-center">
                            <div class="flex-1">
                                <div class="flex items-center justify-between mb-2">
                                    <h3 class="text-md font-medium text-[#1F1F1F]">Total Gross Earnings</h3>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-dollar-sign text-[#302995]">
                                            <circle cx="12" cy="12" r="10" />
                                            <path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8" />
                                            <path d="M12 18V6" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <span class="text-3xl font-bold text-[#1F1F1F]">0</span>
                                </div>
                                <p class="text-sm text-[#2C1F1F]">Last updated Juni 17, 2025</p>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="bg-[#F5F5F5] px-6 py-4 rounded-md h-32 flex items-center">
                            <div class="flex-1">
                                <div class="flex items-center justify-between mb-2">
                                    <h3 class="text-md font-medium text-[#1F1F1F]">Total Platform Commission</h3>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-screen-share text-[#302995]">
                                            <path d="M13 3H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-3" />
                                            <path d="M8 21h8" />
                                            <path d="M12 17v4" />
                                            <path d="m17 8 5-5" />
                                            <path d="M17 3h5v5" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="mb-1">
                                    <span class="text-3xl font-bold text-[#1F1F1F]">0</span>
                                </div>
                                <p class="text-sm text-[#2C1F1F]">Last updated Juni 17, 2025</p>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="bg-[#F5F5F5] px-6 py-4 rounded-md h-32 flex items-center">
                            <div class="flex-1">
                                <div class="flex items-center justify-between mb-2">
                                    <h3 class="text-md font-medium text-[#1F1F1F]">Total User Net Earnings</h3>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-user-minus text-[#302995]">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                            <circle cx="9" cy="7" r="4" />
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
                    </div>

                    <!-- Data Tables -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-2">
                        <div id="earnings-table-container">
                            <table id="priodtable">
                                <thead>
                                    <tr>
                                        <th><span>Period</span></th>
                                        <th><span>Gross Earnings</span></th>
                                        <th><span>Net Earnings</span></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                        <div id="releases-table-container">
                            <table id="releasesTable">
                                <thead>
                                    <tr>
                                        <th><span>Release Title</span></th>
                                        <th><span>Type</span></th>
                                        <th><span>Total Earnings</span></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        // Store both datatable instances
        let priodDataTable, releasesDataTable;

        document.addEventListener('DOMContentLoaded', function () {
            // Sample data untuk testing - tambahkan data di sini
            const priodData = [
                {
                    id: 1,
                    period: "July 2025",
                    grossearnings: "0",
                    netearnings: "0"
                },
                {
                    id: 3,
                    period: "July 2025",
                    grossearnings: "0",
                    netearnings: "0"
                },
            ];

            const releasesData = [
                {
                    id: 1,
                    title: "JAPAN",
                    type: "Album",
                    totalearnings: "0"
                },
                {
                    id: 3,
                    title: "JAPAN",
                    type: "Single",
                    totalearnings: "0"
                },
            ];

            // Add sample data to period table
            const priodTableBody = document.querySelector('#priodtable tbody');
            priodData.forEach(priod => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>
                        <span class="font-semibold text-sm xl:text-md">${priod.period}</span>
                    </td>
                    <td>
                        <span class="font-semibold text-sm xl:text-md">${priod.grossearnings}</span>
                    </td>
                    <td>
                        <span class="font-semibold text-sm xl:text-md">${priod.netearnings}</span>
                    </td>
                    <td>
                        <div class="flex h-15 items-center gap-2 opacity-0 group-hover:opacity-100 transition duration-150 ease-in-out">
                            <button type="button" class="view-more-btn rounded-full p-2 text-[#302995] bg-transparent hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 text-center cursor-pointer transition duration-150 ease-in-out"
                                data-id="${priod.id}"
                                data-title="${priod.title}"
                                data-artist="${priod.artist}"
                                data-priod-date="${priod.priodDate}"
                                data-statis="${priod.statis}"
                                data-status="${priod.status}">
                            </button>
                        </div>
                    </td>
                `;
                priodTableBody.appendChild(row);
            });

            // Add sample data to releases table
            const releasesTableBody = document.querySelector('#releasesTable tbody');
            releasesData.forEach(release => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>
                        <div class="inline-flex justify-between items-center gap-4 w-full">
                                <span class="font-semibold">${release.title}</span>
                        </div>
                    </td>
                    <td>
                        <span class="font-semibold text-sm xl:text-md">${release.type}</span>
                    </td>
                    <td>
                        <span class="font-semibold text-sm xl:text-md">${release.totalearnings}</span>
                    </td>
                    <td>
                        <div class="flex h-15 items-center gap-2 opacity-0 group-hover:opacity-100 transition duration-150 ease-in-out">
                            <button type="button" class="view-more-btn rounded-full p-2 text-[#302995] bg-transparent hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 text-center cursor-pointer transition duration-150 ease-in-out"
                                data-id="${release.id}"
                                data-title="${release.title}"
                                data-artist="${release.artist}"
                                data-release-date="${release.releaseDate}"
                                data-statis="${release.statis}"
                                data-status="${release.status}">
                            </button>
                        </div>
                    </td>
                `;
                releasesTableBody.appendChild(row);
            });

            // Functions untuk button creation (original)
            function createAddTrackButton() {
                const button = document.createElement('button');
                button.type = 'button';
                button.className = 'add-track-btn ease-in-out flex items-center justify-center cursor-pointer';
                button.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-list-filter-plus-icon lucide-list-filter-plus">
                <path d="M10 18h4"/>
                <path d="M11 6H3"/>
                <path d="M15 6h6"/>
                <path d="M18 9V3"/>
                <path d="M7 12h8"/>
            </svg>
        `;
                return button;
            }

            function createFilterButton() {
                const button = document.createElement('button');
                button.type = 'button';
                button.className = 'filter-btn ease-in-out flex items-center justify-center cursor-pointer';
                button.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-columns3-icon lucide-columns-3">
                <rect width="18" height="18" x="3" y="3" rx="2"/>
                <path d="M9 3v18"/>
                <path d="M15 3v18"/>
            </svg>
        `;
                return button;
            }

            function applyCustomStyles(tableId) {
                const tableContainer = document.querySelector(`#${tableId}`).closest('.lunatable-wrapper') || document.querySelector(`#${tableId}`).parentElement;
                const wrapper = tableContainer.querySelector(".lunatable-wrapper");

                if (wrapper) {
                    wrapper.classList.add("flex", "flex-col", "gap-2");
                }

                const table = tableContainer.querySelector(".lunatable-table");
                if (table) {
                    table.classList.add("w-full", "max-w-full");
                }

                const paginationList = tableContainer.querySelector(".lunatable-pagination-list");
                if (paginationList) {
                    paginationList.classList.add("grid", "xl:flex", "grid-cols-5", "gap-2");
                }

                const topSection = tableContainer.querySelector(".lunatable-top");
                if (topSection) {
                    topSection.classList.add(
                        "bg-[#F5F5F5]", "px-6", "py-4", "rounded-md", "flex", "flex-col", "xl:flex-row", "gap-2", "items-center", "justify-between", "mb-2"
                    );

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

                const bottomSection = tableContainer.querySelector(".lunatable-bottom");
                if (bottomSection) {
                    bottomSection.classList.add(
                        "bg-[#F5F5F5]", "px-6", "py-4", "rounded-md", "flex", "flex-col", "xl:flex-row", "gap-2", "items-center", "justify-between"
                    );
                }

                const containerDiv = tableContainer.querySelector(".lunatable-container");
                if (containerDiv) {
                    containerDiv.classList.add(
                        "bg-[#F5F5F5]", "px-6", "pb-4", "rounded-md", "flex", "flex-row", "gap-2", "overflow-x-auto", "overflow-y-auto"
                    );
                }

                const input = tableContainer.querySelector(".lunatable-input");
                if (input) {
                    input.classList.add(
                        "px-4", "py-2", "rounded-sm", "outline-none", "text-[#1F1F1F]", "placeholder:text-[#D6D6D6]", "border", "border-[#D6D6D6]", "focus:border-[#1F1F1F]", "transition", "duration-150", "ease-in-out"
                    );
                }

                const selector = tableContainer.querySelector(".lunatable-selector");
                if (selector) {
                    selector.classList.add(
                        "mx-2", "px-2", "py-2", "rounded-sm", "outline-none", "text-[#1F1F1F]", "placeholder:text-[#D6D6D6]", "border", "border-[#D6D6D6]", "focus:border-[#1F1F1F]", "cursor-pointer", "transition", "duration-150", "ease-in-out"
                    );
                }

                const pagination = tableContainer.querySelector(".lunatable-pagination-list");
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

                // Re-add icons and event listeners
                tableContainer.querySelectorAll('.view-more-btn').forEach(btn => {
                    if (!btn.querySelector('svg')) {
                        btn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-ellipsis-vertical-icon lucide-ellipsis-vertical"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>`;
                    }
                });

            }

            // Initialize first table
            priodDataTable = new simpleDatatables.DataTable("#priodtable", {
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

            releasesDataTable = new simpleDatatables.DataTable("#releasesTable", {
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
            applyCustomStyles('priodtable');
            applyCustomStyles('releasesTable');

            // Set up event listeners for first table
            priodDataTable.on("datatable.page", () => applyCustomStyles('priodtable'));
            priodDataTable.on("datatable.search", () => applyCustomStyles('priodtable'));
            priodDataTable.on("datatable.sort", () => applyCustomStyles('priodtable'));
            priodDataTable.on("datatable.perpage", () => applyCustomStyles('priodtable'));

            // Set up event listeners for second table
            releasesDataTable.on("datatable.page", () => applyCustomStyles('releasesTable'));
            releasesDataTable.on("datatable.search", () => applyCustomStyles('releasesTable'));
            releasesDataTable.on("datatable.sort", () => applyCustomStyles('releasesTable'));
            releasesDataTable.on("datatable.perpage", () => applyCustomStyles('releasesTable'));
        });
    </script>
</x-app-layout>