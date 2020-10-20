<?php

use App\User;
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
        User::create([
            'name' => 'admin',
            'password' => Hash::make('admin123'),
            'phone' => '083857317946',
            'image' => 'default.jpg',
            'image_path' => 'default.jpg',
        ]);
    }
}
