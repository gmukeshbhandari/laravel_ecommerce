<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
		[
            'name' => 'Samsung Galaxy M21',
            'price' => '25999',
            'category' => 'Mobile',
			'gallery' => 'https://www.gadgetbytenepal.com/wp-content/uploads/2020/03/samsung-galaxy-m21-display-amoled.jpg',
			'description' => '6 GB RAM /128 GB Storage'
        ],
		[
            'name' => 'Samsung Galaxy M33 5G',
            'price' => '35999',
            'category' => 'Mobile',
			'gallery' => 'https://www.gadgetbytenepal.com/wp-content/uploads/2021/11/Samsung-Galaxy-M33-5G-Green.jpg',
			'description' => '8 GB RAM /128 GB Storage'
        ],
		[
            'name' => 'Samsung Galaxy M02s',
            'price' => '14999',
            'category' => 'Mobile',
			'gallery' => 'https://www.gadgetbytenepal.com/wp-content/uploads/2021/01/Galaxy-M02s-Display.jpg',
			'description' => '3 GB RAM /32 GB Storage'
        ],
		[
            'name' => 'Redmi Note 9 Pro',
            'price' => '26999',
            'category' => 'Mobile',
			'gallery' => 'https://www.gadgetbytenepal.com/wp-content/uploads/2020/03/Redmi-Note-9-Pro-design.jpg',
			'description' => '4 GB RAM /128 GB Storage'
        ],
		[
            'name' => 'Oppo A17k',
            'price' => '16999',
            'category' => 'Mobile',
			'gallery' => 'https://www.gadgetbytenepal.com/wp-content/uploads/2022/04/Oppo-F21-Pro-Color-Options.jpg',
			'description' => '3 GB RAM /64 GB Storage'
        ],
		[
            'name' => 'Oppo F21 Pro',
            'price' => '42999',
            'category' => 'Mobile',
			'gallery' => 'https://www.gadgetbytenepal.com/wp-content/uploads/2020/03/samsung-galaxy-m21-display-amoled.jpg',
			'description' => '8 GB RAM /128 GB Storage'
        ],
		[
            'name' => 'Samsung QLED TV Model QA55Q60B',
            'price' => '219990',
            'category' => 'Television',
			'gallery' => 'https://images.samsung.com/is/image/samsung/p6pim/au/qa55q60bawxxy/gallery/au-qled-q60b-qa55q60bawxxy-531163229?$1300_1038_PNG$',
			'description' => '55-inches UHD 4K Smart TV'
        ],
		[
            'name' => 'Samsung QLED TV Model QA65Q60B',
            'price' => '355990',
            'category' => 'Television',
			'gallery' => 'https://images.samsung.com/is/image/samsung/p6pim/au/qa65q60bawxxy/gallery/au-qled-q60b-qa65q60bawxxy-531163262?$1300_1038_PNG$',
			'description' => '65-inches UHD 4K Smart TV'
        ],
		[
            'name' => 'Haier Fridge',
            'price' => '85800',
            'category' => 'Fridge',
			'gallery' => 'https://neostore.com.np/assets/uploads/HRF-3654BRC-E2.jpg',
			'description' => 'Haier 345 Litres, Magic Convertible Inverter Top Mount Refrigerator HRF-3654BRC-E'
        ]
		]);
    }
}
