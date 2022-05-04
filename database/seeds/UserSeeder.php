<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert(

            [
                'name' => 'Tutor Bravo',
                'email' => 'catana.ion17@mail.ru',
                'password' => Hash::make('12345')
            ]
        );
    }
}
