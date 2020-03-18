<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Location;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Location::insert([
            ['name' => 'Bole', 'slug' => 'bole', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Gerji', 'slug' => 'gerji', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Mebrat H', 'slug' => 'groundPlus3', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Tablets', 'slug' => 'tablets', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'TVs', 'slug' => 'tvs', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Digital Cameras', 'slug' => 'digital-cameras', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Appliances', 'slug' => 'appliances', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
