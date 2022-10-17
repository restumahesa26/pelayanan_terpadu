<?php

namespace App\Http\Controllers;

use App\Models\EPosbakum;
use App\Models\Layanan;
use Illuminate\Http\Request;

class EPosbakumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = EPosbakum::all();

        return view('pages.e-posbakum.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.e-posbakum.create');
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
            'jenis' => 'unique:posbakum'
        ];

        $customMessages = [
            'required' => 'Field :attribute wajib diisi',
            'string' => 'Field :attribute harus berupa string'
        ];

        $this->validate($request, $rules, $customMessages);

        EPosbakum::create([
            'jenis' => $request->jenis,
            'link' => $request->link,
        ]);

        return redirect()->route('e-posbakum.index')->with('success', 'Berhasil Menambah Data E-Posbakum');
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
        $item = EPosbakum::findOrFail($id);

        return view('pages.e-posbakum.edit', compact('item'));
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

        $item = EPosbakum::findOrFail($id);

        $item->update([
            'jenis' => $request->jenis,
            'link' => $request->link,
        ]);

        return redirect()->route('e-posbakum.index')->with('success', 'Berhasil Mengubah Data E-Posbakum');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = EPosbakum::findOrFail($id);

        $item->delete();

        return redirect()->route('e-posbakum.index')->with('success', 'Berhasil Menghapus Data E-Posbakum');
    }
}
