<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Satuan extends Model
{
    protected $table = 'satuans';

    protected $fillable = [
        'nama_satuan',
        'singkatan',
    ];

    public function barangs(): HasMany
    {
        return $this->hasMany(Barang::class, 'satuan_id');
    }
}
