<x-app-layout>
    @section('title', 'Manage Branding')
    <x-slot name="header">
        <h1 class="text-4xl font-bold">Manage Branding</h1>
    </x-slot>
    <div class="grid grid-cols-1 lg:grid-cols-5 gap-12 lg:gap-5">

        <!-- Left Column: Current Logo -->
        <div class="cols-span-1 lg:col-span-2 space-y-6">
            <h2 class="text-2xl font-semibold text-gray-700 mb-4">Current Logo</h2>
            <div class="flex h-full p-10 items-center bg-white justify-center">
                <img src="{{ asset('images/logo_2.png') }}" class="w-full h-auto">
            </div>
        </div>

        <!-- Right Column: Upload & Settings -->
        <div class="space-y-6 cols-span-1 lg:col-span-3">
            <!-- Upload Section -->
            <div>
                <h2 class="text-2xl font-semibold text-gray-700 mb-4">Upload New logo</h2>

                <!-- Upload Area -->
                <div class="border-2 border-dashed border-gray-300 rounded-lg bg-white p-12 text-center cursor-pointer hover:border-[#302995] hover:bg-blue-50 transition-colors duration-200"
                    onclick="document.getElementById('logoUpload').click()">
                    <div class="w-12 h-12 flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-cloud-upload-icon lucide-cloud-upload"><path d="M12 13v8"/><path d="M4 14.899A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.242"/><path d="m8 17 4-4 4 4"/></svg>
                    </div>
                    <div class="text-gray-700 font-medium mb-1">Browse Files</div>
                    <div class="text-gray-500 text-sm">Drag and drop files here</div>
                </div>
                <input type="file" id="logoUpload" class="hidden" accept="image/*">
            </div>

            <!-- Custom Color -->
            <div>
                <label class="block text-2xl font-semibold text-gray-700 mb-2">Custom Color</label>
                <div class="flex items-center gap-3">
                    <input type="text" value="302995" id="colorInput"
                        class="flex-1 bg-white px-3 py-2 border border-meluna-border rounded text-md text-meluna-text placeholder-gray-400 focus:border-meluna-blue focus:outline-none transition-colors duration-150">
                    <span class="text-sm text-gray-600 font-medium whitespace-nowrap">100 %</span>
                    <div class="bg-[#ffffff] w-10 h-10 flex items-center justify-center border border-[#302995] rounded p-1">
                    <div class="w-6 h-6 bg-[#302995] rounded flex-shrink-0" id="colorPreview">
                    </div>
                    </div>
                </div>
            </div>

            <!-- Custom Company Name -->
            <div>
                <label class="block text-2xl font-semibold text-gray-700 mb-2">Custom Company Name</label>
                <input type="text" value="Meluna" id="companyName"
                    class="w-full bg-white px-3 py-2 border border-meluna-border rounded text-md text-meluna-text placeholder-gray-400 focus:border-meluna-blue focus:outline-none transition-colors duration-150">
            </div>

            <!-- Save Button -->
            <button onclick="saveSettings()"
                class="bg-[#302995] hover:bg-meluna-hover active:bg-meluna-active text-white px-7 py-3 rounded text-md font-medium transition-colors duration-150">
                Save
            </button>
        </div>
    </div>

    <script>
        // Color preview functionality
        const colorInput = document.getElementById('colorInput');
        const colorPreview = document.getElementById('colorPreview');

        function updateColorPreview() {
            let color = colorInput.value.trim();

            if (color === '3Q2995') {
                // Keep original blue for this specific value
                colorPreview.style.backgroundColor = '#4c63d2';
            } else if (color.match(/^[0-9A-Fa-f]{6}$/)) {
                colorPreview.style.backgroundColor = '#' + color;
            } else if (color.match(/^#[0-9A-Fa-f]{6}$/)) {
                colorPreview.style.backgroundColor = color;
            } else {
                // Default to meluna blue
                colorPreview.style.backgroundColor = '#4c63d2';
            }
        }

        colorInput.addEventListener('input', updateColorPreview);
        updateColorPreview(); // Initialize

        // File upload handling
        const fileInput = document.getElementById('logoUpload');
        const uploadArea = fileInput.previousElementSibling;

        fileInput.addEventListener('change', function(e) {
            if (e.target.files.length > 0) {
                const fileName = e.target.files[0].name;
                console.log('Logo file selected:', fileName);
                // Add file preview logic here if needed
            }
        });

        // Drag and drop functionality
        uploadArea.addEventListener('dragover', function(e) {
            e.preventDefault();
            this.classList.add('border-meluna-blue', 'bg-blue-50');
        });

        uploadArea.addEventListener('dragleave', function(e) {
            e.preventDefault();
            this.classList.remove('border-meluna-blue', 'bg-blue-50');
        });

        uploadArea.addEventListener('drop', function(e) {
            e.preventDefault();
            this.classList.remove('border-meluna-blue', 'bg-blue-50');

            const files = e.dataTransfer.files;
            if (files.length > 0 && files[0].type.startsWith('image/')) {
                fileInput.files = files;
                console.log('Logo file dropped:', files[0].name);
            }
        });
    </script>
</x-app-layout>
