<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Upload Lagu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jsmediatags/3.9.5/jsmediatags.min.js"></script>
</head>
<body class="bg-gray-50 min-h-screen p-4">
    <div class="max-w-2xl mx-auto">
        <div class="bg-white rounded-lg shadow-sm border p-6">
            <h1 class="text-2xl font-semibold text-gray-900 mb-6">Upload Lagu</h1>
            
            <form id="uploadForm" class="space-y-6">
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Judul Lagu</label>
                    <input type="text" id="title" name="title" required 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                
                <div>
                    <label for="artist" class="block text-sm font-medium text-gray-700 mb-2">Artis</label>
                    <input type="text" id="artist" name="artist" required 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                
                <div>
                    <label for="album" class="block text-sm font-medium text-gray-700 mb-2">Album (opsional)</label>
                    <input type="text" id="album" name="album" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                
                <div>
                    <label for="file" class="block text-sm font-medium text-gray-700 mb-2">File Audio (MP3/WAV)</label>
                    <input type="file" id="file" name="file" accept=".mp3,.wav" required 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                </div>
                
                <!-- Info Audio -->
                <div id="audioInfo" class="hidden bg-gray-50 p-4 rounded-md">
                    <h3 class="text-sm font-medium text-gray-700 mb-2">Informasi Audio:</h3>
                    <div id="audioDetails" class="text-sm text-gray-600 space-y-1"></div>
                </div>
                
                <!-- Validasi Errors -->
                <div id="validationErrors" class="hidden bg-red-50 border border-red-200 rounded-md p-4">
                    <h3 class="text-sm font-medium text-red-800 mb-2">Audio tidak memenuhi syarat:</h3>
                    <ul id="errorList" class="text-sm text-red-600 space-y-1"></ul>
                </div>
                
                <button type="submit" id="submitBtn"
                        class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed transition-colors">
                    Upload Lagu
                </button>
            </form>
            
            <!-- Loading State -->
            <div id="loading" class="hidden text-center py-4">
                <div class="inline-block animate-spin rounded-full h-8 w-8 border-b-2 border-blue-600"></div>
                <p class="mt-2 text-sm text-gray-600">Mengupload...</p>
            </div>
            
            <!-- Success/Error Messages -->
            <div id="message" class="hidden mt-4 p-4 rounded-md"></div>
        </div>
    </div>

    <script>
        const uploadForm = document.getElementById('uploadForm');
        const fileInput = document.getElementById('file');
        const titleInput = document.getElementById('title');
        const artistInput = document.getElementById('artist');
        const albumInput = document.getElementById('album');
        const audioInfo = document.getElementById('audioInfo');
        const audioDetails = document.getElementById('audioDetails');
        const validationErrors = document.getElementById('validationErrors');
        const errorList = document.getElementById('errorList');
        const submitBtn = document.getElementById('submitBtn');
        const loading = document.getElementById('loading');
        const message = document.getElementById('message');
        
        let currentAudioData = null;
        
        // Event listener untuk file input
        fileInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                analyzeAudioFile(file);
            } else {
                hideAudioInfo();
            }
        });
        
        // Fungsi untuk menganalisis file audio dengan jsmediatags
        function analyzeAudioFile(file) {
            jsmediatags.read(file, {
                onSuccess: function(tag) {
                    // Auto-fill form jika metadata tersedia
                    if (tag.tags.title && !titleInput.value) {
                        titleInput.value = tag.tags.title;
                    }
                    if (tag.tags.artist && !artistInput.value) {
                        artistInput.value = tag.tags.artist;
                    }
                    if (tag.tags.album && !albumInput.value) {
                        albumInput.value = tag.tags.album;
                    }
                    
                    // Analisis teknis audio
                    analyzeAudioTechnical(file, tag.tags);
                },
                onError: function(error) {
                    console.log('Error reading metadata:', error);
                    // Tetap lakukan analisis teknis meskipun metadata tidak bisa dibaca
                    analyzeAudioTechnical(file, {});
                }
            });
        }
        
        // Fungsi untuk analisis teknis audio (durasi, dll)
        function analyzeAudioTechnical(file, metadata) {
            const audio = new Audio();
            const url = URL.createObjectURL(file);
            
            audio.addEventListener('loadedmetadata', function() {
                const duration = Math.floor(audio.duration);
                const fileSize = (file.size / (1024 * 1024)).toFixed(2); // MB
                
                // Estimasi bitrate (file size / duration * 8)
                const estimatedBitrate = Math.floor((file.size * 8) / (duration * 1000)); // kbps
                
                currentAudioData = {
                    duration: duration,
                    bitrate: estimatedBitrate * 1000, // convert to bps untuk validasi
                    format: file.type.split('/')[1] || 'unknown',
                    fileSize: fileSize
                };
                
                displayAudioInfo(currentAudioData, metadata);
                validateAudio(currentAudioData);
                
                URL.revokeObjectURL(url);
            });
            
            audio.addEventListener('error', function() {
                showMessage('Error: Tidak dapat membaca file audio', 'error');
                URL.revokeObjectURL(url);
            });
            
            audio.src = url;
        }
        
        // Fungsi untuk menampilkan informasi audio
        function displayAudioInfo(audioData, metadata) {
            const details = [];
            
            details.push(`Durasi: ${Math.floor(audioData.duration / 60)}:${(audioData.duration % 60).toString().padStart(2, '0')}`);
            details.push(`Format: ${audioData.format.toUpperCase()}`);
            details.push(`Ukuran: ${audioData.fileSize} MB`);
            details.push(`Bitrate (estimasi): ${Math.floor(audioData.bitrate / 1000)} kbps`);
            
            if (metadata.year) details.push(`Tahun: ${metadata.year}`);
            if (metadata.genre) details.push(`Genre: ${metadata.genre}`);
            
            audioDetails.innerHTML = details.map(detail => `<div>• ${detail}</div>`).join('');
            audioInfo.classList.remove('hidden');
        }
        
        // Fungsi validasi audio sesuai dengan backend
        function validateAudio(audioData) {
            const errors = [];
            
            // Validasi sesuai dengan backend Laravel
            if (audioData.duration < 15) { // 15 detik seperti di backend (meskipun pesan bilang 30)
                errors.push('Durasi audio harus minimal 15 detik');
            }
            
            if (audioData.bitrate < 128000) { // 128 kbps
                errors.push('Bitrate harus minimal 128 kbps');
            }
            
            // Note: Sample rate, bit depth, dan channels sulit dideteksi dengan JavaScript
            // Validasi ini akan dilakukan di backend
            
            if (errors.length > 0) {
                showValidationErrors(errors);
                submitBtn.disabled = true;
            } else {
                hideValidationErrors();
                submitBtn.disabled = false;
            }
        }
        
        // Fungsi untuk menampilkan error validasi
        function showValidationErrors(errors) {
            errorList.innerHTML = errors.map(error => `<li>• ${error}</li>`).join('');
            validationErrors.classList.remove('hidden');
        }
        
        // Fungsi untuk menyembunyikan error validasi
        function hideValidationErrors() {
            validationErrors.classList.add('hidden');
        }
        
        // Fungsi untuk menyembunyikan info audio
        function hideAudioInfo() {
            audioInfo.classList.add('hidden');
            hideValidationErrors();
            currentAudioData = null;
            submitBtn.disabled = false;
        }
        
        // Handle form submission
        uploadForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            if (!fileInput.files[0]) {
                showMessage('Pilih file audio terlebih dahulu', 'error');
                return;
            }
            
            const formData = new FormData();
            formData.append('title', titleInput.value);
            formData.append('artist', artistInput.value);
            formData.append('album', albumInput.value);
            formData.append('file', fileInput.files[0]);
            
            // Tambahkan CSRF token jika menggunakan Laravel
            const csrfToken = document.querySelector('meta[name="csrf-token"]');
            if (csrfToken) {
                formData.append('_token', csrfToken.getAttribute('content'));
            }
            
            try {
                showLoading(true);
                hideMessage();
                
                // Ambil CSRF token dari meta tag atau cookie
                let csrfToken = '';
                const csrfMeta = document.querySelector('meta[name="csrf-token"]');
                if (csrfMeta) {
                    csrfToken = csrfMeta.getAttribute('content');
                }
                
                // Ganti URL ini dengan endpoint Laravel Anda
                const response = await fetch('/api/songs/upload', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': csrfToken
                    }
                });
                
                const data = await response.json();
                
                if (response.ok) {
                    showMessage(data.message || 'Lagu berhasil diunggah!', 'success');
                    uploadForm.reset();
                    hideAudioInfo();
                } else {
                    if (data.errors && Array.isArray(data.errors)) {
                        showMessage(data.message + '\n' + data.errors.join('\n'), 'error');
                    } else if (data.message) {
                        showMessage(data.message, 'error');
                    } else {
                        showMessage('Terjadi kesalahan saat mengupload', 'error');
                    }
                }
            } catch (error) {
                console.error('Upload error:', error);
                showMessage('Terjadi kesalahan jaringan', 'error');
            } finally {
                showLoading(false);
            }
        });
        
        // Fungsi utility
        function showLoading(show) {
            if (show) {
                loading.classList.remove('hidden');
                uploadForm.classList.add('hidden');
            } else {
                loading.classList.add('hidden');
                uploadForm.classList.remove('hidden');
            }
        }
        
        function showMessage(text, type) {
            message.textContent = text;
            message.className = `mt-4 p-4 rounded-md ${
                type === 'success' 
                    ? 'bg-green-50 text-green-800 border border-green-200' 
                    : 'bg-red-50 text-red-800 border border-red-200'
            }`;
            message.classList.remove('hidden');
        }
        
        function hideMessage() {
            message.classList.add('hidden');
        }
    </script>
</body>
</html>