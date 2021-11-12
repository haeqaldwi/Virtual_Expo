<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class DashboardJadwal extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Dashboard.Jadwal.jadwal', [
            'event' => Jadwal::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Dashboard.Jadwal.layout.new', [
            'event' => Jadwal::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $this->validate($request, [
            'acara' => 'required',
            'jam' => 'required'
        ]);

        $j = new Jadwal();
        $j -> event = $request->input('acara');
        $j -> jam = $request->input('jam');
        $j -> save();
        // $validatedData = $request->validate([
        //     'event' => 'required|unique:event',
        //     'jam'   => 'required'
        // ]);

        // $validatedData

        // Jadwal::create($validatedData);

        return redirect('/dashboard/jadwal');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwal $jadwal)
    {
        //


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit(Jadwal $jadwal)
    {
        //
        return view('Dashboard.Jadwal.layout.edit', [
            'jadwal' => $jadwal,
            // 'event' => Jadwal::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request;
        $this->validate($request, [
            'acara' => 'required',
            'jam' => 'required'
        ]);

        $jadwal = Jadwal::find($id);
        $jadwal -> event = $request->input('acara');
        $jadwal -> jam = $request->input('jam');
        $jadwal -> save();
        // $validatedData = $request->validate([
        //     'event' => 'required',
        //     'jam'   => 'required'
        // ]);

        // Jadwal::where('id', $jadwal->id)
        // -> update($validatedData);
        return redirect('/dashboard/jadwal');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jadwal $jadwal)
    {
        //
        Jadwal::destroy($jadwal->id);
        return redirect('/dashboard/jadwal')->with('success', 'Jadwal Sudah Terhapus');
    }
}
