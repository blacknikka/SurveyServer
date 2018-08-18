<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ResultTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cur = Carbon::now()->format('Y-m-d H:i:s');

        DB::table('result')->insert([
            'ID' => 1,
            'No' => 1,
            'Answer' => 0,
            'Tex_ID' => null,
            'created_at' => $cur,
            'updated_at' => $cur,
        ]);

        DB::table('result')->insert([
            'ID' => 1,
            'No' => 2,
            'Answer' => 1,
            'Tex_ID' => null,
            'created_at' => $cur,
            'updated_at' => $cur,
        ]);

        DB::table('result')->insert([
            'ID' => 1,
            'No' => 3,
            'Answer' => 0,
            'Tex_ID' => null,
            'created_at' => $cur,
            'updated_at' => $cur,
        ]);

        DB::table('result')->insert([
            'ID' => 1,
            'No' => 3,
            'Answer' => 3,
            'Tex_ID' => null,
            'created_at' => $cur,
            'updated_at' => $cur,
        ]);

        DB::table('result')->insert([
            'ID' => 1,
            'No' => 4,
            'Answer' => null,
            'Tex_ID' => 0,
            'created_at' => $cur,
            'updated_at' => $cur,
        ]);

    }
}
