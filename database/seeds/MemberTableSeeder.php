<?php

use Illuminate\Database\Seeder;

class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('member')->insert(array(
            array(
                'nik' => '1402020507110002',
                'nama_member' => 'Inge Yuliani Tan',
                'alamat_member' => 'Jl Jababeka 11 Kawasan Industri Jababeka Bl H-1/GH',
                'telp' => '021 8937461',
            ),
            array(
                'nik' => '1402025911060001',
                'nama_member' => 'Sri Fanny Kurnia',
                'alamat_member' => 'Jl Kamal Raya Outer Ring Road Ruko Galaxy Bl M/9,Cengkareng Barat',
                'telp' => '021 8936217021 8936217',
            ),
            array(
                'nik' => '1402020607084474',
                'nama_member' => 'Leony Yenny Kusnadi',
                'alamat_member' => 'Gang XV, No. 21, Bali',
                'telp' => '021 8936218',
            ),
            array(
                'nik' => '1402027112590008' ,
                'nama_member' => 'Adi Wibawa Irawan',
                'alamat_member' => 'Jl. Nusa Indah no. 1567 Trangkil',
                'telp' => '021 8936219',
            ),
        ));
    }
}
