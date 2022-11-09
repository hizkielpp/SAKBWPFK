<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $user = new \App\Models\User([
            "name" => "farmasi",
            "password" => Hash::make("password"),
            "email" => "farmasi@gmail.com",
            "prodi" => 1
        ]);
        $user->save();
        $user = new \App\Models\User([
            "name" => "kedokteran",
            "password" => Hash::make("password"),
            "email" => "kedokteran@gmail.com",
            "prodi" => 2
        ]);
        $user->save();
        $user = new \App\Models\User([
            "name" => "keperawatan",
            "password" => Hash::make("password"),
            "email" => "keperawatan@gmail.com",
            "prodi" => 3
        ]);
        $user->save();
        $user = new \App\Models\User([
            "name" => "gizi",
            "password" => Hash::make("password"),
            "email" => "gizi@gmail.com",
            "prodi" => 4
        ]);
        $user->save();
        $user = new \App\Models\User([
            "name" => "spesialis",
            "password" => Hash::make("password"),
            "email" => "spesialis@gmail.com",
            "prodi" => 5
        ]);
        $user->save();
    }
}
