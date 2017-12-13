<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name'     => 'Nghiêm minh hoàng',
            'email'    => 'hoangnm@ows.vn',
            'password' => Hash::make('123123'),
        ));
    }
}
