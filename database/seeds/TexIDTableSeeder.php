<?php

use Illuminate\Database\Seeder;

class TexIDTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tex_id')->insert([
            'ID' => 0,
            'Answer' => 'sample tex',
        ]);
    }
}
