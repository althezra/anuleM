<x-app-layout>
    @section('title', 'Publishers')
    <x-slot name="header">
        <h1 class="text-4xl font-semibold">Publishers</h1>
        <div class="flex flex-row gap-2 items-center justify-end">
            <button type="button" x-data @click.prevent="$store.modals.openCreateModal()"
                class="rounded-sm px-4 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-center cursor-pointer transition duration-150 ease-in-out">
                Create New
            </button>
        </div>
    </x-slot>
    <div class="grid grid-cols-1 xl:grid-cols-12 gap-2 xl:gap-4">
        <div class="col-span-1 xl:col-span-12 flex flex-col gap-2 xl:gap-4">
            <div class="grid grid-cols-1 xl:grid-cols-1 gap-2">
                <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-2">
                    <div class="inline-flex justify-between items-center">
                        <span class="font-medium">Publishers</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                            stroke-linejoin="round" class="text-[#302995]">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M6 12c0-1.7.7-3.2 1.8-4.2" />
                            <circle cx="12" cy="12" r="2" />
                            <path d="M18 12c0 1.7-.7 3.2-1.8 4.2" />
                        </svg>
                    </div>
                    <h5 class="text-lg flex items-end gap-2">
                        <span class="text-3xl font-bold" id="publisherCount"></span>
                        Publishers
                    </h5>
                </div>
            </div>
            <!-- Table Publishers -->
            <div id="tableContainer">
                <table id="publishersTable">
                    <thead>
                        <tr>
                            <th>Publisher Name</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Alpine.js Modals -->
    <div x-data>
        <!-- View Publisher Modal -->
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
                    <div class="inline-flex justify-between items-center">
                        <span class="font-medium">View Publisher</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                            stroke-linejoin="round" class="text-[#302995]">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M6 12c0-1.7.7-3.2 1.8-4.2" />
                            <circle cx="12" cy="12" r="2" />
                            <path d="M18 12c0 1.7-.7 3.2-1.8 4.2" />
                        </svg>
                    </div>

                    <div x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100">
                        <div class="space-y-4">
                            <div class="inline-flex items-center w-full gap-6">
                                <img x-bind:src="$store.modals.viewPublisherData.name ?
                                    '{{ route('avatar') }}?name=' + $store.modals.viewPublisherData.name : '{{ route('avatar') }} ?
                                    name = -'"
                                    alt="" class="h-20 rounded-full">
                                <div class="w-full flex flex-col gap-2">
                                    <span class="text-xs xl:text-sm text-[#1F1F1F]">Publisher Name</span>
                                    <h3 x-text="$store.modals.viewPublisherData.name ? $store.modals.viewPublisherData.name : '-'"
                                        class="font-semibold text-2xl"></h3>
                                </div>
                            </div>
                            <hr class="col-span-1 xl:col-span-2 border-0 border-b border-[#D6D6D6]">
                            <div class="grid grid-cols-2 gap-2">
                                <div class="w-full flex flex-col gap-2">
                                    <span class="text-xs xl:text-sm text-[#1F1F1F]">Website</span>
                                    <a x-bind:href="$store.modals.viewPublisherData.website ? $store.modals.viewPublisherData.website :
                                        '#'"
                                        class="text-lg" target="_blank" rel="noopener">
                                        <div class="inline-flex items-center justify-between gap-4 text-[#302995]">
                                            <p x-text="$store.modals.viewPublisherData.website ? 'Visit Website' : '-'">
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
                                    <a x-bind:href="$store.modals.viewPublisherData.instagram ? $store.modals.viewPublisherData
                                        .instagram : '#'"
                                        class="text-lg" target="_blank" rel="noopener">
                                        <div class="inline-flex items-center justify-between gap-4 text-[#302995]">
                                            <p
                                                x-text="$store.modals.viewPublisherData.instagram ? 'Visit on Instagram' : '-'">
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
                                    <a x-bind:href="$store.modals.viewPublisherData.facebook ? $store.modals.viewPublisherData
                                        .facebook : '#'"
                                        class="text-lg" target="_blank" rel="noopener">
                                        <div class="inline-flex items-center justify-between gap-4 text-[#302995]">
                                            <p
                                                x-text="$store.modals.viewPublisherData.facebook ? 'Visit on Facebook' : '-'">
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
                                    <a x-bind:href="$store.modals.viewPublisherData.youtube ? $store.modals.viewPublisherData.youtube :
                                        '#'"
                                        class="text-lg" target="_blank" rel="noopener">
                                        <div class="inline-flex items-center justify-between gap-4 text-[#302995]">
                                            <p
                                                x-text="$store.modals.viewPublisherData.youtube ? 'Visit on YouTube' : '-'">
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
                                    id: $store.modals.viewPublisherData.id,
                                    name: $store.modals.viewPublisherData.name,
                                    website: $store.modals.viewPublisherData.website,
                                    instagram: $store.modals.viewPublisherData.instagram,
                                    facebook: $store.modals.viewPublisherData.facebook,
                                    youtube: $store.modals.viewPublisherData.youtube
                                })"
                                    class="rounded-sm px-4 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-center cursor-pointer h-max transition duration-150 ease-in-out">
                                    Edit
                                </button>
                                <button type="button"
                                    class="w-full rounded-sm px-4 py-2 text-[#F5F5F5] bg-red-600 hover:bg-red-700 active:bg-red-800 text-center cursor-pointer h-max transition duration-150 ease-in-out"
                                    @click="$store.modals.openDeleteModal($store.modals.viewPublisherData.id)">
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
                    @click.outside="$store.modals.closeDeleteModal()">
                    <div x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100">

                        <div class="flex item-center justify-between mb-4">
                            <h2 class="text-xl font-semibold text-black">Delete Publisher
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
                                the Publisher <span class="font-bold">"<span
                                        x-text="$store.modals.viewPublisherData.name"></span>"</span>? This action
                                cannot be undone</p>
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
        <!-- Create Publisher Modal -->
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
                        <span class="font-medium">Create New Publisher</span>
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
                        <form id="createPublisherForm">
                            @csrf
                            <div class="space-y-4">
                                <div class="w-full flex flex-col gap-2">
                                    <label for="name" class="text-xs xl:text-sm text-[#1F1F1F]">Publisher
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

        <!-- Edit Publisher Modal -->
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
                        <span class="font-medium">Edit Publisher</span>
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
                        <form id="editPublisherForm">
                            @csrf
                            @method('PUT')
                            <div class="space-y-4">
                                <div class="w-full flex flex-col gap-2">
                                    <label for="edit_name" class="text-xs xl:text-sm text-[#1F1F1F]">Publisher
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
        <div x-data x-show="$store.modals.toast.show" x-cloak
            class="fixed inset-0 z-50 flex items-center justify-center overflow-y-auto pointer-events-none">

            <!-- Backdrop tanpa transisi -->
            <div class="fixed inset-0 bg-black/50 pointer-events-auto"></div>

            <!-- Toast Content -->
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="w-24 h-24 text-green-500">
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
                                <circle cx="12" cy="12" r="10" stroke="currentColor"
                                    stroke-width="2" />
                            </svg>
                        </template>

                        <span class="text-lg font-semibold text-black text-center"
                            x-text="$store.modals.toast.message"></span>
                    </div>

                    <!-- Loading Overlay -->
                    <div x-show="$store.modals.toast.loading" x-transition
                        class="absolute inset-0 flex items-center justify-center bg-white/80 rounded-md z-20">
                        <div
                            class="w-16 h-16 border-4 border-[#302995] border-t-[#302995]/50 rounded-full animate-spin">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <x-slot name="script">
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.store('modals', {
                    createModalOpen: false,
                    editModalOpen: false,
                    viewModalOpen: false,
                    loadingIn: false,
                    loadingOut: false,
                    loading: false,
                    editLabelData: {
                        id: null,
                        name: '',
                        website: '',
                        instagram: '',
                        facebook: '',
                        youtube: ''
                    },
                    viewPublisherData: {
                        id: null,
                        name: '',
                        website: '',
                        instagram: '',
                        facebook: '',
                        youtube: ''
                    }, // Sesuaikan variabel ini
                    publishers: [],
                    dataTable: null,
                    toast: {
                        show: false,
                        message: '',
                        type: 'success'
                    },

                    getCsrfToken() {
                        const token = document.querySelector('meta[name="csrf-token"]');
                        return token ? token.getAttribute('content') : '';
                    },

                    // ===== FETCH PUBLISHERS =====
                    async fetchPublishers() {
                        try {
                            const res = await fetch('/api/publishers', {
                                headers: {
                                    'Accept': 'application/json',
                                    'X-Requested-With': 'XMLHttpRequest'
                                }
                            });
                            if (!res.ok) throw new Error('Failed to fetch publishers');

                            this.publishers = await res.json();
                            this.sortPublishers();
                            this.updateDataTable();
                        } catch (err) {
                            console.error(err);
                            this.showToast('Failed to load data', 'error');
                        }
                    },

                    showToast(message, type = 'success') {
                        this.toast = {
                            show: true,
                            message,
                            type
                        };
                        setTimeout(() => (this.toast.show = false), 3000);
                    },

                    sortPublishers() {
                        this.publishers.sort((a, b) => a.name.localeCompare(b.name));
                    },

                    updateDataTable() {
                        if (this.dataTable) this.dataTable.destroy();
                        this.renderPublishersTable();
                        this.initializeDataTable();
                        this.updatePublisherCount();
                    },

                    renderPublishersTable() {
                        // PERBAIKAN 1: Selector diarahkan ke #publishersTable
                        const tbody = document.querySelector('#publishersTable tbody');
                        if (!tbody) return;
                        tbody.innerHTML = '';

                        this.publishers.forEach(p => {
                            const tr = document.createElement('tr');
                            const avatarUrl = "{{ route('avatar') }}?name=" + encodeURIComponent(p
                                .name);

                            tr.innerHTML = `
                            <td>
                                <div class="inline-flex justify-between items-center gap-4 w-full">
                                    <div class="inline-flex items-center gap-6">
                                        <img src="${avatarUrl}" alt="" class="h-10 rounded-full">
                                        <span class="font-semibold">${p.name}</span>
                                    </div>
                                    <div class="flex h-15 items-center gap-2 transition duration-150 ease-in-out">
                                        <button type="button" class="view-more-btn opacity-0 group-hover:opacity-100 transition-all duration-200 rounded-full p-2 hover:bg-[#E0E0E0]/70 active:bg-[#E0E0E0] text-[#302995] cursor-pointer inline-flex items-center justify-center"
                                            data-id="${p.id}"
                                            data-name="${p.name}"
                                            data-website="${p.website || ''}"
                                            data-instagram="${p.instagram || ''}"
                                            data-facebook="${p.facebook || ''}"
                                            data-youtube="${p.youtube || ''}">
                                        </button>
                                    </div>
                                </div>
                            </td>
                        `;
                            tbody.appendChild(tr);
                        });

                        // Event Listener untuk tombol
                        tbody.querySelectorAll('.view-more-btn').forEach(btn => {
                            btn.onclick = () => {
                                const data = {
                                    id: btn.dataset.id,
                                    name: btn.dataset.name,
                                    website: btn.dataset.website,
                                    instagram: btn.dataset.instagram,
                                    facebook: btn.dataset.facebook,
                                    youtube: btn.dataset.youtube
                                };
                                this.openViewModal(data);
                            };
                        });
                    },

                    initializeDataTable() {
                        const tableEl = document.querySelector("#publishersTable");
                        if (!tableEl) return;

                        this.dataTable = new simpleDatatables.DataTable(tableEl, {
                            searchable: true,
                            fixedHeight: false,
                            fixedWidth: false,
                            perPage: 5,
                            perPageSelect: [5, 10, 15, 20, 25, ['All', -1]],
                            columns: [{
                                select: 0,
                                sort: 'asc'
                            }],
                            labels: {
                                placeholder: "Search publishers...",
                                perPage: "Show {select} entries per page",
                                noRows: "No matching publishers found",
                                info: "Showing {start} to {end} of {rows} entries",
                            },
                            classes: {
                                // Class standar Simple-DataTables
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

                        // Fungsi Styling Custom (DISAMAKAN PERSIS DENGAN ARTIST)
                        const applyCustomStyles = () => {
                            // 1. Styling Wrapper Utama
                            document.querySelector(".lunatable-wrapper")?.classList.add("flex", "flex-col",
                                "gap-2");

                            // 2. Styling Tabel
                            const table = document.querySelector(".lunatable-table");
                            if (table) {
                                table.classList.add("w-full", "max-w-full");
                                // Header Tabel
                                table.querySelectorAll("thead tr th").forEach(th => {
                                    th.classList.add("text-left", "py-4", "pe-4", "sticky", "top-0",
                                        "bg-[#F5F5F5]");
                                });
                                // Baris Body
                                table.querySelectorAll("tbody tr").forEach(tr => {
                                    tr.classList.add("border-b", "border-[#D6D6D6]", "group");
                                });
                                // Sel Body
                                table.querySelectorAll("tbody tr td").forEach(td => {
                                    td.classList.add("pt-1.5");
                                });
                            }

                            // 3. Styling Bagian Atas (Search & Dropdown)
                            document.querySelector(".lunatable-top")?.classList.add("bg-[#F5F5F5]", "px-6",
                                "py-4", "rounded-md", "flex", "flex-col", "xl:flex-row", "gap-2",
                                "items-center", "justify-between");

                            // 4. Styling Bagian Bawah (Info & Pagination)
                            document.querySelector(".lunatable-bottom")?.classList.add("bg-[#F5F5F5]",
                                "px-6", "py-4", "rounded-md", "flex", "flex-col", "xl:flex-row",
                                "gap-2", "items-center", "justify-between");

                            // 5. Container (jarang muncul tapi perlu distyle)
                            document.querySelector(".lunatable-container")?.classList.add("bg-[#F5F5F5]",
                                "px-6", "pb-4", "rounded-md", "flex", "flex-row", "gap-2",
                                "overflow-x-auto", "overflow-y-auto");

                            // 6. Input Search
                            document.querySelector(".lunatable-input")?.classList.add("px-4", "py-2",
                                "rounded-sm", "outline-none", "text-[#1F1F1F]",
                                "placeholder:text-[#D6D6D6]", "border", "border-[#D6D6D6]",
                                "focus:border-[#1F1F1F]", "transition", "duration-150", "ease-in-out");

                            // 7. Dropdown Selector (Show X entries)
                            document.querySelector(".lunatable-selector")?.classList.add("mx-2", "px-2",
                                "py-2", "rounded-sm", "outline-none", "text-[#1F1F1F]",
                                "placeholder:text-[#D6D6D6]", "border", "border-[#D6D6D6]",
                                "focus:border-[#1F1F1F]", "cursor-pointer", "transition",
                                "duration-150", "ease-in-out");

                            // 8. Pagination List
                            document.querySelector(".lunatable-pagination-list")?.classList.add("grid",
                                "xl:flex", "grid-cols-5", "gap-2");

                            // 9. Tombol Pagination
                            const pagination = document.querySelector(".lunatable-pagination-list");
                            pagination?.querySelectorAll("li").forEach(li => {
                                li.classList.add("flex", "justify-center", "items-center");
                                const a = li.querySelector("a");
                                if (a) {
                                    a.className = ''; // Reset class bawaan
                                    if (li.classList.contains("lunatable-active")) {
                                        // Tombol Aktif (Biru)
                                        a.classList.add("rounded-sm", "text-[#F5F5F5]",
                                            "bg-[#302995]", "hover:bg-[#13115A]",
                                            "active:bg-[#0A0843]", "transition", "duration-150",
                                            "ease-in-out", "px-4", "py-2");
                                    } else {
                                        // Tombol Tidak Aktif (Hover Abu)
                                        a.classList.add("rounded-sm", "hover:bg-[#E0E0E0]/50",
                                            "active:bg-[#E0E0E0]/75", "transition",
                                            "duration-150", "ease-in-out", "px-4", "py-2");
                                    }
                                }
                            });

                            // 10. Re-bind Tombol View More (Icon Titik Tiga)
                            // Karena datatable merender ulang HTML, event listener onclick hilang, jadi pasang lagi di sini.
                            document.querySelectorAll('.view-more-btn').forEach(btn => {
                                // Pastikan icon SVG ada
                                if (!btn.innerHTML.includes('<svg')) {
                                    btn.innerHTML =
                                        `<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>`;
                                }
                                // Pasang event click
                                btn.onclick = (e) => {
                                    e.stopPropagation();
                                    const data = {
                                        id: btn.dataset.id,
                                        name: btn.dataset.name,
                                        website: btn.dataset.website,
                                        instagram: btn.dataset.instagram,
                                        facebook: btn.dataset.facebook,
                                        youtube: btn.dataset.youtube
                                    };
                                    Alpine.store('modals').openViewModal(data);
                                };
                            });

                            if (typeof lucide !== 'undefined') lucide.createIcons();
                        };

                        // Jalankan styling pertama kali
                        applyCustomStyles();

                        // Jalankan styling setiap kali tabel berubah (pindah page, search, sort)
                        ['datatable.page', 'datatable.search', 'datatable.sort', 'datatable.perpage'].forEach(
                            ev => {
                                this.dataTable.on(ev, applyCustomStyles);
                            });
                    },

                    updatePublisherCount() {
                        // PERBAIKAN 3: Selector diarahkan ke #publisherCount
                        const el = document.getElementById('publisherCount');
                        if (el) el.textContent = ` ${this.publishers.length}`;
                    },

                    // Modal Helpers
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
                            this.editLabelData = {
                                ...data
                            };
                            this.loadingIn = false;
                        }, 300);
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
                        }, 300);
                        this.editModalOpen = false;
                    },
                    openViewModal(data) {
                        this.loadingIn = true;
                        this.viewModalOpen = true;
                        setTimeout(() => {
                            this.viewPublisherData = {
                                ...data
                            };
                            this.loadingIn = false;
                        }, 300);
                    },
                    closeViewModal() {
                        this.loadingOut = true;
                        setTimeout(() => {
                            this.loadingOut = false;
                            this.viewPublisherData = {
                                id: null,
                                name: '',
                                website: '',
                                instagram: '',
                                facebook: '',
                                youtube: ''
                            };
                        }, 300);
                        this.viewModalOpen = false;
                    },

                    // ===== CRUD ACTIONS (Publishers) =====
                    async createPublisher(data) {
                        this.loading = true;
                        try {
                            const res = await fetch('/api/publishers', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'Accept': 'application/json',
                                    'X-CSRF-TOKEN': this.getCsrfToken()
                                },
                                body: JSON.stringify(data)
                            });
                            if (!res.ok) throw new Error((await res.json()).message || 'Failed');

                            this.publishers.push(await res.json());
                            this.sortPublishers();
                            this.updateDataTable();
                            this.closeCreateModal();
                            this.showToast('Publisher created successfully!', 'success');
                        } catch (err) {
                            this.showToast(err.message, 'error');
                        } finally {
                            this.loading = false;
                        }
                    },

                    async updatePublisher(id, data) {
                        this.loading = true;
                        try {
                            const res = await fetch(`/api/publishers/${id}`, {
                                method: 'PUT',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'Accept': 'application/json',
                                    'X-CSRF-TOKEN': this.getCsrfToken()
                                },
                                body: JSON.stringify(data)
                            });
                            if (!res.ok) throw new Error((await res.json()).message || 'Failed');

                            const updated = await res.json();
                            const i = this.publishers.findIndex(p => p.id == id);
                            if (i !== -1) this.publishers[i] = updated;

                            this.sortPublishers();
                            this.updateDataTable();
                            this.closeEditModal();
                            this.showToast('Publisher updated successfully!', 'success');
                        } catch (err) {
                            this.showToast(err.message, 'error');
                        } finally {
                            this.loading = false;
                        }
                    },

                    // Delete via modal flow
                    async deletePublisher(id) {
                        this.openDeleteModal(id);
                    },

                    // Delete modal helpers
                    deleteModalOpen: false,
                    deleteId: null,
                    openDeleteModal(id = null) {
                        this.deleteId = id ? id : (this.viewPublisherData ? this.viewPublisherData.id : null);
                        this.viewModalOpen = false;
                        // small delay so the view modal finishes closing and won't block the delete modal
                        setTimeout(() => {
                            this.deleteModalOpen = true;
                        }, 150);
                    },

                    closeDeleteModal() {
                        this.deleteModalOpen = false;
                        this.deleteId = null;
                    },
                    submitTakedown() {
                        if (!this.deleteId) return;
                        const tokenMeta = document.querySelector('meta[name="csrf-token"]');
                        const token = tokenMeta ? tokenMeta.getAttribute('content') : '';

                        fetch('/api/publishers/' + this.deleteId, {
                            method: 'DELETE',
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                                'X-CSRF-TOKEN': token,
                                'Accept': 'application/json'
                            }
                        }).then(async res => {
                            if (res.ok) {
                                this.closeDeleteModal();
                                // Try to remove the row if present
                                const row = document.querySelector(`[data-id="${this.deleteId}"]`);
                                if (row && row.closest('tr')) row.closest('tr').remove();

                                this.publishers = this.publishers.filter(p => p.id != this
                                .deleteId);
                                this.updateDataTable();
                                this.closeViewModal();
                                this.showToast('Publisher deleted successfully!', 'success');

                                if (!row) setTimeout(() => location.reload(), 250);
                            } else {
                                console.error('Delete failed', await res.text());
                                this.closeDeleteModal();
                                this.showToast('Failed to delete publisher', 'error');
                            }
                        }).catch(err => {
                            console.error(err);
                            this.closeDeleteModal();
                            this.showToast(err.message || 'Error', 'error');
                        });
                    }
                });
            });

            document.addEventListener('DOMContentLoaded', () => {
                Alpine.store('modals').fetchPublishers();

                // PERBAIKAN 4: ID Form disesuaikan dengan HTML (createPublisherForm & editPublisherForm)
                const createForm = document.getElementById('createPublisherForm');
                if (createForm) {
                    createForm.addEventListener('submit', async function(e) {
                        e.preventDefault();
                        let data = Object.fromEntries(new FormData(this).entries());
                        Object.keys(data).forEach(k => {
                            if (data[k] === '') data[k] = null;
                        });
                        await Alpine.store('modals').createPublisher(data);
                        this.reset();
                    });
                }

                const editForm = document.getElementById('editPublisherForm');
                if (editForm) {
                    editForm.addEventListener('submit', function(e) {
                        e.preventDefault();
                        let data = Object.fromEntries(new FormData(this).entries());
                        Object.keys(data).forEach(k => {
                            if (data[k] === '') data[k] = null;
                        });
                        const id = Alpine.store('modals').editLabelData.id;
                        Alpine.store('modals').updatePublisher(id, data);
                    });
                }
            });
        </script>
    </x-slot>
</x-app-layout>
