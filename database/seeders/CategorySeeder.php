<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cateogries = [
            'mobile,computers', 'tv,appliances,electroincs', "men's fashion", "women's fashion", 'grocery & household supplies', 'home, kitchen,pets, furniture',
            'beauty,health',
            'sports,fitnes,bags,luggage'
        ];
        
        foreach($cateogries as $cateogry)
           Category::create(['name' => $cateogry]);
    }
}
