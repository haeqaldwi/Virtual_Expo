<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\aktuaria;

class Dashboard extends Controller
{
    //
    public function index()
    {
        return view('Dashboard.Main', [
            'jadwal'=>Jadwal::all(),
            'konten'=>aktuaria::all()
        ]);
    }
}
