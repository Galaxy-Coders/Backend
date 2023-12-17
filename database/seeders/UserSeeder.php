<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name'=>'john',
            'surname'=>'Doe',
            'phone'=>'911234567',
            'email'=>'john@doe.com',
            'password'=>Hash::make('password')
        ]);
        $user->role()->attach(3);
    }
}
