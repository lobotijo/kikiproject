<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KasMasuk extends Model
{
    use HasFactory;
    protected $table='kas_masuk';
    protected $id='id';
    protected $fillable=['kode_akun','sumber','tgl_kas_masuk','debit','kredit','keterangan'];
    
}
