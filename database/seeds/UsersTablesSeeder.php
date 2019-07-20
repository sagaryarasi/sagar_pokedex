<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //  factory(App\User::class, 50)->create();
         DB::table('users')->insert([
          'name'            => 'Sagar',
          'email'           => 'sagar.ymh@gmail.com',
          'password'        => Hash::make('password'),
          'remember_token'  => str_random(10)
        ])
    }
}
