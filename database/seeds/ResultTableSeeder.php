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

        DB::table('results')->insert([
            'id' => 1,
            'no' => 1,
            'answer' => 0,
            'tex_id' => null,
            'created_at' => $cur,
            'updated_at' => $cur,
        ]);

        DB::table('results')->insert([
            'id' => 1,
            'no' => 2,
            'answer' => 1,
            'tex_id' => null,
            'created_at' => $cur,
            'updated_at' => $cur,
        ]);

        DB::table('results')->insert([
            'id' => 1,
            'no' => 3,
            'answer' => 0,
            'tex_id' => null,
            'created_at' => $cur,
            'updated_at' => $cur,
        ]);

        DB::table('results')->insert([
            'id' => 1,
            'no' => 3,
            'answer' => 3,
            'tex_id' => null,
            'created_at' => $cur,
            'updated_at' => $cur,
        ]);

        DB::table('results')->insert([
            'id' => 1,
            'no' => 4,
            'answer' => null,
            'tex_id' => 2,
            'created_at' => $cur,
            'updated_at' => $cur,
        ]);

    }
}
