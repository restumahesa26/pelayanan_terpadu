<?php

namespace App\Http\Controllers;

use App\Models\KaumRenta;
use Illuminate\Http\Request;

class RentaDisabilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = KaumRenta::all();

        return view('pages.renta-disabilitas.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.renta-disabilitas.create');
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
            'link' => 'required|string'
        ];

        $customMessages = [
            'required' => 'Field :attribute wajib diisi',
            'string' => 'Field :attribute harus berupa string'
        ];

        $this->validate($request, $rules, $customMessages);

        KaumRenta::create([
            'link' => $request->link,
        ]);

        return redirect()->route('renta-disabilitas.index')->with('success', 'Berhasil Menambah Data Kaum Renta / Disabilitas');
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
        $item = KaumRenta::findOrFail($id);

        return view('pages.renta-disabilitas.edit', compact('item'));
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

        $item = KaumRenta::findOrFail($id);

        $item->update([
            'link' => $request->link,
        ]);

        return redirect()->route('renta-disabilitas.index')->with('success', 'Berhasil Mengubah Data Kaum Renta / Disabilitas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = KaumRenta::findOrFail($id);

        $item->delete();

        return redirect()->route('renta-disabilitas.index')->with('success', 'Berhasil Menghapus Data Kaum Renta / Disabilitas');
    }
}
