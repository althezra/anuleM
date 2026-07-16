<x-app-layout>
  @section('title', 'Releases')

  <form action="#">
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

            <div class="flex-1 relative" style="margin-left: -55px; margin-right: -48px; margin-top: -38px;">
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

            <div class="flex-1 relative" style="margin-left: -48px; margin-right: -48px; margin-top: -38px;">
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
                      <input type="text" placeholder="Releases title"
                        class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                        required>
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
                        <div class="absolute right-2 top-1/2 -translate-y-1/2 text-[#374151] pointer-events-none">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
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
                        <div class="absolute right-2 top-1/2 -translate-y-1/2 text-[#374151] pointer-events-none">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-chevron-right-icon lucide-chevron-right">
                            <path d="m9 18 6-6-6-6" />
                          </svg>
                        </div>
                      </div>
                    </div>

                    <div>
                      <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Subgenre</label>
                      <div class="relative flex items-center">
                        <select
                          class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] cursor-pointer transition duration-150 ease-in-out appearance-none"
                          required>
                          <option disabled selected hidden>Select subgenre</option>
                          <option>Pop Rock</option>
                          <option>Indie Pop</option>
                          <option>Alternative Rock</option>
                        </select>
                        <button type="button" onclick="alert('Tambah subgenre')"
                          class="absolute right-7 top-1/2 -translate-y-1/2 text-[#374151] hover:text-black cursor-pointer">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-plus-icon lucide-plus">
                            <path d="M5 12h14" />
                            <path d="M12 5v14" />
                          </svg>
                        </button>
                        <div class="absolute right-2 top-1/2 -translate-y-1/2 text-[#374151] pointer-events-none">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
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
                        <div class="absolute right-2 top-1/2 -translate-y-1/2 text-[#374151] pointer-events-none">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
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
                    <div>
                      <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Primary
                        Artist</label>
                      <input type="text" placeholder="Name of primary artist"
                        class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                        required>
                    </div>


                    <div>
                      <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Featured
                        Artist</label>
                      <div class="space-y-2">
                        <div id="inputContainer" class="space-y-3">
                          <!-- Input pertama dengan button plus -->
                          <div class="relative">
                            <input type="text" placeholder="Name of featured artist"
                              class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                              required>
                            <button type="button" onclick="addNewInput()"
                              class="absolute right-3 top-1/2 -translate-y-1/2 text-[#374151] hover:text-black cursor-pointer">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-plus-icon lucide-plus">
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
                          <div class="relative flex items-center">
                            <select
                              class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] cursor-pointer transition duration-150 ease-in-out appearance-none"
                              required>
                              <option disabled selected hidden>Role: Contributors
                              </option>
                              <option>Producer</option>
                              <option>Songwriter</option>
                              <option>Composer</option>
                            </select>
                            <button type="button" id="addContributorBtn"
                              class="absolute right-7 top-1/2 -translate-y-1/2 text-[#374151] hover:text-black cursor-pointer">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-plus-icon lucide-plus">
                                <path d="M5 12h14" />
                                <path d="M12 5v14" />
                              </svg>
                            </button>
                            <div class="absolute right-2 top-1/2 -translate-y-1/2 text-[#374151] pointer-events-none">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-chevron-right-icon lucide-chevron-right">
                                <path d="m9 18 6-6-6-6" />
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                {{-- Artwok & Metadata --}}
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="lucide lucide-cloud-upload-icon lucide-cloud-upload">
                              <path d="M12 13v8" />
                              <path d="M4 14.899A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.242" />
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

                        <input id="imageInput" type="file" accept="image/png, image/jpeg" class="hidden" />

                        <div id="image-preview" class="mt-4 hidden">
                          <div
                            class="flex justify-between items-center bg-indigo-100 text-sm font-semibold text-[#3F3F3F] rounded p-2">
                            <span id="image-name">Cover-Image.png</span>
                            <button id="remove-image" class="text-gray-500 hover:text-red-500 font-bold cursor-pointer">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-x-icon lucide-x">
                                <path d="M18 6 6 18" />
                                <path d="m6 6 12 12" />
                              </svg>
                          </div>
                        </div>
                        <p class="mt-2 text-sm text-black flex justify-end">JPG / PNG •
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
                  <label for="description" class="block text-md font-semibold text-[#3F3F3F] mb-2">Release
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
                        <!-- Date -->
                        <!-- Date -->
                        <div class="relative flex items-center bg-[#F5F5F5] rounded-md overflow-hidden w-38">
                          <input type="date" id="dateInput"
                            class="w-full pl-3 pr-10 py-2 text-sm font-medium text-[#5D5D5D] focus:outline-none appearance-none cursor-pointer" />
                          <button type="button" onclick="document.getElementById('dateInput').showPicker()"
                            class="absolute right-3">
                            <!-- Custom Calendar Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-500" fill="none"
                              viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2
               2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                          </button>
                        </div>

                        <!-- Time -->
                        <div class="relative flex items-center bg-[#F5F5F5] rounded-md overflow-hidden w-24">
                          <input type="time" id="timeInput"
                            class="w-full pl-3 pr-10 py-2 text-sm font-medium text-[#5D5D5D] focus:outline-none appearance-none cursor-pointer" />
                          <button type="button" onclick="document.getElementById('timeInput').showPicker()"
                            class="absolute right-3">
                            <!-- Custom Clock Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-500" fill="none"
                              viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                          </button>
                        </div>

                        <script>
                          document.addEventListener("DOMContentLoaded", () => {
                            const dateInput = document.getElementById("dateInput");
                            const timeInput = document.getElementById("timeInput");

                            // Auto open picker on focus or click
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
                          /* Remove default date input icon */
                          input[type="date"]::-webkit-calendar-picker-indicator {
                            opacity: 0;
                            display: none;
                            -webkit-appearance: none;
                          }

                          /* Remove default time input icon */
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
                          <div class="rounded-sm border p-[2px] border-[#D6D6D6] flex cursor-pointer">
                            <input type="radio" name="release_type" value="new"
                              class="rounded-sm appearance-none bg-[#F5F5F5] checked:bg-[#302995] p-2 transition duration-150 ease-in-out cursor-pointer">
                          </div>
                          <span class="ml-2 text-sm font-semibold text-[#3F3F3F]">New
                            release</span>
                        </label>
                        <label class="flex items-center">
                          <div class="rounded-sm border p-[2px] border-[#D6D6D6] flex cursor-pointer">
                            <input type="radio" name="release_type" value="re-release"
                              class="rounded-sm appearance-none bg-[#F5F5F5] checked:bg-[#302995] p-2 transition duration-150 ease-in-out cursor-pointer">
                          </div>
                          <span class="ml-2 text-sm font-semibold text-[#3F3F3F]">Re-release</span>
                        </label>
                      </div>
                    </div>

                    <div>
                      <label class="block text-md font-semibold text-[#3F3F3F] mb-2">UPC/EAN</label>
                      <input type="text" placeholder="Enter UPC/EAN code"
                        class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                        required>
                    </div>

                    <div>
                      <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Region
                        Availability</label>
                      <div class="relative">
                        <select
                          class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] cursor-pointer transition duration-150 ease-in-out appearance-none"
                          required>
                          <option disabled selected hidden>Select region</option>
                          <option>Worldwide</option>
                          <option>Asia</option>
                          <option>Europe</option>
                          <option>North America</option>
                        </select>
                        <div class="absolute right-2 top-1/2 -translate-y-1/2 text-[#374151] pointer-events-none">
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
                    <input type="text" placeholder="Meluna"
                      class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                      required>
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
                      <input type="text" placeholder="e.g. 2025 Meluna"
                        class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                        required>
                    </div>
                    <div>
                      <div class="flex items-center mb-2 gap-1">
                        <span class="text-2xl font-semibold text-[#3F3F3F]">©</span>
                        <label class="block text-md font-semibold text-[#3F3F3F]">Composition
                          Copyright</label>
                      </div>
                      <input type="text" placeholder="e.g. 2025 Meluna"
                        class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                        required>
                    </div>
                  </div>
                </div>

                <div class="flex justify-end gap-2 sm:gap-4">
                  <button id="step1-next-btn"
                    class="w-auto px-7 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] rounded-sm font-medium text-lg cursor-pointer">
                    Next
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Step 2 -->
          <div id="step2-content" class="step-content hidden">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
                    <div class="space-y-8">
                      <div>
                        <h2 class="text-2xl font-semibold text-black mb-6">Track Information
                        </h2>
                        <div class="space-y-4">
                          <div>
                            <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Track
                              Title</label>
                            <input type="text" placeholder="Enter Track title"
                              class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out">
                          </div>

                          <div>
                            <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Track
                              Language</label>
                            <select class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] cursor-pointer transition duration-150 ease-in-out appearance-none">
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                              <option value=""></option>
                            </select>
                          </div>




                            <div>
                              <label class="block text-sm font-semibold mb-2">ISRC</label>

                              <div class="flex gap-2">
                                <!-- Option 1 -->
                                <label
                                  class="flex items-center w-full gap-2 px-4 py-2 bg-[#F5F5F5] rounded-sm cursor-pointer border border-[#D6D6D6] hover:border-[#302995]">
                                  <div class="rounded-sm border p-[2px] border-[#D6D6D6] flex cursor-pointer">
                                  <input type="radio" name="isrc_option" value="new"
                                    class="rounded-sm appearance-none bg-[#F5F5F5] checked:bg-[#302995] p-2 transition duration-150 ease-in-out cursor-pointer">
                                </div>
                                  <span class="text-sm text-gray-700">I need an ISRC Code</span>
                                </label>

                                <!-- Option 2 -->
                                <label 
                                  class="flex items-center w-full gap-2 px-4 py-2 bg-[#F5F5F5] rounded-sm cursor-pointer border border-[#D6D6D6] hover:border-[#302995]">
                                  <div class="rounded-sm border p-[2px] border-[#D6D6D6] flex cursor-pointer">
                                  <input type="radio" name="release_type" value="new"
                                    class="rounded-sm appearance-none bg-[#F5F5F5] checked:bg-[#302995] p-2 transition duration-150 ease-in-out cursor-pointer">
                                </div>
                                  <span class="text-sm text-gray-700">I already have an ISRC Code for this song</span>
                                </label>
                              </div>
                            </div>
                        </div>
                      </div>

                      <div>
                        <h2 class="text-2xl font-semibold text-black mb-6">Audio & Metadata</h2>
                        <div class="space-y-4">
                          <div>
                            <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Upload
                              Audio
                              File</label>
                            <div class="mx-auto">
                              <div id="audio-drop-area" tabindex="0"
                                class="relative border-2 border-dashed border-gray-300 bg-[#F5F5F5] p-8 rounded-md cursor-pointer focus:border-2 focus:outline-none focus:border-[#302995] focus:ring-0 transition">
                                <div class="flex justify-center mb-1">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-cloud-upload-icon lucide-cloud-upload">
                                    <path d="M12 13v8" />
                                    <path d="M4 14.899A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.242" />
                                    <path d="m8 17 4-4 4 4" />
                                  </svg>
                                </div>
                                <p class="text-sm font-semibold text-gray-900 text-center">
                                  Browse Files</p>
                                <p class="text-xs font-medium text-gray-500 text-center">
                                  Drag and drop files here</p>
                              </div>

                              <input id="audioInput" type="file" accept=".wav" class="hidden" />

                              <div id="audio-preview" class="mt-4 hidden">
                                <div
                                  class="flex justify-between items-center bg-indigo-100 text-sm font-semibold text-[#3F3F3F] rounded p-2">
                                  <span id="audio-name">FileName.wav</span>
                                  <button id="remove-audio"
                                    class="text-gray-500 hover:text-red-500 font-bold cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                      fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round" class="lucide lucide-x-icon lucide-x">
                                      <path d="M18 6 6 18" />
                                      <path d="m6 6 12 12" />
                                    </svg>
                                  </button>
                                </div>
                              </div>
                              <p class="mt-2 text-sm text-black flex justify-end">Accepted
                                formats: WAV | 16 atau 24-bit
                                |
                                min. 44.1 kHz | Stereo</p>
                            </div>
                          </div>

                          <div>
                            <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Primary
                              Artist</label>
                            <input type="text" placeholder="Enter Primary Artists name"
                              class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out">
                          </div>

                          <div>
                            <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Featured
                              Artist</label>
                            <div class="relative">
                              <input type="text" placeholder="Enter Features Artists name"
                                class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                                required>
                              <button type="button"
                                class="absolute right-3 top-1/2 -translate-y-1/2 text-[#374151] hover:text-black cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="lucide lucide-plus-icon lucide-plus">
                                  <path d="M5 12h14" />
                                  <path d="M12 5v14" />
                                </svg>
                              </button>
                            </div>
                          </div>

                          <div>
                            <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Remixer</label>
                            <div class="relative">
                              <input type="text" placeholder="Enter Remixer name"
                                class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                                required>
                              <button type="button"
                                class="absolute right-3 top-1/2 -translate-y-1/2 text-[#374151] hover:text-black cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="lucide lucide-plus-icon lucide-plus">
                                  <path d="M5 12h14" />
                                  <path d="M12 5v14" />
                                </svg>
                              </button>
                            </div>
                          </div>

                          <div>
                            <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Other
                              Contributors</label>
                            <div id="contributorContainer" class="space-y-3">
                              <div class="relative flex items-center">
                                <select
                                  class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] cursor-pointer transition duration-150 ease-in-out appearance-none"
                                  required>
                                  <option disabled selected hidden>Role:
                                    Contributors</option>
                                  <option>Producer</option>
                                  <option>Songwriter</option>
                                  <option>Composer</option>
                                </select>
                                <button type="button" onclick="addNewContributor()"
                                  class="absolute right-7 top-1/2 -translate-y-1/2 text-[#374151] hover:text-black cursor-pointer">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-plus-icon lucide-plus">
                                    <path d="M5 12h14" />
                                    <path d="M12 5v14" />
                                  </svg>
                                </button>
                                <div
                                  class="absolute right-2 top-1/2 -translate-y-1/2 text-[#374151] pointer-events-none">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-chevron-right-icon lucide-chevron-right">
                                    <path d="m9 18 6-6-6-6" />
                                  </svg>
                                </div>
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
                            <textarea placeholder="Enter lyrics..." rows="9"
                              class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"></textarea>
                          </div>

                          <div>
                            <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Additional
                              Information</label>
                            <div class="flex space-x-4">
                              <label class="flex items-center">
                                <div class="rounded-sm border p-[2px] border-[#D6D6D6] flex cursor-pointer">
                                  <input type="radio" name="release_type" value="new"
                                    class="rounded-sm appearance-none bg-[#F5F5F5] checked:bg-[#302995] p-2 transition duration-150 ease-in-out cursor-pointer">
                                </div>
                                <span class="ml-2 text-sm font-semibold text-[#3F3F3F]">Instrumental
                                  only</span>
                              </label>
                              <label class="flex items-center">
                                <div class="rounded-sm border p-[2px] border-[#D6D6D6] flex cursor-pointer">
                                  <input type="radio" name="release_type" value="re-release"
                                    class="rounded-sm appearance-none bg-[#F5F5F5] checked:bg-[#302995] p-2 transition duration-150 ease-in-out cursor-pointer">
                                </div>
                                <span class="ml-2 text-sm font-semibold text-[#3F3F3F]">AI-generated</span>
                              </label>
                              <label class="flex items-center">
                                <div class="rounded-sm border p-[2px] border-[#D6D6D6] flex cursor-pointer">
                                  <input type="radio" name="release_type" value="re-release"
                                    class="rounded-sm appearance-none bg-[#F5F5F5] checked:bg-[#302995] p-2 transition duration-150 ease-in-out cursor-pointer">
                                </div>
                                <span class="ml-2 text-sm font-semibold text-[#3F3F3F]">Remix</span>
                              </label>
                            </div>
                          </div>


                          <div>
                            <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Composer's</label>
                            <div class="relative">
                              <input type="text" placeholder="Enter Composer's name"
                                class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                                required>
                              <button type="button"
                                class="absolute right-3 top-1/2 -translate-y-1/2 text-[#374151] hover:text-black cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="lucide lucide-plus-icon lucide-plus">
                                  <path d="M5 12h14" />
                                  <path d="M12 5v14" />
                                </svg>
                              </button>
                            </div>
                          </div>

                          <div>
                            <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Lyricist</label>
                            <div class="relative">
                              <input type="text" placeholder="Enter Lyricist name"
                                class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                                required>
                              <button type="button"
                                class="absolute right-3 top-1/2 -translate-y-1/2 text-[#374151] hover:text-black cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="lucide lucide-plus-icon lucide-plus">
                                  <path d="M5 12h14" />
                                  <path d="M12 5v14" />
                                </svg>
                              </button>
                            </div>
                          </div>

                          <div>
                            <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Songwriter's</label>
                            <div class="relative">
                              <input type="text" placeholder="Enter Songwriter name"
                                class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                                required>
                              <button type="button"
                                class="absolute right-3 top-1/2 -translate-y-1/2 text-[#374151] hover:text-black cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="lucide lucide-plus-icon lucide-plus">
                                  <path d="M5 12h14" />
                                  <path d="M12 5v14" />
                                </svg>
                              </button>
                            </div>
                          </div>

                          <div>
                            <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Publisher</label>
                            <input type="text" value="Meluna"
                              class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="flex justify-start sm:justify-end w-full mt-4">
                <div class="w-full sm:w-auto space-y-4">

                  <!-- Buttons -->
                  <div class="flex flex-col sm:flex-row sm:justify-end items-stretch sm:items-center gap-2 sm:gap-4">
                    <!-- Track Info -->
                    <div class="flex justify-between flex-col sm:flex-row sm:items-center">
                      <div class="flex items-center text-md text-[#3F3F3F] font-semibold gap-1">
                        <button class="prevBtn cursor-pointer">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-chevron-left-icon">
                            <path d="m15 18-6-6 6-6" />
                          </svg>
                        </button>
                        <span class="trackInfo">Track 1 of 1</span>
                        <button class="nextBtn cursor-pointer">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-chevron-right-icon">
                            <path d="m9 18 6-6-6-6" />
                          </svg>
                        </button>
                      </div>
                    </div>
                    <button id="step2-add-track-btn"
                      class="w-full sm:w-auto px-7 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] rounded-sm font-medium text-lg cursor-pointer">
                      Add another track
                    </button>
                    <button id="step2-back-btn"
                      class="w-full sm:w-auto px-7 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] rounded-sm font-medium text-lg cursor-pointer">
                      Back
                    </button>
                    <button id="step2-next-btn"
                      class="w-full sm:w-auto px-7 py-2 text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] rounded-sm font-medium text-lg cursor-pointer">
                      Next
                    </button>
                  </div>
                </div>
              </div>
            </div>
          <script>
            document.addEventListener("DOMContentLoaded", () => {
              const container = document.getElementById("track-container");
              const template = document.getElementById("track-template");
              const addTrackBtn = document.getElementById("step2-add-track-btn");
              const trackInfo = document.querySelector(".trackInfo");
              const prevBtn = document.querySelector(".prevBtn");
              const nextBtn = document.querySelector(".nextBtn");

              let tracks = [];
              let currentTrack = 0;

              // ✅ fungsi untuk update view
              function updateView() {
                tracks.forEach((track, idx) => {
                  track.style.display = idx === currentTrack ? "block" : "none";
                });
                trackInfo.textContent = `Track ${currentTrack + 1} of ${tracks.length}`;
              }

              // ✅ fungsi init upload audio di tiap track
              function initAudioUpload(trackEl) {
                const dropArea = trackEl.querySelector("[id^=audio-drop-area]");
                const fileInput = trackEl.querySelector("[id^=audioInput]");
                const preview = trackEl.querySelector("[id^=audio-preview]");
                const fileName = trackEl.querySelector("[id^=audio-name]");
                const removeBtn = trackEl.querySelector("[id^=remove-audio]");

                // klik → buka file
                dropArea.addEventListener("click", () => fileInput.click());

                // drag & drop
                ["dragenter", "dragover"].forEach(ev => {
                  dropArea.addEventListener(ev, e => {
                    e.preventDefault();
                    dropArea.classList.add("border-[#302995]");
                  });
                });
                ["dragleave", "drop"].forEach(ev => {
                  dropArea.addEventListener(ev, e => {
                    e.preventDefault();
                    dropArea.classList.remove("border-[#302995]");
                  });
                });
                dropArea.addEventListener("drop", e => {
                  const files = e.dataTransfer.files;
                  if (files.length) handleFile(files[0]);
                });

                // pilih via input
                fileInput.addEventListener("change", () => {
                  if (fileInput.files.length) handleFile(fileInput.files[0]);
                });

                // handle file
                function handleFile(file) {
                  if (!file.name.toLowerCase().endsWith(".wav")) {
                    alert("Only WAV files allowed!");
                    return;
                  }
                  fileName.textContent = file.name;
                  preview.classList.remove("hidden");
                }

                // hapus file
                removeBtn.addEventListener("click", () => {
                  fileInput.value = "";
                  fileName.textContent = "FileName.wav";
                  preview.classList.add("hidden");
                });
              }

              // ✅ tambah track baru
              function addTrack() {
                const clone = template.content.cloneNode(true);
                const newForm = clone.querySelector(".track-form");

                // kasih unique ID untuk elemen audio biar nggak bentrok
                const uid = Date.now() + "-" + Math.random().toString(36).substring(2, 7);
                newForm.querySelector("#audio-drop-area").id = "audio-drop-area-" + uid;
                newForm.querySelector("#audioInput").id = "audioInput-" + uid;
                newForm.querySelector("#audio-preview").id = "audio-preview-" + uid;
                newForm.querySelector("#audio-name").id = "audio-name-" + uid;
                newForm.querySelector("#remove-audio").id = "remove-audio-" + uid;

                // reset input lain
                newForm.querySelectorAll("input, textarea, select").forEach(el => {
                  if (el.type === "radio" || el.type === "checkbox") {
                    el.checked = false;
                  } else {
                    el.value = "";
                  }
                });

                container.appendChild(newForm);
                tracks.push(newForm);

                initAudioUpload(newForm); // 🔥 aktifkan fitur upload di track ini

                currentTrack = tracks.length - 1;
                updateView();
              }

              // ✅ event listener
              addTrackBtn.addEventListener("click", addTrack);
              prevBtn.addEventListener("click", () => {
                if (currentTrack > 0) {
                  currentTrack--;
                  updateView();
                }
              });
              nextBtn.addEventListener("click", () => {
                if (currentTrack < tracks.length - 1) {
                  currentTrack++;
                  updateView();
                }
              });

              // buat track pertama saat load
              addTrack();
            });
          </script>

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
                        <div class="rounded-sm border p-[2px] border-[#D6D6D6] flex cursor-pointer">
                          <input type="checkbox" name="platform" value="spotify"
                            class="rounded-sm appearance-none bg-[#F5F5F5] checked:bg-[#302995] p-2 transition duration-150 ease-in-out cursor-pointer">
                        </div>
                        <img src="{{ asset('images/spotify.png') }}" class="w-20 h-auto object-contain">
                      </label>

                      <!-- Apple Music -->
                      <label
                        class="inline-flex items-center gap-1 px-1 py-1 bg-[#F5F5F5] border-none rounded-lg cursor-pointer hover:bg-gray-50">
                        <div class="rounded-sm border p-[2px] border-[#D6D6D6] flex cursor-pointer">
                          <input type="checkbox" name="platform" value="apple-music"
                            class="rounded-sm appearance-none bg-[#F5F5F5] checked:bg-[#302995] p-2 transition duration-150 ease-in-out cursor-pointer">
                        </div>
                        <img src="{{ asset('images/applemusic.png') }}" class="w-20 h-auto object-contain">
                      </label>

                      <!-- YouTube Music -->
                      <label
                        class="inline-flex items-center gap-1 px-1 py-1 bg-[#F5F5F5] border-none rounded-lg cursor-pointer hover:bg-gray-50">
                        <div class="rounded-sm border p-[2px] border-[#D6D6D6] flex cursor-pointer">
                          <input type="checkbox" name="platform" value="youtube-music"
                            class="rounded-sm appearance-none bg-[#F5F5F5] checked:bg-[#302995] p-2 transition duration-150 ease-in-out cursor-pointer">
                        </div>
                        <img src="{{ asset('images/ytmusic.png') }}" class="w-20 h-auto object-contain">
                      </label>

                      <!-- Instagram -->
                      <label
                        class="inline-flex items-center gap-1 px-1 py-1 bg-[#F5F5F5] border-none rounded-lg cursor-pointer hover:bg-gray-50">
                        <div class="rounded-sm border p-[2px] border-[#D6D6D6] flex cursor-pointer">
                          <input type="checkbox" name="platform" value="instagram"
                            class="rounded-sm appearance-none bg-[#F5F5F5] checked:bg-[#302995] p-2 transition duration-150 ease-in-out cursor-pointer">
                        </div>
                        <img src="{{ asset('images/instagram.png') }}" class="w-20 h-auto object-contain">
                      </label>

                      <!-- TikTok -->
                      <label
                        class="inline-flex items-center gap-1 px-1 py-1 bg-[#F5F5F5] border-none rounded-lg cursor-pointer hover:bg-gray-50">
                        <div class="rounded-sm border p-[2px] border-[#D6D6D6] flex cursor-pointer">
                          <input type="checkbox" name="platform" value="tiktok"
                            class="rounded-sm appearance-none bg-[#F5F5F5] checked:bg-[#302995] p-2 transition duration-150 ease-in-out cursor-pointer">
                        </div>
                        <img src="{{ asset('images/tiktok.png') }}" class="w-20 h-auto object-contain">
                      </label>

                      <!-- Select All -->
                      <label
                        class="inline-flex items-center gap-1 px-1 py-1 bg-[#F5F5F5] border-none rounded-lg cursor-pointer hover:bg-gray-50">
                        <div class="rounded-sm border p-[2px] border-[#D6D6D6] flex cursor-pointer">
                          <input type="checkbox" id="select-all"
                            class="rounded-sm appearance-none bg-[#F5F5F5] checked:bg-[#302995] p-2 transition duration-150 ease-in-out cursor-pointer">
                        </div>
                        <span class="block text-sm font-semibold text-[#3F3F3F] w-20 h-auto">Select
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
      let currentStep = 1;
      const totalSteps = 3;

      // Stepper elements
      const step1Circle = document.getElementById('step1-circle');
      const step2Circle = document.getElementById('step2-circle');
      const step3Circle = document.getElementById('step3-circle');
      const step1Label = document.getElementById('step1-label');
      const step2Label = document.getElementById('step2-label');
      const step3Label = document.getElementById('step3-label');
      const line1 = document.getElementById('line1');
      const line2 = document.getElementById('line2');

      // Content
      const step1Content = document.getElementById('step1-content');
      const step2Content = document.getElementById('step2-content');
      const step3Content = document.getElementById('step3-content');

      // Buttons
      const step1NextBtn = document.getElementById('step1-next-btn');
      const step2BackBtn = document.getElementById('step2-back-btn');
      const step2NextBtn = document.getElementById('step2-next-btn');
      const step3BackBtn = document.getElementById('step3-back-btn');
      const step3DistributeBtn = document.getElementById('step3-distribute-btn');

      function updateStepper() {
        // reset style
        [step1Circle, step2Circle, step3Circle].forEach(c => {
          c.classList.remove('bg-[#302995]', 'text-white', 'border-[#302995]');
          c.classList.add('bg-gray-200', 'text-gray-500', 'border-[#d9d9d9]');
        });

        [step1Label, step2Label, step3Label].forEach(l => {
          l.classList.remove('text-gray-900');
          l.classList.add('text-gray-500');
        });

        // aktifkan current step
        for (let i = 1; i <= currentStep; i++) {
          const circle = document.getElementById(`step${i}-circle`);
          const label = document.getElementById(`step${i}-label`);
          circle.classList.remove('bg-gray-200', 'text-gray-500', 'border-[#d9d9d9]');
          circle.classList.add('bg-[#302995]', 'text-white', 'border-[#302995]');
          label.classList.remove('text-gray-500');
          label.classList.add('text-gray-900');
        }

        // progress bar
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

      // Event listeners
      step1NextBtn.addEventListener('click', () => goToStep(2));
      step2BackBtn.addEventListener('click', () => goToStep(1));
      step2NextBtn.addEventListener('click', () => goToStep(3));
      step3BackBtn.addEventListener('click', () => goToStep(2));
      step3DistributeBtn.addEventListener('click', () => alert('Distribute!'));

      // Init langsung stepper
      updateStepper();
    </script>

    

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
  </x-slot>
</x-app-layout>
