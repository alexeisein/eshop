<?php

use Illuminate\Database\Seeder;

class ProductSeedTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
        	"image" => 'images/products/jbn1sm.png',
            "size" => "6 to 7 years",
			"title" => 'JBN Creation Girls Sleeveless Ethnic Set  (Pack of 1 Blue)',
			"description" => 'Size: 6 - 7 Years, 7 - 8 Years, 9 - 10 Years. The set contains a front slit jacket with a proper kalidaar lehenga. It is perfect outfit for any festival, wedding or a celebration. The set makes you look slimmer and taller. It is very light weight and attractive.',
       		"price" => 7000,	
        	]);
        $product->save();

        $product = new \App\Product([
            "image" => 'images/products/jbn1smboy.png',
            "size" => "6 to 7 years",
            "title" => 'JBN Creation Boys Full Sleeve Ethnic Set',
            "description" => 'Size: 6 - 9 Months, 9 - 12 Months, 18 - 24 Months, 2 - 3 Years, 3 - 4 Years, 4 - 5 Years, 5 - 6 Years, 7 - 8 Years.',
            "price" => 4150,    
            ]);
        $product->save();

        $product = new \App\Product([
            "image" => 'images/products/jbn1sm.png',
            "size" => "6 to 7 years",
            "title" => 'JBN Creation Girls 3/4 Sleeve Ethnic Set  (Pack of 1 Green)',
            "description" => 'Size: 5 - 6 Years, 6 - 7 Years, 7 - 8 Years, 8 - 9 Years, 9 - 10 Years. The set contains a front slit jacket with a proper kalidaar lehenga. It is perfect outfit for any festival, wedding or a celebration. The set makes you look slimmer and taller. It is very light weight and attractive.',
            "price" => 6550,    
            ]);
        $product->save();

        $product = new \App\Product([
            "image" => 'images/products/jbna4sm.png',
            "size" => "6 to 7 years",
            "title" => 'JBN Creation Girls Sleeveless Ethnic Set',
            "description" => 'Size: 5 - 6 Years, 6 - 7 Years, 7 - 8 Years, 8 - 9 Years, 9 - 10 Years.',
            "price" => 5180,    
            ]);
        $product->save();
    }
}
