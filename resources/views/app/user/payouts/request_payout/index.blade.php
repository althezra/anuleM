<x-app-layout>
    @section('title', 'Request Payout')

    <x-slot name="header">
        <h1 class="text-4xl font-semibold">Request Payout</h1>
    </x-slot>
    <div class="grid grid-cols-1 xl:grid-cols-12 gap-2 xl:gap-4">
        <div class="col-span-1 xl:col-span-12 flex flex-col gap-2 xl:gap-4">

            <div class="grid grid-cols-1 lg:grid-cols-4 gap-2 xl:gap-2">
                <!-- Total Royalty Card -->
                <div class="bg-[#F5F5F5] px-6 py-4 rounded-md h-32 flex items-center">
                    <div class="flex-1">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-medium text-[#1F1F1F]">Total Royalty</h3>
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

                <!-- Completed Payouts Card -->
                <div class="bg-[#F5F5F5] px-6 py-4 rounded-md h-32 flex items-center">
                    <div class="flex-1">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-medium text-[#1F1F1F]">Completed Payouts</h3>
                        </div>

                        <div class="flex items-center gap-3 mb-1">
                            <div class="flex items-baseline gap-2">
                                <span class="text-3xl font-bold text-[#1F1F1F]">0</span>
                                <span class="text-lg text-[#1F1F1F]">USD</span>
                                <div class="bg-[rgba(34,197,94,0.35)] rounded-xl px-2">
                                    <span class="text-xs text-[#22C55E] font-medium">PAID</span>
                                </div>
                            </div>
                        </div>

                        <p class="text-sm text-[#2C1F1F]">Last updated July 1, 2025</p>
                    </div>
                </div>


                <!-- Pending Payouts Card -->
                <div class="bg-[#F5F5F5] px-6 py-4 rounded-md h-32 flex items-center">
                    <div class="flex-1">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-medium text-[#1F1F1F]">Pending Payouts</h3>
                        </div>
                        <div class="flex items-center gap-3 mb-1">
                            <div class="flex items-baseline gap-2">
                                <span class="text-3xl font-bold text-[#1F1F1F]">0</span>
                                <span class="text-lg text-[#1F1F1F]">USD</span>
                            </div>
                            <div class="bg-[rgba(211,201,75,0.25)] rounded-xl px-2 py-0.5">
                                <span class="text-xs text-[#D3C94B] font-medium">PENDING</span>
                            </div>
                        </div>

                        <p class="text-sm text-[#2C1F1F]">Last updated July 1, 2025</p>
                    </div>
                </div>


                <!-- Request a Payout Card -->
                <div class="bg-[#F5F5F5] px-3 py-4 rounded-md h-32 flex items-center">
                    <div class="flex-1">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-medium text-[#1F1F1F]">Request a Payout</h3>
                        </div>
                        <p class="text-xs text-[#2C1F1F] mb-3">You can request a payout once your balance
                            exceeds this amount:</p>
                        <div class="flex items-center gap-2">
                            <div class="relative flex-1">
                                <input type="number" value="15"
                                    class="w-full px-3 py-2 pr-12 text-sm border border-gray-300 rounded text-[#1F1F1F] font-semibold focus:outline-none focus:border-[#302995]">
                                <span
                                    class="absolute right-3 top-1/2 transform -translate-y-1/2 text-sm text-[#1F1F1F] font-medium pointer-events-none">USD</span>
                            </div>
                            <button
                                class="modal bg-[#302995] text-white px-6 py-2 rounded text-sm font-medium hover:bg-[#13115A] transition duration-150 ease-in-out cursor-pointer">
                                Withdraw
                            </button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Stats -->
            <div class="grid grid-cols-1 xl:grid-cols-1 gap-2">
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
            </div>



            <!-- Table Container -->
            <table id="releasesTable">
                <thead>
                    <tr>
                        <th><span>Transaction ID</span></th>
                        <th><span>Date Requested</span></th>
                        <th><span>Amount</span></th>
                        <th><span>Amount</span></th>
                        <th><span>Status</span></th>
                        <th><button type="button"
                                class="sort-status-btn rounded-full p-1 bg-transparent hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 text-center cursor-pointer transition duration-150 ease-in-out">
                                <i data-lucide="arrow-down-up" class="w-4 h-4 text-black "></i>
                            </button></th>

                    </tr>
                </thead>
                <tbody>
                    <!-- Data akan diisi oleh JavaScript -->
                </tbody>
            </table>

            <!-- ===== MODAL ===== -->
            <div x-data>
                <div x-show="$store.modals.viewModalOpen" x-transition:enter="transition ease-out duration-150"
                    x-transition:enter-start="opacity-0 transform" x-transition:enter-end="opacity-100 transform"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 transform" x-transition:leave-end="opacity-0 transform"
                    class="fixed inset-0 z-50 overflow-y-auto" x-cloak>
                    <!-- Backdrop -->
                    <div class="fixed inset-0 bg-black opacity-25 transition-opacity"
                        x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                        @click="$store.modals.closeViewModal()"></div>
                    <!-- Modal Content -->
                    <div class="flex items-center justify-center min-h-screen p-4">
                        <div class="relative bg-white p-6 md:p-8 rounded-xl shadow-xl w-full max-w-4xl mx-auto transform transition-all"
                            @click.outside="$store.modals.closeViewModal()">
                            <div x-transition:enter="transition ease-out duration-150"
                                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">

                                <!-- Header -->
                                <div class="flex justify-between items-center mb-6">
                                    <h2 class="text-2xl font-bold text-gray-900">Request a Payout</h2>
                                    <button @click="$store.modals.closeViewModal()"
                                        class="text-gray-400 hover:text-gray-600 transition-colors cursor-pointer">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>

                                <div class="flex flex-col lg:flex-row gap-6 lg:gap-8">
                                    <!-- Left Side - Payout Information -->
                                    <div class="w-full lg:w-[35%]">
                                        <div
                                            class="border border-gray-200 rounded-lg overflow-hidden flex flex-col h-full bg-white">
                                            <div
                                                class="py-3 px-4 border-b border-gray-200 flex items-center gap-2 bg-gray-50/50">
                                                <svg class="w-[18px] h-[18px] text-gray-800"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path
                                                        d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                                    <polyline points="14 2 14 8 20 8" />
                                                    <line x1="16" y1="13" x2="8" y2="13" />
                                                    <line x1="16" y1="17" x2="8" y2="17" />
                                                    <polyline points="10 9 9 9 8 9" />
                                                </svg>
                                                <span class="font-bold text-gray-900 text-sm">Payout Information</span>
                                            </div>
                                            <div class="p-4 flex flex-col flex-grow">
                                                <h4 class="text-sm font-bold text-gray-900 mb-2">Amount</h4>
                                                <div class="flex items-end gap-2 mb-1">
                                                    <span class="text-3xl font-bold text-gray-900 tracking-tight"
                                                        x-text="$store.payoutModal.formData.amount || '0.00'">15.00</span>
                                                    <span class="text-sm font-bold text-gray-500 pb-0.5">USD</span>
                                                </div>
                                                <p class="text-[11px] text-gray-500 mb-4 font-medium">No minimum
                                                    withdraw acquired</p>

                                                <div class="border-t border-gray-200 my-2"></div>

                                                <div class="flex justify-between items-center mt-3 mb-4">
                                                    <span class="text-sm font-bold text-gray-900">You'll Receive</span>
                                                    <div class="flex items-baseline gap-1">
                                                        <span class="text-[15px] font-bold text-[#302995]"
                                                            x-text="$store.payoutModal.formData.amount || '0.00'">15.00</span>
                                                        <span class="text-[13px] font-bold text-gray-600">USD</span>
                                                    </div>
                                                </div>

                                                <div class="mt-auto">
                                                    <div
                                                        class="bg-[#EEF0F8] rounded-lg px-3 py-2.5 flex items-center gap-2.5">
                                                        <!-- SVG perisai ukuran lebih kecil -->
                                                        <svg class="w-5 h-5 text-[#302995] flex-shrink-0"
                                                            fill="currentColor" viewBox="0 0 512 512"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M256.001,0L29.89,130.537c0,47.476,4.506,88.936,12.057,125.463C88.61,481.721,256.001,512,256.001,512 s167.389-30.279,214.053-256c7.551-36.527,12.057-77.986,12.057-125.463L256.001,0z M256.118,466.723 c-0.035-0.012-0.082-0.028-0.117-0.039v-47.672V256H140.77H91.122c-6.67-29.738-11.109-63.506-12.394-101.93L255.999,51.728h0.002 v51.73V256h115.27h49.625C385.636,413.404,287.327,456.774,256.118,466.723z" />
                                                        </svg>
                                                        <p class="text-[11px] text-[#302995] font-medium leading-tight">
                                                            Funds will be sent to your account within 5 minutes
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Right Side - Form -->
                                    <div class="w-full lg:w-[65%]">
                                        <div class="space-y-5">
                                            <!-- Amount -->
                                            <div>
                                                <label class="block text-sm font-bold text-gray-900 mb-2">Amount</label>
                                                <div
                                                    class="relative flex items-center border border-gray-300 rounded-md bg-white focus-within:border-[#302995] focus-within:ring-1 focus-within:ring-[#302995] transition-all">
                                                    <span class="pl-4 pr-2 text-gray-900 font-medium">$</span>
                                                    <input type="text" x-model="$store.payoutModal.formData.amount"
                                                        class="w-full py-2 px-0 bg-transparent outline-none text-[#302995] font-medium placeholder-gray-400 border-none focus:ring-0"
                                                        placeholder="15.00">
                                                    <span class="pr-4 pl-2 text-gray-600 font-medium text-sm">USD</span>
                                                </div>
                                            </div>

                                            <!-- Bank -->
                                            <div>
                                                <label class="block text-sm font-bold text-gray-900 mb-2">Bank</label>
                                                <div class="relative">
                                                    <div
                                                        class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                        <svg class="w-5 h-5 text-gray-700"
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <line x1="3" x2="21" y1="22" y2="22" />
                                                            <line x1="6" x2="6" y1="18" y2="11" />
                                                            <line x1="10" x2="10" y1="18" y2="11" />
                                                            <line x1="14" x2="14" y1="18" y2="11" />
                                                            <line x1="18" x2="18" y1="18" y2="11" />
                                                            <polygon points="12 2 20 7 4 7" />
                                                        </svg>
                                                    </div>
                                                    <select x-model="$store.payoutModal.formData.bank"
                                                        class="w-full py-2 pl-10 pr-10 border border-gray-300 rounded-md bg-white text-gray-700 font-medium appearance-none focus:outline-none focus:border-[#302995] focus:ring-1 focus:ring-[#302995] transition-all cursor-pointer">
                                                        <option value="">Select Your Bank</option>
                                                        <option value="bca">Bank Central Asia (BCA)</option>
                                                        <option value="mandiri">Bank Mandiri</option>
                                                        <option value="bni">Bank Negara Indonesia (BNI)</option>
                                                        <option value="bri">Bank Rakyat Indonesia (BRI)</option>
                                                    </select>
                                                    <div
                                                        class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                                        <svg class="w-5 h-5 text-gray-700" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Account Holder Name -->
                                            <div>
                                                <label class="block text-sm font-bold text-gray-900 mb-2">Account Holder
                                                    Name</label>
                                                <div
                                                    class="relative flex items-center border border-gray-300 rounded-md bg-white focus-within:border-[#302995] focus-within:ring-1 focus-within:ring-[#302995] transition-all">
                                                    <div class="pl-3 pr-2 flex items-center">
                                                        <svg class="w-5 h-5 text-gray-700"
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                                                            <circle cx="12" cy="7" r="4" />
                                                        </svg>
                                                    </div>
                                                    <input type="text"
                                                        x-model="$store.payoutModal.formData.account_holder"
                                                        class="w-full py-2 px-0 bg-transparent outline-none text-gray-900 font-medium placeholder-gray-400 border-none focus:ring-0"
                                                        placeholder="Enter Your Account Holder Name">
                                                </div>
                                            </div>

                                            <!-- Bank Account Number -->
                                            <div>
                                                <label class="block text-sm font-bold text-gray-900 mb-2">Bank Account
                                                    Number</label>
                                                <div
                                                    class="relative flex items-center border border-gray-300 rounded-md bg-white focus-within:border-[#302995] focus-within:ring-1 focus-within:ring-[#302995] transition-all">
                                                    <div class="pl-3 pr-2 flex items-center">
                                                        <svg class="w-5 h-5 text-gray-700"
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <rect width="20" height="14" x="2" y="5" rx="2" />
                                                            <line x1="2" x2="22" y1="10" y2="10" />
                                                        </svg>
                                                    </div>
                                                    <input type="text"
                                                        x-model="$store.payoutModal.formData.account_number"
                                                        class="w-full py-2 px-0 bg-transparent outline-none text-gray-900 font-medium placeholder-gray-400 border-none focus:ring-0"
                                                        placeholder="Enter Your Card Number">
                                                </div>
                                                <p class="text-[11px] text-gray-500 mt-1.5">Enter 10 - 16 digits your
                                                    number</p>
                                            </div>

                                            <!-- SWIFT / BIC Code -->
                                            <div>
                                                <label class="block text-sm font-bold text-gray-900 mb-2">SWIFT / BIC
                                                    Code</label>
                                                <div
                                                    class="relative flex items-center border border-gray-300 rounded-md bg-white focus-within:border-[#302995] focus-within:ring-1 focus-within:ring-[#302995] transition-all">
                                                    <div class="pl-3 pr-2 flex items-center">
                                                        <svg class="w-5 h-5 text-gray-700"
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <circle cx="12" cy="12" r="10" />
                                                            <line x1="2" x2="22" y1="12" y2="12" />
                                                            <path
                                                                d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                                                        </svg>
                                                    </div>
                                                    <input type="text" x-model="$store.payoutModal.formData.swift_code"
                                                        class="w-full py-2 px-0 bg-transparent outline-none text-gray-900 font-medium placeholder-gray-400 border-none focus:ring-0"
                                                        placeholder="Enter SWIFT / BIC Code">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Footer / Actions -->
                                <div class="mt-8 pt-6 border-t border-gray-200 flex justify-end gap-4">
                                    <button type="button" @click="$store.modals.closeViewModal()"
                                        class="px-8 py-2.5 bg-white border border-gray-300 text-gray-900 rounded-md font-bold hover:bg-gray-50 transition duration-150 cursor-pointer">
                                        Cancel
                                    </button>
                                    <button type="button" @click="$store.payoutModal.submitRequest()"
                                        class="px-8 py-2.5 bg-[#302995] hover:bg-[#201b6e] text-white rounded-md font-bold transition duration-150 shadow-sm cursor-pointer">
                                        Withdraw
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

        </div>

    </div>

    <script>
        document.addEventListener('alpine:init', function () {
            // Store untuk payout modal
            Alpine.store('payoutModal', {
                formData: {
                    amount: '15.00',
                    bank: '',
                    account_holder: '',
                    account_number: '',
                    swift_code: ''
                },
                submitRequest() {
                    console.log('Submitting payout request', this.formData);
                    // Tambahkan logika pengiriman ke server di sini
                    alert('Payout request submitted!');
                    Alpine.store('modals').closeViewModal();
                }
            });

            // Store untuk modal
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
                    title: "POUT-7D8E2A",
                    artist: "July 1, 2025",
                    releaseDate: "$300.00",
                    statis: "Bank Transfer - ****1234",
                    status: "Pending",
                    statusColor: "bg-yellow-400"
                },
                {
                    id: 3,
                    title: "POUT-6C4B9F",
                    artist: "July 1, 2025",
                    releaseDate: "$300.00",
                    statis: "Bank Transfer - ****1234",
                    status: "Paid",
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
                                    <div class="inline-flex items-center gap-2">
                                    <div class="w-3 h-3 rounded-full bg flex-shrink-0 ${release.statusColor}"></div>
                                    <span class="font-semibold text-sm xl:text-md">${release.status}</span>
                                    </div>
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
                });

                document.querySelectorAll('.modal').forEach(btn => {
                    btn.addEventListener('click', function () {
                        const data = {
                            id: this.dataset.id,
                            title: this.dataset.title,
                            artist: this.dataset.artist,
                            releaseDate: this.dataset.releaseDate,
                            statis: this.dataset.statis,
                            status: this.dataset.status
                        };

                        // Access Alpine store from vanilla JS
                        window.Alpine.store('modals').openViewModal(data);
                    });
                });

                const sortStatusBtn = document.querySelector('.sort-status-btn');
                if (sortStatusBtn) {
                    sortStatusBtn.addEventListener('click', function () {
                        console.log('Sort by status clicked');
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