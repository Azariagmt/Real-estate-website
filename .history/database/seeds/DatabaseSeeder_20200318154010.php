<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(StatusTableSeeder::class);
         $this->call(LocationsTableSeeder::class);
         $this->call(TypesTableSeeder::class);
         $this->call(PropertiesTableSeeder::class);
        
    }
}
