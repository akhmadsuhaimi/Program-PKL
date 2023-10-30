<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class belanja extends Model
{
    protected $table = 'belanja';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'nama_belanja',
        'delstatus',
    ];

    public function spj()
    {
        return $this->hasMany(spj::class);
    }
}
