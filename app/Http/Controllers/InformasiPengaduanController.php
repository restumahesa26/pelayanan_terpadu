<?php

namespace App\Http\Controllers;

use App\Models\InformasiPengaduan;
use Illuminate\Http\Request;

class InformasiPengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = InformasiPengaduan::get();

        return view('pages.informasi-pengaduan.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.informasi-pengaduan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'link' => 'required|string',
            'jenis' => 'unique:informasi'
        ];

        $customMessages = [
            'required' => 'Field :attribute wajib diisi',
            'string' => 'Field :attribute harus berupa string'
        ];

        $this->validate($request, $rules, $customMessages);

        InformasiPengaduan::create([
            'jenis' => $request->jenis,
            'link' => $request->link,
        ]);

        return redirect()->route('informasi-pengaduan.index')->with('success', 'Berhasil Menambah Data Informasi dan Pengaduan');
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
        $item = InformasiPengaduan::findOrFail($id);

        return view('pages.informasi-pengaduan.edit', compact('item'));
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
        $rules = [
            'link' => 'required|string'
        ];

        $customMessages = [
            'required' => 'Field :attribute wajib diisi',
            'string' => 'Field :attribute harus berupa string'
        ];

        $this->validate($request, $rules, $customMessages);

        $item = InformasiPengaduan::findOrFail($id);

        $item->update([
            'jenis' => $request->jenis,
            'link' => $request->link,
        ]);

        return redirect()->route('informasi-pengaduan.index')->with('success', 'Berhasil Mengubah Data Informasi dan Pengaduan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = InformasiPengaduan::findOrFail($id);

        $item->delete();

        return redirect()->route('informasi-pengaduan.index')->with('success', 'Berhasil Menghapus Data Informasi dan Pengaduan');
    }
}
