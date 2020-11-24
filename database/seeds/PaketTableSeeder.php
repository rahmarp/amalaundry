<?php

use Illuminate\Database\Seeder;

class PaketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paket')->insert(array(
            array(
                'id_outlet' => 1,
                'nama_paket' => 'Paket Kiloan 1',
                'jenis' => 'Kiloan',
                'harga' => 6500
            ),
            array(
                'id_outlet' => 1,
                'nama_paket' => 'Paket Kiloan 2',
                'jenis' => 'Kiloan',
                'harga' => 13000
            ),
            array(
                'id_outlet' => 1,
                'nama_paket' => 'Bed Cover Besar',
                'jenis' => 'Bed Cover',
                'harga' => 12000
            ),
            array(
                'id_outlet' => 1,
                'nama_paket' => 'Bed Cover Kecil',
                'jenis' => 'Bed Cover',
                'harga' => 7000
            ),
            array(
                'id_outlet' => 1,
                'nama_paket' => 'Selimut Kecil',
                'jenis' => 'Selimut',
                'harga' => 7500
            ),
            array(
                'id_outlet' => 1,
                'nama_paket' => 'Selimut Besar',
                'jenis' => 'Selimut',
                'harga' => 12000
            ),
            array(
                'id_outlet' => 1,
                'nama_paket' => 'Selimut Bulu',
                'jenis' => 'Selimut',
                'harga' => 15000
            ),
            array(
                'id_outlet' => 1,
                'nama_paket' => 'Karpet Besar',
                'jenis' => 'Karpet',
                'harga' => 20000
            ),
            array(
                'id_outlet' => 1,
                'nama_paket' => 'Karpet Kecil',
                'jenis' => 'Karpet',
                'harga' => 10000
            ),
            array(
                'id_outlet' => 1,
                'nama_paket' => 'Karpet Sedang',
                'jenis' => 'Karpet',
                'harga' => 15000
            ),
            array(
                'id_outlet' => 1,
                'nama_paket' => 'Jaket Kulit',
                'jenis' => 'Dll',
                'harga' => 12000
            ),
            array(
                'id_outlet' => 1,
                'nama_paket' => 'Sepatu',
                'jenis' => 'Dll',
                'harga' => 15000
            ),
            array(
                'id_outlet' => 1,
                'nama_paket' => 'Jas',
                'jenis' => 'Dll',
                'harga' => 12000
            ),
            array(
                'id_outlet' => 1,
                'nama_paket' => 'Mukena',
                'jenis' => 'Dll',
                'harga' => 20000
            ),
        ));
    }
}
