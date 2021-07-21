<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\User;
use Illuminate\Support\Facades\Validator;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user['listUser'] = Produk::all();
        return view('produk')->with($user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());die();

        $fileName = '';
        if($request->gambar->getClientOriginalName()){
            $file = str_replace(' ', '', $request->gambar->getClientOriginalName());
            $fileName = date('mYdHs').rand(1,999).'_'.$file;
            $request->gambar->storeAs('public/produk', $fileName);
        }

        $user = Produk::create(array_merge($request->all(), [
            'gambar' => $fileName
        ]));
        return redirect('produk');
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
        $data ['id'] = Produk::findOrFail($id);
        return view('edit', $data);
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
        $update = Produk::findOrFail($id);
        $edit = $request->all();
        $validasi = Validator::make($edit, [
            'nama' => 'required|string',
            'harga' => 'required|numeric',
            'jenis' => 'required|string',
        ]);
        if($validasi->fails()){
            return redirect()->route('produk.create')->withErrors($validasi);
        }
        $update->update($edit);

        return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Produk::findOrFail($id);
        $delete->delete();
        return redirect()->route('produk.index');
    }
}