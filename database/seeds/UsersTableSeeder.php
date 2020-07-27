<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'created_at' => \Carbon\Carbon::now(),
                'username' => 'jamesok',
                'image' => '',
                'first_name' => 'James',
                'last_name' => 'Kambanga',
                'role' => 'admin',
                'email' => 'kingjamesok2@gmail.com',
                'password' => bcrypt('super1234'),
                'status' => '1',
                'phone' => '9866567794',
                'address' => 'Mazimbu',
                'gender' => 'male',
                'dob' => '1987-03-12',
                'join_date' => '2019-03-12',
                'job_type' => 'programmer',
                'city' => 'Morogoro',
                'age' => '32',
            ],
            [
                'created_at' => \Carbon\Carbon::now(),
                'username' => 'Alice',
                'image' => '',
                'first_name' => 'Alice',
                'last_name' => 'Thadeus',
                'role' => 'employee',
                'email' => 'aliciahlub6@gmail.com',
                'password' => bcrypt('staff1234'),
                'status' => '1',
                'phone' => '986133131',
                'address' => 'Msamvu',
                'gender' => 'female',
                'dob' => '1985-03-12',
                'join_date' => '2019-03-12',
                'job_type' => 'law',
                'city' => 'Morogoro',
                'age' => '35',
            ],

            [
                'created_at' => \Carbon\Carbon::now(),
                'username' => 'Samson',
                'image' => '',
                'first_name' => 'Myete',
                'last_name' => 'Samson',
                'role' => 'employee',
                'email' => 'samsonmyete@gmail.com',
                'password' => bcrypt('staff1234'),
                'status' => '1',
                'phone' => '9866454562',
                'address' => 'Mazimbu',
                'gender' => 'male',
                'dob' => '1994-03-12',
                'join_date' => '2019-03-12',
                'job_type' => 'Developer',
                'city' => 'Morogoro',
                'age' => '25',
            ],

            [
                'created_at' => \Carbon\Carbon::now(),
                'username' => 'trezia',
                'image' => '',
                'first_name' => 'Trezia',
                'last_name' => 'Nzunda',
                'role' => 'employee',
                'email' => 'nzundatrezia@gmail.com',
                'password' => bcrypt('staff1234'),
                'status' => '1',
                'phone' => '9866567794',
                'address' => 'Mbozi',
                'gender' => 'female',
                'dob' => '1996-03-12',
                'join_date' => '2019-03-12',
                'job_type' => 'Designer',
                'city' => 'Mbeya',
                'age' => '25',
            ],

            [
                'created_at' => \Carbon\Carbon::now(),
                'username' => 'edgar',
                'image' => '',
                'first_name' => 'Edgar',
                'last_name' => 'Kambanga',
                'role' => 'employee',
                'email' => 'edgarkambanga@gmail.com',
                'password' => bcrypt('staff1234'),
                'status' => '1',
                'phone' => '9866567794',
                'address' => 'msamala',
                'gender' => 'male',
                'dob' => '1995-03-12',
                'join_date' => '2019-03-12',
                'job_type' => 'engineer',
                'city' => 'Songea',
                'age' => '25',
            ],
        ]);
    }
}
