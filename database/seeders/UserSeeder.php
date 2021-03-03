<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
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
        User::updateOrCreate([
            'role_id'   =>  Role::where('name', 'Admin')->first()->id,
            'name'  =>  'Super Admin',
            'email' =>'admin@gmail.com',
            'password'=>Hash::make('12345678'),
            'status'=>false
        ]);

        User::updateOrCreate([
            'role_id'   =>  Role::where('name', 'User')->first()->id,
            'name'  =>  'Super User',
            'email' =>'user@gmail.com',
            'password'=>Hash::make('12345678'),
            'status'=>false
        ]);
    }
}
