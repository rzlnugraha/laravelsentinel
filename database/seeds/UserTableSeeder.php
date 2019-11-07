<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_employee = Role::where('name', 'Employee')->first();
        $role_manager = Role::where('name', 'Manager')->first();

        $employee = new User();
        $employee->first_name = 'Dinda';
        $employee->last_name = 'Meilawati';
        $employee->email = 'dinda@gmail.com';
        $employee->password = bcrypt('password');
        $employee->save();
        $employee->roles()->attach($role_employee);

        $manager = new User();
        $manager->first_name = 'Mamah';
        $manager->last_name = 'Nani';
        $manager->email = 'mamah@mail.com';
        $manager->password = bcrypt('password');
        $manager->save();
        $manager->roles()->attach($role_manager);
    }
}
