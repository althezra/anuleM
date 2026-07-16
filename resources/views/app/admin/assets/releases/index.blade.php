<x-app-layout>
  @section('title', 'Releases')

  <!-- Main Content -->
  <div id="main-page">

    <!-- Header -->
    <x-slot name="header">
        <h1 class="text-4xl font-semibold text-center xl:text-left">Releases</h1>
    </x-slot>
    

    <div class="grid grid-cols-1 xl:grid-cols-12 gap-2 xl:gap-4">
      <div class="col-span-1 xl:col-span-12 flex flex-col gap-2 xl:gap-4">


        <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 xl:gap-2">
          <!-- Card -->
          <div class="bg-[#F5F5F5] px-4 py-4 rounded-md h-28 flex items-center">
            <div class="flex-1">
              <div class="flex items-center justify-between mb-2">
                <h3 class="text-md font-medium text-gray-700">Pending Approval</h3>
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-circle-dashed-icon lucide-circle-dashed text-[#302995]">
                    <path d="M10.1 2.182a10 10 0 0 1 3.8 0" />
                    <path d="M13.9 21.818a10 10 0 0 1-3.8 0" />
                    <path d="M17.609 3.721a10 10 0 0 1 2.69 2.7" />
                    <path d="M2.182 13.9a10 10 0 0 1 0-3.8" />
                    <path d="M20.279 17.609a10 10 0 0 1-2.7 2.69" />
                    <path d="M21.818 10.1a10 10 0 0 1 0 3.8" />
                    <path d="M3.721 6.391a10 10 0 0 1 2.7-2.69" />
                    <path d="M6.391 20.279a10 10 0 0 1-2.69-2.7" />
                  </svg>
                </div>
              </div>
              <div class="mb-1">
                <span class="text-3xl font-bold text-gray-900">0</span>
              </div>
            </div>
          </div>

          <!-- Last Transaction Card -->
          <div class="bg-[#F5F5F5] px-4 py-4 rounded-md h-28 flex items-center">
            <div class="flex-1">
              <div class="flex items-center justify-between mb-2">
                <h3 class="text-md font-medium text-gray-700">Live Releases</h3>
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-radio-icon lucide-radio text-[#302995]">
                    <path d="M16.247 7.761a6 6 0 0 1 0 8.478" />
                    <path d="M19.075 4.933a10 10 0 0 1 0 14.134" />
                    <path d="M4.925 19.067a10 10 0 0 1 0-14.134" />
                    <path d="M7.753 16.239a6 6 0 0 1 0-8.478" />
                    <circle cx="12" cy="12" r="2" />
                  </svg>
                </div>
              </div>
              <div class="mb-1">
                <span class="text-3xl font-bold text-gray-900">0</span>
              </div>
            </div>
          </div>

          <!-- Last Statement Card -->
          <div class="bg-[#F5F5F5] px-4 py-4 rounded-md h-28 flex items-center">
            <div class="flex-1">
              <div class="flex items-center justify-between mb-2">
                <h3 class="text-md font-medium text-gray-700">Rejected Releases</h3>
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-circle-off-icon lucide-circle-off text-[#302995]">
                    <path d="m2 2 20 20" />
                    <path d="M8.35 2.69A10 10 0 0 1 21.3 15.65" />
                    <path d="M19.08 19.08A10 10 0 1 1 4.92 4.92" />
                  </svg>
                </div>
              </div>
              <div class="mb-1">
                <span class="text-3xl font-bold text-gray-900">0</span>
              </div>
            </div>
          </div>
        </div>

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
          <table id="releaseTable">
            <thead>
              <tr>
                <th><span>ID</span></th>
                <th><span>Title</span></th>
                <th><span>User</span></th>
                <th><span>UPC</span></th>
                <th><span>Artist</span></th>
                <th><span>Release date</span></th>
                <th><span>Type</span></th>
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
        </div>
        <div x-data>
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
              <div
                class="relative bg-white px-8 py-6 rounded-lg shadow-xl w-full max-w-4xl mx-auto transform transition-all"
                @click.outside="$store.modals.closeEditModal()">
                <div x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0"
                  x-transition:enter-end="opacity-100">

                  <!-- Header -->
                  <div class="flex justify-between items-center mb-6">
                    <div class="flex items-center space-x-3">
                      <h2 class="text-xl font-semibold text-black">JAPAN - Famous Dex
                      </h2>
                      <span class="bg-red-500 text-white text-xs px-7 py-1 rounded-full font-medium">Live</span>
                      <span class="text-black font-semibold text-xl">( Takedown Requested )</span>
                    </div>
                    <button @click="$store.modals.closeViewModal()"
                      class="text-gray-400 hover:text-gray-600 cursor-pointer">
                      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                      </svg>
                    </button>
                  </div>

                  <!-- Content Grid -->
                  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Album Art -->
                    <div class="md:col-span-1">
                      <img src="{{ asset("luna-assets/luna-media/no-coverart.jpg") }}" alt="Album artwork"
                        class="w-full h-auto object-cover shadow-md">
                    </div>

                    <!-- Release Details -->
                    <div class="md:col-span-2 space-y-4">
                      <!-- Label -->
                      <div>
                        <label class="block text-md font-semibold text-gray-700 mb-1">Label</label>
                        <input type="text"
                          class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                          value="PT. Meluna Media Kreativitas Indonesia" readonly>
                      </div>

                      <!-- UPC/EAN -->
                      <div>
                        <label class="block text-md font-semibold text-gray-700 mb-1">UPC/EAN</label>
                        <input type="text"
                          class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                          value="198005123123" readonly>
                      </div>

                      <!-- Release Date -->
                      <div>
                        <label class="block text-md font-semibold text-gray-700 mb-1">Release Date</label>
                        <input type="text"
                          class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                          value="11 Jul 2025" readonly>
                      </div>
                    </div>
                  </div>

                  <!-- Full Width Fields -->
                  <div class="space-y-4 mt-6">
                    <!-- Language -->
                    <div>
                      <label class="block text-md font-semibold text-gray-700 mb-1">Language</label>
                      <input type="text"
                        class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                        value="English" readonly>
                    </div>

                    <!-- Type -->
                    <div>
                      <label class="block text-md font-semibold text-gray-700 mb-1">Type</label>
                      <input type="text"
                        class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                        value="Single" readonly>
                    </div>

                    <!-- Explicit Content -->
                    <div>
                      <label class="block text-sm font-semibold text-gray-700 mb-1">Explicit Content</label>
                      <input type="text"
                        class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                        value="Yes" readonly>
                    </div>
                  </div>

                  <!-- Action Buttons -->
                  <div class="flex flex-col sm:flex-row justify-end gap-3 mt-8">
                    <a href="{{ route('admin.show') }}"
                      class="px-6 py-2 bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-white rounded-sm text-center font-medium transition duration-150">
                      View More
                    </a>
                    <button type="button"
                      class="px-6 py-2 bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-white rounded-sm text-center font-medium transition duration-150">
                      Approve Takedown
                    </button>
                    <button type="button"
                      class="px-6 py-2 bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-white rounded-sm text-center font-medium transition duration-150">
                      Approve Metadata Edit
                    </button>
                  </div>

                </div>

                <!-- Loading -->
                <div x-show="$store.modals.loadingIn" x-transition:leave="transition ease-in duration-150"
                  x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                  class="absolute inset-0 flex items-center justify-center bg-[#F5F5F5] rounded-md z-10">
                  <div class="w-16 h-16 border-4 border-[#302995] border-t-[#302995]/50 rounded-full animate-spin">
                  </div>
                </div>

                <div x-show="$store.modals.loadingOut" x-transition:enter="transition ease-in duration-150"
                  x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                  class="absolute inset-0 flex items-center justify-center bg-[#F5F5F5] rounded-md z-10">
                  <div class="w-16 h-16 border-4 border-[#302995] border-t-[#302995]/50 rounded-full animate-spin">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <form action="#" method="POST">
    <div id="stepper-section" class="hidden">
      <!-- Stepper Header -->
      <div class="w-full py-4">
        <div class="max-w-6xl mx-auto">
          <div class="relative flex items-center">
            <!-- Step 1 -->
            <div class="flex flex-col items-center step-container">
              <div id="step1-circle"
                class="w-14 h-14 rounded-full flex items-center justify-center text-white font-bold text-xl bg-[#302995]  border-2 border-[#d9d9d9] circle-transition mb-4 step-circle relative z-10">
                1
              </div>
              <span id="step1-label"
                class="xl:text-base text-xs font-medium text-gray-900 step-transition text-center">Releases
                Information</span>
            </div>

            <div class="flex-1 relative" style="margin-left: -55px; margin-right: -48px; margin-top: -38px;">
              <div class="w-full h-1 bg-gray-300 connector-line"></div>
              <div id="line1" class="bg-[#302995] connector-line line-progress" style="width: 100%;"></div>
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

      <hr class="xl:w-[96rem] w-auto border-t-4 mx-auto border-[#E0E0E0] mt-4 mb-4">

      <!-- Content Area -->
      <div class="flex-1 flex items-center justify-center px-8">
        <div class="w-full h-full">
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
                          <i data-lucide="chevron-right" class="w-4 h-4"></i>
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
                              <i data-lucide="plus" class="w-4 h-4"></i>
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
                            <button type="button" onclick="addNewContributor()"
                              class="absolute right-7 top-1/2 -translate-y-1/2 text-[#374151] hover:text-black cursor-pointer">
                              <i data-lucide="plus" class="w-4 h-4"></i>
                            </button>
                            <div class="absolute right-2 top-1/2 -translate-y-1/2 text-[#374151] pointer-events-none">
                              <i data-lucide="chevron-right" class="w-4 h-4"></i>
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
                            <i data-lucide="cloud-upload" class="w-12 h-12"></i>
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
                              <i data-lucide="x" class="w-4  h-4"></i></button>
                          </div>
                        </div>
                        <p class="mt-2 text-sm text-black flex justify-end">JPG / PNG •
                          Min
                          3000×3000px • Max 10MB</p>
                      </div>
                    </div>
                  </div>
                </div>

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
              </div>


              <div class="space-y-6">
                <div>
                  <h2 class="text-2xl font-semibold text-black mb-4">Release Characteristic
                  </h2>
                  <div class="space-y-4">
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
                        <i data-lucide="chevron-right" class="w-4 h-4"></i>
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
                          <i data-lucide="plus" class="w-4 h-4"></i>
                        </button>
                        <div class="absolute right-2 top-1/2 -translate-y-1/2 text-[#374151] pointer-events-none">
                          <i data-lucide="chevron-right" class="w-4 h-4"></i>
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
                          <i data-lucide="chevron-right" class="w-4 h-4"></i>
                        </div>
                      </div>
                    </div>
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
                        <div class="flex items-center bg-[#F5F5F5] border-none rounded-md overflow-hidden">
                          <input type="text" id="dateInput" placeholder="dd/mm/yyyy"
                            class="px-3 py-2 text-sm w-[130px] font-medium placeholder-[#5D5D5D] focus:outline-none" />
                          <button onclick="datePicker.open()"
                            class="border-l px-2 py-2 placeholder-[#5D5D5D] hover:text-[#302995] cursor-pointer"
                            title="Pilih tanggal">
                            <i data-lucide="calendar" class="w-5 h-5"></i>
                          </button>
                        </div>
                        <div class="flex items-center bg-[#F5F5F5] border-none rounded-md overflow-hidden">
                          <input type="text" id="timeInput" placeholder="--:--"
                            class="px-3 py-2 text-sm w-[90px] font-medium text-[#5D5D5D] focus:outline-none" />
                          <button onclick="timePicker.open()"
                            class="border-l px-2 py-2 text-[#5D5D5D] hover:text-[#302995] cursor-pointer"
                            title="Pilih waktu">
                            <i data-lucide="clock" class="w-5 h-5"></i>
                          </button>
                        </div>
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

                <div class="flex flex-col justify-end sm:flex-row items-stretch sm:items-center gap-2 sm:gap-4">
                  <button id="step1-back-btn"
                    class="w-full sm:w-auto px-8 py-2 bg-[#302995] text-white rounded-[5px] font-medium text-lg hover:bg-opacity-90 transition-all cursor-pointer">
                    Back
                  </button>
                  <button id="step1-next-btn"
                    class="w-full sm:w-auto px-8 py-2 bg-[#302995] text-white rounded-[5px] font-medium text-lg hover:bg-opacity-90 transition-all cursor-pointer">
                    Next
                  </button>
                </div>

              </div>

            </div>
          </div>

          <div id="step2-content" class="step-content hidden">
            <div class="w-full mx-auto">
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
                          Number</label>
                        <div class="relative">
                          <input type="number" id="numberInput" placeholder="Enter track number"
                            class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out">
                          <div class="absolute right-2 top-1/2 transform -translate-y-1/2 flex flex-col space-y-1">
                            <button id="plusBtn" class="text-[#374151] hover:text-black cursor-pointer">
                              <i data-lucide="chevron-up" class="w-4 h-4"></i>
                            </button>
                            <button id="minusBtn" class="text-[#374151] hover:text-black cursor-pointer">
                              <i data-lucide="chevron-down" class="w-4 h-4"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                      <div>
                        <label class="block text-md font-semibold text-[#3F3F3F] mb-2">ISRC</label>
                        <input type="text" placeholder="Enter ISRC"
                          class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out">
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
                              <i data-lucide="cloud-upload" class="w-12 h-12"></i>
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
                                <i data-lucide="x" class="w-4 h-4"></i>
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
                        <div class="space-y-2">
                          <div class="relative">
                            <input type="text" placeholder="Enter Features Artists name"
                              class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                              required>
                            <button type="button"
                              class="absolute right-3 top-1/2 -translate-y-1/2 text-[#374151] hover:text-black cursor-pointer">
                              <i data-lucide="plus" class="w-4 h-4"></i>
                            </button>
                          </div>
                          <div class="relative">
                            <input type="text" placeholder="Enter Features Artists name"
                              class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                              required>
                            <button type="button"
                              class="absolute right-3 top-1/2 -translate-y-1/2 text-[#374151] hover:text-black cursor-pointer">
                              <i data-lucide="x" class="w-4 h-4"></i>
                            </button>
                          </div>
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
                            <i data-lucide="plus" class="w-4 h-4"></i>
                          </button>
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
                                <option disabled selected hidden>Role:
                                  Contributors</option>
                                <option>Producer</option>
                                <option>Songwriter</option>
                                <option>Composer</option>
                              </select>
                              <button type="button" onclick="addNewContributor()"
                                class="absolute right-7 top-1/2 -translate-y-1/2 text-[#374151] hover:text-black cursor-pointer">
                                <i data-lucide="plus" class="w-4 h-4"></i>
                              </button>
                              <div class="absolute right-2 top-1/2 -translate-y-1/2 text-[#374151] pointer-events-none">
                                <i data-lucide="chevron-right" class="w-4 h-4"></i>
                              </div>
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
                        <div class="space-y-2">
                          <div class="relative">
                            <input type="text" placeholder="Enter Composer's name"
                              class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                              required>
                            <button type="button"
                              class="absolute right-3 top-1/2 -translate-y-1/2 text-[#374151] hover:text-black cursor-pointer">
                              <i data-lucide="plus" class="w-4 h-4"></i>
                            </button>
                          </div>
                          <div class="relative">
                            <input type="text" placeholder="Enter Composer's name"
                              class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                              required>
                            <button type="button"
                              class="absolute right-3 top-1/2 -translate-y-1/2 text-[#374151] hover:text-black cursor-pointer">
                              <i data-lucide="x" class="w-4 h-4"></i>
                            </button>
                          </div>
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
                            <i data-lucide="plus" class="w-4 h-4"></i>
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
                            <i data-lucide="plus" class="w-4 h-4"></i>
                          </button>
                        </div>
                      </div>

                      <div>
                        <label class="block text-md font-semibold text-[#3F3F3F] mb-2">Publisher</label>
                        <input type="text" value="Meluna"
                          class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out">
                      </div>

                      <!-- Step 2 Buttons -->
                      <div class="space-y-4">
                        <!-- Track Info -->
                        <div class="flex justify-between flex-col sm:flex-row sm:items-center">
                          <div class="flex items-center text-md text-[#3F3F3F] font-semibold gap-1">
                            <i data-lucide="chevron-left" class="w-5 h-5 text-gray-500"></i>
                            <span>Track 1 of 2</span>
                            <i data-lucide="chevron-right" class="w-5 h-5 text-gray-500"></i>
                          </div>
                        </div>

                        <!-- Buttons -->
                        <div
                          class="flex flex-col sm:flex-row sm:justify-end items-stretch sm:items-center gap-2 sm:gap-4">
                          <button id="step2-add-track-btn"
                            class="w-full sm:w-auto px-8 py-2 bg-[#302995] text-white rounded-[5px] font-medium text-lg hover:bg-opacity-90 transition-all cursor-pointer">
                            Add another track
                          </button>
                          <button id="step2-back-btn"
                            class="w-full sm:w-auto px-8 py-2 bg-[#302995] text-white rounded-[5px] font-medium text-lg hover:bg-opacity-90 transition-all cursor-pointer">
                            Back
                          </button>
                          <button id="step2-next-btn"
                            class="w-full sm:w-auto px-8 py-2 bg-[#302995] text-white rounded-[5px] font-medium text-lg hover:bg-opacity-90 transition-all cursor-pointer">
                            Next
                          </button>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Step 3 Content -->
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
                    class="w-full sm:w-auto px-8 py-2 bg-[#302995] text-white rounded-[5px] font-medium text-lg hover:bg-opacity-90 transition-all cursor-pointer">
                    Back
                  </button>
                  <button id="step3-distribute-btn"
                    class="w-full sm:w-auto px-8 py-2 bg-[#302995] text-white rounded-[5px] font-medium text-lg hover:bg-opacity-90 transition-all cursor-pointer">
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
      // State management
      let currentView = 'main'; // 'main' or 'stepper'
      let currentStep = 1;
      const totalSteps = 3;

      // Elements
      const mainPage = document.getElementById('main-page');
      const stepperSection = document.getElementById('stepper-section');
      const startBtn = document.getElementById('start-btn');

      // Stepper elements
      const step1Circle = document.getElementById('step1-circle');
      const step2Circle = document.getElementById('step2-circle');
      const step3Circle = document.getElementById('step3-circle');
      const step1Label = document.getElementById('step1-label');
      const step2Label = document.getElementById('step2-label');
      const step3Label = document.getElementById('step3-label');
      const line1 = document.getElementById('line1');
      const line2 = document.getElementById('line2');

      // Content elements
      const step1Content = document.getElementById('step1-content');
      const step2Content = document.getElementById('step2-content');
      const step3Content = document.getElementById('step3-content');

      // Button elements
      const step1BackBtn = document.getElementById('step1-back-btn');
      const step1NextBtn = document.getElementById('step1-next-btn');
      const step2BackBtn = document.getElementById('step2-back-btn');
      const step2AddTrackBtn = document.getElementById('step2-add-track-btn');
      const step2NextBtn = document.getElementById('step2-next-btn');
      const step3BackBtn = document.getElementById('step3-back-btn');
      const step3DistributeBtn = document.getElementById('step3-distribute-btn');

      // Show stepper section
      function showStepper() {
        currentView = 'stepper';
        mainPage.classList.add('hidden');
        stepperSection.classList.remove('hidden');
        stepperSection.classList.add('content-slide');
        updateStepper();
      }

      // Show main page
      function showMainPage() {
        currentView = 'main';
        stepperSection.classList.add('hidden');
        mainPage.classList.remove('hidden');
        mainPage.classList.add('hero-fade');
      }

      // Update stepper visual + logic
      function updateStepper() {
        [step1Circle, step2Circle, step3Circle].forEach(circle => {
          circle.classList.remove('bg-[#302995]', 'text-white', 'border-[#302995]');
          circle.classList.add('bg-gray-200', 'text-gray-500', 'border-[#d9d9d9]');
        });

        [step1Label, step2Label, step3Label].forEach(label => {
          label.classList.remove('text-gray-900');
          label.classList.add('text-gray-500');
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

          // Audio upload initialization
          if (currentStep === 2 && !window.audioUploadInitialized) {
            initAudioUpload();
            window.audioUploadInitialized = true;
          }
        }, 100);
      }

      function goToStep(step) {
        if (step >= 1 && step <= totalSteps) {
          currentStep = step;
          updateStepper();
        }
      }

      function initAudioUpload() {
        // Audio upload logic here
        console.log('Audio upload initialized');
      }

      // Event listeners
      startBtn.addEventListener('click', showStepper);
      step1BackBtn.addEventListener('click', showMainPage);
      step1NextBtn.addEventListener('click', () => goToStep(2));
      step2BackBtn.addEventListener('click', () => goToStep(1));
      step2AddTrackBtn.addEventListener('click', () => alert('Add another track'));
      step2NextBtn.addEventListener('click', () => goToStep(3));
      step3BackBtn.addEventListener('click', () => goToStep(2));
      step3DistributeBtn.addEventListener('click', () => alert('Distribute'));

      // Initialize app
      showMainPage();
    </script>


    <script>
      // Deklarasi variabel global untuk mencegah inisialisasi ganda
      let imageUploadInitialized = false;
      let audioUploadInitialized = false;

      function initImageUpload() {
        const dropArea = document.getElementById('image-drop-area');
        const fileInput = document.getElementById('imageInput');
        const filePreview = document.getElementById('image-preview');
        const fileNameText = document.getElementById('image-name');

        if (!dropArea || !fileInput) return;

        // Cek apakah sudah ada event listener
        if (dropArea.hasAttribute('data-initialized')) return;
        dropArea.setAttribute('data-initialized', 'true');

        // Event listener untuk click pada drop area
        dropArea.addEventListener('click', () => {
          fileInput.click();
        });

        // Event listener untuk perubahan file input
        fileInput.addEventListener('change', function () {
          const file = this.files[0];
          if (!file) return;

          const validTypes = ['image/jpeg', 'image/png'];
          if (!validTypes.includes(file.type)) {
            alert('Only JPG or PNG files are allowed.');
            this.value = '';
            return;
          }

          const maxSize = 10 * 1024 * 1024; // 10MB
          if (file.size > maxSize) {
            alert('Maximum file size is 10MB.');
            this.value = '';
            return;
          }

          const img = new Image();
          img.onload = function () {
            if (img.width < 3000 || img.height < 3000) {
              alert('Minimum image resolution is 3000×3000 pixels.');
              fileInput.value = '';
              return;
            }

            fileNameText.textContent = file.name;
            filePreview.classList.remove('hidden');

            // Add event listener for remove button
            const removeBtn = document.getElementById('remove-image');
            if (removeBtn) {
              removeBtn.onclick = function () {
                fileInput.value = '';
                filePreview.classList.add('hidden');
                fileNameText.textContent = '';
              };
            }
          };
          img.onerror = function () {
            alert('Failed to read image file.');
            fileInput.value = '';
          };

          img.src = URL.createObjectURL(file);
        });

        // Event listener untuk drag & drop
        dropArea.addEventListener('dragover', (e) => {
          e.preventDefault();
          dropArea.classList.add('drag-over');
        });

        dropArea.addEventListener('dragleave', () => {
          dropArea.classList.remove('drag-over');
        });

        dropArea.addEventListener('drop', (e) => {
          e.preventDefault();
          dropArea.classList.remove('drag-over');
          const files = e.dataTransfer.files;
          if (files.length > 0) {
            fileInput.files = files;
            fileInput.dispatchEvent(new Event('change', { bubbles: true }));
          }
        });
      }

      function initAudioUpload() {
        const dropArea = document.getElementById('audio-drop-area');
        const fileInput = document.getElementById('audioInput');
        const filePreview = document.getElementById('audio-preview');
        const fileNameText = document.getElementById('audio-name');

        if (!dropArea || !fileInput) return;

        if (dropArea.hasAttribute('data-initialized')) return;
        dropArea.setAttribute('data-initialized', 'true');

        dropArea.addEventListener('click', () => {
          fileInput.click();
        });

        fileInput.addEventListener('change', function () {
          const file = this.files[0];
          if (!file) return;

          if (!file.name.toLowerCase().endsWith('.wav')) {
            alert("Only WAV files are allowed.");
            fileInput.value = '';
            return;
          }

          const reader = new FileReader();
          reader.onload = function (e) {
            const arrayBuffer = e.target.result;
            const audioCtx = new (window.AudioContext || window.webkitAudioContext)();

            audioCtx.decodeAudioData(arrayBuffer).then(audioBuffer => {
              const sampleRate = audioBuffer.sampleRate;
              const channels = audioBuffer.numberOfChannels;

              if (sampleRate < 44100) {
                alert("Minimum sample rate is 44.1 kHz");
                fileInput.value = '';
                return;
              }

              if (channels !== 2) {
                alert("File must be stereo (2 channels)");
                fileInput.value = '';
                return;
              }

              fileNameText.textContent = file.name;
              filePreview.classList.remove('hidden');

              // Add event listener for remove button
              const removeBtn = document.getElementById('remove-audio');
              if (removeBtn) {
                removeBtn.onclick = function () {
                  fileInput.value = '';
                  filePreview.classList.add('hidden');
                  fileNameText.textContent = '';
                };
              }
            }).catch(() => {
              alert("Unable to read audio file.");
              fileInput.value = '';
            });
          };

          reader.readAsArrayBuffer(file);
        });

        // Event listener untuk drag & drop
        dropArea.addEventListener('dragover', (e) => {
          e.preventDefault();
          dropArea.classList.add('drag-over');
        });

        dropArea.addEventListener('dragleave', () => {
          dropArea.classList.remove('drag-over');
        });

        dropArea.addEventListener('drop', (e) => {
          e.preventDefault();
          dropArea.classList.remove('drag-over');
          const files = e.dataTransfer.files;
          if (files.length > 0) {
            fileInput.files = files;
            fileInput.dispatchEvent(new Event('change', { bubbles: true }));
          }
        });
      }

      // Inisialisasi saat halaman dimuat
      document.addEventListener('DOMContentLoaded', function () {
        // Inisialisasi image upload
        if (!imageUploadInitialized) {
          initImageUpload();
          imageUploadInitialized = true;
        }

        // Inisialisasi audio upload
        if (!audioUploadInitialized) {
          initAudioUpload();
          audioUploadInitialized = true;
        }

        // Inisialisasi stepper jika ada
        if (typeof updateStepper === 'function') {
          updateStepper();
        }
      });
    </script>

    <script>
      lucide.createIcons();
      const datePicker = flatpickr("#dateInput", {
        dateFormat: "d/m/Y",
        allowInput: true
      });
      const timePicker = flatpickr("#timeInput", {
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
        time_24hr: true,
        allowInput: true
      });

      const input = document.getElementById('numberInput');
      const minusBtn = document.getElementById('minusBtn');
      const plusBtn = document.getElementById('plusBtn');

      minusBtn.addEventListener('click', () => {
        input.stepDown(); // seperti tombol minus bawaan
      });
      plusBtn.addEventListener('click', () => {
        input.stepUp(); // seperti tombol plus bawaan
      });
    </script>

    <script>
      const textarea = document.getElementById('description');
      const charCount = document.getElementById('charCount');

      textarea.addEventListener('input', () => {
        charCount.textContent = textarea.value.length;
      });
    </script>

    <script>
      // Select All functionality
      document.getElementById('select-all').addEventListener('change', function () {
        const platformCheckboxes = document.querySelectorAll('input[name="platform"]');
        platformCheckboxes.forEach(checkbox => {
          checkbox.checked = this.checked;
        });
      });

      // Individual platform checkbox handling
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
      function addNewInput() {
        const container = document.getElementById('inputContainer');

        // Buat HTML string untuk input baru
        const newInputHTML = `
    <div class="relative">
      <input type="text" placeholder="Name of featured artist"
        class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
        required>
      <button type="button" onclick="removeInput(this)"
        class="absolute right-3 top-1/2 -translate-y-1/2 text-[#374151] hover:text-black cursor-pointer">
        <i data-lucide="x" class="w-4 h-4"></i>
      </button>
    </div>
    `;

        // Tambahkan ke container
        container.insertAdjacentHTML('beforeend', newInputHTML);

        // PENTING: Re-initialize Lucide setelah menambah element baru
        if (typeof lucide !== 'undefined') {
          lucide.createIcons();
        }

        // Focus ke input yang baru dibuat
        const newInputs = container.querySelectorAll('input');
        const lastInput = newInputs[newInputs.length - 1];
        lastInput.focus();
      }

      function removeInput(button) {
        // Hapus div parent dari tombol yang diklik
        button.parentElement.remove();
      }
    </script>

    <script>
      function addNewContributor() {
        const container = document.getElementById('contributorContainer');

        // Buat HTML string untuk select baru
        const newSelectHTML = `
            <div class="relative flex items-center">
              <select
                class="bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] cursor-pointer transition duration-150 ease-in-out appearance-none"
                required>
                <option disabled selected hidden>Role: Contributors</option>
                <option>Producer</option>
                <option>Songwriter</option>
                <option>Composer</option>
              </select>
              <button type="button" onclick="removeContributor(this)"
                class="absolute right-7 top-1/2 -translate-y-1/2 text-[#374151] hover:text-black cursor-pointer">
                <i data-lucide="x" class="w-4 h-4"></i>
              </button>
              <div
                class="absolute right-2 top-1/2 -translate-y-1/2 text-[#374151] pointer-events-none">
                <i data-lucide="chevron-right" class="w-4 h-4"></i>
              </div>
            </div>
            `;

        // Tambahkan ke container
        container.insertAdjacentHTML('beforeend', newSelectHTML);

        // PENTING: Re-initialize Lucide setelah menambah element baru
        if (typeof lucide !== 'undefined') {
          lucide.createIcons();
        }

        // Focus ke select yang baru dibuat
        const newSelects = container.querySelectorAll('select');
        const lastSelect = newSelects[newSelects.length - 1];
        lastSelect.focus();
      }

      function removeContributor(button) {
        // Hapus div parent dari tombol yang diklik
        button.parentElement.remove();
      }
    </script>
    <script>
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
        // Hanya proses releaseTable
        const releaseTable = document.querySelector('#releaseTable');

        if (!releaseTable) {
          console.log('releaseTable not found - user might not be admin');
          return;
        }

        console.log('Processing releaseTable for admin user...');

        // Sample data untuk admin tracks
        const admintracksData = [
          {
            id: 1,
            title: "12345678",
            titles: "JAPAN",
            artist: "Famous Dex",
            user: "User",
            trackDate: "198005123123",
            release: "11 Jul 2025",
            type: "Single",
            status: "Live",
            statusColor: "bg-red-400"
          },
          {
            id: 2,
            title: "87654321",
            titles: "JAPAN",
            artist: "Famous Dex",
            user: "User",
            trackDate: "198005321321",
            release: "11 Jul 2025",
            type: "Album",
            status: "User Draft",
            statusColor: "bg-gray-400"
          },
        ];

        // Update total count
        const totalElement = document.getElementById('totaltracks');
        if (totalElement) {
          totalElement.textContent = admintracksData.length;
        }

        // Populate table dengan tampilan original
        const tableBody = releaseTable.querySelector('tbody');
        if (tableBody) {
          // Clear existing rows
          tableBody.innerHTML = '';

          admintracksData.forEach(track => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>
                    <span class="font-semibold text-xs xl:text-md">${track.title}</span>
                </td>
                <td>
                    <span class="font-semibold text-xs xl:text-md">${track.titles}</span>
                </td>
                <td>
                    <span class="font-semibold text-xs xl:text-md">${track.user}</span>
                </td>
                <td>
                    <span class="font-semibold text-xs xl:text-md">${track.trackDate}</span>
                </td>
                <td>
                    <span class="font-semibold text-xs xl:text-md">${track.release}</span>
                </td>
                <td>
                    <span class="font-semibold text-xs xl:text-md">${track.artist}</span>
                </td>
                <td>
                    <span class="font-semibold text-xs xl:text-md">${track.type}</span>
                </td>
                <td>
                    <div class="inline-flex items-center gap-2">
                  <div class="w-3 h-3 rounded-full bg flex-shrink-0 ${track.statusColor}"></div>
                      <span class="font-semibold text-xs xl:text-md">${track.status}</span>
              </div>
                </td>
                <td>
                    <div class="flex h-15 items-center gap-2 opacity-0 group-hover:opacity-100 transition duration-150 ease-in-out">
                        <button type="button" class="view-more-btn rounded-full p-2 text-[#302995] bg-transparent hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 text-center cursor-pointer transition duration-150 ease-in-out">
                        </button>
                    </div>
                </td>
            `;
            tableBody.appendChild(row);
          });
        }

        // Initialize SimpleDatatables dengan konfigurasi original
        let adminDataTable = null;
        try {
          adminDataTable = new simpleDatatables.DataTable("#releaseTable", {
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

          console.log('SimpleDatatables initialized for releaseTable');
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
                title: this.dataset.title,
                artist: this.dataset.artist,
                trackDate: this.dataset.trackDate,
                release: this.dataset.release,
                status: this.dataset.status
              };

              if (window.Alpine && window.Alpine.store) {
                window.Alpine.store('modals').openViewModal(data);
              }
            });
          });
        }

        // Initialize icons
        if (typeof lucide !== 'undefined') {
          lucide.createIcons();
        }

        // Apply initial styles
        setTimeout(() => {
          applyCustomStyles();
        }, 100);

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
      });
    </script>
  </x-slot>
</x-app-layout>