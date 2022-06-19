<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

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
            'name' => 'test1',
            'email' => 'habib@gmail.com',
            'password' => Hash::make('123456'),
        ]);

        User::create([
            'name' => 'test2',
            'email' => 'daniel@gmail.com',
            'password' => Hash::make('123456'),
        ]);

        User::create([
            'name' => 'test3',
            'email' => 'mickel@gmail.com',
            'password' => Hash::make('123456'),
        ]);

        User::create([
            'name' => 'test4',
            'email' => 'john@gmail.com',
            'password' => Hash::make('123456'),
        ]);

    }
}
