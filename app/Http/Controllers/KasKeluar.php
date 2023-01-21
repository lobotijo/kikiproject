<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KasKeluars;

class KasKeluar extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kask=KasKeluars::all();
        return view('kaskeluar.index',[
            'kask'=>$kask,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kaskeluar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            KasKeluars::create([
                'kode_akun'=>$request->kode_akun,
                'nama_transaksi'=>$request->nama_transaksi,
                'tgl_kas_keluar'=>$request->tgl_kas_keluar,
                'kredit'=>$request->kredit,
                // 'saldo'=>(double)$request->debit-(double)$request->kredit,
                'keterangan'=>$request->keterangan,
            ]);
            return redirect()->route('kask.index');
        } catch (\Throwable $th) {
            //throw $th;
            return $th->getMessage();
        
    }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
