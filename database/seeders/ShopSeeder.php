<?php

namespace Database\Seeders;

use App\Models\shop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shops = [
            [
                'image' => 'aqoush seed.jpg',
                'name' => 'Aquosh Seed',
                'location' => 'jln, Diponogoro',
                'city' => 'Garut',
                'delivery' => 0,
                'pickup' => 0,
                'whatsapp' => '6285156049096',
                'description' => 'Laundry refers to the washing of clothing and other textiles',
                'price' => 17000,
                'rate' => 4.1,
            ],
        ];
        
        foreach ($shops as $shopItem) {
            Shop::create($shopItem);
        }
    }
}
