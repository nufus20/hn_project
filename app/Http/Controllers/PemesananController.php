<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor = 1;
        $pemesanan = Pemesanan::all();
        return view('pemesanan.index',compact('nomor','pemesanan'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pemesanan.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pemesanan = new Pemesanan;

        $pemesanan->tgl_pemesanan =$request->tgl_pemesanan;
        $pemesanan->biaya =$request->biaya;
        $pemesanan->id_pembeli =$request->id_pembeli;
        $pemesanan->jumlah=$request->jumlah;
        $pemesanan->id_barang =$request->id_barang;
        $pemesanan->tgl_selesai =$request->tgl_selesai;
        $pemesanan->save();

        return redirect('/pemesanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pemesanan = Pemesanan::find($id);
        return view('pemesanan.edit',compact('pemesanan'));
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
        $pemesanan = Pemesanan::find($id);

        $pemesanan->tgl_pemesanan =$request->tgl_pemesanan;
        $pemesanan->biaya =$request->biaya;
        $pemesanan->id_pembeli =$request->id_pembeli;
        $pemesanan->jumlah=$request->jumlah;
        $pemesanan->id_barang =$request->id_barang;
        $pemesanan->tgl_selesai =$request->tgl_selesai;
        $pemesanan->save();

        return redirect('/pemesanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pemesanan = Pemesanan::find($id);
        $pemesanan->delete();

        return redirect('/pemesanan');
    }
}
