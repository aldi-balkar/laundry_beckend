<?php

namespace Database\Seeders;

use App\Models\Laundry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaundrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $laundries = [
            [
                'claim_code' => 'skdjfndlsld',
                'user_id' => 1,
                'shop_id' => 2,
                'weight' => 2.3,
                'with_pickup' => 1,
                'with_delivery' => 1,
                'pickup_address' => '811 South San Fernando, Boulevard Burbank, CA 91502',
                'delivery_address' => '811 South San Fernando, Boulevard Burbank, CA 91502',
                'total' => 50000,
                'description' => 'baju koko, sarung, sajadah',
                'status' => 'Done',
                'created_at' => '2023-04-11 08:50:39',
                'updated_at' => '2023-04-11 08:50:39',
            ],
        ];
        foreach ($laundries as $laundry) {
            Laundry::create($laundry);
        }
    }
}
