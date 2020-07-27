<?php

use Illuminate\Database\Seeder;

class Leave_typesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('leave_types')->insert([
            [
                'created_at' => \Carbon\Carbon::now(),
                'name' => 'Sick Leave',
            ],

            [
                'created_at' => \Carbon\Carbon::now(),
                'name' => 'Annual Leave',
            ],

            [
                'created_at' => \Carbon\Carbon::now(),
                'name' => 'Maternity Leave',
            ],
            [
                'created_at' => \Carbon\Carbon::now(),
                'name' => 'Special Leave',
            ],
            [
                'created_at' => \Carbon\Carbon::now(),
                'name' => 'Study Leave',
            ],
            [
                'created_at' => \Carbon\Carbon::now(),
                'name' => 'Sabbatical Leave',
            ],
            [
                'created_at' => \Carbon\Carbon::now(),
                'name' => 'Leave of Absence',
            ],

        ]);
    }
}
