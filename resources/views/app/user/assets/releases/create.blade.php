<x-app-layout>
    @section('title', 'Releases')

    <form action="#" onsubmit="return false;">
        <div id="stepper-section">
            <!-- Stepper Header -->
            <div class="w-full py-4">
                <div class="max-w-6xl mx-auto">
                    <div class="relative flex items-center">
                        <!-- Step 1 -->
                        <div class="flex flex-col items-center step-container">
                            <div id="step1-circle"
                                class="w-14 h-14 rounded-full flex items-center justify-center text-white font-bold text-xl bg-[#302995] border-2 border-[#d9d9d9] circle-transition mb-4 step-circle relative z-10">
                                1
                            </div>
                            <span id="step1-label"
                                class="xl:text-base text-xs font-medium text-gray-900 step-transition text-center">Releases
                                Information</span>
                        </div>

                        <div class="flex-1 relative"
                            style="margin-left: -55px; margin-right: -48px; margin-top: -38px;">
                            <div class="w-full h-1 bg-gray-300 connector-line"></div>
                            <div id="line1" class="bg-[#302995] connector-line line-progress" style="width: 0%;"></div>
                        </div>

                        <!-- Step 2 -->
                        <div class="flex flex-col items-center step-container">
                            <div id="step2-circle"
                                class="w-14 h-14 rounded-full flex items-center justify-center text-gray-500 font-bold text-xl bg-gray-200 border-2 border-[#d9d9d9] circle-transition mb-4 step-circle relative z-10">
                                2
                            </div>
                            <span id="step2-label"
                                class="xl:text-base text-xs font-medium text-gray-500 step-transition text-center">Track
                                Details</span>
                        </div>

                        <div class="flex-1 relative"
                            style="margin-left: -48px; margin-right: -48px; margin-top: -38px;">
                            <div class="w-full h-1 bg-gray-300 connector-line"></div>
                            <div id="line2" class="bg-[#302995] connector-line line-progress" style="width: 0%;"></div>
                        </div>

                        <!-- Step 3 -->
                        <div class="flex flex-col items-center step-container">
                            <div id="step3-circle"
                                class="w-14 h-14 rounded-full flex items-center justify-center text-gray-500 font-bold text-xl bg-gray-200 border-2 border-[#d9d9d9] circle-transition mb-4 step-circle relative z-10">
                                3
                            </div>
                            <span id="step3-label"
                                class="xl:text-base text-xs font-medium text-gray-500 step-transition text-center">Distribute
                                Settings</span>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="xl:w-[96rem] w-auto border-t-4 mx-auto border-[#E0E0E0] mt-4">

            <!-- Content Area -->
            <div class="flex-1 flex items-center justify-center p-8">
                <div class="w-full h-full">
                    <!-- Step 1 -->
                    <div id="step1-content" class="step-content content-slide">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                            <div class="space-y-6">
                                <div>
                                    <h2 class="text-2xl font-semibold text-black mb-4">Basic information</h2>
                                    <div class="space-y-4">
                                        <div>
                                            <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Title</label>
                                            <input type="text" id="field-title" placeholder="Releases title"
                                                class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out">
                                        </div>

                                        <div>
                                            <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Main
                                                Language</label>
                                            <div class="relative">
                                                <select
                                                    class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] cursor-pointer transition duration-150 ease-in-out appearance-none">
                                                    <option disabled selected hidden>Select main language
                                                    </option>
                                                    <option value="af">Afrikaans</option>
                                                    <option value="am">Amharic</option>
                                                    <option value="ar">Arabic</option>
                                                    <option value="az">Azerbaijani</option>
                                                    <option value="be">Belarusian</option>
                                                    <option value="bg">Bulgarian</option>
                                                    <option value="bn">Bengali</option>
                                                    <option value="bs">Bosnian</option>
                                                    <option value="ca">Catalan</option>
                                                    <option value="cs">Czech</option>
                                                    <option value="cy">Welsh</option>
                                                    <option value="da">Danish</option>
                                                    <option value="de">German</option>
                                                    <option value="dz">Dzongkha</option>
                                                    <option value="el">Greek</option>
                                                    <option value="en">English</option>
                                                    <option value="es">Spanish</option>
                                                    <option value="et">Estonian</option>
                                                    <option value="eu">Basque</option>
                                                    <option value="fa">Persian</option>
                                                    <option value="fi">Finnish</option>
                                                    <option value="fo">Faroese</option>
                                                    <option value="fr">French</option>
                                                    <option value="ga">Irish</option>
                                                    <option value="gl">Galician</option>
                                                    <option value="gu">Gujarati</option>
                                                    <option value="he">Hebrew</option>
                                                    <option value="hi">Hindi</option>
                                                    <option value="hr">Croatian</option>
                                                    <option value="hu">Hungarian</option>
                                                    <option value="hy">Armenian</option>
                                                    <option value="id">Indonesian</option>
                                                    <option value="is">Icelandic</option>
                                                    <option value="it">Italian</option>
                                                    <option value="ja">Japanese</option>
                                                    <option value="ka">Georgian</option>
                                                    <option value="kk">Kazakh</option>
                                                    <option value="km">Khmer</option>
                                                    <option value="kn">Kannada</option>
                                                    <option value="ko">Korean</option>
                                                    <option value="ku">Kurdish</option>
                                                    <option value="ky">Kyrgyz</option>
                                                    <option value="lo">Lao</option>
                                                    <option value="lt">Lithuanian</option>
                                                    <option value="lv">Latvian</option>
                                                    <option value="mk">Macedonian</option>
                                                    <option value="ml">Malayalam</option>
                                                    <option value="mn">Mongolian</option>
                                                    <option value="mr">Marathi</option>
                                                    <option value="ms">Malay</option>
                                                    <option value="mt">Maltese</option>
                                                    <option value="my">Burmese</option>
                                                    <option value="ne">Nepali</option>
                                                    <option value="nl">Dutch</option>
                                                    <option value="no">Norwegian</option>
                                                    <option value="pa">Punjabi</option>
                                                    <option value="pl">Polish</option>
                                                    <option value="ps">Pashto</option>
                                                    <option value="pt">Portuguese</option>
                                                    <option value="ro">Romanian</option>
                                                    <option value="ru">Russian</option>
                                                    <option value="si">Sinhala</option>
                                                    <option value="sk">Slovak</option>
                                                    <option value="sl">Slovenian</option>
                                                    <option value="so">Somali</option>
                                                    <option value="sq">Albanian</option>
                                                    <option value="sr">Serbian</option>
                                                    <option value="sv">Swedish</option>
                                                    <option value="sw">Swahili</option>
                                                    <option value="ta">Tamil</option>
                                                    <option value="te">Telugu</option>
                                                    <option value="th">Thai</option>
                                                    <option value="tl">Tagalog</option>
                                                    <option value="tr">Turkish</option>
                                                    <option value="uk">Ukrainian</option>
                                                    <option value="ur">Urdu</option>
                                                    <option value="uz">Uzbek</option>
                                                    <option value="vi">Vietnamese</option>
                                                    <option value="zh">Chinese</option>
                                                    <option value="zu">Zulu</option>
                                                </select>
                                                <div
                                                    class="absolute right-2 top-1/2 -translate-y-1/2 text-[#374151] pointer-events-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-chevron-right-icon lucide-chevron-right">
                                                        <path d="m9 18 6-6-6-6" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Genre</label>
                                            <div class="relative">
                                                <select
                                                    class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] cursor-pointer transition duration-150 ease-in-out appearance-none">
                                                    <option disabled selected hidden>Select genre</option>
                                                    <option>Pop</option>
                                                    <option>Rock</option>
                                                    <option>Hip Hop</option>
                                                    <option>Electronic</option>
                                                </select>
                                                <div
                                                    class="absolute right-2 top-1/2 -translate-y-1/2 text-[#374151] pointer-events-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-chevron-right-icon lucide-chevron-right">
                                                        <path d="m9 18 6-6-6-6" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <label
                                                class="block text-md font-semibold text-[#3F3F3F] mb-2">Subgenre</label>
                                            <div class="relative flex items-center">
                                                <select id="field-subgenre"
                                                    class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] cursor-pointer transition duration-150 ease-in-out appearance-none">
                                                    <option disabled selected hidden>Select subgenre</option>
                                                    <option>Pop Rock</option>
                                                    <option>Indie Pop</option>
                                                    <option>Alternative Rock</option>
                                                </select>
                                                <div
                                                    class="absolute right-2 top-1/2 -translate-y-1/2 text-[#374151] pointer-events-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-chevron-right-icon lucide-chevron-right">
                                                        <path d="m9 18 6-6-6-6" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Language
                                                of the
                                                Release</label>
                                            <div class="relative">
                                                <select
                                                    class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] cursor-pointer transition duration-150 ease-in-out appearance-none">
                                                    <option disabled selected hidden>Select release language
                                                    </option>
                                                    <option>English</option>
                                                    <option>Indonesian</option>
                                                    <option>Spanish</option>
                                                </select>
                                                <div
                                                    class="absolute right-2 top-1/2 -translate-y-1/2 text-[#374151] pointer-events-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-chevron-right-icon lucide-chevron-right">
                                                        <path d="m9 18 6-6-6-6" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Artist Information --}}
                                <div>
                                    <h2 class="text-2xl font-semibold text-black mb-4">Artist information</h2>
                                    <div class="space-y-4">
                                        <!-- Primary Artist - DIUBAH MENJADI SELECT -->
                                        <div>
                                            <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Primary
                                                Artist</label>
                                            <div class="relative">
                                                <select id="field-primary-artist"
                                                    class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] cursor-pointer transition duration-150 ease-in-out appearance-none">
                                                    <option disabled selected hidden>Select primary artist</option>
                                                    <option value="Artist 1">Artist 1</option>
                                                    <option value="Artist 2">Artist 2</option>
                                                    <option value="Artist 3">Artist 3</option>
                                                    <!-- Tambahkan opsi sesuai kebutuhan -->
                                                </select>
                                                <div
                                                    class="absolute right-2 top-1/2 -translate-y-1/2 text-[#374151] pointer-events-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-chevron-right-icon lucide-chevron-right">
                                                        <path d="m9 18 6-6-6-6" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Featured
                                                Artist</label>
                                            <div class="space-y-2">
                                                <div id="inputContainer" class="space-y-3">
                                                    <div class="flex items-center gap-2">
                                                        <input type="text" placeholder="Name of featured artist"
                                                            class="bg-[#F5F5F5] flex-1 px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out">
                                                        <button type="button" onclick="addNewInput()"
                                                            class="text-[#374151] hover:text-black cursor-pointer p-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-plus-icon lucide-plus">
                                                                <path d="M5 12h14" />
                                                                <path d="M12 5v14" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Other
                                                Contributors</label>
                                            <div class="space-y-2">
                                                <div id="contributorContainer" class="space-y-3">
                                                    <div class="flex items-center gap-2">
                                                        <select
                                                            class="bg-[#F5F5F5] flex-1 px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] cursor-pointer transition duration-150 ease-in-out appearance-none">
                                                            <option disabled selected hidden>Role: Contributors
                                                            </option>
                                                            <option>Producer</option>
                                                            <option>Songwriter</option>
                                                            <option>Composer</option>
                                                        </select>
                                                        <button type="button" id="addContributorBtn"
                                                            class="text-[#374151] hover:text-black cursor-pointer p-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="20" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-plus-icon lucide-plus">
                                                                <path d="M5 12h14" />
                                                                <path d="M12 5v14" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Artwork & Metadata --}}
                                <div>
                                    <h2 class="text-2xl font-semibold text-black mb-4">Artwork & Metadata</h2>
                                    <div class="space-y-4">
                                        <div>
                                            <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Upload
                                                Cover
                                                Image</label>
                                            <div class="mx-auto">
                                                <div id="image-drop-area" tabindex="0" class="relative border-2 border-dashed border-gray-300 bg-[#F5F5F5] p-8 rounded-md cursor-pointer focus:border-2
                         focus:outline-none focus:border-[#302995] focus:ring-0 transition">

                                                    <div class="flex justify-center mb-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="lucide lucide-cloud-upload-icon lucide-cloud-upload">
                                                            <path d="M12 13v8" />
                                                            <path
                                                                d="M4 14.899A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.242" />
                                                            <path d="m8 17 4-4 4 4" />
                                                        </svg>
                                                    </div>
                                                    <p class="text-sm font-semibold text-gray-900 text-center">
                                                        Browse Files
                                                    </p>
                                                    <p class="text-xs font-medium text-gray-500 text-center">
                                                        Drag and drop
                                                        files here</p>
                                                </div>

                                                <input id="imageInput" type="file" accept=".jpg,.jpeg" class="hidden" />

                                                <div id="image-preview" class="mt-4 hidden">
                                                    <div
                                                        class="flex justify-between items-center bg-indigo-100 text-sm font-semibold text-[#3F3F3F] rounded p-2">
                                                        <span id="image-name">Cover-Image.jpg</span>
                                                        <button id="remove-image"
                                                            class="text-gray-500 hover:text-red-500 font-bold cursor-pointer">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="lucide lucide-x-icon lucide-x">
                                                                <path d="M18 6 6 18" />
                                                                <path d="m6 6 12 12" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                                <p class="mt-2 text-sm text-black flex justify-end">JPG ONLY •
                                                    Min
                                                    3000×3000px • Max 10MB</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="space-y-6">

                                <div>
                                    <h2 class="text-2xl font-semibold text-black mb-4">Description</h2>
                                    <label for="description"
                                        class="block text-md font-semibold text-[#3F3F3F] mb-2">Release
                                        Description</label>
                                    <div class="mx-auto">
                                        <textarea id="description" maxlength="500" rows="9"
                                            class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                                            placeholder="Enter description..."></textarea>

                                    </div>
                                    <div class="text-sm text-black flex justify-end">
                                        <span id="charCount">0</span> / 500 characters used
                                    </div>
                                </div>

                                <div>
                                    <h2 class="text-2xl font-semibold text-black mb-4">Release Timing &
                                        Availability</h2>
                                    <div class="space-y-4">
                                        <div>
                                            <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Global
                                                Release
                                                Date
                                                & Time</label>
                                            <div class="flex space-x-2">
                                                <div
                                                    class="relative flex items-center bg-[#F5F5F5] rounded-md overflow-hidden w-38">
                                                    <input type="date" id="dateInput"
                                                        class="w-full pl-3 pr-10 py-2 text-sm font-medium text-[#5D5D5D] focus:outline-none appearance-none cursor-pointer" />
                                                    <button type="button"
                                                        onclick="document.getElementById('dateInput').showPicker()"
                                                        class="absolute right-3 cursor-pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-6 h-6 text-gray-500" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2
               2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                        </svg>
                                                    </button>
                                                </div>

                                                <div
                                                    class="relative flex items-center bg-[#F5F5F5] rounded-md overflow-hidden w-24">
                                                    <input type="time" id="timeInput"
                                                        class="w-full pl-3 pr-10 py-2 text-sm font-medium text-[#5D5D5D] focus:outline-none appearance-none cursor-pointer" />
                                                    <button type="button"
                                                        onclick="document.getElementById('timeInput').showPicker()"
                                                        class="absolute right-3 cursor-pointer">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-6 h-6 text-gray-500" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                        </svg>
                                                    </button>
                                                </div>

                                                <script>
                                                    document.addEventListener("DOMContentLoaded", () => {
                                                        const dateInput = document.getElementById("dateInput");
                                                        const timeInput = document.getElementById("timeInput");
                                                        [dateInput, timeInput].forEach(input => {
                                                            input.addEventListener("focus", () => {
                                                                if (input.showPicker) input.showPicker();
                                                            });
                                                            input.addEventListener("click", () => {
                                                                if (input.showPicker) input.showPicker();
                                                            });
                                                        });
                                                    });
                                                </script>

                                                <style>
                                                    input[type="date"]::-webkit-calendar-picker-indicator {
                                                        opacity: 0;
                                                        display: none;
                                                        -webkit-appearance: none;
                                                    }

                                                    input[type="time"]::-webkit-calendar-picker-indicator {
                                                        opacity: 0;
                                                        display: none;
                                                        -webkit-appearance: none;
                                                    }
                                                </style>

                                            </div>

                                        </div>

                                        <div>
                                            <label class="block text-md font-semibold text-[#3F3F3F] mb-2">New
                                                Release or
                                                Re-release</label>
                                            <div class="flex space-x-4">
                                                <label class="flex items-center">
                                                    <div
                                                        class="rounded-sm border p-[2px] border-[#D6D6D6] flex cursor-pointer">
                                                        <input type="radio" name="release_type" value="new"
                                                            class="rounded-sm appearance-none bg-[#F5F5F5] checked:bg-[#302995] p-2 transition duration-150 ease-in-out cursor-pointer">
                                                    </div>
                                                    <span class="ml-2 text-sm font-semibold text-[#3F3F3F]">New
                                                        release</span>
                                                </label>
                                                <label class="flex items-center">
                                                    <div
                                                        class="rounded-sm border p-[2px] border-[#D6D6D6] flex cursor-pointer">
                                                        <input type="radio" name="release_type" value="re-release"
                                                            class="rounded-sm appearance-none bg-[#F5F5F5] checked:bg-[#302995] p-2 transition duration-150 ease-in-out cursor-pointer">
                                                    </div>
                                                    <span
                                                        class="ml-2 text-sm font-semibold text-[#3F3F3F]">Re-release</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div>
                                            <label
                                                class="block text-md font-semibold text-[#3F3F3F] mb-2">UPC/EAN</label>
                                            <input type="text" id="field-upc" placeholder="Enter UPC/EAN code"
                                                class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out">
                                        </div>

                                        <div>
                                            <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Region
                                                Availability</label>
                                            <div class="relative">
                                                <select id="field-region"
                                                    class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] cursor-pointer transition duration-150 ease-in-out appearance-none">
                                                    <option disabled selected hidden>Select region</option>
                                                    <option>Worldwide</option>
                                                    <option>Asia</option>
                                                    <option>Europe</option>
                                                    <option>North America</option>
                                                </select>
                                                <div
                                                    class="absolute right-2 top-1/2 -translate-y-1/2 text-[#374151] pointer-events-none">
                                                    <i data-lucide="chevron-right" class="w-4 h-4"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="text-2xl font-semibold text-black mb-4">Release Identity</h2>
                                    <div>
                                        <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Label
                                            Name</label>
                                        <input type="text" id="field-label" placeholder="Meluna"
                                            class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out">
                                    </div>
                                </div>

                                <div>
                                    <h2 class="text-2xl font-semibold text-black mb-4">Rights & Labeling</h2>
                                    <div class="space-y-4">
                                        <div>
                                            <div class="flex items-center mb-2 gap-1">
                                                <span class="text-2xl font-semibold text-[#3F3F3F]">℗</span>
                                                <label class="block text-md font-semibold text-[#3F3F3F]">Publishing
                                                    Copyright</label>
                                            </div>
                                            <input type="text" id="field-publishing-copyright"
                                                placeholder="e.g. 2025 Meluna"
                                                class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out">
                                        </div>
                                        <div>
                                            <div class="flex items-center mb-2 gap-1">
                                                <span class="text-2xl font-semibold text-[#3F3F3F]">©</span>
                                                <label class="block text-md font-semibold text-[#3F3F3F]">Composition
                                                    Copyright</label>
                                            </div>
                                            <input type="text" id="field-composition-copyright"
                                                placeholder="e.g. 2025 Meluna"
                                                class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out">
                                        </div>
                                    </div>
                                </div>

                                <div class="flex justify-end gap-2 sm:gap-4">
                                    <button id="step1-next-btn" type="button"
                                        class="w-auto px-7 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] rounded-sm font-medium text-lg cursor-pointer">
                                        Next
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div id="step2-content" class="step-content hidden">

                        <div id="track-form-container" class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start"></div>

                        <!-- Buttons -->
                        <div class="flex flex-col-reverse sm:flex-row sm:justify-end gap-2 sm:gap-4 mt-4">
                            <div
                                class="flex items-center gap-2 bg-white border border-gray-200 rounded-lg px-3 py-2 shadow-sm w-fit mx-auto sm:mx-0">
                                <button id="prev-track-btn"
                                    class="p-1 hover:bg-gray-100 rounded transition-colors disabled:opacity-50 disabled:cursor-not-allowed">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 19l-7-7 7-7"></path>
                                    </svg>
                                </button>
                                <span id="track-counter" class="text-sm font-medium min-w-[60px] text-center">1 of
                                    1</span>
                                <button id="next-track-btn"
                                    class="p-1 hover:bg-gray-100 rounded transition-colors disabled:opacity-50 disabled:cursor-not-allowed">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </button>
                            </div>

                            <div class="flex gap-2 sm:gap-4 shrink-0">
                                <button id="add-track-btn"
                                    class="px-3 py-2 sm:px-7 sm:py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] rounded-sm font-medium text-lg whitespace-nowrap">
                                    Add another track
                                </button>

                                <button id="step2-back-btn"
                                    class="px-3 py-2 sm:px-7 sm:py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] rounded-sm font-medium text-lg whitespace-nowrap">
                                    Back
                                </button>

                                <button id="step2-next-btn"
                                    class="px-3 py-2 sm:px-7 sm:py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] rounded-sm font-medium text-lg whitespace-nowrap">
                                    Next
                                </button>
                            </div>
                        </div>

                    </div>

                    <!-- Step 3 -->
                    <div id="step3-content" class="step-content hidden">
                        <div class="grid grid-cols-1 xl:grid-cols-2 gap-8 items-start">

                            <div class="space-y-8">
                                <!-- Platform Selection -->
                                <div>
                                    <h2 class="text-2xl font-semibold text-black mb-4">Platform Selection</h2>
                                    <p class="block text-sm font-semibold text-[#3F3F3F] mb-4">Select the
                                        Digital Platform for
                                        Distribution of the Release</p>

                                    <div class="mb-4">
                                        <div class="flex flex-wrap gap-2 mb-3">
                                            <!-- Spotify -->
                                            <label
                                                class="inline-flex items-center gap-1 px-1 py-1 bg-[#F5F5F5] border-none rounded-lg cursor-pointer hover:bg-gray-50">
                                                <div
                                                    class="rounded-sm border p-[2px] border-[#D6D6D6] flex cursor-pointer">
                                                    <input type="checkbox" name="platform" value="spotify"
                                                        class="rounded-sm appearance-none bg-[#F5F5F5] checked:bg-[#302995] p-2 transition duration-150 ease-in-out cursor-pointer">
                                                </div>
                                                <img src="{{ asset('images/spotify.png') }}"
                                                    class="w-20 h-auto object-contain">
                                            </label>

                                            <!-- Apple Music -->
                                            <label
                                                class="inline-flex items-center gap-1 px-1 py-1 bg-[#F5F5F5] border-none rounded-lg cursor-pointer hover:bg-gray-50">
                                                <div
                                                    class="rounded-sm border p-[2px] border-[#D6D6D6] flex cursor-pointer">
                                                    <input type="checkbox" name="platform" value="apple-music"
                                                        class="rounded-sm appearance-none bg-[#F5F5F5] checked:bg-[#302995] p-2 transition duration-150 ease-in-out cursor-pointer">
                                                </div>
                                                <img src="{{ asset('images/applemusic.png') }}"
                                                    class="w-20 h-auto object-contain">
                                            </label>

                                            <!-- YouTube Music -->
                                            <label
                                                class="inline-flex items-center gap-1 px-1 py-1 bg-[#F5F5F5] border-none rounded-lg cursor-pointer hover:bg-gray-50">
                                                <div
                                                    class="rounded-sm border p-[2px] border-[#D6D6D6] flex cursor-pointer">
                                                    <input type="checkbox" name="platform" value="youtube-music"
                                                        class="rounded-sm appearance-none bg-[#F5F5F5] checked:bg-[#302995] p-2 transition duration-150 ease-in-out cursor-pointer">
                                                </div>
                                                <img src="{{ asset('images/ytmusic.png') }}"
                                                    class="w-20 h-auto object-contain">
                                            </label>

                                            <!-- Instagram -->
                                            <label
                                                class="inline-flex items-center gap-1 px-1 py-1 bg-[#F5F5F5] border-none rounded-lg cursor-pointer hover:bg-gray-50">
                                                <div
                                                    class="rounded-sm border p-[2px] border-[#D6D6D6] flex cursor-pointer">
                                                    <input type="checkbox" name="platform" value="instagram"
                                                        class="rounded-sm appearance-none bg-[#F5F5F5] checked:bg-[#302995] p-2 transition duration-150 ease-in-out cursor-pointer">
                                                </div>
                                                <img src="{{ asset('images/instagram.png') }}"
                                                    class="w-20 h-auto object-contain">
                                            </label>

                                            <!-- TikTok -->
                                            <label
                                                class="inline-flex items-center gap-1 px-1 py-1 bg-[#F5F5F5] border-none rounded-lg cursor-pointer hover:bg-gray-50">
                                                <div
                                                    class="rounded-sm border p-[2px] border-[#D6D6D6] flex cursor-pointer">
                                                    <input type="checkbox" name="platform" value="tiktok"
                                                        class="rounded-sm appearance-none bg-[#F5F5F5] checked:bg-[#302995] p-2 transition duration-150 ease-in-out cursor-pointer">
                                                </div>
                                                <img src="{{ asset('images/tiktok.png') }}"
                                                    class="w-20 h-auto object-contain">
                                            </label>

                                            <!-- Select All -->
                                            <label
                                                class="inline-flex items-center gap-1 px-1 py-1 bg-[#F5F5F5] border-none rounded-lg cursor-pointer hover:bg-gray-50">
                                                <div
                                                    class="rounded-sm border p-[2px] border-[#D6D6D6] flex cursor-pointer">
                                                    <input type="checkbox" id="select-all"
                                                        class="rounded-sm appearance-none bg-[#F5F5F5] checked:bg-[#302995] p-2 transition duration-150 ease-in-out cursor-pointer">
                                                </div>
                                                <span
                                                    class="block text-sm font-semibold text-[#3F3F3F] w-20 h-auto">Select
                                                    All</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Licensing Confirmation -->
                                <div>
                                    <h2 class="text-2xl font-semibold text-black mb-4">Licensing Confirmation
                                    </h2>
                                    <p class="block text-md font-semibold text-[#3F3F3F] mb-4">Confirmation of
                                        Legality and
                                        Distribution Rights</p>
                                    <div class="space-y-2">
                                        <label class="flex items-start gap-2">
                                            <div class="rounded-sm border p-[2px] border-[#D6D6D6] flex cursor-pointer">
                                                <input type="checkbox"
                                                    class="rounded-sm appearance-none bg-[#F5F5F5] checked:bg-[#302995] p-2 transition duration-150 ease-in-out cursor-pointer">
                                            </div>
                                            <span class="text-sm font-semibold text-[#3F3F3F]">I confirm that I
                                                own or have rights to
                                                distribute all content in this release.</span>
                                        </label>
                                        <label class="flex items-start gap-2">
                                            <div class="rounded-sm border p-[2px] border-[#D6D6D6] flex cursor-pointer">
                                                <input type="checkbox"
                                                    class="rounded-sm appearance-none bg-[#F5F5F5] checked:bg-[#302995] p-2 transition duration-150 ease-in-out cursor-pointer">
                                            </div>
                                            <span class="text-sm font-semibold text-[#3F3F3F]">I agree to the
                                                Meluna Distribution
                                                Terms.</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- RIGHT SIDE - Promotion Options & Buttons -->
                            <div class="space-y-8">
                                <!-- Promotion Option -->
                                <div>
                                    <h2 class="text-2xl font-semibold text-black mb-4">Promotion Option</h2>
                                    <p class="block text-md font-semibold text-[#3F3F3F] mb-4">Social &
                                        Engagement Tools</p>

                                    <div class="space-y-2">
                                        <label class="flex items-start gap-2">
                                            <div class="rounded-sm border p-[2px] border-[#D6D6D6] flex cursor-pointer">
                                                <input type="checkbox"
                                                    class="rounded-sm appearance-none bg-[#F5F5F5] checked:bg-[#302995] p-2 transition duration-150 ease-in-out cursor-pointer">
                                            </div>
                                            <span class="text-sm font-semibold text-[#3F3F3F]">Request Promotion
                                                Kit.</span>
                                        </label>
                                        <label class="flex items-start gap-2">
                                            <div class="rounded-sm border p-[2px] border-[#D6D6D6] flex cursor-pointer">
                                                <input type="checkbox"
                                                    class="rounded-sm appearance-none bg-[#F5F5F5] checked:bg-[#302995] p-2 transition duration-150 ease-in-out cursor-pointer">
                                            </div>
                                            <span class="text-sm font-semibold text-[#3F3F3F]">Request Spotify
                                                Playlist Pitching.</span>
                                        </label>
                                        <label class="flex items-start gap-2">
                                            <div class="rounded-sm border p-[2px] border-[#D6D6D6] flex cursor-pointer">
                                                <input type="checkbox"
                                                    class="rounded-sm appearance-none bg-[#F5F5F5] checked:bg-[#302995] p-2 transition duration-150 ease-in-out cursor-pointer">
                                            </div>
                                            <span class="text-sm font-semibold text-[#3F3F3F]">Request
                                                SmartLink</span>
                                        </label>
                                    </div>
                                </div>

                                <!-- Buttons -->
                                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-2 sm:gap-4">
                                    <button id="step3-back-btn"
                                        class="w-full sm:w-auto px-7 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] rounded-sm font-medium text-lg cursor-pointer">
                                        Back
                                    </button>
                                    <button id="step3-distribute-btn"
                                        class="w-full sm:w-auto px-7 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] rounded-sm font-medium text-lg cursor-pointer">
                                        Distribute
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <x-slot name="script">

        <script>
            let tracks = [{
                trackTitle: '',
                trackLanguage: '',
                isrcOption: '',
                audioFile: null,
                primaryArtist: '',
                featuredArtists: [''],
                remixers: [''],
                contributors: [{
                    role: '',
                    name: ''
                }],
                lyrics: '',
                additionalInfo: '',
                composers: [''],
                lyricists: [''],
                songwriters: [''],
                publisher: 'Meluna'
            }];

            let currentTrackIndex = 0;

            const createTrackForm = (trackIndex) => {
                const track = tracks[trackIndex];
                return `

      <div class="space-y-8">
            <div>
              <h2 class="text-2xl font-semibold text-black mb-6">Track Information</h2>
              <div class="space-y-4">
                <div>
                  <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Track Title</label>
                  <input type="text" placeholder="Enter Track title" data-field="trackTitle" value="${track.trackTitle}"
                    class="track-input bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out">
                </div>

                <div>
                  <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Track Language</label>
                  <select data-field="trackLanguage" class="track-input bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] border border-[#D6D6D6] focus:border-[#302995] cursor-pointer transition duration-150 ease-in-out">
                    <option value="">Select Language</option>
                    <option value="english" ${track.trackLanguage === 'english' ? 'selected' : ''}>English</option>
                    <option value="indonesian" ${track.trackLanguage === 'indonesian' ? 'selected' : ''}>Indonesian</option>
                    <option value="japanese" ${track.trackLanguage === 'japanese' ? 'selected' : ''}>Japanese</option>
                    <option value="korean" ${track.trackLanguage === 'korean' ? 'selected' : ''}>Korean</option>
                  </select>
                </div>

                <div>
  <label class="block text-sm font-semibold mb-2">ISRC</label>
  <div class="flex gap-2">
    <label class="flex items-center w-full gap-2 px-4 py-2 bg-[#F5F5F5] rounded-sm cursor-pointer border border-[#D6D6D6] hover:border-[#302995]">
      <div class="rounded-sm border p-[2px] border-[#D6D6D6] flex cursor-pointer">
        <input type="radio" name="isrc_option_${trackIndex}" value="need" data-field="isrcOption" 
          ${track.isrcOption === 'need' ? 'checked' : ''}
          class="track-input rounded-sm appearance-none bg-[#F5F5F5] checked:bg-[#302995] p-2 transition duration-150 ease-in-out cursor-pointer">
      </div>
      <span class="text-sm text-gray-700">I need an ISRC Code</span>
    </label>
    <label class="flex items-center w-full gap-2 px-4 py-2 bg-[#F5F5F5] rounded-sm cursor-pointer border border-[#D6D6D6] hover:border-[#302995]">
      <div class="rounded-sm border p-[2px] border-[#D6D6D6] flex cursor-pointer">
        <input type="radio" name="isrc_option_${trackIndex}" value="have" data-field="isrcOption" 
          ${track.isrcOption === 'have' ? 'checked' : ''}
          class="track-input rounded-sm appearance-none bg-[#F5F5F5] checked:bg-[#302995] p-2 transition duration-150 ease-in-out cursor-pointer">
      </div>
      <span class="text-sm text-gray-700">I already have an ISRC Code</span>
    </label>
  </div>

  ${track.isrcOption === 'have' ? `
    <div class="mt-3">
      <input type="text" placeholder="Enter ISRC Code" data-field="isrc"
        value="${track.isrc || ''}"
        class="track-input bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none 
        text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] 
        focus:border-[#302995] transition duration-150 ease-in-out">
    </div>
  ` : ''}
</div>

              </div>
            </div>

            <div>
              <h2 class="text-2xl font-semibold text-[#3F3F3F] mb-2">Audio & Metadata</h2>
              <div class="space-y-4">
                <div>
                <label class="block text-md font-semibold mb-2">Upload Audio File</label>
                <div class="mx-auto">
                  <div class="audio-drop-area relative border-2 border-dashed border-gray-300 bg-[#F5F5F5] p-8 rounded-md cursor-pointer focus:border-2 focus:outline-none focus:border-[#302995] focus:ring-0 transition">
                    <div class="flex justify-center mb-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 13v8" />
                        <path d="M4 14.899A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.242" />
                        <path d="m8 17 4-4 4 4" />
                      </svg>
                    </div>
                    <p class="text-sm font-semibold text-gray-900 text-center">Browse Files</p>
                    <p class="text-xs font-medium text-gray-500 text-center">Drag and drop files here</p>
                  </div>

                  <input type="file" accept=".wav" class="audio-input hidden" />

                  <div class="audio-preview mt-4 hidden">
                    <div class="flex justify-between items-center bg-indigo-100 text-sm font-semibold rounded p-2">
                      <span class="audio-name">FileName.wav</span>
                      <button type="button" class="remove-audio text-gray-500 hover:text-red-500">
                        &times;
                      </button>
                    </div>
                  </div>

                  <p class="mt-2 text-sm text-black flex justify-end">
                    Accepted formats: WAV | 16 atau 24-bit | min. 44.1 kHz | Stereo
                  </p>
                </div>
              </div>

                <div>
                  <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Primary Artist</label>
                  <div class="relative">
                    <select data-field="primaryArtist"
                      class="track-input bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] cursor-pointer transition duration-150 ease-in-out appearance-none">
                      <option value="" disabled ${!track.primaryArtist ? 'selected' : ''} hidden>Select primary artist</option>
                      <option value="Artist 1" ${track.primaryArtist === 'Artist 1' ? 'selected' : ''}>Artist 1</option>
                      <option value="Artist 2" ${track.primaryArtist === 'Artist 2' ? 'selected' : ''}>Artist 2</option>
                      <option value="Artist 3" ${track.primaryArtist === 'Artist 3' ? 'selected' : ''}>Artist 3</option>
                    </select>
                    <div class="absolute right-2 top-1/2 -translate-y-1/2 text-[#374151] pointer-events-none">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right-icon lucide-chevron-right">
                        <path d="m9 18 6-6-6-6" />
                      </svg>
                    </div>
                  </div>
                </div>

                <div>
                  <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Featured Artist</label>
                  <div class="dynamic-input-container space-y-3">
                    <div class="flex items-center gap-2">
                      <input type="text" placeholder="Enter Features Artists name"
                        class="bg-[#F5F5F5] flex-1 px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out">
                      <button type="button" onclick="addTrackInput(this, 'Enter Features Artists name')" class="text-[#374151] hover:text-black cursor-pointer p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus-icon lucide-plus">
                          <path d="M5 12h14" />
                          <path d="M12 5v14" />
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>

                <div>
                  <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Remixer</label>
                  <div class="dynamic-input-container space-y-3">
                    <div class="flex items-center gap-2">
                      <input type="text" placeholder="Enter Remixer name"
                        class="bg-[#F5F5F5] flex-1 px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out">
                      <button type="button" onclick="addTrackInput(this, 'Enter Remixer name')" class="text-[#374151] hover:text-black cursor-pointer p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus-icon lucide-plus">
                          <path d="M5 12h14" />
                          <path d="M12 5v14" />
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>

                <div>
                  <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Other Contributors</label>
                  <div class="dynamic-contributor-container space-y-3">
                    <div class="flex items-center gap-2">
                      <select class="bg-[#F5F5F5] flex-1 px-4 py-2 rounded-sm outline-none text-[#1F1F1F] border border-[#D6D6D6] focus:border-[#302995] cursor-pointer transition duration-150 ease-in-out appearance-none">
                        <option disabled selected hidden>Role: Contributors</option>
                        <option>Producer</option>
                        <option>Songwriter</option>
                        <option>Composer</option>
                      </select>
                      <button type="button" onclick="addTrackContributor(this)" class="text-[#374151] hover:text-black cursor-pointer p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus-icon lucide-plus">
                          <path d="M5 12h14" />
                          <path d="M12 5v14" />
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="space-y-8">
            <div>
              <h2 class="text-2xl font-semibold text-black mb-6">Lyrics & Rights</h2>
              <div class="space-y-6">
                <div>
                  <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Lyrics</label>
                  <textarea placeholder="Enter lyrics..." rows="9" data-field="lyrics"
                    class="track-input bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out">${track.lyrics}</textarea>
                </div>

                <div>
                  <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Additional Information</label>
                  <div class="flex space-x-4">
                    <label class="flex items-center">
                      <div class="rounded-sm border p-[2px] border-[#D6D6D6] flex cursor-pointer">
                        <input type="radio" name="additional_info_${trackIndex}" value="instrumental" data-field="additionalInfo" ${track.additionalInfo === 'instrumental' ? 'checked' : ''}
                          class="track-input rounded-sm appearance-none bg-[#F5F5F5] checked:bg-[#302995] p-2 transition duration-150 ease-in-out cursor-pointer">
                      </div>
                      <span class="ml-2 text-sm font-semibold text-[#3F3F3F]">Instrumental only</span>
                    </label>
                    <label class="flex items-center">
                      <div class="rounded-sm border p-[2px] border-[#D6D6D6] flex cursor-pointer">
                        <input type="radio" name="additional_info_${trackIndex}" value="ai-generated" data-field="additionalInfo" ${track.additionalInfo === 'ai-generated' ? 'checked' : ''}
                          class="track-input rounded-sm appearance-none bg-[#F5F5F5] checked:bg-[#302995] p-2 transition duration-150 ease-in-out cursor-pointer">
                      </div>
                      <span class="ml-2 text-sm font-semibold text-[#3F3F3F]">AI-generated</span>
                    </label>
                    <label class="flex items-center">
                      <div class="rounded-sm border p-[2px] border-[#D6D6D6] flex cursor-pointer">
                        <input type="radio" name="additional_info_${trackIndex}" value="remix" data-field="additionalInfo" ${track.additionalInfo === 'remix' ? 'checked' : ''}
                          class="track-input rounded-sm appearance-none bg-[#F5F5F5] checked:bg-[#302995] p-2 transition duration-150 ease-in-out cursor-pointer">
                      </div>
                      <span class="ml-2 text-sm font-semibold text-[#3F3F3F]">Remix</span>
                    </label>
                  </div>
                </div>

                <div>
                  <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Composer's</label>
                  <div class="dynamic-input-container space-y-3">
                    <div class="flex items-center gap-2">
                      <input type="text" placeholder="Enter Composer's name"
                        class="bg-[#F5F5F5] flex-1 px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out">
                      <button type="button" onclick="addTrackInput(this, 'Enter Composer\'s name')" class="text-[#374151] hover:text-black cursor-pointer p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus-icon lucide-plus">
                          <path d="M5 12h14" />
                          <path d="M12 5v14" />
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>

                <div>
                  <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Lyricist</label>
                  <div class="dynamic-input-container space-y-3">
                    <div class="flex items-center gap-2">
                      <input type="text" placeholder="Enter Lyricist name"
                        class="bg-[#F5F5F5] flex-1 px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out">
                      <button type="button" onclick="addTrackInput(this, 'Enter Lyricist name')" class="text-[#374151] hover:text-black cursor-pointer p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus-icon lucide-plus">
                          <path d="M5 12h14" />
                          <path d="M12 5v14" />
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>

                <div>
                  <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Songwriter's</label>
                  <div class="dynamic-input-container space-y-3">
                    <div class="flex items-center gap-2">
                      <input type="text" placeholder="Enter Songwriter name"
                        class="bg-[#F5F5F5] flex-1 px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out">
                      <button type="button" onclick="addTrackInput(this, 'Enter Songwriter name')" class="text-[#374151] hover:text-black cursor-pointer p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus-icon lucide-plus">
                          <path d="M5 12h14" />
                          <path d="M12 5v14" />
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>

                <div>
                  <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Publisher</label>
                  <input type="text" value="${track.publisher}" data-field="publisher"
                    class="track-input bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out">
                </div>
              </div>
            </div>
          </div>
        </div>
  `;
            };

            const saveCurrentTrackData = () => {
                const inputs = document.querySelectorAll('.track-input');
                inputs.forEach(input => {
                    const field = input.dataset.field;
                    if (field) {
                        if (input.type === 'radio') {
                            if (input.checked) {
                                tracks[currentTrackIndex][field] = input.value;
                            }
                        } else {
                            tracks[currentTrackIndex][field] = input.value;
                        }
                    }
                });
            };

            const renderTrackForm = () => {
                const container = document.getElementById('track-form-container');
                container.innerHTML = createTrackForm(currentTrackIndex);

                const dropArea = container.querySelector('.audio-drop-area');
                const fileInput = container.querySelector('.audio-input');
                const preview = container.querySelector('.audio-preview');
                const fileNameDisplay = container.querySelector('.audio-name');
                const removeBtn = container.querySelector('.remove-audio');

                dropArea.setAttribute('tabindex', '0');

                dropArea.addEventListener('click', () => {
                    fileInput.click();
                    dropArea.classList.add('border-[#302995]');
                    dropArea.classList.remove('border-gray-300');
                });

                dropArea.addEventListener('dragover', (e) => {
                    e.preventDefault();
                    dropArea.classList.add('border-[#302995]');
                    dropArea.classList.remove('border-gray-300');
                });

                dropArea.addEventListener('dragleave', () => {
                    dropArea.classList.remove('border-[#302995]');
                    dropArea.classList.add('border-gray-300');
                });

                dropArea.addEventListener('drop', (e) => {
                    e.preventDefault();
                    dropArea.classList.remove('border-[#302995]');
                    dropArea.classList.add('border-gray-300');

                    const file = e.dataTransfer.files[0];
                    if (file) handleAudioFile(file);
                });

                fileInput.addEventListener('change', (e) => {
                    const file = e.target.files[0];
                    if (file) handleAudioFile(file);
                });

                removeBtn.addEventListener('click', () => {
                    preview.classList.add('hidden');
                    fileNameDisplay.textContent = '';
                    fileInput.value = '';
                    tracks[currentTrackIndex].audioFile = null;
                    dropArea.classList.remove('border-blue-[#302995]');
                    dropArea.classList.add('border-gray-300');
                });

                function handleAudioFile(file) {
                    const isWav = file.name.toLowerCase().endsWith('.wav');
                    if (!isWav) {
                        alert('Only WAV files are accepted.');
                        return;
                    }
                    tracks[currentTrackIndex].audioFile = file;
                    fileNameDisplay.textContent = file.name;
                    preview.classList.remove('hidden');
                    dropArea.classList.add('border-blue-[#302995]');
                    dropArea.classList.remove('border-gray-300');
                }

                if (tracks[currentTrackIndex].audioFile) {
                    fileNameDisplay.textContent = tracks[currentTrackIndex].audioFile.name;
                    preview.classList.remove('hidden');
                    dropArea.classList.add('border-blue-[#302995]');
                    dropArea.classList.remove('border-gray-300');
                }

                const inputs = container.querySelectorAll('.track-input');
                inputs.forEach(input => {
                    input.addEventListener('change', (e) => {
                        const field = e.target.dataset.field;

                        if (e.target.type === 'radio') {
                            if (e.target.checked) {
                                tracks[currentTrackIndex][field] = e.target.value;
                                if (field === 'isrcOption') {
                                    renderTrackForm();
                                }
                            }
                        } else {
                            tracks[currentTrackIndex][field] = e.target.value;
                        }
                    });

                    input.addEventListener('input', (e) => {
                        const field = e.target.dataset.field;
                        if (field) {
                            tracks[currentTrackIndex][field] = e.target.value;
                        }
                    });
                });

            };

            const updateTrackNavigation = () => {
                document.getElementById('track-counter').textContent = `${currentTrackIndex + 1} of ${tracks.length}`;
                document.getElementById('prev-track-btn').disabled = currentTrackIndex === 0;
                document.getElementById('next-track-btn').disabled = currentTrackIndex === tracks.length - 1;
                renderTrackForm();
            };

            document.getElementById('add-track-btn').addEventListener('click', () => {
                saveCurrentTrackData();
                tracks.push({
                    trackTitle: '',
                    trackLanguage: '',
                    isrcOption: '',
                    audioFile: null,
                    primaryArtist: '',
                    featuredArtists: [''],
                    remixers: [''],
                    contributors: [{
                        role: '',
                        name: ''
                    }],
                    lyrics: '',
                    additionalInfo: '',
                    composers: [''],
                    lyricists: [''],
                    songwriters: [''],
                    publisher: 'Meluna'
                });
                currentTrackIndex = tracks.length - 1;
                updateTrackNavigation();
            });

            document.getElementById('prev-track-btn').addEventListener('click', () => {
                if (currentTrackIndex > 0) {
                    saveCurrentTrackData();
                    currentTrackIndex--;
                    updateTrackNavigation();
                }
            });

            document.getElementById('next-track-btn').addEventListener('click', () => {
                if (currentTrackIndex < tracks.length - 1) {
                    saveCurrentTrackData();
                    currentTrackIndex++;
                    updateTrackNavigation();
                }
            });

            renderTrackForm();
            updateTrackNavigation();
        </script>
        <script>
            let currentStep = 1;
            const totalSteps = 3;

            const step1Circle = document.getElementById('step1-circle');
            const step2Circle = document.getElementById('step2-circle');
            const step3Circle = document.getElementById('step3-circle');
            const step1Label = document.getElementById('step1-label');
            const step2Label = document.getElementById('step2-label');
            const step3Label = document.getElementById('step3-label');
            const line1 = document.getElementById('line1');
            const line2 = document.getElementById('line2');

            const step1Content = document.getElementById('step1-content');
            const step2Content = document.getElementById('step2-content');
            const step3Content = document.getElementById('step3-content');

            const step1NextBtn = document.getElementById('step1-next-btn');
            const step2BackBtn = document.getElementById('step2-back-btn');
            const step2NextBtn = document.getElementById('step2-next-btn');
            const step3BackBtn = document.getElementById('step3-back-btn');
            const step3DistributeBtn = document.getElementById('step3-distribute-btn');

            function updateStepper() {
                [step1Circle, step2Circle, step3Circle].forEach(c => {
                    c.classList.remove('bg-[#302995]', 'text-white', 'border-[#302995]');
                    c.classList.add('bg-gray-200', 'text-gray-500', 'border-[#d9d9d9]');
                });

                [step1Label, step2Label, step3Label].forEach(l => {
                    l.classList.remove('text-gray-900');
                    l.classList.add('text-gray-500');
                });

                for (let i = 1; i <= currentStep; i++) {
                    const circle = document.getElementById(`step${i}-circle`);
                    const label = document.getElementById(`step${i}-label`);
                    circle.classList.remove('bg-gray-200', 'text-gray-500', 'border-[#d9d9d9]');
                    circle.classList.add('bg-[#302995]', 'text-white', 'border-[#302995]');
                    label.classList.remove('text-gray-500');
                    label.classList.add('text-gray-900');
                }

                line1.style.width = currentStep >= 2 ? '100%' : '0%';
                line2.style.width = currentStep >= 3 ? '100%' : '0%';

                setTimeout(() => {
                    [step1Content, step2Content, step3Content].forEach(content => {
                        content.classList.add('hidden');
                        content.classList.remove('content-slide');
                    });

                    const currentContent = document.getElementById(`step${currentStep}-content`);
                    currentContent.classList.remove('hidden');
                    currentContent.classList.add('content-slide');
                }, 100);
            }

            function goToStep(step) {
                if (step >= 1 && step <= totalSteps) {
                    currentStep = step;
                    updateStepper();
                }
            }

            // =========================================================
            // Step 1 → 2: Validasi JavaScript (bukan HTML5 required)
            // =========================================================
            function validateStep1() {
                const requiredFields = [
                    { id: 'field-title', label: 'Release Title' },
                    { id: 'field-primary-artist', label: 'Primary Artist' },
                    { id: 'field-label', label: 'Label Name' },
                    { id: 'field-publishing-copyright', label: 'Publishing Copyright' },
                    { id: 'field-composition-copyright', label: 'Composition Copyright' },
                ];

                let firstInvalid = null;

                for (const { id, label } of requiredFields) {
                    const el = document.getElementById(id);
                    if (!el) continue;
                    const empty = (el.tagName === 'SELECT')
                        ? (el.value === '' || el.selectedIndex === 0)
                        : (el.value.trim() === '');

                    if (empty) {
                        el.classList.add('border-red-500');
                        if (!firstInvalid) firstInvalid = { el, label };
                    } else {
                        el.classList.remove('border-red-500');
                    }
                }

                if (firstInvalid) {
                    firstInvalid.el.focus();
                    firstInvalid.el.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    return false;
                }
                return true;
            }

            step1NextBtn.addEventListener('click', () => {
                if (validateStep1()) goToStep(2);
            });
            step2BackBtn.addEventListener('click', () => goToStep(1));
            step2NextBtn.addEventListener('click', () => goToStep(3));
            step3BackBtn.addEventListener('click', () => goToStep(2));
            step3DistributeBtn.addEventListener('click', () => alert('Distribute!'));

            updateStepper();
        </script>



        <script>
            const textarea = document.getElementById('description');
            const charCount = document.getElementById('charCount');

            textarea.addEventListener('input', () => {
                charCount.textContent = textarea.value.length;
            });
        </script>

        <script>
            document.getElementById('select-all').addEventListener('change', function () {
                const platformCheckboxes = document.querySelectorAll('input[name="platform"]');
                platformCheckboxes.forEach(checkbox => {
                    checkbox.checked = this.checked;
                });
            });

            document.querySelectorAll('input[name="platform"]').forEach(checkbox => {
                checkbox.addEventListener('change', function () {
                    const allPlatformCheckboxes = document.querySelectorAll('input[name="platform"]');
                    const selectAllCheckbox = document.getElementById('select-all');
                    const allChecked = Array.from(allPlatformCheckboxes).every(cb => cb.checked);
                    const someChecked = Array.from(allPlatformCheckboxes).some(cb => cb.checked);

                    selectAllCheckbox.checked = allChecked;
                    selectAllCheckbox.indeterminate = someChecked && !allChecked;
                });
            });
        </script>

        <script>
            document.addEventListener('DOMContentLoaded', function () {

                const textarea = document.getElementById('description');
                const charCount = document.getElementById('charCount');

                if (textarea && charCount) {
                    textarea.addEventListener('input', function () {
                        charCount.textContent = this.value.length;
                    });
                }

                const dropArea = document.getElementById('image-drop-area');
                const imageInput = document.getElementById('imageInput');
                const imagePreview = document.getElementById('image-preview');
                const imageNameSpan = document.getElementById('image-name');
                const removeImageBtn = document.getElementById('remove-image');

                function isValidImage(file) {
                    const validTypes = ['image/jpeg'];
                    const validExtensions = ['.jpg', '.jpeg'];
                    const ext = '.' + file.name.split('.').pop().toLowerCase();
                    return validTypes.includes(file.type) && validExtensions.includes(ext);
                }

                function handleImageFile(file) {
                    if (!isValidImage(file)) {
                        alert('Only JPG/JPEG images are allowed. Please select a .jpg or .jpeg file.');
                        imageInput.value = '';
                        imagePreview.classList.add('hidden');
                        return;
                    }
                    imageNameSpan.textContent = file.name;
                    imagePreview.classList.remove('hidden');
                }

                if (dropArea && imageInput) {
                    dropArea.addEventListener('click', () => imageInput.click());

                    dropArea.addEventListener('keydown', (e) => {
                        if (e.key === 'Enter' || e.key === ' ') {
                            e.preventDefault();
                            imageInput.click();
                        }
                    });

                    ['dragenter', 'dragover'].forEach(eventName => {
                        dropArea.addEventListener(eventName, (e) => {
                            e.preventDefault();
                            dropArea.classList.add('border-[#302995]', 'bg-indigo-50');
                        }, false);
                    });

                    ['dragleave', 'drop'].forEach(eventName => {
                        dropArea.addEventListener(eventName, (e) => {
                            e.preventDefault();
                            dropArea.classList.remove('border-[#302995]', 'bg-indigo-50');
                        }, false);
                    });

                    dropArea.addEventListener('drop', (e) => {
                        const dt = e.dataTransfer;
                        const files = dt.files;
                        if (files.length) {
                            imageInput.files = files;
                            handleImageFile(files[0]);
                        }
                    });

                    imageInput.addEventListener('change', function () {
                        if (this.files.length) {
                            handleImageFile(this.files[0]);
                        }
                    });
                }

                if (removeImageBtn) {
                    removeImageBtn.addEventListener('click', (e) => {
                        e.stopPropagation();
                        if (imageInput) imageInput.value = '';
                        if (imagePreview) imagePreview.classList.add('hidden');
                    });
                }

                // ===== Perbaikan untuk Featured Artist =====
                // Fungsi addNewInput() sudah didefinisikan di bawah
                // dan menggunakan ikon X untuk hapus.

                // ===== Perbaikan untuk Other Contributors =====
                const addContributorBtn = document.getElementById('addContributorBtn');
                const contributorContainer = document.getElementById('contributorContainer');

                if (addContributorBtn && contributorContainer) {
                    // Hapus event listener bawaan jika ada (pakai yang baru)
                    // Kita buat fungsi sendiri
                    addContributorBtn.addEventListener('click', function (e) {
                        e.preventDefault();
                        addNewContributor();
                    });

                    // Fungsi untuk menambah baris contributor dengan ikon X
                    function addNewContributor() {
                        const wrapper = document.createElement('div');
                        wrapper.className = 'flex items-center gap-2 mt-3';

                        const select = document.createElement('select');
                        select.className =
                            'bg-[#F5F5F5] flex-1 px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] cursor-pointer transition duration-150 ease-in-out appearance-none';
                        select.required = true;
                        select.innerHTML = `
                            <option disabled selected hidden>Role: Contributors</option>
                            <option>Producer</option>
                            <option>Songwriter</option>
                            <option>Composer</option>
                        `;

                        const removeBtn = document.createElement('button');
                        removeBtn.type = 'button';
                        removeBtn.className = 'text-[#374151] hover:text-red-500 cursor-pointer p-1';
                        removeBtn.innerHTML = `
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x">
                                <path d="M18 6 6 18"/>
                                <path d="m6 6 12 12"/>
                            </svg>
                        `;
                        removeBtn.addEventListener('click', function () {
                            if (contributorContainer.children.length > 1) {
                                wrapper.remove();
                            }
                        });

                        wrapper.appendChild(select);
                        wrapper.appendChild(removeBtn);
                        contributorContainer.appendChild(wrapper);
                        select.focus();
                    }
                }
            });

            // Helper functions for dynamic fields in Track Form (Step 2)
            function addTrackInput(btn, placeholder) {
                const container = btn.closest('.dynamic-input-container');
                if (!container) return;

                const wrapper = document.createElement('div');
                wrapper.className = 'flex items-center gap-2 mt-3';

                const input = document.createElement('input');
                input.type = 'text';
                input.placeholder = placeholder;
                input.className =
                    'bg-[#F5F5F5] flex-1 px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out';
                input.required = true;

                const removeBtn = document.createElement('button');
                removeBtn.type = 'button';
                removeBtn.className = 'text-[#374151] hover:text-red-500 cursor-pointer p-1';
                removeBtn.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x">
                        <path d="M18 6 6 18"/>
                        <path d="m6 6 12 12"/>
                    </svg>
                `;
                removeBtn.addEventListener('click', function () {
                    wrapper.remove();
                });

                wrapper.appendChild(input);
                wrapper.appendChild(removeBtn);
                container.appendChild(wrapper);
                input.focus();
            }

            function addTrackContributor(btn) {
                const container = btn.closest('.dynamic-contributor-container');
                if (!container) return;

                const wrapper = document.createElement('div');
                wrapper.className = 'flex items-center gap-2 mt-3';

                const select = document.createElement('select');
                select.className =
                    'bg-[#F5F5F5] flex-1 px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] cursor-pointer transition duration-150 ease-in-out appearance-none';
                select.required = true;
                select.innerHTML = `
                    <option disabled selected hidden>Role: Contributors</option>
                    <option>Producer</option>
                    <option>Songwriter</option>
                    <option>Composer</option>
                `;

                const removeBtn = document.createElement('button');
                removeBtn.type = 'button';
                removeBtn.className = 'text-[#374151] hover:text-red-500 cursor-pointer p-1';
                removeBtn.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x">
                        <path d="M18 6 6 18"/>
                        <path d="m6 6 12 12"/>
                    </svg>
                `;
                removeBtn.addEventListener('click', function () {
                    wrapper.remove();
                });

                wrapper.appendChild(select);
                wrapper.appendChild(removeBtn);
                container.appendChild(wrapper);
                select.focus();
            }

            // Fungsi global untuk Featured Artist (dengan ikon X)
            function addNewInput() {
                const container = document.getElementById('inputContainer');
                if (!container) return;

                const wrapper = document.createElement('div');
                wrapper.className = 'flex items-center gap-2 mt-3';

                const input = document.createElement('input');
                input.type = 'text';
                input.placeholder = 'Name of featured artist';
                input.className =
                    'bg-[#F5F5F5] flex-1 px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out';
                input.required = true;

                const removeBtn = document.createElement('button');
                removeBtn.type = 'button';
                removeBtn.className = 'text-[#374151] hover:text-red-500 cursor-pointer p-1';
                removeBtn.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x">
                        <path d="M18 6 6 18"/>
                        <path d="m6 6 12 12"/>
                    </svg>
                `;
                removeBtn.addEventListener('click', function () {
                    if (container.children.length > 1) {
                        wrapper.remove();
                    }
                });

                wrapper.appendChild(input);
                wrapper.appendChild(removeBtn);
                container.appendChild(wrapper);
                input.focus();
            }
        </script>

    </x-slot>
    <style>
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }

        .step-transition {
            transition: all 0.3s ease-in-out;
        }

        .content-slide {
            animation: slideIn 0.5s ease-in-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(20px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .line-progress {
            transition: width 0.6s ease-in-out;
        }

        .circle-transition {
            transition: all 0.4s ease-in-out;
        }

        .button-transition {
            transition: all 0.3s ease-in-out;
        }

        .connector-line {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            height: 4px;
            z-index: 1;
        }

        .step-container {
            position: relative;
        }

        .step-circle {
            position: relative;
            z-index: 2;
        }
    </style>
</x-app-layout>