<?php

namespace App\Http\Controllers;

use App\Models\PengajuanBarang;
use App\Http\Requests\StorePengajuanBarangRequest;
use App\Http\Requests\UpdatePengajuanBarangRequest;

class PengajuanBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['pengajuan_barang'] = PengajuanBarang ::get();
        return view('pengajuanbarang.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePengajuanBarangRequest $request)
    {
        PengajuanBarang::create($request->all());
        return redirect('barang')->with("success", 'data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(PengajuanBarang $pengajuanBarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PengajuanBarang $pengajuanBarang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePengajuanBarangRequest $request,$pengajuanBarang)
    {


        $validate = $request->validated();
        PengajuanBarang::where('id', $pengajuanBarang)->update($validate);

        return redirect('barang')->with("success", 'data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $pengajuanBarang)
    {
        PengajuanBarang::where('id', $pengajuanBarang)->delete();
        return redirect('barang')->with("success", 'data berhasil di hapus');
    }
}
