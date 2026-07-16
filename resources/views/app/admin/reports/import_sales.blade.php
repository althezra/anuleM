<x-app-layout>
    @section('title', 'Import Sales Data')
    <x-slot name="header">
        <h1 class="text-2xl font-bold">Import Sales Data</h1>
    </x-slot>

    <div class="bg-[#f5f5f5] rounded-lg p-6">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 items-stretch">
            <!-- Left: Form -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Platform Select -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Platforms</label>
                    <div class="relative">
                        <select
                            class="w-full appearance-none bg-white px-3 py-2 border border-gray-300 rounded-md text-sm text-gray-700 focus:border-[#302995] focus:outline-none">
                            <option>Spotify</option>
                            <option>Apple Music</option>
                            <option>Deezer</option>
                        </select>
                        <!-- Dropdown Icon -->
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Date Picker -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Report Period</label>
                    <div class="relative">
                        <input type="text" id="reportPeriod" placeholder="dd/mm/yy"
                            class="peer w-full bg-white px-3 py-2 pr-10 border border-gray-300 rounded-md text-sm text-gray-700 focus:border-[#302995] focus:outline-none">
                        <!-- Custom Calendar Icon -->
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500 cursor-pointer peer-focus:text-[#302995]"
                            onclick="flatpickrInstance.open()">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                width="20" height="20" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M8 2v4" />
                                <path d="M16 2v4" />
                                <rect width="18" height="18" x="3" y="4" rx="2" />
                                <path d="M3 10h18" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Upload -->
            <div class="lg:col-span-3 flex flex-col">
                <label class="block text-sm font-semibold text-gray-700 mb-2">Upload Audio File</label>
                <div id="uploadArea"
                    class="flex-1 border-2 border-dashed border-gray-300 rounded-lg bg-white flex flex-col items-center justify-center text-center cursor-pointer transition-colors duration-200 px-6 py-8">
                    <div class="icon-wrapper mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            width="48" height="48" viewBox="0 0 24 24" fill="none"
                            stroke="#6b7280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 13v8" />
                            <path d="M4 14.9A7 7 0 1 1 15.7 8h1.8a4.5 4.5 0 0 1 2.5 8.2" />
                            <path d="m8 17 4-4 4 4" />
                        </svg>
                    </div>
                    <div class="text-gray-700 font-medium mb-1">Browse Files</div>
                    <div class="text-gray-500 text-sm">Drag and drop files here</div>
                </div>

                <input type="file" id="fileInput" class="hidden" accept="audio/*">

                <!-- Import Button (tanpa hover color change) -->
                <div class="flex justify-end mt-4">
                    <button
                        id="importBtn"
                        class="bg-[#302995] text-white px-6 py-2 rounded-md text-sm font-medium transition-colors duration-150">
                        Import Now
                    </button>
                </div>
            </div>
        </div>
    </div>
            <!-- Table Container -->
            <div id="tableContainer">
                <table id="admintracksTable">
                    <thead>
                        <tr>
                            <th><span>Import Date</span></th>
                            <th><span>File Name</span></th>
                            <th><span>Platform</span></th>
                            <th><span>Report Period</span></th>
                            <th><span>Status</span></th>
                            <th><span>Imported By</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Data akan diisi oleh JavaScript -->
                    </tbody>
                </table>
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

            // Sample data untuk admin import history
            const admintracksData = [
                {
                    id: 1,
                    importDate: "15 Jan 2025",
                    fileName: "spotify_sales_report_aug_2025.csv",
                    platform: "Spotify",
                    reportPeriod: "August 2025",
                    status: "Processing",
                    importedBy: "rama raditia"
                },
                {
                    id: 2,
                    importDate: "14 Jan 2025",
                    fileName: "apple_music_report_jul_2025.csv",
                    platform: "Apple Music",
                    reportPeriod: "July 2025",
                    status: "Completed",
                    importedBy: "john doe"
                }
            ];

            // Update total count
            const totalElement = document.getElementById('totaltracks');
            if (totalElement) {
                totalElement.textContent = admintracksData.length;
            }

            // Populate table dengan tampilan original
            const tableBody = adminTracksTable.querySelector('tbody');
            if (tableBody) {
                // Clear existing rows
                tableBody.innerHTML = '';

                admintracksData.forEach(track => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                <td>
                    <span class="font-semibold">${track.importDate}</span>
                </td>
                <td>
                    <span class="font-semibold">${track.fileName}</span>
                </td>
                <td>
                    <span class="font-semibold">${track.platform}</span>
                </td>
                <td>
                    <span class="font-semibold">${track.reportPeriod}</span>
                </td>
                <td>
                    <span class="font-semibold">${track.status}</span>
                </td>
                <td>
  <div class="inline-flex justify-between items-center gap-4 w-full">
    <!-- User -->
    <span class="font-semibold">${track.importedBy}</span>

    <!-- Wrapper Alpine -->
    <div x-data="{ open: false }" class="relative">
      <!-- Trigger Button -->
      <div class="flex h-15 items-center sticky top-0 gap-2 transition duration-150 ease-in-out">
        <button @click="open = !open"
                class="view-more-btn rounded-full p-2 text-[#302995] bg-transparent hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 text-center cursor-pointer transition duration-150 ease-in-out"
                data-id="${track.id}"
                data-import-date="${track.importDate}"
                data-file-name="${track.fileName}"
                data-platform="${track.platform}"
                data-report-period="${track.reportPeriod}"
                data-status="${track.status}"
                data-imported-by="${track.importedBy}">
          ⋮
        </button>
      </div>

      <!-- Dropdown Menu -->
      <div x-show="open"
           @click.outside="open = false"
           x-transition
           class="absolute right-0 mt-2 w-56 bg-white border border-gray-200 rounded-md shadow-lg z-10">
        <a href="#"
           class="block px-4 py-2 text-gray-700 hover:bg-gray-100">
          View Detailed
        </a>
        <div class="border-t border-gray-200"></div>
        <a href="#"
           class="block px-4 py-2 text-gray-700 hover:bg-gray-100">
          Download CSV reports
        </a>
      </div>
    </div>
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
                    columns: [
                        { select: 0, sort: "asc" },     // kolom pertama default ascending
                        { select: -1, sortable: false } // kolom terakhir (action) disable sort
                    ],
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


                // Re-initialize Lucide icons
                if (typeof lucide !== 'undefined') {
                    lucide.createIcons();
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
                            importDate: this.dataset.importDate,
                            fileName: this.dataset.fileName,
                            platform: this.dataset.platform,
                            reportPeriod: this.dataset.reportPeriod,
                            status: this.dataset.status,
                            importedBy: this.dataset.importedBy
                        };
                    });
                });
            }

            applyCustomStyles();

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


    <!-- Flatpickr CSS & JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <style>
        .icon-wrapper svg {
            width: 48px !important;
            height: 48px !important;
            stroke: #6b7280 !important;
        }

        /* Hover effect border ungu */
        #uploadArea.hovering,
        #uploadArea:hover {
            border-color: #302995 !important;
            background-color: #f5f3ff !important;
        }
    </style>

    <script>
        let flatpickrInstance = flatpickr("#reportPeriod", {
            dateFormat: "d/m/y",
            allowInput: true,
        });

        const uploadArea = document.getElementById('uploadArea');
        const fileInput = document.getElementById('fileInput');
        const importBtn = document.getElementById('importBtn');

        uploadArea.addEventListener('click', () => fileInput.click());

        uploadArea.addEventListener('dragover', function (e) {
            e.preventDefault();
            this.classList.add('hovering');
        });

        uploadArea.addEventListener('dragleave', function (e) {
            e.preventDefault();
            this.classList.remove('hovering');
        });

        uploadArea.addEventListener('drop', function (e) {
            e.preventDefault();
            this.classList.remove('hovering');
            const files = e.dataTransfer.files;
            if (files.length > 0) {
                fileInput.files = files;
                console.log('File dropped:', files[0].name);
            }
        });

        fileInput.addEventListener('change', function (e) {
            if (e.target.files.length > 0) {
                console.log('File selected:', e.target.files[0].name);
            }
        });

        importBtn.addEventListener('click', function () {
            if (!fileInput.files || fileInput.files.length === 0) {
                alert('Please choose a file first.');
                return;
            }
            alert('Importing: ' + fileInput.files[0].name);
        });
    </script>
</x-app-layout>
