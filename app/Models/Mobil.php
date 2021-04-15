<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mobil extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function penjualan()
    {
        return $this->hasMany('App\Models\Penjualan');
    }

}
