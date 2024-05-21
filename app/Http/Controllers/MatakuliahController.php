<?php

namespace App\Http\Controllers;

use App\Models\matakuliah;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return  view("matakuliah.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    matakuliah::create([
        'nama_matakuliah'=> $request->nama_matakuliah,
        'hari'=> $request->hari,
        'mulai_kelas'=>$request->mulai_kelas,
        'akhir_kelas'=>$request->akhir_kelas,
        'sks_matakuliah'=>$request->sks_matakuliah,
        'ruang_kelas'=>$request->ruang_kelas,
        'dosen_id'=>$request->dosen_id,
    ]);

    return redirect(route("dosen.index"));
    }

    /**
     * Display the specified resource.
     */
    public function show(matakuliah $matakuliah)
    {
        return view("matakuliah.show", compact("matakuliah"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(matakuliah $matakuliah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, matakuliah $matakuliah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(matakuliah $matakuliah)
    {
        //
    }
}
