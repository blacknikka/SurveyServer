<?php

use Illuminate\Database\Seeder;

class MasterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'id' => 1,
            'type' => 'SelectOne',
            'answer' => 'A1',
        ];
        DB::table('masters')->insert($param);

        $param = [
            'id' => 1,
            'type' => 'SelectOne',
            'answer' => 'A2',
        ];
        DB::table('masters')->insert($param);

        $param = [
            'id' => 1,
            'type' => 'SelectOne',
            'answer' => 'A3',
        ];
        DB::table('masters')->insert($param);

        $param = [
            'id' => 1,
            'type' => 'SelectOne',
            'answer' => 'A4',
        ];
        DB::table('masters')->insert($param);

        $param = [
            'id' => 2,
            'type' => 'SelectOne',
            'answer' => 'B1',
        ];
        DB::table('masters')->insert($param);

        $param = [
            'id' => 2,
            'type' => 'SelectOne',
            'answer' => 'B2',
        ];
        DB::table('masters')->insert($param);

        $param = [
            'id' => 2,
            'type' => 'SelectOne',
            'answer' => 'B3',
        ];
        DB::table('masters')->insert($param);

        $param = [
            'id' => 2,
            'type' => 'SelectOne',
            'answer' => 'B4',
        ];
        DB::table('masters')->insert($param);

        $param = [
            'id' => 3,
            'type' => 'SelectMulti',
            'answer' => 'C1',
        ];
        DB::table('masters')->insert($param);

        $param = [
            'id' => 3,
            'type' => 'SelectMulti',
            'answer' => 'C2',
        ];
        DB::table('masters')->insert($param);

        $param = [
            'id' => 3,
            'type' => 'SelectMulti',
            'answer' => 'C3',
        ];
        DB::table('masters')->insert($param);

        $param = [
            'id' => 3,
            'type' => 'SelectMulti',
            'answer' => 'C4',
        ];
        DB::table('masters')->insert($param);

        $param = [
            'id' => 4,
            'type' => 'WriteAny',
            'answer' => '',
        ];
        DB::table('masters')->insert($param);

    }
}
