<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// --- CONTROLLERS ---
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BusinessInformationController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\AdminArtistController;
use App\Http\Controllers\Api\ArtistController;
use App\Http\Controllers\AdminPublisherController;
use App\Http\Controllers\Api\PublisherController;
use App\Http\Controllers\AdminRecordLabelController;
use App\Http\Controllers\Api\RecordLabelController as ApiRecordLabelController;

// ================= DASHBOARD =================
Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// ================= ADMIN & OPERATOR ROUTES =================
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {

    // --- ARTIST MANAGEMENT ---
    Route::get('/artists', [AdminArtistController::class, 'index'])->name('artists.index');
    Route::put('/artists/{id}', [AdminArtistController::class, 'update'])->name('artists.update');
    Route::delete('/artists/{id}', [AdminArtistController::class, 'destroy'])->name('artists.destroy');
    Route::get('/api/artists-data', [AdminArtistController::class, 'getArtistsData'])->name('artists.data');

    // --- PUBLISHER MANAGEMENT ---
    Route::get('/publishers', [AdminPublisherController::class, 'index'])->name('publishers');
    Route::put('/publishers/{id}', [AdminPublisherController::class, 'update'])->name('publishers.update');
    Route::delete('/publishers/{id}', [AdminPublisherController::class, 'destroy'])->name('publishers.destroy');

    // --- RECORD LABEL MANAGEMENT (CRUD UTAMA) ---
    // Saya rapikan route ini agar konsisten. URL '/record_labels' ini dipakai untuk aksi edit/delete
    Route::get('/record_labels', [AdminRecordLabelController::class, 'index'])->name('record_labels');
    Route::post('/record_labels', [AdminRecordLabelController::class, 'store'])->name('record_labels.store');
    Route::put('/record_labels/{id}', [AdminRecordLabelController::class, 'update'])->name('record_labels.update');
    Route::delete('/record_labels/{id}', [AdminRecordLabelController::class, 'destroy'])->name('record_labels.destroy');

    // --- FITUR LAMA ADMIN ---
    Route::get('/releases', function () {
        if (!in_array((int) Auth::user()->role, [0, 1])) abort(403);
        return view('app.admin.assets.releases.index');
    })->name('releases');

    Route::get('/show', function () {
        if (!in_array((int) Auth::user()->role, [0, 1])) abort(403);
        return view('app.admin.assets.releases.show');
    })->name('show');

    Route::get('/tracks', function () {
        if (!in_array((int) Auth::user()->role, [0, 1])) abort(403);
        return view('app.admin.assets.tracks.index');
    })->name('tracks');

    Route::get('/videos', function () {
        if (!in_array((int) Auth::user()->role, [0, 1])) abort(403);
        return view('app.admin.assets.videos.index');
    })->name('videos');

    // --- PERBAIKAN PENTING DISINI ---
    // Route '/labels' ini yang kamu akses di browser.
    // SEKARANG SUDAH MENGGUNAKAN CONTROLLER.
    Route::get('/labels', [AdminRecordLabelController::class, 'index'])->name('labels');

    Route::get('/reports', function () {
        if (!in_array((int) Auth::user()->role, [0, 1])) abort(403);
        return view('app.admin.reports.index');
    })->name('reports');

    Route::get('/summary', function () {
        if (!in_array((int) Auth::user()->role, [0, 1])) abort(403);
        return view('app.admin.reports.summary');
    })->name('reports.summary');

    Route::get('/analytics', function () {
        if (!in_array((int) Auth::user()->role, [0, 1])) abort(403);
        return view('app.admin.reports.analytics');
    })->name('reports.analytics');

    Route::get('/import', function () {
        if (!in_array((int) Auth::user()->role, [0, 1])) abort(403);
        return view('app.admin.reports.import_sales');
    })->name('import');

    Route::get('/UsersManagement', function () {
        if (!in_array((int) Auth::user()->role, [0, 1])) abort(403);
        return view('app.admin.users.index');
    })->name('user');

    Route::get('/payoutmanagement', function () {
        if (!in_array((int) Auth::user()->role, [0, 1])) abort(403);
        return view('app.admin.payout_management.index');
    })->name('payout');

    Route::get('/platforms', function () {
        if (!in_array((int) Auth::user()->role, [0, 1])) abort(403);
        return view('app.admin.setting.manage_platforms.index');
    })->name('platforms');

    Route::get('/releaseonplatform', function () {
        if (!in_array((int) Auth::user()->role, [0, 1])) abort(403);
        return view('app.admin.setting.manage_platforms.platform');
    })->name('releaseonplatform');

    Route::get('/websettings', function () {
        if (!in_array((int) Auth::user()->role, [0, 1])) abort(403);
        return view('app.admin.setting.manage_web_settings.index');
    })->name('Websetting');

    Route::get('/userprofile', function () {
        if (!in_array((int) Auth::user()->role, [0, 1])) abort(403);
        return view('app.admin.userprofile.index');
    })->name('userprofile');

    Route::get('/releaseby', function () {
        if (!in_array((int) Auth::user()->role, [0, 1])) abort(403);
        return view('app.admin.users.release_by');
    })->name('release_by');

    Route::get('/branding', function () {
        if (!in_array((int) Auth::user()->role, [0, 1])) abort(403);
        return view('app.admin.setting.manage_branding.index');
    })->name('branding');
});


