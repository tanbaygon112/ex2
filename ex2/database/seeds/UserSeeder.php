<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =new User();
        $user->name = "Chanon Namkow";
        $user->email = "chanon1jp@gmail.com";
        $user->password = bcrypt("1234");
        $user->save();
    }
}
