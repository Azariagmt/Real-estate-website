<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name' => 'G+1', 'slug' => 'groundPlus1', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Desktops', 'slug' => 'desktops', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Mobile Phones', 'slug' => 'mobile-phones', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Tablets', 'slug' => 'tablets', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'TVs', 'slug' => 'tvs', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Digital Cameras', 'slug' => 'digital-cameras', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Appliances', 'slug' => 'appliances', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
