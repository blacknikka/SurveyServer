<?php

use Illuminate\Database\Seeder;

class PswTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('psws')->insert([
            'mail' => 'mail1@test.com',
            // password
            'psw' => '$2y$10$wXn.7ok.6afDNgvBIbUl6eS.8VEhvtcNxBpCmZjU6hRh2VIxFUfnm',
        ]);

        DB::table('psws')->insert([
            'mail' => 'mail2@test.com',
            // password2
            'psw' => '$2y$10$HBf7ccaPP4qeECXVi8c30.oZX7Yq7yFa5O7W4I1jORYBnDeOo3dlu',
        ]);
    }
}
