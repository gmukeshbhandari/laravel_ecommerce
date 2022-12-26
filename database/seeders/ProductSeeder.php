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
        ]
		]);
    }
}
