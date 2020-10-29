<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $tabel = 'transaksi';
    protected $fillable = (['id_outlet','kode_invoice','id_member','tanggal','batas_waktu','tgl_bayar','biaya_tambahan','diskon','pajak','status','dibayar']);
}
