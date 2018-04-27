<?php
use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = new Role();
        $role_user->name = 'User';
        $role_user->description = 'normal user limited to 6 tries on the quiz';
        $role_user->save();

        $role_fulluser = new Role();
        $role_fulluser->name = 'Fulluser';
        $role_fulluser->description = 'User with unlimited access';
        $role_fulluser->save();
    }
}
