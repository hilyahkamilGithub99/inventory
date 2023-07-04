<?php

namespace App\Http\Controllers;

use App\Models\Hp;
use Illuminate\Http\Request;

class HpControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{

    $hp = Hp::latest()->paginate(5);
    return view ('hp.index',compact('hp'))->with('i', (request()->input('page', 1) -1) * 5);

}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hp.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nm_hp' => 'required',
            'jenis' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);
        Hp::create($request->all());

        return redirect()->route('hp.index')->with('succes','Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Hp $hp)
    {
        return view('hp.show',compact('hp'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Hp $hp)
    {
        return view('hp.edit', compact('hp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hp $hp)
    {
        $request->validate([
            'nm_hp' => 'required',
            'jenis' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);

        $hp->update($request->all());

        return redirect()->route('hp.index')
        ->with('succes','Data Handphone Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hp $hp)
    {
        $hp->delete();

        return redirect()->route('hp.index')
        ->with('succes','Data Berhasil di Hapus'); 
    }
}
