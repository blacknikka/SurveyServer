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
        DB::table('tex_ids')->insert([
            'id' => 0,
            'answer' => 'sample tex',
        ]);
        DB::table('tex_ids')->insert([
            'id' => 1,
            'answer' => 'sample aaaa',
        ]);
    }
}
