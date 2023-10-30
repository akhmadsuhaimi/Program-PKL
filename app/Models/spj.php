<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spj extends Model
{
    protected $table = 'spj';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'kode_program',
        'pptk',
        'bagian_id',
        'program',
        'kegiatan',
        'sub_kegiatan',
        'belanja_id',
        'tgl',
        'status',
        'delstatus',
    ];

    public function belanja()
    {
        return $this->belongsTo(belanja::class, "belanja_id");
    }

    public function bagian()
    {
        return $this->belongsTo(bagian::class, "bagian_id");
    }

    public function dokumen()
    {
        return $this->hasMany(Dokumen::class, 'spj_id'); // 'spj_id' disesuaikan dengan nama kolom kunci asing yang sesuai di tabel dokumen
    }

    // Menambahkan fungsi untuk memeriksa apakah program memiliki dokumen terkait
    public function hasDocument()
    {
        return $this->dokumen->isNotEmpty(); // Mengembalikan nilai true jika program memiliki dokumen, dan false jika tidak
    }
}
