<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembeli;


class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor = 1;
        $pembeli = Pembeli::all();
        return view('pembeli.index',compact('nomor','pembeli'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembeli.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pembeli = new Pembeli;

        $pembeli->nama =$request->nama;
        $pembeli->hp =$request->hp;
        $pembeli->alamat =$request->alamat;
        $pembeli->save();

        return redirect('/pembeli');
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
        $pembeli = pembeli::find($id);
        return view('pembeli.edit',compact('pembeli'));
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
        $pembeli = Pembeli::find($id);

        $pembeli->nama =$request->nama;
        $pembeli->hp =$request->hp;
        $pembeli->alamat =$request->alamat;
        $pembeli->save();

        return redirect('/pembeli');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembeli = Pembeli::find($id);
        $pembeli->delete();

        return redirect('/pembeli');
    }
}
