<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Supplier extends Model
{
    protected $table = 'suppliers';

    protected $fillable = [
        'nama_supplier',
        'telepon',
        'email',
        'alamat',
    ];

    public function barangs(): HasMany
    {
        return $this->hasMany(Barang::class, 'supplier_id');
    }
}
