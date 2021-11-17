<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat admin role
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin Larapus";
        $adminRole->save();

        //membuat member role
        $memberRole = new Role();
        $memberRole->name = "member";
        $memberRole->display_name = "Member Larapus";
        $memberRole->save();

        //membuat sempel admin
        $useradmin = new User();
        $useradmin->name = "User";
        $useradmin->email = "adminlarapus@gmail.com";
        $useradmin->password = bcrypt("rahasia");
        $useradmin->save();
        $useradmin->attachRole($adminRole);

        //membuat sempel member
        $usermember = new User();
        $usermember->name = "User";
        $usermember->email = "member@gmail.com";
        $usermember->password = bcrypt("rahasia");
        $usermember->save();
        $usermember->attachRole($memberRole);

    }
}
