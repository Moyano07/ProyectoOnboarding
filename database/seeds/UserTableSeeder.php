<?php

use App\User;
use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(User::class,10)->create();

        $user = new User();
        $user->email = 'javier@uniway.com';
        $user->name = 'Javier';
        $user->password = bcrypt('12345678'); // password
        $user->remember_token  = Str::random(10);

        $user->roles()->attach(Role::where('name', 'USER')->first());

        $user->save();


        $user = new User();
        $user->email = 'admin@uniway.com';
        $user->name = 'Admin';
        $user->password = bcrypt('12345678'); // password
        $user->remember_token  = Str::random(10);

        $user->roles()->attach(Role::where('name', 'ADMIN')->first());

        $user->save();
    }
}
