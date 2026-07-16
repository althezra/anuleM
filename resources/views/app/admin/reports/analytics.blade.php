<x-app-layout>
    @section('title', 'Analytics')
    <div class="flex flex-col gap-4">

        <div class="flex flex-col md:flex-row gap-4">

            <div class="w-full md:w-60">
                @include('partials.admin.tabs')
            </div>

            <!-- Main Content -->
            <div class="flex-1">
                <div class="flex flex-col xl:flex-row xl:justify-between items-center gap-4 mb-6">
                    <h1 class="text-4xl font-semibold text-center xl:text-left">Reports Analytics</h1>
                </div>

                <!-- Stats Cards -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 space-y-4">
                    <!-- releases table -->
                    <div>
                        <h2 class="text-md md:text-2xl font-semibold text[#2F2F2F] mb-3">Breakdown by Releases</h2>
                        <div id="releases-table-container">
                            <table id="releasestable">
                                <thead>
                                    <tr>
                                        <th><span>Title</span></th>
                                        <th><span>UPC/EAN</span></th>
                                        <th><span>Total Streams</span></th>
                                        <th><span>Earnings</span></th>
                                        <th><span class="sort"></span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Data akan diisi oleh JavaScript -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- tracks Table -->
                    <div>
                        <h2 class="text-md md:text-2xl font-semibold text[#2F2F2F] mb-3">Breakdown by Tracks</h2>
                        <div id="tracks-table-container">
                            <table id="trackstable">
                                <thead>
                                    <tr>
                                        <th><span>Title</span></th>
                                        <th><span>ISRC</span></th>
                                        <th><span>Total Streams</span></th>
                                        <th><span>Earnings</span></th>
                                        <th><span class="sort"></span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Data akan diisi oleh JavaScript -->
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Platform Table -->
                    <div>
                        <h2 class="text-md md:text-2xl font-semibold text[#2F2F2F] mb-3">Breakdown by Platform</h2>
                        <div id="platform-table-container">
                            <table id="platformtable">
                                <thead>
                                    <tr>
                                        <th><span>Platform</span></th>
                                        <th><span>Total Stream</span></th>
                                        <th><span>Earnings</span></th>
                                        <th><span class="sort"></span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Data akan diisi oleh JavaScript -->
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Country Table -->
                    <div>
                        <h2 class="text-md md:text-2xl font-semibold text[#2F2F2F] mb-3">Breakdown by Country</h2>
                        <div id="country-table-container">
                            <table id="countrytable">
                                <thead>
                                    <tr>
                                        <th><span>Country</span></th>
                                        <th><span>Total Streams</span></th>
                                        <th><span>Earnings</span></th>
                                        <th><span class="sort"></span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Data akan diisi oleh JavaScript -->
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Lablels Table -->
                    <div>
                        <h2 class="text-md md:text-2xl font-semibold text[#2F2F2F] mb-3">Breakdown by Labels</h2>
                        <div id="labels-table-container">
                            <table id="labelstable">
                                <thead>
                                    <tr>
                                        <th><span>Labels</span></th>
                                        <th><span>Total Streams</span></th>
                                        <th><span>Earnings</span></th>
                                        <th><span class="sort"></span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Data akan diisi oleh JavaScript -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




            <script>
                // Store both datatable instances
                let releasesDataTable, tracksDataTable, platformDatatable, countryDatatable, labelsDatatable;

                document.addEventListener('DOMContentLoaded', function () {
                    // Sample data untuk testing - tambahkan data di sini
                    const releasesData = [
                        {
                            id: 1,
                            title: "JAPAN",
                            upc: "198005123123",
                            totalstreams: "123456789",
                            earnings: "0"
                        },
                    ];

                    const tracksData = [
                        {
                            id: 1,
                            title: "JAPAN",
                            isrc: "GBAHSxxxxxxxx",
                            totalstreams: "123456789",
                            earnings: "0"
                        },
                    ];

                    const platformData = [
                        {
                            id: 1,
                            platform: "Spotify",
                            totalstreams: "123456789",
                            earnings: "0"
                        },
                    ];

                    const countryData = [
                        {
                            id: 1,
                            country: "Indonesia",
                            totalstreams: "123456789",
                            earnings: "0"
                        },
                    ];

                    const labelsData = [
                        {
                            id: 1,
                            labels: "Spotify",
                            totalstreams: "123456789",
                            earnings: "0"
                        },
                    ];

                    // Add sample data to period table
                    const releasestableBody = document.querySelector('#releasestable tbody');
                    releasesData.forEach(release => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                    <td>
                        <span class="font-semibold text-sm xl:text-md">${release.title}</span>
                    </td>
                    <td>
                        <span class="font-semibold text-sm xl:text-md">${release.upc}</span>
                    </td>
                    <td>
                        <span class="font-semibold text-sm xl:text-md">${release.totalstreams}</span>
                    </td>
                    <td>
                        <span class="font-semibold text-sm xl:text-md">${release.earnings}</span>
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
                        releasestableBody.appendChild(row);
                    });

                    // Add sample data to tracks table
                    const trackstableBody = document.querySelector('#trackstable tbody');
                    tracksData.forEach(tracks => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                    <td>
                        <div class="inline-flex justify-between items-center gap-4 w-full">
                                <span class="font-semibold">${tracks.title}</span>
                        </div>
                    </td>
                    <td>
                        <span class="font-semibold text-sm xl:text-md">${tracks.isrc}</span>
                    </td>
                    <td>
                        <span class="font-semibold text-sm xl:text-md">${tracks.totalstreams}</span>
                    </td>
                    <td>
                        <span class="font-semibold text-sm xl:text-md">${tracks.earnings}</span>
                    </td>
                    <td>
                        <div class="flex h-15 items-center gap-2 opacity-0 group-hover:opacity-100 transition duration-150 ease-in-out">
                            <button type="button" class="view-more-btn rounded-full p-2 text-[#302995] bg-transparent hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 text-center cursor-pointer transition duration-150 ease-in-out"
                                data-id="${tracks.id}"
                                data-title="${tracks.title}"
                                data-artist="${tracks.artist}"
                                data-tracks-date="${tracks.tracksDate}"
                                data-statis="${tracks.statis}"
                                data-status="${tracks.status}">
                            </button>
                        </div>
                    </td>
                `;
                        trackstableBody.appendChild(row);
                    });

                    // Add sample data to platform table
                    const platformtableBody = document.querySelector('#platformtable tbody');
                    platformData.forEach(platform => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                    <td>
                        <div class="inline-flex justify-between items-center gap-4 w-full">
                                <span class="font-semibold">${platform.platform}</span>
                        </div>
                    </td>
                    <td>
                        <span class="font-semibold text-sm xl:text-md">${platform.totalstreams}</span>
                    </td>
                    <td>
                        <span class="font-semibold text-sm xl:text-md">${platform.earnings}</span>
                    </td>
                    <td>
                        <div class="flex h-15 items-center gap-2 opacity-0 group-hover:opacity-100 transition duration-150 ease-in-out">
                            <button type="button" class="view-more-btn rounded-full p-2 text-[#302995] bg-transparent hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 text-center cursor-pointer transition duration-150 ease-in-out"
                                data-id="${platform.id}"
                                data-title="${platform.title}"
                                data-artist="${platform.artist}"
                                data-platform-date="${platform.platformDate}"
                                data-statis="${platform.statis}"
                                data-status="${platform.status}">
                            </button>
                        </div>
                    </td>
                `;
                        platformtableBody.appendChild(row);
                    });

                    // Add sample data to country table
                    const countrytableBody = document.querySelector('#countrytable tbody');
                    countryData.forEach(country => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                    <td>
                        <div class="inline-flex justify-between items-center gap-4 w-full">
                                <span class="font-semibold">${country.country}</span>
                        </div>
                    </td>
                    <td>
                        <span class="font-semibold text-sm xl:text-md">${country.totalstreams}</span>
                    </td>
                    <td>
                        <span class="font-semibold text-sm xl:text-md">${country.earnings}</span>
                    </td>
                    <td>
                        <div class="flex h-15 items-center gap-2 opacity-0 group-hover:opacity-100 transition duration-150 ease-in-out">
                            <button type="button" class="view-more-btn rounded-full p-2 text-[#302995] bg-transparent hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 text-center cursor-pointer transition duration-150 ease-in-out"
                                data-id="${country.id}"
                                data-title="${country.title}"
                                data-artist="${country.artist}"
                                data-country-date="${country.countryDate}"
                                data-statis="${country.statis}"
                                data-status="${country.status}">
                            </button>
                        </div>
                    </td>
                `;
                        countrytableBody.appendChild(row);
                    });

                    // Add sample data to labels table
                    const labelstableBody = document.querySelector('#labelstable tbody');
                    labelsData.forEach(labels => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                    <td>
                        <div class="inline-flex justify-between items-center gap-4 w-full">
                                <span class="font-semibold">${labels.labels}</span>
                        </div>
                    </td>
                    <td>
                        <span class="font-semibold text-sm xl:text-md">${labels.totalstreams}</span>
                    </td>
                    <td>
                        <span class="font-semibold text-sm xl:text-md">${labels.earnings}</span>
                    </td>
                    <td>
                        <div class="flex h-15 items-center gap-2 opacity-0 group-hover:opacity-100 transition duration-150 ease-in-out">
                            <button type="button" class="view-more-btn rounded-full p-2 text-[#302995] bg-transparent hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 text-center cursor-pointer transition duration-150 ease-in-out"
                                data-id="${labels.id}"
                                data-title="${labels.title}"
                                data-artist="${labels.artist}"
                                data-labels-date="${labels.labelsDate}"
                                data-statis="${labels.statis}"
                                data-status="${labels.status}">
                            </button>
                        </div>
                    </td>
                `;
                        labelstableBody.appendChild(row);
                    });


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

                        tableContainer.querySelectorAll('.sort').forEach(btn => {
                            if (!btn.querySelector('svg')) {
                                btn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-down-up-icon lucide-arrow-down-up"><path d="m3 16 4 4 4-4"/><path d="M7 20V4"/><path d="m21 8-4-4-4 4"/><path d="M17 4v16"/></svg>`;
                            }
                        });
                    }

                    // Initialize first table
                    priodDataTable = new simpleDatatables.DataTable("#releasestable", {
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

                    tracksTable = new simpleDatatables.DataTable("#trackstable", {
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

                    platformTable = new simpleDatatables.DataTable("#platformtable", {
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

                    countryTable = new simpleDatatables.DataTable("#countrytable", {
                        searchable: true,
                        sortable: false,
                        fixedHeight: false,
                        fixedWidth: false,
                        perPage: 5,
                        perPageSelect: [5, 10, 15, 20, 25, ['All', -1]],
                        labels: {
                            placeholder: "Search entries...",
                            perPage: "Show {select} entries per page",
                            noRows: "No matching Country found",
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

                    labelsTable = new simpleDatatables.DataTable("#labelstable", {
                        searchable: true,
                        sortable: false,
                        fixedHeight: false,
                        fixedWidth: false,
                        perPage: 5,
                        perPageSelect: [5, 10, 15, 20, 25, ['All', -1]],
                        labels: {
                            placeholder: "Search entries...",
                            perPage: "Show {select} entries per page",
                            noRows: "No matching Labels found",
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
                    applyCustomStyles('releasestable');
                    applyCustomStyles('trackstable');
                    applyCustomStyles('platformtable');
                    applyCustomStyles('countrytable');
                    applyCustomStyles('labelstable');

                    // Set up event listeners for first table
                    releasesDataTable.on("datatable.page", () => applyCustomStyles('releasestable'));
                    releasesDataTable.on("datatable.search", () => applyCustomStyles('releasestable'));
                    releasesDataTable.on("datatable.sort", () => applyCustomStyles('releasestable'));
                    releasesDataTable.on("datatable.perpage", () => applyCustomStyles('releasestable'));

                    // Set up event listeners for second table
                    tracksTable.on("datatable.page", () => applyCustomStyles('trackstable'));
                    tracksTable.on("datatable.search", () => applyCustomStyles('trackstable'));
                    tracksTable.on("datatable.sort", () => applyCustomStyles('trackstable'));
                    tracksTable.on("datatable.perpage", () => applyCustomStyles('trackstable'));

                    // Set up event listeners for third table
                    platformTable.on("datatable.page", () => applyCustomStyles('platformtable'));
                    platformTable.on("datatable.search", () => applyCustomStyles('platformtable'));
                    platformTable.on("datatable.sort", () => applyCustomStyles('platformtable'));
                    platformTable.on("datatable.perpage", () => applyCustomStyles('platformtable'));

                    countryTable.on("datatable.page", () => applyCustomStyles('countrytable'));
                    countryTable.on("datatable.search", () => applyCustomStyles('countrytable'));
                    countryTable.on("datatable.sort", () => applyCustomStyles('countrytable'));
                    countryTable.on("datatable.perpage", () => applyCustomStyles('countrytable'));

                    labelsTable.on("datatable.page", () => applyCustomStyles('labelstable'));
                    labelsTable.on("datatable.search", () => applyCustomStyles('labelstable'));
                    labelsTable.on("datatable.sort", () => applyCustomStyles('labelstable'));
                    labelsTable.on("datatable.perpage", () => applyCustomStyles('labelstable'));
                });
            </script>
</x-app-layout>