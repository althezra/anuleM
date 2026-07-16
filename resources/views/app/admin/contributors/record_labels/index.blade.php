<x-app-layout>
    @section('title', 'Record_Label')
    <x-slot name="header">
        <h1 class="text-4xl font-semibold text-center xl:text-left">Record Labels</h1>
    </x-slot>

    <div class="grid grid-cols-1 xl:grid-cols-12 gap-2 xl:gap-4">
        <div class="col-span-1 xl:col-span-12 flex flex-col gap-2 xl:gap-4">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 xl:gap-2">
                <!-- Total Label on Platform -->
                <div class="bg-[#F5F5F5] px-6 py-4 rounded-md h-32 flex items-center">
                    <div class="flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-md font-medium text-[#1F1F1F]">Total Label on Platform</h3>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-tag-icon lucide-tag text-[#302995]">
                                    <path
                                        d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z" />
                                    <circle cx="7.5" cy="7.5" r=".5" fill="currentColor" />
                                </svg>
                            </div>
                        </div>
                        <div class="mb-1">
                            <span class="text-3xl font-bold text-[#1F1F1F]">0</span>
                        </div>
                    </div>
                </div>

                <!-- Verified Labels -->
                <div class="bg-[#F5F5F5] px-6 py-4 rounded-md h-32 flex items-center">
                    <div class="flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-md font-medium text-[#1F1F1F]">Verified Labels</h3>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check-icon lucide-circle-check text-[#302995]">
                                    <circle cx="12" cy="12" r="10" />
                                    <path d="m9 12 2 2 4-4" />
                                </svg>
                            </div>
                        </div>
                        <div class="mb-1">
                            <span class="text-3xl font-bold text-[#1F1F1F]">0</span>
                        </div>
                    </div>
                </div>

                <!-- Unverified Labels -->
                <div class="bg-[#F5F5F5] px-6 py-4 rounded-md h-32 flex items-center">
                    <div class="flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-md font-medium text-[#1F1F1F]">Unverified Labels</h3>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-info-icon lucide-info text-[#302995]">
                                    <circle cx="12" cy="12" r="10" />
                                    <path d="M12 16v-4" />
                                    <path d="M12 8h.01" />
                                </svg>
                            </div>
                        </div>
                        <div class="mb-1">
                            <span class="text-3xl font-bold text-[#1F1F1F]">0</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats -->
            <div class="grid grid-cols-1 xl:grid-cols-1 gap-2">
                <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-2">
                    <div class="inline-flex justify-between items-center">
                        <span class="font-semibold">Tracks</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-disc3-icon lucide-disc-3 text-[#302995]">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M6 12c0-1.7.7-3.2 1.8-4.2" />
                            <circle cx="12" cy="12" r="2" />
                            <path d="M18 12c0 1.7-.7 3.2-1.8 4.2" />
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
                <table id="admintracksTable">
                    <thead>
                        <tr>
                            <th><span>Artist</span></th>
                            <th><span>User</span></th>
                            <th><span>Number of Release</span></th>
                            <th><span>Data Created</span></th>
                            <th><span>Status</span></th>
                            <th>
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
        <!-- View Record Label Modal -->
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
                <div class="relative bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-4 w-full max-w-xl mx-auto transform transition-all"
                    @click.outside="$store.modals.closeEditModal()">
                    <div class="flex items-center justify-between">
                        <div class="inline-flex items-center gap-3">
                            <span class="font-medium">View Record Label</span>

                            <div
                                class="bg-[#17A248] text-white px-4 py-1 rounded-full text-sm font-semibold w-fit flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-check">
                                    <circle cx="12" cy="12" r="10" />
                                    <path d="m9 12 2 2 4-4" />
                                </svg>
                                <span>Verified</span>
                            </div>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"
                                stroke-linecap="round" stroke-linejoin="round" class="text-[#302995]">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M6 12c0-1.7.7-3.2 1.8-4.2" />
                                <circle cx="12" cy="12" r="2" />
                                <path d="M18 12c0 1.7-.7 3.2-1.8 4.2" />
                            </svg>
                        </div>
                    </div>

                    <div x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100">
                        <div class="space-y-4">
                            <div class="inline-flex items-center w-full gap-6">
                                <img src="{{ route('avatar') }}?name=Rama Raditia}&
				                                    @if (request()->routeIs('profile.edit')) background=F5F5F5&color=302995
                                                    @else
                                                    background=302995&color=BCB7F2 @endif
				                                    "
                                    alt="Avatar" class="rounded-full h-20 flex-shrink-0" loading="lazy">
                                {{-- <img
                                    x-bind:src="$store.modals.viewLabelData.name ? '{{ route('avatar') }}?name=' + $store.modals.viewLabelData.name : '{{ route('avatar') }}?name=-'"
                                    alt="" class="h-20 rounded-full"> --}}
                                <div class="w-full flex flex-col gap-2">
                                    <span class="text-xs xl:text-sm text-[#1F1F1F]">Record Label Name</span>
                                    <h3 {{--
                                        x-text="$store.modals.viewLabelData.name ? $store.modals.viewLabelData.name : '-'"
                                        --}} class="font-semibold text-2xl">Rama Raditia</h3>
                                </div>
                            </div>
                            <hr class="col-span-1 xl:col-span-2 border-0 border-b border-[#D6D6D6]">
                            <div class="grid grid-cols-2 gap-2">
                                <div class="w-full flex flex-col gap-2">
                                    <span class="text-xs xl:text-sm text-[#1F1F1F]">Website</span>
                                    <a x-bind:href="$store.modals.viewLabelData.website ? $store.modals.viewLabelData.website : '#'"
                                        class="text-lg" target="_blank" rel="noopener">
                                        <div class="inline-flex items-center justify-between gap-4 text-[#302995]">
                                            <p x-text="$store.modals.viewLabelData.website ? 'Visit Website' : '-'">
                                            </p>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-external-link-icon lucide-external-link">
                                                <path d="M15 3h6v6" />
                                                <path d="M10 14 21 3" />
                                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                                <div class="w-full flex flex-col gap-2">
                                    <label for="view_instagram"
                                        class="text-xs xl:text-sm text-[#1F1F1F]">Instagram</label>
                                    <a x-bind:href="$store.modals.viewLabelData.instagram ? $store.modals.viewLabelData.instagram : '#'"
                                        class="text-lg" target="_blank" rel="noopener">
                                        <div class="inline-flex items-center justify-between gap-4 text-[#302995]">
                                            <p
                                                x-text="$store.modals.viewLabelData.instagram ? 'Visit on Instagram' : '-'">
                                            </p>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-external-link-icon lucide-external-link">
                                                <path d="M15 3h6v6" />
                                                <path d="M10 14 21 3" />
                                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                                <div class="w-full flex flex-col gap-2">
                                    <label for="view_facebook"
                                        class="text-xs xl:text-sm text-[#1F1F1F]">Facebook</label>
                                    <a x-bind:href="$store.modals.viewLabelData.facebook ? $store.modals.viewLabelData.facebook : '#'"
                                        class="text-lg" target="_blank" rel="noopener">
                                        <div class="inline-flex items-center justify-between gap-4 text-[#302995]">
                                            <p
                                                x-text="$store.modals.viewLabelData.facebook ? 'Visit on Facebook' : '-'">
                                            </p>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-external-link-icon lucide-external-link">
                                                <path d="M15 3h6v6" />
                                                <path d="M10 14 21 3" />
                                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                                <div class="w-full flex flex-col gap-2">
                                    <label for="view_youtube"
                                        class="text-xs xl:text-sm text-[#1F1F1F]">YouTube</label>
                                    <a x-bind:href="$store.modals.viewLabelData.youtube ? $store.modals.viewLabelData.youtube : '#'"
                                        class="text-lg" target="_blank" rel="noopener">
                                        <div class="inline-flex items-center justify-between gap-4 text-[#302995]">
                                            <p x-text="$store.modals.viewLabelData.youtube ? 'Visit on YouTube' : '-'">
                                            </p>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-external-link-icon lucide-external-link">
                                                <path d="M15 3h6v6" />
                                                <path d="M10 14 21 3" />
                                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-center space-y-2 mt-6">
                            <div class="grid grid-cols-2 gap-2 w-full">
                                <button type="button"
                                    @click="$store.modals.openEditModal({
                                    id: $store.modals.viewLabelData.id,
                                    name: $store.modals.viewLabelData.name,
                                    website: $store.modals.viewLabelData.website,
                                    instagram: $store.modals.viewLabelData.instagram,
                                    facebook: $store.modals.viewLabelData.facebook,
                                    youtube: $store.modals.viewLabelData.youtube
                                })"
                                    class="rounded-sm px-4 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-center cursor-pointer h-max transition duration-150 ease-in-out">
                                    Edit
                                </button>

                                <button type="submit"
                                    class="w-full rounded-sm px-4 py-2 text-[#F5F5F5] bg-red-600 hover:bg-red-700 active:bg-red-800 text-center cursor-pointer h-max transition duration-150 ease-in-out"
                                    @click="$store.modals.openDeleteModal()">
                                    Delete
                                </button>
                            </div>
                            <button type="button" @click="$store.modals.closeViewModal()"
                                class="w-full rounded-sm px-4 py-2 text-[#302995] border border-[#302995] bg-[#F5F5F5] hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 text-center cursor-pointer h-max transition duration-150 ease-in-out">
                                Cancel
                            </button>
                        </div>
                    </div>

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

        <!-- Create Record Label Modal -->
        <div x-show="$store.modals.createModalOpen" x-transition:enter="transition ease-out duration-150"
            x-transition:enter-start="opacity-0 transform" x-transition:enter-end="opacity-100 transform"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 transform"
            x-transition:leave-end="opacity-0 transform" class="fixed inset-0 z-50 overflow-y-auto" x-cloak>
            <!-- Backdrop -->
            <div class="fixed inset-0 bg-black opacity-25 transition-opacity"
                x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                @click="$store.modals.closeCreateModal()"></div>
            <!-- Modal Content -->
            <div class="flex items-center justify-center min-h-screen p-4">
                <div class="relative bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-4 w-full max-w-xl mx-auto transform transition-all"
                    @click.outside="$store.modals.closeCreateModal()">
                    <div class="inline-flex justify-between items-center">
                        <span class="font-medium">Create New Record Label</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="text-[#302995] lucide lucide-user-round-plus-icon lucide-user-round-plus">
                            <path d="M2 21a8 8 0 0 1 13.292-6" />
                            <circle cx="10" cy="8" r="5" />
                            <path d="M19 16v6" />
                            <path d="M22 19h-6" />
                        </svg>
                    </div>

                    <div x-show="$store.modals.loading" x-transition:enter="transition ease-out duration-150"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="absolute inset-0 flex items-center justify-center bg-[#F5F5F5]/80 rounded-md z-10">
                        <div
                            class="w-16 h-16 border-4 border-[#302995] border-t-[#302995]/50 rounded-full animate-spin">
                        </div>
                    </div>

                    <!-- Modal Content (hidden while loading) -->
                    <div x-show="!$store.modals.loading" x-transition:enter="transition ease-out duration-150"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                        <form action="{{ route('admin.record_labels.store') }}" method="POST">
                            @csrf
                            <div class="space-y-4">
                                <div class="w-full flex flex-col gap-2">
                                    <label for="name" class="text-xs xl:text-sm text-[#1F1F1F]">Record Label
                                        Name<span class="text-red-500">*</span></label>
                                    <input type="text" name="name" id="name"
                                        placeholder="Example Records" autocomplete="off"
                                        class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out"
                                        required>
                                </div>
                                <hr class="col-span-1 xl:col-span-2 border-0 border-b border-[#D6D6D6]">
                                <div class="grid grid-cols-2 gap-2">
                                    <div class="w-full flex flex-col gap-2">
                                        <label for="website"
                                            class="text-xs xl:text-sm text-[#1F1F1F]">Website</label>
                                        <input type="text" name="website" id="website"
                                            placeholder="Website URL" autocomplete="off"
                                            class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out">
                                    </div>
                                    <div class="w-full flex flex-col gap-2">
                                        <label for="instagram"
                                            class="text-xs xl:text-sm text-[#1F1F1F]">Instagram</label>
                                        <input type="text" name="instagram" id="instagram"
                                            placeholder="Instagram URL" autocomplete="off"
                                            class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out">
                                    </div>
                                    <div class="w-full flex flex-col gap-2">
                                        <label for="facebook"
                                            class="text-xs xl:text-sm text-[#1F1F1F]">Facebook</label>
                                        <input type="text" name="facebook" id="facebook"
                                            placeholder="Facebook URL" autocomplete="off"
                                            class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out">
                                    </div>
                                    <div class="w-full flex flex-col gap-2">
                                        <label for="youtube"
                                            class="text-xs xl:text-sm text-[#1F1F1F]">YouTube</label>
                                        <input type="text" name="youtube" id="youtube"
                                            placeholder="YouTube Channel URL" autocomplete="off"
                                            class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out">
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end items-center space-x-4 mt-6">
                                <button type="button" @click="$store.modals.closeCreateModal()"
                                    class="rounded-sm px-4 py-2 text-[#302995] border border-[#302995] bg-[#F5F5F5] hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 text-center cursor-pointer transition duration-150 ease-in-out">
                                    Cancel
                                </button>
                                <button type="submit"
                                    class="rounded-sm px-4 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-center cursor-pointer transition duration-150 ease-in-out">
                                    Create
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Record Label Modal -->
        <div x-show="$store.modals.editModalOpen" x-transition:enter="transition ease-out duration-150"
            x-transition:enter-start="opacity-0 transform" x-transition:enter-end="opacity-100 transform"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 transform"
            x-transition:leave-end="opacity-0 transform" class="fixed inset-0 z-50 overflow-y-auto" x-cloak>
            <!-- Backdrop -->
            <div class="fixed inset-0 bg-black opacity-25 transition-opacity"
                x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                @click="$store.modals.closeEditModal()"></div>
            <!-- Modal Content -->
            <div class="flex items-center justify-center min-h-screen p-4">
                <div class="relative bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-4 w-full max-w-xl mx-auto transform transition-all"
                    @click.outside="$store.modals.closeEditModal()">
                    <div class="inline-flex justify-between items-center">
                        <span class="font-medium">Edit Record Label</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="text-[#302995] lucide lucide-user-round-plus-icon lucide-user-round-plus">
                            <path d="M2 21a8 8 0 0 1 13.292-6" />
                            <circle cx="10" cy="8" r="5" />
                            <path d="M19 16v6" />
                            <path d="M22 19h-6" />
                        </svg>
                    </div>

                    <!-- Modal Content (hidden while loading) -->
                    <div x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100">
                        <form x-bind:action="'/admin/record_labels/' + $store.modals.editLabelData.id" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="space-y-4">
                                <div class="w-full flex flex-col gap-2">
                                    <label for="edit_name" class="text-xs xl:text-sm text-[#1F1F1F]">Record Label
                                        Name<span class="text-red-500">*</span></label>
                                    <input type="text" name="name" id="edit_name"
                                        placeholder="Example Records" autocomplete="off"
                                        x-model="$store.modals.editLabelData.name"
                                        class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out"
                                        required>
                                </div>
                                <hr class="col-span-1 xl:col-span-2 border-0 border-b border-[#D6D6D6]">
                                <div class="grid grid-cols-2 gap-2">
                                    <div class="w-full flex flex-col gap-2">
                                        <label for="edit_website"
                                            class="text-xs xl:text-sm text-[#1F1F1F]">Website</label>
                                        <input type="text" name="website" id="edit_website"
                                            placeholder="Website URL" autocomplete="off"
                                            x-model="$store.modals.editLabelData.website"
                                            class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out">
                                    </div>
                                    <div class="w-full flex flex-col gap-2">
                                        <label for="edit_instagram"
                                            class="text-xs xl:text-sm text-[#1F1F1F]">Instagram</label>
                                        <input type="text" name="instagram" id="edit_instagram"
                                            placeholder="Instagram URL" autocomplete="off"
                                            x-model="$store.modals.editLabelData.instagram"
                                            class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out">
                                    </div>
                                    <div class="w-full flex flex-col gap-2">
                                        <label for="edit_facebook"
                                            class="text-xs xl:text-sm text-[#1F1F1F]">Facebook</label>
                                        <input type="text" name="facebook" id="edit_facebook"
                                            placeholder="Facebook URL" autocomplete="off"
                                            x-model="$store.modals.editLabelData.facebook"
                                            class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out">
                                    </div>
                                    <div class="w-full flex flex-col gap-2">
                                        <label for="edit_youtube"
                                            class="text-xs xl:text-sm text-[#1F1F1F]">YouTube</label>
                                        <input type="text" name="youtube" id="edit_youtube"
                                            placeholder="YouTube Channel URL" autocomplete="off"
                                            x-model="$store.modals.editLabelData.youtube"
                                            class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out">
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end items-center space-x-4 mt-6">
                                <button type="button" @click="$store.modals.closeEditModal()"
                                    class="rounded-sm px-4 py-2 text-[#302995] border border-[#302995] bg-[#F5F5F5] hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 text-center cursor-pointer transition duration-150 ease-in-out">
                                    Cancel
                                </button>
                                <button type="submit"
                                    class="rounded-sm px-4 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-center cursor-pointer transition duration-150 ease-in-out">
                                    Update
                                </button>
                            </div>
                        </form>
                    </div>

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
        <div x-show="$store.modals.deleteModalOpen" x-transition:enter="transition ease-out duration-150"
            x-transition:enter-start="opacity-0 transform" x-transition:enter-end="opacity-100 transform"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 transform"
            x-transition:leave-end="opacity-0 transform" class="fixed inset-0 z-50 overflow-y-auto" x-cloak>
            <!-- Backdrop -->
            <div class="fixed inset-0 bg-black opacity-25 transition-opacity"
                x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                @click="$store.modals.closeDeleteModal()"></div>
            <!-- Modal Content -->
            <div class="flex items-center justify-center min-h-screen p-4">
                <div class="relative bg-[#F5F5F5] px-5 py-5 rounded-md w-full max-w-md mx-auto transform transition-all"
                    @click.outside="$store.modals.closeEditModal()">
                    <div x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100">

                        <div class="flex item-center justify-between mb-4">
                            <h2 class="text-xl font-semibold text-black">Delete Record Labels
                            </h2>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-triangle-alert-icon lucide-triangle-alert text-[#F40000]">
                                <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3" />
                                <path d="M12 9v4" />
                                <path d="M12 17h.01" />
                            </svg>
                        </div>


                        <div class="mb-4">
                            <p class="text-md font-semibold text-[#646464] ">Are you sure want to permanently delete
                                the Record Labels <span>"Famous dex"</span>? This action cannot be undone</p>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex space-x-3">
                            <button @click="$store.modals.closeDeleteModal()"
                                class="flex-1 px-4 py-2 text-[#302995] border border-[#302995] rounded-md hover:bg-gray-50 font-medium cursor-pointer">
                                Cancel
                            </button>
                            <button @click="$store.modals.submitTakedown()"
                                class="flex-1 px-4 py-2 bg-[#F40000] text-white rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 font-medium cursor-pointer">
                                Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Toast (Success/Error) -->
    <div x-data x-show="$store.modals.toast.show" x-cloak
        class="fixed inset-0 z-50 flex items-center justify-center overflow-y-auto pointer-events-none">

        <div class="fixed inset-0 bg-black/50 pointer-events-auto"></div>

        <div class="flex items-center justify-center min-h-screen p-6 pointer-events-none">
            <div x-show="$store.modals.toast.show" x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 scale-90 -translate-y-4"
                x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                x-transition:leave="transition ease-in duration-300 transform"
                x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                x-transition:leave-end="opacity-0 scale-90 -translate-y-4"
                class="relative bg-white px-8 py-8 rounded-md flex flex-col gap-4 w-full max-w-sm mx-auto transform pointer-events-auto z-10 shadow-lg">

                <!-- Icon & Message -->
                <div class="flex flex-col items-center gap-3">
                    <template x-if="$store.modals.toast.type === 'success'">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="w-24 h-24 text-green-500">
                            <path d="M21.801 10A10 10 0 1 1 17 3.335" />
                            <path d="m9 11 3 3L22 4" />
                        </svg>
                    </template>

                    <template x-if="$store.modals.toast.type === 'error'">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24 text-red-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <line x1="9" y1="9" x2="15" y2="15"
                                stroke-linecap="round" stroke-width="2" />
                            <line x1="15" y1="9" x2="9" y2="15"
                                stroke-linecap="round" stroke-width="2" />
                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
                        </svg>
                    </template>

                    <span class="text-lg font-semibold text-black text-center"
                        x-text="$store.modals.toast.message"></span>
                </div>

                <!-- Loading Overlay -->
                <div x-show="$store.modals.toast.loading" x-transition
                    class="absolute inset-0 flex items-center justify-center bg-white/80 rounded-md z-20">
                    <div class="w-16 h-16 border-4 border-[#302995] border-t-[#302995]/50 rounded-full animate-spin">
                    </div>
                </div>

            </div>
        </div>
    </div>


    <x-slot name="script">
        <script>
            document.addEventListener('alpine:init', function() {
                Alpine.store('modals', {
                    createModalOpen: false,
                    editModalOpen: false,
                    viewModalOpen: false,
                    deleteModalOpen: false,
                    loadingIn: false,
                    loadingOut: false,
                    deleteId: null,

                    // Data untuk Edit (SAMA PERSIS DENGAN ARTIST)
                    editLabelData: {
                        id: null,
                        name: '',
                        website: '',
                        instagram: '',
                        facebook: '',
                        youtube: ''
                    },

                    // Data untuk View (SAMA PERSIS DENGAN ARTIST)
                    viewtrackData: {
                        id: null,
                        artist: '', // Nanti ini diisi nama Label
                        user: '',
                        trackDate: '', // Nanti diisi Created At
                        platform: '',
                        release: '',
                        status: '',
                        website: '',
                        instagram: '',
                        facebook: '',
                        youtube: ''
                    },
                    // Compatibility: template expects `viewLabelData` (used across other pages)
                    viewLabelData: {
                        id: null,
                        name: '',
                        website: '',
                        instagram: '',
                        facebook: '',
                        youtube: ''
                    },

                    openCreateModal() {
                        this.createModalOpen = true;
                    },
                    closeCreateModal() {
                        this.createModalOpen = false;
                    },

                    openDeleteModal(id = null) {
                        this.deleteId = id ? id : this.viewtrackData.id;
                        this.viewModalOpen = false;
                        this.deleteModalOpen = true;
                    },
                    closeDeleteModal() {
                        this.deleteModalOpen = false;
                        this.deleteId = null;
                    },

                    // Toast state
                    toast: {
                        show: false,
                        message: '',
                        type: 'success',
                        loading: false
                    },

                    showToast(message, type = 'success') {
                        this.toast = {
                            show: true,
                            message,
                            type,
                            loading: false
                        };
                        setTimeout(() => (this.toast.show = false), 3000);
                    },
                    submitTakedown() {
                        if (!this.deleteId) return;
                        const tokenMeta = document.querySelector('meta[name="csrf-token"]');
                        const token = tokenMeta ? tokenMeta.getAttribute('content') : '';

                        fetch('/admin/record_labels/' + this.deleteId, {
                            method: 'DELETE',
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                                'X-CSRF-TOKEN': token,
                                'Accept': 'application/json'
                            }
                        }).then(async res => {
                            if (res.ok) {
                                // Close modal
                                this.closeDeleteModal();
                                // Try to remove the row if present
                                const row = document.querySelector(`[data-id="${this.deleteId}"]`);
                                if (row && row.closest('tr')) row.closest('tr').remove();
                                // Show toast then reload so user sees it
                                this.showToast('Record Label deleted successfully!', 'success');
                                setTimeout(() => location.reload(), 1200);
                            } else {
                                console.error('Delete failed', await res.text());
                                this.closeDeleteModal();
                            }
                        }).catch(err => {
                            console.error(err);
                            this.closeDeleteModal();
                        });
                    },

                    // --- LOGIKA EDIT (SAMA PERSIS) ---
                    openEditModal(data) {
                        this.loadingIn = true;
                        this.viewModalOpen = false;
                        this.editModalOpen = true;

                        setTimeout(() => {
                            this.editLabelData = {
                                id: data.id,
                                // Accept both `name` (from view template) and `artist` (older pattern)
                                name: data.name || data.artist || '',
                                website: data.website || '',
                                instagram: data.instagram || '',
                                facebook: data.facebook || '',
                                youtube: data.youtube || ''
                            };
                            this.loadingIn = false;
                        }, 500);
                    },

                    closeEditModal() {
                        this.loadingOut = true;
                        setTimeout(() => {
                            this.loadingOut = false;
                            this.editLabelData = {
                                id: null,
                                name: '',
                                website: '',
                                instagram: '',
                                facebook: '',
                                youtube: ''
                            };
                        }, 500);
                        this.editModalOpen = false;
                    },

                    // --- LOGIKA VIEW (SAMA PERSIS) ---
                    openViewModal(data) {
                        this.loadingIn = true;
                        this.viewModalOpen = true;
                        setTimeout(() => {
                            this.viewtrackData = data;
                            // Also set viewLabelData for template compatibility
                            this.viewLabelData = {
                                id: data.id || null,
                                name: data.name || data.artist || '',
                                website: data.website || '',
                                instagram: data.instagram || '',
                                facebook: data.facebook || '',
                                youtube: data.youtube || ''
                            };
                            this.loadingIn = false;
                        }, 500);
                    },
                    closeViewModal() {
                        this.loadingOut = true;
                        setTimeout(() => {
                            this.loadingOut = false;
                            this.viewtrackData = {
                                id: null,
                                artist: '',
                                user: '',
                                trackDate: '',
                                platform: '',
                                release: '',
                                status: ''
                            };
                            this.viewLabelData = {
                                id: null,
                                name: '',
                                website: '',
                                instagram: '',
                                facebook: '',
                                youtube: ''
                            };
                        }, 500);
                        this.viewModalOpen = false;
                    }
                });
            });

            document.addEventListener('DOMContentLoaded', function() {
                // Hanya proses admintracksTable
                const adminTracksTable = document.querySelector('#admintracksTable');

                if (!adminTracksTable) {
                    console.log('admintracksTable not found');
                    return;
                }

                console.log('Processing admintracksTable for Labels...');

                // --- DATA SOURCE (DIGANTI KE LABEL) ---
                const admintracksData = @json($labels);

                // Update total count
                const totalElement = document.getElementById('totaltracks');
                if (totalElement) {
                    totalElement.textContent = admintracksData.length;
                }

                // Populate table dengan tampilan original
                const tableBody = adminTracksTable.querySelector('tbody');
                if (tableBody) {
                    tableBody.innerHTML = ''; // Reset isi table

                    admintracksData.forEach(track => {
                        // Mapping Data (track disini adalah Label)
                        const labelName = track.name;
                        const userName = track.user ? track.user.name : 'Unknown';
                        const dateCreated = new Date(track.created_at).toLocaleDateString();
                        const status = track.status;

                        // Warna status
                        let statusColor = 'bg-yellow-500';
                        if (status === 'Verified') statusColor = 'bg-[#24EA48]';
                        if (status === 'Unliked') statusColor = 'bg-[#FF2F2F]';

                        const row = document.createElement('tr');
                        row.className =
                            "border-b border-[#D6D6D6] group hover:bg-gray-50 transition duration-150";

                        row.innerHTML = `
                            <td class="py-3 px-4"><span class="font-semibold text-sm xl:text-md">${labelName}</span></td>
                            <td class="py-3 px-4"><span class="font-semibold text-sm xl:text-md">${userName}</span></td>
                            <td class="py-3 px-4"><span class="font-semibold text-sm xl:text-md">0 Release</span></td>
                            <td class="py-3 px-4">
                                <span class="font-semibold text-sm xl:text-md">${dateCreated}</span>
                            </td>
                            <td class="py-3 px-4">
                                <div class="inline-flex items-center gap-2">
                                    <div class="w-3 h-3 rounded-full ${statusColor}"></div>
                                    <span>${status}</span>
                                </div>
                            </td>
                            <td class="py-3 px-4 text-right">
                                <button type="button"
                                    class="view-more-btn opacity-0 group-hover:opacity-100 transition-all duration-200 rounded-full p-2 hover:bg-[#E0E0E0]/70 active:bg-[#E0E0E0] text-[#302995] cursor-pointer inline-flex items-center justify-center"
                                    data-id="${track.id}"
                                    data-artist="${track.name}"
                                    data-user="${userName}"
                                    data-track-date="${dateCreated}"
                                    data-website="${track.website || ''}"
                                    data-instagram="${track.instagram || ''}"
                                    data-facebook="${track.facebook || ''}"
                                    data-youtube="${track.youtube || ''}"
                                    data-status="${track.status}">
                                </button>
                            </td>
                        `;
                        tableBody.appendChild(row);
                    });
                }

                // Initialize SimpleDatatables (COPY PASTE DARI ARTIST)
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
                            noRows: "No matching labels found",
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
                } catch (error) {
                    console.error('Error initializing SimpleDatatables:', error);
                    return;
                }

                // Functions untuk button creation (SAMA PERSIS)
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
                    button.addEventListener('click', function() {
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
                    button.addEventListener('click', function() {
                        console.log('Filter button clicked');
                    });
                    return button;
                }

                // Apply custom styles (SAMA PERSIS)
                function applyCustomStyles() {
                    document.querySelector(".lunatable-wrapper")?.classList.add("flex", "flex-col", "gap-2");
                    document.querySelector(".lunatable-table")?.classList.add("w-full", "max-w-full");
                    document.querySelector(".lunatable-pagination-list")?.classList.add("grid", "xl:flex",
                        "grid-cols-5", "gap-2");
                    document.querySelector(".lunatable-top")?.classList.add(
                        "bg-[#F5F5F5]", "px-6", "py-4", "rounded-md", "flex", "flex-col", "xl:flex-row", "gap-2",
                        "items-center", "justify-between"
                    );

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
                        "bg-[#F5F5F5]", "px-6", "py-4", "rounded-md", "flex", "flex-col", "xl:flex-row", "gap-2",
                        "items-center", "justify-between"
                    );
                    document.querySelector(".lunatable-container")?.classList.add(
                        "bg-[#F5F5F5]", "px-6", "pb-4", "rounded-md", "flex", "flex-row", "gap-2",
                        "overflow-x-auto", "overflow-y-auto"
                    );
                    document.querySelector(".lunatable-input")?.classList.add(
                        "px-4", "py-2", "rounded-sm", "outline-none", "text-[#1F1F1F]",
                        "placeholder:text-[#D6D6D6]", "border", "border-[#D6D6D6]", "focus:border-[#1F1F1F]",
                        "transition", "duration-150", "ease-in-out"
                    );
                    document.querySelector(".lunatable-selector")?.classList.add(
                        "mx-2", "px-2", "py-2", "rounded-sm", "outline-none", "text-[#1F1F1F]",
                        "placeholder:text-[#D6D6D6]", "border", "border-[#D6D6D6]", "focus:border-[#1F1F1F]",
                        "cursor-pointer", "transition", "duration-150", "ease-in-out"
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
                            icon.className =
                                "search-icon absolute inset-y-0 right-3 flex items-center text-[#282828] pointer-events-none";
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
                                "text-left", "py-2", "pe-10", "sm:py-4", "sm:pe-4",
                                "sticky", "top-0", "bg-[#F5F5F5]", "font-semibold",
                                "whitespace-nowrap", "text-xs", "sm:text-sm", "lg:text-md"
                            );
                        });

                        table.querySelectorAll("tbody tr").forEach(tr => {
                            tr.classList.add("border-b", "border-[#D6D6D6]", "group");
                        });

                        table.querySelectorAll("tbody tr td").forEach(td => {
                            td.classList.add(
                                "py-2", "pe-10", "sm:py-3", "sm:pe-4",
                                "align-middle", "whitespace-nowrap"
                            );
                        });
                    }

                    // Setup view more buttons
                    document.querySelectorAll('.view-more-btn').forEach(btn => {
                        if (!btn.querySelector('svg')) {
                            btn.innerHTML =
                                `<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-ellipsis-vertical-icon lucide-ellipsis-vertical"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>`;
                        }

                        const newBtn = btn.cloneNode(true);
                        btn.parentNode.replaceChild(newBtn, btn);
                    });

                    // Re-add event listeners to view more buttons
                    document.querySelectorAll('.view-more-btn').forEach(btn => {
                        btn.addEventListener('click', function() {
                            const data = {
                                id: this.dataset.id,
                                artist: this.dataset.artist, // Mapping nama label ke field artist
                                user: this.dataset.user,
                                trackDate: this.dataset.trackDate,
                                website: this.dataset.website,
                                instagram: this.dataset.instagram,
                                facebook: this.dataset.facebook,
                                youtube: this.dataset.youtube,
                                status: this.dataset.status
                            };

                            if (window.Alpine && window.Alpine.store) {
                                window.Alpine.store('modals').openViewModal(data);
                            }
                        });
                    });
                }

                if (typeof lucide !== 'undefined') {
                    lucide.createIcons();
                }

                setTimeout(() => {
                    applyCustomStyles();
                }, 100);

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

                // Jika backend mengirim flash session success, tampilkan toast (tunggu hingga Alpine store siap)
                @if (session('success'))
                    (function() {
                        const message = @json(session('success'));
                        const start = Date.now();
                        const handle = setInterval(() => {
                            if (window.Alpine && window.Alpine.store && Alpine.store('modals')) {
                                Alpine.store('modals').showToast(message, 'success');
                                clearInterval(handle);
                            }
                            if (Date.now() - start > 3000) clearInterval(handle);
                        }, 100);
                    })();
                @endif

            });
        </script>
    </x-slot>
</x-app-layout>
