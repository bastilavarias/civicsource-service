<?php

namespace Database\Seeders;

use App\Models\Bid;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bids = [
            [
                'id' => 1,
                'property_id' => 1,
                'outbid_count' => 12,
                'outbid_total_value' => 35000,
                'active_count' => 24,
                'active_total_value' => 45000,
                'winning_count' => 12,
                'winning_total_value' => 45000,
            ],

            [
                'id' => 2,
                'property_id' => 2,
                'outbid_count' => 10,
                'outbid_total_value' => 25000,
                'active_count' => 20,
                'active_total_value' => 65000,
                'winning_count' => 10,
                'winning_total_value' => 55000,
            ],

            [
                'id' => 3,
                'property_id' => 3,
                'outbid_count' => 20,
                'outbid_total_value' => 15000,
                'active_count' => 30,
                'active_total_value' => 30000,
                'winning_count' => 40,
                'winning_total_value' => 95000,
            ],
        ];

        DB::table('bids')->delete();
        foreach ($bids as $bid) {
            Bid::create($bid);
        }
    }
}
