<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Metodo Insert
        DB::table('users')->insert([
        	'fullname'  => 'Jeremias Springfield',
        	'email'     => 'jeremias@gmail.com',
        	'phone'     => 320123121,
        	'birthdate' => '1970-10-05',
        	'gender'    => 'Male',
        	'address'   => 'Avenida Siempre Viva 12',
        	'role'      => 'Admin',
        	'password'  => bcrypt('admin'),
        ]);

        // Metodo ORM
        $user = new User;
        $user->fullname  = 'Homero Simpson';
        $user->email     = 'homero@gmail.com';
        $user->phone     = 320123122;
        $user->birthdate = '1980-11-15';
        $user->gender    = 'Male';
        $user->address   = 'Avenida Siempre Viva';
        $user->role      = 'Editor';
        $user->password  = bcrypt('editor');
        $user->save();
    }
}
