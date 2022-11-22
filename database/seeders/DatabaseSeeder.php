<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $faker = Faker::create();
        $status = ['terupload', 'ditolak','diproses','validasi supervisor','sudah diposting'];
    	foreach (range(1,100) as $index) { 
            DB::table('reports')->insert([
                'name' => $faker->name,
                'file_name' => "1668487323.TOR Prof. Dr. Cheng Hwee Ming_Okt22.docx",
                'id_user' => $faker->numberBetween(2,6),
                'status' => Arr::random($status),
                'created_at' => $faker->dateTimeInInterval('-1 week'),
                'updated_at' => $faker->dateTimeInInterval('-1 week')
            ]);
        }
    }
}
