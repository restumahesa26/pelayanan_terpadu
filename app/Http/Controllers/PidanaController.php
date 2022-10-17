<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Pidana;
use Illuminate\Http\Request;

class PidanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Pidana::all();

        return view('pages.pidana.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.pidana.create');
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
            'jenis' => 'unique:pidana'
        ];

        $customMessages = [
            'required' => 'Field :attribute wajib diisi',
            'string' => 'Field :attribute harus berupa string'
        ];

        $this->validate($request, $rules, $customMessages);

        Pidana::create([
            'jenis' => $request->jenis,
            'link' => $request->link,
        ]);

        return redirect()->route('pidana.index')->with('success', 'Berhasil Menambah Data Pidana');
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
        $item = Pidana::findOrFail($id);

        return view('pages.pidana.edit', compact('item'));
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

        $item = Pidana::findOrFail($id);

        $item->update([
            'jenis' => $request->jenis,
            'link' => $request->link,
        ]);

        return redirect()->route('pidana.index')->with('success', 'Berhasil Mengubah Data Pidana');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Pidana::findOrFail($id);

        $item->delete();

        return redirect()->route('pidana.index')->with('success', 'Berhasil Menghapus Data Pidana');
    }
}
