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

                'nama_outlet' => 'Amalaundry Bandung',
                'alamat' => 'Jl Asia Afrika Bl B Slt/40,Pejagalan',
                'kota' => 'Bandung',
                'tlp' => '021 6680414'
            ),
        ));
    }
}
