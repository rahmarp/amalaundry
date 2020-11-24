<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    protected $table = 'outlet';
    protected $fillable = (['nama_outlet','alamat','kota','tlp']);
    
    public function paket()
    {
        return $this->hasMany('App\Paket');
    }
    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function transaction()
    {
        return $this->hasOne('App\Transaction');
    }
}
