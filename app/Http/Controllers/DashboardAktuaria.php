<?php

namespace App\Http\Controllers;

use App\Models\aktuaria;
use Illuminate\Http\Request;

class DashboardAktuaria extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Dashboard.konten.jmti', [
            'konten'=>aktuaria::all()
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
        return view('Dashboard.konten.layout.new', [
            // 'konten'=>aktuaria::all()
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
        // return $request->file('gambar')->store('post-images');
        // ddd($request);

        $this->validate($request, [
            'nama'=>'required',
            'gambar'=>'image|file|max:50000|nullable'
        ]);

        // if ($request->hasfile)

        $konten = new aktuaria();
        $konten->nama = $request->input('nama');
        $konten->gambar = $request->file('gambar')->store('post-images');
        $konten->save();

        return redirect('/dashboard/content');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(aktuaria $aktuaria, $id)
    {
        //
        return view('Dashboard.konten.layout.show', [
            'kontent'=> $aktuaria,
            // 'konten'=>aktuaria::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(aktuaria $aktuaria)
    {
        //
        return view('Dashboard.konten.layout.edit', [
            'isi' => $aktuaria,
            // 'konten'    => aktuaria::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'nama'=>'required|unique:',
            'gambar'=>'image|file|max:50000'
        ]);

        $konten = aktuaria::find($id);
        $konten->nama = $request->input('nama');
        $konten->gambar = $request->file('gambar')->store('post-images');
        $konten->save();

        return redirect('/dashboard/content');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        aktuaria::destroy($id);
        return redirect('/dashboard/content');
    }
}
