<x-app-layout>
  @section('title', 'Releases')

    <!-- Header -->
    <div class="flex flex-col xl:flex-row xl:justify-between items-center gap-4 mb-4">
      <h1 class="text-4xl font-semibold text-center xl:text-left">Releases</h1>
      <a href="{{ route('user.create')  }}"
        class="rounded-sm px-10 py-2 font-semibold text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-center cursor-pointer transition duration-150 ease-in-out">
        Create Releases
    </a>
    </div>

    <div class="grid grid-cols-1 xl:grid-cols-12 gap-2 xl:gap-4">
      <div class="col-span-1 xl:col-span-12 flex flex-col gap-2 xl:gap-4">

        <!-- Stats -->
        <div class="grid grid-cols-1 xl:grid-cols-1 gap-2">
          <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-2">
            <div class="inline-flex justify-between items-center">
              <span class="font-medium">Releases</span>
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
                <th><span>Release Title</span></th>
                <th><span>Artist</span></th>
                <th><span>Release Date</span></th>
                <th><span>Status</span></th>
                <th><span></span></th>
              </tr>
            </thead>
            <tbody>
              <!-- Data akan diisi oleh JavaScript -->
            </tbody>
          </table>
        </div>
      </div>
    </div>


  <x-slot name="script">

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
            title: "Midnight Dreams",
            artist: "The Lunar Band",
            releaseDate: "2024-03-15",
            status: "Released",
            statusColor: "bg-green-400"
          },
          {
            id: 3,
            title: "Rock Revolution",
            artist: "Thunder Strike",
            releaseDate: "2024-01-10",
            status: "Released",
            statusColor: "bg-green-400"
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
              <div class="inline-flex justify-between items-center gap-4 w-full">
                  <div class="inline-flex items-center xl:gap-6 gap-2">
                      <img src="{{ asset('luna-assets/luna-media/no-coverart.jpg') }}"
                        alt="Album Cover"
                        class="w-15 h-15 object-cover flex-shrink-0">
                      <span class="font-semibold text-sm xl:text-md">${release.title}</span>
                  </div>
              </div>
          </td>
          <td>
              <span class="font-semibold text-sm xl:text-md">${release.artist}</span>
          </td>
          <td>
              <span class="font-semibold text-sm xl:text-md">${release.releaseDate}</span>
          </td>
          <td>
              <div class="inline-flex items-center gap-2">
                  <div class="w-3 h-3 rounded-full bg flex-shrink-0 ${release.statusColor}"></div>
                      <span class="font-semibold text-sm xl:text-md">${release.status}</span>
              </div>
          </td>
          <td>
              <div class="flex h-15 items-center gap-2 opacity-0 group-hover:opacity-100 transition duration-150 ease-in-out">
<div class="flex h-15 items-center gap-2 opacity-0 group-hover:opacity-100 transition duration-150 ease-in-out">
                        <a href="{{ route('user.show') }}" class="view-more-btn rounded-full p-2 text-[#302995] bg-transparent hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 text-center cursor-pointer transition duration-150 ease-in-out"
                        data-id="${release.id}"
                      data-title="${release.title}"
                      data-artist="${release.artist}"
                      data-release-date="${release.releaseDate}"
                      data-status="${release.status}">
                          </a>
                    </div>
              </div>
          </td>
      `;
          tableBody.appendChild(row);
        });

        // TAMBAHAN INI: Initialize Lucide icons setelah menambahkan dat

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
                title: this.dataset.title,
                artist: this.dataset.artist,
                releaseDate: this.dataset.releaseDate,
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
  </x-slot>
</x-app-layout>