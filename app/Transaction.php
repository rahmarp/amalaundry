<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Transaction extends Model
{
    protected $tabel = 'transaksi';
    protected $fillable = (['id_outlet','kode_invoice','id_member','tanggal','batas_waktu','tgl_bayar','biaya_tambahan','diskon','pajak','status','dibayar']);

    public function paket()
    {
        return $this->belongsTo('App\Paket');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function member()
    {
        return $this->belongsTo('App\Member');
    }

    public function detailtransaction()
    {
        return $this->belongsTo('App\DetailTransaction');
    }
    public function getAutoNumberOptions()
    {
        return [
            'kode_invoice' => [
                'format' => function () {
                    return date('Ymd') . Auth::user()->id_outlet;
                },
                'length' => 4
            ]
        ];
    }
}
