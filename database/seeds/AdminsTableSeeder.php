<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->truncate();
        DB::table('admins')->insert([
            'name' => 'vikas kumar',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
        ],[
            'name' => 'Sen Verma',
            'email' => 'sen@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
