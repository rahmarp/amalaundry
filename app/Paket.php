<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table = 'paket';
    protected $fillable = (['id_outlet','nama_paket','jenis','harga']);

    public function outlet()
    {
        return $this->belongsTo('App\Outlet');
    }

}
