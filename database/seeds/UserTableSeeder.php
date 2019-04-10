<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->id =1;
        $user->name ="admin";
        $user->email ="admin@gmail.com";
        $user->password =bcrypt("123456");
        $user->address ="Ha noi";
        $user->phone ="0123456789";
        $user->image ="";
        $user->role = \App\Http\Controllers\RoleConstant::ADMIN;

    }
}
