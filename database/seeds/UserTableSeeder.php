<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('Name', 'User')->first();
        $role_fulluser = Role::where('Name', 'Fulluser')->first();


        $user = new User();
        $user->name = 'Thomas';
        $user->email = 'thomas.roekke@gmail.com';
        $user->password = bcrypt('test123');
        $user->save();

        $user->roles()->attach($role_user);

        $fulluser = new User();
        $fulluser->name = 'Thomas1';
        $fulluser->email = 'thomas.roekke@gmail.com1';
        $fulluser->password = bcrypt('test123');
        $fulluser->save();
        $fulluser->roles()->attach($role_fulluser);
    }
}