// ================= USER ROUTES =================
Route::middleware(['auth', 'verified'])->prefix('user')->name('user.')->group(function () {

    Route::get('/releases', function () {
        if (!in_array((int) Auth::user()->role, [0, 1, 2])) abort(403);
        return view('app.user.assets.releases.index');
    })->name('releases');

    Route::get('/create', function () {
        if (!in_array((int) Auth::user()->role, [0, 1, 2])) abort(403);
        return view('app.user.assets.releases.create');
    })->name('create');

    Route::get('/show', function () {
        if (!in_array((int) Auth::user()->role, [0, 1, 2])) abort(403);
        return view('app.user.assets.releases.show');
    })->name('show');

    Route::get('/edit', function () {
        if (!in_array((int) Auth::user()->role, [0, 1, 2])) abort(403);
        return view('app.user.assets.releases.edit');
    })->name('edit');

    Route::get('/tracks', function () {
        if (!in_array((int) Auth::user()->role, [0, 1, 2])) abort(403);
        return view('app.user.assets.tracks.index');
    })->name('tracks');

    Route::get('/videos', function () {
        if (!in_array((int) Auth::user()->role, [0, 1, 2])) abort(403);
        return view('app.user.assets.videos.index');
    })->name('videos');

    Route::get('/reports', function () {
        if (!in_array((int) Auth::user()->role, [0, 1, 2])) abort(403);
        return view('app.user.reports.index');
    })->name('reports');

    Route::get('/summary', function () {
        if (!in_array((int) Auth::user()->role, [0, 1, 2])) abort(403);
        return view('app.user.reports.summary');
    })->name('report.summary');

    Route::get('/analytics', function () {
        if (!in_array((int) Auth::user()->role, [0, 1, 2])) abort(403);
        return view('app.user.reports.analytics');
    })->name('report.analytics');

    Route::get('/history', function () {
        if (!in_array((int) Auth::user()->role, [0, 1, 2])) abort(403);
        return view('app.user.payouts.history.index');
    })->name('history');

    Route::get('/request', function () {
        if (!in_array((int) Auth::user()->role, [0, 1, 2])) abort(403);
        return view('app.user.payouts.request_payout.index');
    })->name('request');

    Route::get('/manage-channels', function () {
        if (!in_array((int) Auth::user()->role, [0, 1, 2])) abort(403);
        return view('app.user.youtube_network.manage_channels.index');
    })->name('manage-channels');

    Route::get('/request-oac', function () {
        if (!in_array((int) Auth::user()->role, [0, 1, 2])) abort(403);
        return view('app.user.youtube_network.request_oac.index');
    })->name('request-oac');
});


// ================= INTERNAL API ROUTES =================
Route::middleware(['auth', 'verified'])->prefix('api')->group(function () {
    Route::get('/artists', [ArtistController::class, 'index']);
    Route::post('/artists', [ArtistController::class, 'store']);
    Route::get('/artists/{id}', [ArtistController::class, 'show']);
    Route::put('/artists/{id}', [ArtistController::class, 'update']);
    Route::delete('/artists/{id}', [ArtistController::class, 'destroy']);

    Route::apiResource('publishers', PublisherController::class);
    // Gunakan API controller yang benar untuk route internal API
    Route::apiResource('record-labels', ApiRecordLabelController::class);

    // Route::patch('/profile', [ProfileController::class, 'update'])->name('api.profile.update');
    // Route::post('/business-information', [BusinessInformationController::class, 'store'])->name('api.business-information');

    Route::prefix('songs')->group(function () {
        Route::post('/upload', [SongController::class, 'upload']);
        Route::get('/', [SongController::class, 'index']);
        Route::get('/{id}', [SongController::class, 'show']);
        Route::delete('/{id}', [SongController::class, 'destroy']);
    });
});


// ================= PROFILE, CONTRIBUTORS & SETTINGS =================
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/business-information', [BusinessInformationController::class, 'store'])->name('business-information');

    Route::get('/api/avatar', function () {
        return response()->view('profile.avatar')->header('Content-Type', 'image/svg+xml');;
    })->name('avatar');

    // Contributors Group (Labels User Side)
    Route::prefix('contributors')->group(function () {
        // Tampilkan halaman Record Labels (blade). Data CRUD dilakukan lewat API di /api/record-labels
        Route::get('/labels', function () {
            return view('app.user.contributors.record_labels.index');
        })->name('contributors.labels.index');

        // Tampilkan halaman Artists (blade). Data CRUD dilakukan lewat API di /api/artists
        Route::get('/artists', function () {
            return view('app.user.contributors.artists.index');
        })->name('artists');

        // Tampilkan halaman Publishers (blade). Data CRUD dilakukan lewat API di /api/publishers
        Route::get('/publishers', function () {
            return view('app.user.contributors.publishers.index');
        })->name('publishers');
    });
});

Route::middleware(['auth', 'verified'])->group(function () {
    // Route::get('/artists', function () {
    //     return view('app.user.contributors.artists.index');
    // })->name('artists');

    // Route::get('/publishers', function () {
    //     return view('app.user.contributors.publishers.index');
    // })->name('publishers');

    Route::get('/settings', function () {
        return view('settings.index');
    })->name('settings');

    Route::get('/upload', function () {
        return view('upload');
    });
});

require __DIR__ . '/auth.php';
