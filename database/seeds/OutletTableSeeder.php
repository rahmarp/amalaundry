<?php

use Illuminate\Database\Seeder;

class OutletTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('outlet')->insert(array(
            array(
                'nama_outlet' => 'Pusat 1',
                'alamat' => 'Pusat',
                'kota' => 'Pusat',
                'tlp' => '021 7662022'
            ),
            array(

                'nama_outlet' => 'Bandung 1',
                'alamat' => 'Jl Asia Afrika Bl B Slt/40,Pejagalan',
                'kota' => 'Bandung',
                'tlp' => '021 6680414'
            ),
            array(
                'nama_outlet' => 'Cilandak 1',
                'alamat' => 'Jl Lebak Bulus IV 9-D RT 001/04,Cilandak Barat',
                'kota' => 'Cilandak',
                'tlp' => '021 7662022'
            ),
            array(
                'nama_outlet' => 'Jakarta 1',
                'alamat' => 'Jl Muara Karang Bl B Slt/40,Pejagalan',
                'kota' => 'Jakarta',
                'tlp' => '021 6680414'
            ),
        ));
    }
}
