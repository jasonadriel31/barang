<?php

namespace App\Http\Controllers;

use App\Barang;
use App\LogBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('barang.addbarang');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama' => 'required|string|max:45',
            'harga' => 'required|integer|min:13',
            'stok' => 'required|integer|min:10',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.addbarang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validator($request->all())->validate();
        $barang = new Barang();
        $barang->nama = $request->get('nama');
        $barang->harga = $request->get('harga');
        $barang->stok = $request->get('stok');

        $barang->save();

        $log = new LogBarang();
        $log->aksi = "ADD";
        $log->detail = "Tambah barang ".$barang->nama;
        $log->user_id = Auth::user()->id;
        $log->barang_id = $barang->id;

        $log->save();

        return redirect('/home')->with('success', "Barang '$barang->name' berhasil ditambahkan.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        return view('barang.editbarang',compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validator($request->all())->validate();
        $barang = Barang::find($id);

        $log = new LogBarang();
        $log->aksi = "EDIT";
        $log->detail = "Edit barang Nama: ".$barang->nama."->".$request->get('nama').", Harga: ".$barang->harga."->".$request->get('harga'). ", Stok: ".$barang->stok."->".$request->get('stok');
        $log->user_id = Auth::user()->id;
        $log->barang_id = $barang->id;

        $barang->nama = $request->get('nama');
        $barang->harga = $request->get('harga');
        $barang->stok = $request->get('stok');

        $barang->save();
        $log->save();

        return redirect('/home')->with('success', "Barang '$barang->name' berhasil diubah.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        $barang = Barang::find($barang->id);
        $barang->delete();

        $log = new LogBarang();
        $log->aksi = "DELETE";
        $log->detail = "Menghapus barang ".$barang->nama;
        $log->user_id = Auth::user()->id;
        $log->barang_id = $barang->id;

        $log->save();
        
        return redirect('/home')->with('success', "Barang '$barang->nama' has been deleted.");
    }
}
