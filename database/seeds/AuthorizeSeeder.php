<?php

use Illuminate\Database\Seeder;
// use Sentinel;

class AuthorizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = [
            "slug" => "admin",
            "name" => "Admin",
            "permissions" => [
                "admin" => true
            ]
        ];

        // Sentinel::getRoleRepository()->createModel()->fill($role_admin)->save();

        $adminrole = Sentinel::findRoleByName('Admin');

        $user_admin = [
            "first_name" => "M",
            "last_name" => "Admin",
            "email" => "madmin@mail.com",
            "password" => "12345678"
        ];

        // $adminuser = Sentinel::registerAndActivate($user_admin);

        // $adminuser->roles()->attach($adminrole);

        $role_writer = [
            "slug" => "writer",
            "name" => "Writer",
            "permissions" => [
                "article.index" => true,
                "article.create" => true,
                "article.store" => true,
                "article.show" => true,
                "article.edit" => true,
                "article.update" => true,
            ]
        ];

        Sentinel::getRoleRepository()->createModel()->fill($role_writer)->save();

        $writerrole = Sentinel::findRoleByName('Writer');

        $writeruser = [
            "first_name" => "Oda",
            "last_name" => "E",
            "email" => "oda@mail.com",
            "password" => "12345678",
        ];

        $writeruser = Sentinel::registerAndActivate($writeruser);

        $writeruser->roles()->attach($writerrole);
    }
}
