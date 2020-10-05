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
                'id_outlet' => 2,
                'nama_paket' => '1 Kiloan',
                'jenis' => 'kiloan',
                'harga' => 6500
            ),
            array(
                'id_outlet' => 2,
                'nama_paket' => 'Bed Cover Besar',
                'jenis' => 'bed_cover',
                'harga' => 12000
            ),
            array(
                'id_outlet' => 3,
                'nama_paket' => '1 Kiloan',
                'jenis' => 'kiloan',
                'harga' => 7500
            ),
            array(
                'id_outlet' => 3,
                'nama_paket' => 'Karpet Besar',
                'jenis' => 'karpet',
                'harga' => 20000
            ),
        ));
    }
}
