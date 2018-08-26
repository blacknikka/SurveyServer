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
        $this->call(MasterTableSeeder::class);
        $this->call(TexIDTableSeeder::class);
        $this->call(ResultTableSeeder::class);
    }
}
