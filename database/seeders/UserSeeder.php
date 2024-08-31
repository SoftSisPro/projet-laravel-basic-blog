<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();

        $user->name = 'Jan Carlos Jaimes';
        $user->email = 'jacajali@gmail.com';
        $user->password = bcrypt('carlos0723');

        $user->save();

        User::factory(10)->create();
    }
}
