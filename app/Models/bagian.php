<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bagian extends Model
{
    protected $table = 'bagian';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'nama_bagian',
        'delstatus',
    ];

    public function spj()
    {
        return $this->hasMany(spj::class);
    }
}
