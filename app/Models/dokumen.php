<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokumen extends Model
{
    protected $table = 'dokumen';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'program',
        'spj_id',
        'npd',
        'pernyataan',
        'stj_belanja',
        'gambar',
        'bku',
        'belanja_adm',
        'kwitansi',
        'dftr_hdr',
        'ssp',

    ];

    public function spj()
    {
        return $this->belongsTo(Spj::class, 'spj_id'); // Pastikan 'spj_id' sesuai dengan nama kolom kunci asing yang sesuai di tabel dokumen
    }

    
}
