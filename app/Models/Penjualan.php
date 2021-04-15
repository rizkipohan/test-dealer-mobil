<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penjualan extends Model
{
    use HasFactory;
    use softDeletes;

    protected $guarded = [];

    public function mobil()
    {
        return $this->belongsTo('App\Models\Mobil','mobil_id');
    }

}
