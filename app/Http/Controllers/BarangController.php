<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Penjualan;
use Dotenv\Result\Success;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang=Barang::paginate(5);
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penjualan=Penjualan::all();
        return view('barang.create', compact('Penjualan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request,[
            'barang_id' => 'required|string|unique:barangs',
            'namabarang' => 'required',
            'hargajual' => 'required',
            'hargabeli' => 'required',
            'satuan' => 'required',
            'kategory' => 'required'
        ]);
        Barang::create($request->except('__token'));
        return redirect(route('barang.index'))->with(['success' => 'Berhasil']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        // $barang=Barang::paginate(5);
        // return view('master', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        return view('barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        $this->validate($request, [
            'barang_id' => 'required|string',
            'namabarang' => 'required',
            'hargajual' => 'required',
            'hargabeli' => 'required',
            'satuan' => 'required',
            'kategory' => 'required'
        ]);
        $barang->update($request->except('__token'));
        return redirect(route('barang.index'))->with(['success' => 'Berhasil']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect(route('barang.index'))->with(['success' => 'Berhasil']);
    }
}
