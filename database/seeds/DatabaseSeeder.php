<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            MemberTableSeeder::class,
            OutletTableSeeder::class,
            PaketTableSeeder::class,
            UsersTableSeeder::class
            ]);
    }
}
