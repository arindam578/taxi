<?php

use Illuminate\Database\Seeder;

class HospitalerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hospitalers')->truncate();
        DB::table('hospitalers')->insert([
            'name' => 'Demo',
            'email' => 'demo@appoets.com',
            'password' => bcrypt('123456'),
        ],[
            'name' => 'Demo',
            'email' => 'demo@demo.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
