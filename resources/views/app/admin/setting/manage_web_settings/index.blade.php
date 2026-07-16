<x-app-layout>
    @section('title', 'Manage Web Settings')
    <!-- Header -->
    <div class="flex flex-col xl:flex-row xl:justify-between items-center gap-4">
        <h1 class="text-4xl font-semibold text-center xl:text-left">Manage Web Settings</h1>
    </div>

    <div class="max-w-7xl">
        <div class="bg-[#F5F5F5] rounded-lg border border-gray-200 p-6">

            <!-- Web Page Title Format Section -->
            <div class="mb-8">
                <h2 class="text-lg font-semibold text-gray-900 mb-3">Web Page Title Format</h2>
                <p class="text-sm text-gray-600 mb-4">Use [ PT Meluna Media Kreativitas Indonesia ] as a
                    placeholder.</p>

                <input type="text" id="companyName" value=""
                    class="bg-[#F5F5F5] w-full px-4 py-3 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                    placeholder="PT Meluna Media Kreativitas Indonesia" readonly />
            </div>

            <hr class="border-black mb-4" />

            <!-- New User Registration Section -->
            <div class="mb-8">
                <h2 class="text-lg font-semibold text-gray-900 mb-3">New User Registration</h2>
                <p class="text-sm text-gray-600 mb-4">If disabled, the "Sign Up" button will be hidden.</p>

                <div class="flex gap-6">
                    <label class="flex items-center cursor-pointer">
                        <input type="radio" name="registration" value="disable" class="w-5 h-5 accent-[#302995]" />
                        <span class="ml-2 text-gray-700">Disable</span>
                    </label>

                    <label class="flex items-center cursor-pointer">
                        <input type="radio" name="registration" value="enable" checked
                            class="w-5 h-5 accent-[#302995]" />
                        <span class="ml-2 text-gray-700">Enable</span>
                    </label>
                </div>
            </div>

            <hr class="border-black mb-4" />

            <!-- Genre List Section -->
            <div class="mb-8">
                <h2 class="text-lg font-semibold text-gray-900 mb-3">Genre List</h2>
                <p class="text-sm text-gray-600 mb-4">If disabled, the "Sign Up" button will be hidden.</p>

                <!-- Add Genre Input -->


                <div class="w-64 mb-2">
                    <div class="relative">
                        <input type="text" id="newGenre" placeholder="Genre Name..."
                            class="bg-white w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#302995] transition duration-150 ease-in-out"
                            required>
                        <button id="addGenreBtn"
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

                <!-- Genre Tags -->
                <div id="genreTags" class="flex flex-wrap gap-2">
                    <div class="genre-tag flex items-center gap-2 bg-white text-gray-700 px-3 py-2 rounded-md text-sm">
                        <span>Pop</span>
                        <button class="remove-genre text-gray-500 hover:text-red-500 transition-colors">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6L6 18"></path>
                                <path d="M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="genre-tag flex items-center gap-2 bg-white text-gray-700 px-3 py-2 rounded-md text-sm">
                        <span>Rock</span>
                        <button class="remove-genre text-gray-500 hover:text-red-500 transition-colors">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6L6 18"></path>
                                <path d="M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="genre-tag flex items-center gap-2 bg-white text-gray-700 px-3 py-2 rounded-md text-sm">
                        <span>Rap</span>
                        <button class="remove-genre text-gray-500 hover:text-red-500 transition-colors">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6L6 18"></path>
                                <path d="M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Save Button -->
            <div class="pt-4">
                <button
                    class="rounded-sm px-5 py-3 font-semibold text-[#F5F5F5] bg-[#302995] hover:bg-[#13115A] active:bg-[#0A0843] text-center cursor-pointer transition duration-150 ease-in-out">
                    Save
                </button>
            </div>
        </div>
    </div>

    <script>
        // Genre management functionality
        let genres = ['Pop', 'Rock', 'Rap'];

        function updateGenreTags() {
            const container = document.getElementById('genreTags');
            container.innerHTML = '';

            genres.forEach(genre => {
                const tag = document.createElement('div');
                tag.className = 'genre-tag flex items-center gap-2 bg-white text-gray-700 px-3 py-2 rounded-md text-sm';
                tag.innerHTML = `
                    <span>${genre}</span>
                    <button class="remove-genre text-gray-500 hover:text-red-500 transition-colors" onclick="removeGenre('${genre}')">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6L6 18"></path>
                            <path d="M6 6l12 12"></path>
                        </svg>
                    </button>
                `;
                container.appendChild(tag);
            });
        }

        function addGenre() {
            const input = document.getElementById('newGenre');
            const newGenre = input.value.trim();

            if (newGenre && !genres.includes(newGenre)) {
                genres.push(newGenre);
                input.value = '';
                updateGenreTags();
            }
        }

        function removeGenre(genreToRemove) {
            genres = genres.filter(genre => genre !== genreToRemove);
            updateGenreTags();
        }

        // Event listeners
        document.getElementById('addGenreBtn').addEventListener('click', addGenre);

        document.getElementById('newGenre').addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                addGenre();
            }
        });

        // Initialize
        updateGenreTags();
    </script>

</x-app-layout>