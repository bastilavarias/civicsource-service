<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $properties = [
            [
                'id' => 1,
                'street' => '14 Flood St.',
                'city' => 'New Orleans',
                'address' => 'LA 70122',
                'picture_url' =>
                    'https://res.cloudinary.com/deqllunb9/image/upload/v1640787742/civic-source/1_efsws3.png',
                'market_value' => 40000,
                'recent_bid_status' => 'winning',
                'has_neighbor' => true,
            ],

            [
                'id' => 2,
                'street' => '15 Fire St.',
                'city' => 'New York',
                'address' => 'LB 80122',
                'picture_url' =>
                    'https://res.cloudinary.com/deqllunb9/image/upload/v1640787321/civic-source/2_yl9pvm.jpg',
                'market_value' => 35000,
                'recent_bid_status' => 'outbid',
                'has_neighbor' => false,
            ],

            [
                'id' => 3,
                'street' => '25 Mud St.',
                'city' => 'Chicago',
                'address' => 'LB 80122',
                'picture_url' =>
                    'https://res.cloudinary.com/deqllunb9/image/upload/v1640788395/civic-source/4_axorbm.jpg',
                'market_value' => 35000,
                'recent_bid_status' => 'outbid',
                'has_neighbor' => false,
            ],
        ];

        DB::table('properties')->delete();
        foreach ($properties as $property) {
            Property::create($property);
        }
    }
}
