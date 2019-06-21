<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $admin = new App\User();
        $admin->name = 'Pepito';
        $admin->last_name = 'Perez';
        $admin->email = 'pperez@gmail.com';
        $admin->password = bcrypt('secret');
        $admin->save();
    }
}
