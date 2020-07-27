<?php

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('positions')->insert([
            [
            'created_at' => \Carbon\Carbon::now(),
            'name' => 'director',
            ],

            [
                'created_at' => \Carbon\Carbon::now(),
                'name' => 'staff',
            ],

            [
                'created_at' => \Carbon\Carbon::now(),
                'name' => 'dean',
            ],
            [
                'created_at' => \Carbon\Carbon::now(),
                'name' => 'Department Head',
            ],
            [
                'created_at' => \Carbon\Carbon::now(),
                'name' => 'VC',
            ],
            [
                'created_at' => \Carbon\Carbon::now(),
                'name' => 'DVC',
            ],
            [
                'created_at' => \Carbon\Carbon::now(),
                'name' => 'HR',
            ],
            [
                'created_at' => \Carbon\Carbon::now(),
                'name' => 'lecturer',
            ],

        ]);
    }
}
