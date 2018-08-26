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
            'value' => 0,
        ];
        DB::table('masters')->insert($param);

        $param = [
            'id' => 1,
            'type' => 'SelectOne',
            'answer' => 'A2',
            'value' => 1,
        ];
        DB::table('masters')->insert($param);

        $param = [
            'id' => 1,
            'type' => 'SelectOne',
            'answer' => 'A3',
            'value' => 2,
        ];
        DB::table('masters')->insert($param);

        $param = [
            'id' => 1,
            'type' => 'SelectOne',
            'answer' => 'A4',
            'value' => 3,
        ];
        DB::table('masters')->insert($param);

        $param = [
            'id' => 2,
            'type' => 'SelectOne',
            'answer' => 'B1',
            'value' => 0,
        ];
        DB::table('masters')->insert($param);

        $param = [
            'id' => 2,
            'type' => 'SelectOne',
            'answer' => 'B2',
            'value' => 1,
        ];
        DB::table('masters')->insert($param);

        $param = [
            'id' => 2,
            'type' => 'SelectOne',
            'answer' => 'B3',
            'value' => 2,
        ];
        DB::table('masters')->insert($param);

        $param = [
            'id' => 2,
            'type' => 'SelectOne',
            'answer' => 'B4',
            'value' => 3,
        ];
        DB::table('masters')->insert($param);

        $param = [
            'id' => 3,
            'type' => 'SelectMulti',
            'answer' => 'C1',
            'value' => 0,
        ];
        DB::table('masters')->insert($param);

        $param = [
            'id' => 3,
            'type' => 'SelectMulti',
            'answer' => 'C2',
            'value' => 1,
        ];
        DB::table('masters')->insert($param);

        $param = [
            'id' => 3,
            'type' => 'SelectMulti',
            'answer' => 'C3',
            'value' => 2,
        ];
        DB::table('masters')->insert($param);

        $param = [
            'id' => 3,
            'type' => 'SelectMulti',
            'answer' => 'C4',
            'value' => 3,
        ];
        DB::table('masters')->insert($param);

        $param = [
            'id' => 4,
            'type' => 'WriteAny',
            'answer' => '',
            'value' => null,
        ];
        DB::table('masters')->insert($param);

    }
}
