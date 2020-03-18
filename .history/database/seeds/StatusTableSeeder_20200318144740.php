<?php

use App\Status;

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Status::insert([
            ['name' => 'G+1', 'slug' => 'groundPlus1', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'G+2', 'slug' => 'groundPlus2', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'G+3', 'slug' => 'groundPlus3', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Tablets', 'slug' => 'tablets', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'TVs', 'slug' => 'tvs', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Digital Cameras', 'slug' => 'digital-cameras', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Appliances', 'slug' => 'appliances', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
