<?php

use App\User;
use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             User::create([
            'name' => 'Gabriel',
            'email' => 'gabriel.r.a@gmail.com',
            'password' => bcrypt('12345678')
       ]);
        // Otra forma de insertar en la base de datos usuarios
       // DB::table('users')->insert([
       //     'name' => 'Gabriel',
       //     'email' => 'gabriel.r.a@gmail.com',
       //     'password' => bcrypt('12345678')
       // ]);

       factory(User::class, 10)->create();


    }
}
