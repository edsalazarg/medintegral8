<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admn = User::create([
            'name' => 'admin',
            'email' => 'admin@root.c',
            'password' => Hash::make('medicina')
        ]);
        $admn->assignRole('Admin');
    }
}
