<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailTransaction extends Model
{
    protected $table = 'detailtransaction';
    protected $fillable = (['id_transaction','id_paket','qty','ket']);

    public function transaction()
    {
        return $this->belongsTo('App\Transaction');
    }
}
