<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Patrick Borja',
            'role_id'=>'1',
            'email'=>'p@gmail.com',
            'password'=>Hash::make('123456789')
        ]); 
    }
}
