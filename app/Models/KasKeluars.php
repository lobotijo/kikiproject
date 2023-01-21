<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KasKeluars extends Model
{
    use HasFactory;
    protected $id='id';
    protected $table='kas_keluar';
    protected $fillable=[                   
                        'id',            
                        'kode_akun'     ,
                        'nama_transaksi',
                        'tgl_kas_keluar',
                        'debit'         ,
                        'kredit'        ,
                        'saldo'         ,
                        'keterangan'    
    ];
}
