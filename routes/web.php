<?php

use App\Http\Controllers\aktuariaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\DashboardJadwal;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\berandaController;
use App\Http\Controllers\DashboardAktuaria;
use App\Http\Controllers\DashboardNewJadwal;
use App\Http\Controllers\DashboardEditJadwal;
use App\Http\Controllers\LinkController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('main');
// });

Route::get('/', [berandaController::class, 'index']);
Route::post('/send_message', [berandaController::class, 'sendMail']);

Route::get('/jmti', function () {
    return view('jmti');
});

Route::get('/jstpk', function () {
    return view('jstpk');
});

Route::get('/jikl', function () {
    return view('jikl');
});

Route::get('/jtip', function () {
    return view('jtip');
});

Route::get('/jtsp', function () {
    return view('jtsp');
});

Route::get('/mainhall', function () {
    return view('mainhall');
});

// JMTI

Route::get('/jmti/sistem_informasi', function () {
    return view('jmti.si');
});

Route::get('/jmti/informatika', function () {
    return view('jmti.Informatika');
});

Route::get('/jmti/aktuaria', [aktuariaController::class, 'index']);

Route::get('/jmti/bisnisdigital', function () {
    return view('jmti.bisnis');
});

Route::get('/jmti/matematika', function () {
    return view('jmti.matematika');
});

Route::get('/jmti/statistika', function () {
    return view('jmti.statistika');
});

// JIKL

Route::get('/jikl/lingkungan', function () {
    return view('jikl.lingkungan');
});

Route::get('/jikl/tmm', function () {
    return view('jikl.tmm');
});

// JSTPK

Route::get('/jstpk/fisika', function () {
    return view('jstpk.fisika');
});

Route::get('/jstpk/kelautan', function () {
    return view('jstpk.kelautan');
});

Route::get('/jstpk/perkapalan', function () {
    return view('jstpk.perkapalan');
});

Route::get('/jstpk/teknologipangan', function () {
    return view('jstpk.pangan');
});

// JTIP

Route::get('/jtip/elektro', function () {
    return view('jtip.elektro');
});

Route::get('/jtip/industri', function () {
    return view('jtip.industri');
});

Route::get('/jtip/keselamatan', function () {
    return view('jtip.keselamatan');
});

Route::get('/jtip/kimia', function () {
    return view('jtip.kimia');
});

Route::get('/jtip/mesin', function () {
    return view('jtip.mesin');
});

// JTSP

Route::get('/jtsp/sipil', function () {
    return view('jtsp.sipil');
});

Route::get('/jtsp/pwk', function () {
    return view('jtsp.pwk');
});

Route::get('/jtsp/arsitektur', function () {
    return view('jtsp.arsitektur');
});

Route::get('/jadwal', [JadwalController::class, 'index']);

// Route::get('/dashboard', function () {
//     return view('Dashboard.main');
// });

Route::get('/dashboard', [Dashboard::class, 'index']);

Route::resource('/dashboard/jadwal', DashboardJadwal::class);

Route::get('/dashboard/link', [LinkController::class, 'index']);

Route::resource('/dashboard/content', DashboardAktuaria::class);















// Route::get('/dashboard/jadwal/new', [DashboardNewJadwal::class, 'index']);
// Route::post('/dashboard/jadwal/store', [DashboardNewJadwal::class, 'store']);

// Route::get('/dashboard/jadwal/edit/{jadwal}', [DashboardEditJadwal::class, 'edit']);
// Route::post('/dashboard/jadwal/edit/update', [DashboardEditJadwal::class, 'update']);

// Route::get('/dashboard/link/edit/{link}', [LinkController::class, 'show']);
// Route::post('/dashboard/jadwal/edit/update', [DashboardEditJadwal::class, 'update']);



// Route::get('/dashboard/jadwal/new', function () {
//     return view('Dashboard.Layouts.new');
// });



// Route::get('/dashboard/jadwal/{ $jadwal->id }', function () {
//     return view('dashboard.edit');
// });

// Route::get('/dashboard/jadwal', function () {
//         return view('dashboard.jadwal');
//     });




