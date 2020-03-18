<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Property;

class PropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Property::create([
            'slug' =>'gerji crib',
            'details'=>'ezeezz',
            'description'=>'ezeez square',
            'price'=>'300000',
            'rooms'=>10,
            'bathrooms'=>4,
            'size'=>230,
            'bedrooms'=>5,
            'parking'=>2,
            'location'=>'Gerji'
        ])->
            statuses()->attach(1)
            types()->attach(2);
    }
}
