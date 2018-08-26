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
            'answer' => 'sample tex',
        ]);
        DB::table('tex_ids')->insert([
            'answer' => 'sample aaaa',
        ]);
    }
}
