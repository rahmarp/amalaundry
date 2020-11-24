<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            array(
                'id_outlet' => 1,
                'name' => 'Rahma Admin',
                'email' => 'superadmin@email.com',
                'password' => bcrypt('admin'),
                'role' => 'superadmin',
            ),
            array(
                'id_outlet' => 1,
                'name' => 'Tirto Hadian Indradjaja',
                'email' => 'owner@email.com',
                'password' => bcrypt('admin'),
                'role' => 'owner',
            ),
            array(
                'id_outlet' => 1,
                'name' => 'Sinta Sari Sugiarto',
                'email' => 'kasir1@email.com',
                'password' => bcrypt('admin'),
                'role' => 'kasir',
            ),
        ));
    }
}
