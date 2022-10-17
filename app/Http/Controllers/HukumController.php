<?php

namespace App\Http\Controllers;

use App\Models\Hukum;
use Illuminate\Http\Request;

class HukumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Hukum::all();

        return view('pages.hukum.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.hukum.create');
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
            'jenis' => 'unique:hukum'
        ];

        $customMessages = [
            'required' => 'Field :attribute wajib diisi',
            'string' => 'Field :attribute harus berupa string'
        ];

        $this->validate($request, $rules, $customMessages);

        Hukum::create([
            'jenis' => $request->jenis,
            'link' => $request->link,
        ]);

        return redirect()->route('hukum.index')->with('success', 'Berhasil Menambah Data Hukum');
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
        $item = Hukum::findOrFail($id);

        return view('pages.hukum.edit', compact('item'));
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

        $item = Hukum::findOrFail($id);

        $item->update([
            'jenis' => $request->jenis,
            'link' => $request->link,
        ]);

        return redirect()->route('hukum.index')->with('success', 'Berhasil Mengubah Data Hukum');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Hukum::findOrFail($id);

        $item->delete();

        return redirect()->route('hukum.index')->with('success', 'Berhasil Menghapus Data Hukum');
    }
}
