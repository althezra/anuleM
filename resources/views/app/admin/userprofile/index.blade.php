<x-app-layout>
    @section('title', 'User Profile')
    @php
        $businessInfo = Auth::user()->businessInformation;
    @endphp
    <x-slot name="header">
        <h1 class="text-4xl font-semibold">User Profile</h1>
    </x-slot>

    <div class="grid grid-cols-1 xl:grid-cols-12 gap-2 xl:gap-4">
        <div class="col-span-1 xl:col-span-12 flex flex-col gap-2 xl:gap-4">
            <div class="grid grid-cols-1 xl:grid-cols-4 gap-4">
                <div class="">
                    <div class="bg-[#F5F5F5] px-6 py-4 h-full rounded-md flex flex-col gap-4">
                        <div class="flex justify-end">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                stroke-linejoin="round" class="text-[#302995] lucide lucide-circle-user-round">
                                <path d="M18 20a6 6 0 0 0-12 0" />
                                <circle cx="12" cy="10" r="4" />
                                <circle cx="12" cy="12" r="10" />
                            </svg>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-4">
                            <img src="{{ route('avatar') }}?name={{ ('RR') }}&background=302995&color=BCB7F2" alt=""
                                class="rounded-full w-45 h-45" loading="lazy">
                            <div class="flex flex-col w-full min-w-0">
                                {{-- <span class="text-2xl font-semibold text-center truncate">{{ Auth::user()->name
                                    }}</span>
                                <span class="text-lg text-center">@if (Auth::user()->role == 0)
                                    Admin
                                    @elseif (Auth::user()->role == 1)
                                    Operator
                                    @else
                                    Member
                                    @endif</span> --}}
                                <span class="text-lg text-center font-semibold">Rama Raditia</span>
                                <span class="text-lg text-center">
                                    Member</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 xl:col-span-3 grid grid-cols-1 gap-2">
                    <div class="bg-[#F5F5F5] px-6 py-6 rounded-md flex flex-col gap-4">
                        <div class="inline-flex justify-between items-center">
                            <span class="font-medium">Account Information</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                stroke-linejoin="round" class="text-[#302995] lucide lucide-user-round-pen">
                                <path d="M2 21a8 8 0 0 1 10.821-7.487" />
                                <path
                                    d="M21.378 16.626a1 1 0 0 0-3.004-3.004l-4.01 4.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z" />
                                <circle cx="10" cy="8" r="5" />
                            </svg>
                        </div>
                        <form method="post" action="{{ route('profile.update') }}">
                            @csrf
                            @method('patch')
                            <div class="grid grid-cols-1 xl:grid-cols-2 gap-4">
                                <div class="col-span-1 xl:col-span-2 flex flex-col xl:flex-row gap-2">
                                    <div class="w-full flex flex-col gap-2">
                                        <label for="name" class="text-xs xl:text-sm text-[#1F1F1F]">Full Name</label>
                                        <input type="text"
                                            class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out"
                                            name="name" id="name" placeholder="Full Name" autocomplete="off"
                                            value="{{ Auth::user()->name }}" disabled>
                                    </div>
                                    <div class="w-full flex flex-col gap-2">
                                        <label for="email" class="text-xs xl:text-sm text-[#1F1F1F]">Email
                                            Address</label>
                                        <input type="email"
                                            class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out"
                                            name="email" id="email" placeholder="Email" autocomplete="off"
                                            value="{{ Auth::user()->email }}" disabled>
                                    </div>
                                </div>
                                <div class="col-span-1 xl:col-span-2 flex flex-col xl:flex-row gap-2">
                                    <div class="w-full flex flex-col gap-2">
                                        <label for="email" class="text-xs xl:text-sm text-[#1F1F1F]">Display
                                            Name</label>
                                        <input type="email"
                                            class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out"
                                            name="email" id="email" placeholder="Email" autocomplete="off"
                                            value="Rama Raditia" disabled>
                                    </div>
                                    <div class="w-full flex flex-col gap-2">
                                        <label for="email" class="text-xs xl:text-sm text-[#1F1F1F]">Phone
                                            Number</label>
                                        <input type="email"
                                            class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out"
                                            name="email" id="email" placeholder="Email" autocomplete="off"
                                            value="081234567890" disabled>
                                    </div>
                                </div>
                                <div class="col-span-1 xl:col-span-2 flex flex-col xl:flex-row gap-2">
                                    <div class="w-full flex flex-col gap-2">
                                        <label for="country" class="text-xs xl:text-sm text-[#1F1F1F]">Country</label>
                                        <input type="text"
                                            class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out"
                                            name="country" autocomplete="off"
                                            value="Indonesia" disabled>
                                    </div>
                                    <div class="w-full flex flex-col gap-2">
                                        <label for="email" class="text-xs xl:text-sm text-[#1F1F1F]">Status
                                            </label>
                                        <input type="email"
                                            class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out"
                                            name="email" id="email" placeholder="Email" autocomplete="off"
                                            value="Member" disabled>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="bg-[#F5F5F5] px-6 py-4 rounded-md flex flex-col gap-4">
                <div class="inline-flex justify-between items-center">
                    <span class="font-medium">Business Information</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"
                        class="text-[#302995] lucide lucide-building">
                        <rect width="16" height="20" x="4" y="2" rx="2" ry="2" />
                        <path d="M9 22v-4h6v4" />
                        <path d="M8 6h.01" />
                        <path d="M16 6h.01" />
                        <path d="M12 6h.01" />
                        <path d="M12 10h.01" />
                        <path d="M12 14h.01" />
                        <path d="M16 10h.01" />
                        <path d="M16 14h.01" />
                        <path d="M8 10h.01" />
                        <path d="M8 14h.01" />
                    </svg>
                </div>
                <form method="POST" action="{{ route('business-information') }}">
                    @csrf
                    <div class="grid grid-cols-1 xl:grid-cols-2 gap-4">
                        <div class="col-span-1 xl:col-span-2 flex flex-col xl:flex-row gap-2">
                            <div class="w-full flex flex-col gap-2">
                                <label for="business_role" class="text-xs xl:text-sm text-[#1F1F1F]">Business
                                    Role</label>
                                <input type="text"
                                    class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out"
                                    name="business_role" id="business_role" placeholder="Business Type"
                                    autocomplete="off"
                                    value="{{ old('business_role', $businessInfo->business_role ?? '') }}" disabled>
                            </div>
                            <div class="w-full flex flex-col gap-2">
                                <label for="business_name" class="text-xs xl:text-sm text-[#1F1F1F]">Business
                                    Name</label>
                                <input type="text"
                                    class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out"
                                    name="business_name" id="business_name" placeholder="Business Name"
                                    autocomplete="off"
                                    value="{{ old('business_name', $businessInfo->business_name ?? '') }}" disabled>
                            </div>
                        </div>
                        <hr class="col-span-1 xl:col-span-2 border-0 border-b border-[#D6D6D6]">
                        <div class="col-span-1 xl:col-span-2 flex flex-col xl:flex-row gap-2">
                            <div class="w-full flex flex-col gap-2">
                                <label for="business_website" class="text-xs xl:text-sm text-[#1F1F1F]">Business
                                    Website</label>
                                <input type="url"
                                    class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out"
                                    name="business_website" id="business_website" placeholder="Business Website"
                                    autocomplete="off"
                                    value="{{ old('business_website', $businessInfo->business_website ?? '') }}" disabled>
                            </div>
                            <div class="w-full flex flex-col gap-2">
                                <label for="business_youtube" class="text-xs xl:text-sm text-[#1F1F1F]">Business Channel
                                    on
                                    YouTube</label>
                                <input type="url"
                                    class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out"
                                    name="business_youtube" id="business_youtube"
                                    placeholder="Business Channel on YouTube" autocomplete="off"
                                    value="{{ old('business_youtube', $businessInfo->business_youtube ?? '') }}" disabled>
                            </div>
                        </div>
                        <div class="col-span-1 xl:col-span-2 flex flex-col xl:flex-row gap-2">
                            <div class="w-full flex flex-col gap-2">
                                <label for="business_instagram" class="text-xs xl:text-sm text-[#1F1F1F]">Business
                                    Account on
                                    Instagram</label>
                                <input type="url"
                                    class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out"
                                    name="business_instagram" id="business_instagram"
                                    placeholder="Business Account on Instagram" autocomplete="off"
                                    value="{{ old('business_instagram', $businessInfo->business_instagram ?? '') }}" disabled>
                            </div>
                            <div class="w-full flex flex-col gap-2">
                                <label for="business_facebook" class="text-xs xl:text-sm text-[#1F1F1F]">Business
                                    Account on
                                    Facebook</label>
                                <input type="url"
                                    class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out"
                                    name="business_facebook" id="business_facebook"
                                    placeholder="Business Account on Facebook" autocomplete="off"
                                    value="{{ old('business_facebook', $businessInfo->business_facebook ?? '') }}" disabled>
                            </div>
                        </div>
                        <div class="col-span-1 xl:col-span-2 flex flex-col xl:flex-row gap-2">
                            <div class="w-full flex flex-col gap-2">
                                <label for="business_x" class="text-xs xl:text-sm text-[#1F1F1F]">Business Account on
                                    X</label>
                                <input type="url"
                                    class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out"
                                    name="business_x" id="business_x" placeholder="Business Account on X"
                                    autocomplete="off" value="{{ old('business_x', $businessInfo->business_x ?? '') }}" disabled>
                            </div>
                            <div class="w-full flex flex-col gap-2">
                                <label for="business_tiktok" class="text-xs xl:text-sm text-[#1F1F1F]">Business Account
                                    on
                                    TikTok</label>
                                <input type="url"
                                    class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out"
                                    name="business_tiktok" id="business_tiktok" placeholder="Business Account on TikTok"
                                    autocomplete="off"
                                    value="{{ old('business_tiktok', $businessInfo->business_tiktok ?? '') }}" disabled>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>