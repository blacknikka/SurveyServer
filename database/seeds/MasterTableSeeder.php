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
            'No' => 1,
            'Type' => 'SelectOne',
            'Answer' => 'A1',
        ];
        DB::table('master')->insert($param);

        $param = [
            'No' => 1,
            'Type' => 'SelectOne',
            'Answer' => 'A2',
        ];
        DB::table('master')->insert($param);

        $param = [
            'No' => 1,
            'Type' => 'SelectOne',
            'Answer' => 'A3',
        ];
        DB::table('master')->insert($param);

        $param = [
            'No' => 1,
            'Type' => 'SelectOne',
            'Answer' => 'A4',
        ];
        DB::table('master')->insert($param);

        $param = [
            'No' => 2,
            'Type' => 'SelectOne',
            'Answer' => 'B1',
        ];
        DB::table('master')->insert($param);

        $param = [
            'No' => 2,
            'Type' => 'SelectOne',
            'Answer' => 'B2',
        ];
        DB::table('master')->insert($param);

        $param = [
            'No' => 2,
            'Type' => 'SelectOne',
            'Answer' => 'B3',
        ];
        DB::table('master')->insert($param);

        $param = [
            'No' => 2,
            'Type' => 'SelectOne',
            'Answer' => 'B4',
        ];
        DB::table('master')->insert($param);

        $param = [
            'No' => 3,
            'Type' => 'SelectMulti',
            'Answer' => 'C1',
        ];
        DB::table('master')->insert($param);

        $param = [
            'No' => 3,
            'Type' => 'SelectMulti',
            'Answer' => 'C2',
        ];
        DB::table('master')->insert($param);

        $param = [
            'No' => 3,
            'Type' => 'SelectMulti',
            'Answer' => 'C3',
        ];
        DB::table('master')->insert($param);

        $param = [
            'No' => 3,
            'Type' => 'SelectMulti',
            'Answer' => 'C4',
        ];
        DB::table('master')->insert($param);

        $param = [
            'No' => 4,
            'Type' => 'WriteAny',
            'Answer' => '',
        ];
        DB::table('master')->insert($param);

    }
}
