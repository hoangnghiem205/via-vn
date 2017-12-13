<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        Admin::create(array(
            'name'     => 'Administrator',
            'email'    => 'admin@via-vn.com',
            'job_title'    => 'Administrator',
            'password' => Hash::make('123123'),
        ));
    }
}
