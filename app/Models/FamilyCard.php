<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'no',
        'alamat',
        'rt_rw',
        'kode_pos',
        'kelurahan',
        'kecamatan',
        'kabupaten',
        'provinsi',
    ];

    public function members()
    {
        return $this->hasMany(Member::class);
    }
}
