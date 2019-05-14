<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $buku=\App\Buku::all();
      return view('index',compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $buku= new \App\Buku;
      $buku->judul=$request->get('judul');
      $buku->penerbit=$request->get('penerbit');
      $buku->tahun_terbit=$request->get('tahun_terbit');
      $buku->pengarang=$request->get('pengarang');
      $buku->save();

      return redirect('buku')->with('success', 'Information has been added');
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
      $buku = \App\Buku::find($id);
      return view('edit',compact('buku','id'));
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
      $buku= \App\Buku::find($id);
      $buku->judul=$request->get('judul');
      $buku->penerbit=$request->get('penerbit');
      $buku->tahun_terbit=$request->get('tahun_terbit');
      $buku->pengarang=$request->get('pengarang');
      $buku->save();
      return redirect('buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $buku = \App\Buku::find($id);
      $buku->delete();
      return redirect('buku')->with('success','Information has been  deleted');
    }
}
