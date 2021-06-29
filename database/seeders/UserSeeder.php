<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        $user =User::create([
            'name' => 'Admin Perpus',
            'email' => 'admin@mail',
            'password' => bcrypt('12345678'),
            'role' => '1',
            'email_verified_at' => now(),
        ]);

        $user->assignRole('admin');
    }
}
