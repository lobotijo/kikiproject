<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KasMasuk;

class KasMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kasm=KasMasuk::all();
        return view('kasmasuk.index',[
            'kasm'=>$kasm
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kasmasuk.input');
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
            KasMasuk::create([
                'kode_akun'=>$request->kode_akun,
                'sumber'=>$request->sumber,
                'tgl_kas_masuk'=>$request->tgl_kas_masuk,
                'debit'=>$request->debit,
                // 'saldo'=>(double)$request->debit-(double)$request->kredit,
                'keterangan'=>$request->keterangan,
            ]);
            return redirect()->route('kasm.index');
        } catch (\Throwable $th) {
            //throw $th;
            return $th->getMessage();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     **/
    
}
}