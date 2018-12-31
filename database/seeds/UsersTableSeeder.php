<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::truncate();
        User::create([
            'email' => 'admin@rdcr.com',
            'password' => Hash::make('prueba123'),
            'name' => 'RC',
        ]);
    }
}