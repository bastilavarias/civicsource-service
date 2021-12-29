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
                'reservation_value' => 5000,
                'recent_bid_status' => 'winning',
                'recent_bid_value' => 100,
            ],

            [
                'id' => 2,
                'street' => '15 Fire St.',
                'city' => 'New York',
                'address' => 'LB 80122',
                'picture_url' =>
                    'https://res.cloudinary.com/deqllunb9/image/upload/v1640787321/civic-source/2_yl9pvm.jpg',
                'market_value' => 35000,
                'reservation_value' => 3000,
                'recent_bid_status' => 'outbid',
                'recent_bid_value' => 101,
            ],

            [
                'id' => 3,
                'street' => '25 Mud St.',
                'city' => 'Chicago',
                'address' => 'LB 80122',
                'picture_url' =>
                    'https://res.cloudinary.com/deqllunb9/image/upload/v1640788395/civic-source/4_axorbm.jpg',
                'market_value' => 35000,
                'reservation_value' => 1000,
                'recent_bid_status' => 'active',
                'recent_bid_value' => 102,
            ],

            [
                'id' => 4,
                'street' => '30 Air St.',
                'city' => 'Cleveland',
                'address' => 'LJ 23666',
                'picture_url' =>
                    'https://res.cloudinary.com/deqllunb9/image/upload/v1640788105/civic-source/3_glmpl0.jpg',
                'market_value' => 70000,
                'reservation_value' => 4500,
                'recent_bid_status' => 'winning',
                'recent_bid_value' => 103,
            ],
        ];

        DB::table('properties')->delete();
        foreach ($properties as $property) {
            Property::create($property);
        }
    }
}
