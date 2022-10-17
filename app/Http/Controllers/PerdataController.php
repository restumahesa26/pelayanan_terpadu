<?php

namespace App\Http\Controllers;

use App\Models\Perdata;
use Illuminate\Http\Request;

class PerdataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Perdata::all();

        return view('pages.perdata.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.perdata.create');
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
            'jenis' => 'unique:perdata'
        ];

        $customMessages = [
            'required' => 'Field :attribute wajib diisi',
            'string' => 'Field :attribute harus berupa string'
        ];

        $this->validate($request, $rules, $customMessages);

        Perdata::create([
            'jenis' => $request->jenis,
            'link' => $request->link,
        ]);

        return redirect()->route('perdata.index')->with('success', 'Berhasil Menambah Data Perdata');
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
        $item = Perdata::findOrFail($id);

        return view('pages.perdata.edit', compact('item'));
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

        $item = Perdata::findOrFail($id);

        $item->update([
            'jenis' => $request->jenis,
            'link' => $request->link,
        ]);

        return redirect()->route('perdata.index')->with('success', 'Berhasil Mengubah Data Perdata');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Perdata::findOrFail($id);

        $item->delete();

        return redirect()->route('perdata.index')->with('success', 'Berhasil Menghapus Data Perdata');
    }
}
