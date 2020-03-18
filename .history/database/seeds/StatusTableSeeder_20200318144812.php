<?php

use App\Status;
use Carbon\Carbon;
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
            ['name' => 'For Sale', 'slug' => 'for-sale', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'For Rent', 'slug' => 'for-rent', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'G+3', 'slug' => 'groundPlus3', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Tablets', 'slug' => 'tablets', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'TVs', 'slug' => 'tvs', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Digital Cameras', 'slug' => 'digital-cameras', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Appliances', 'slug' => 'appliances', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
