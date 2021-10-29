<?php

namespace Database\Seeders;

use App\Models\Child;
use App\Models\ChildVariation;
use App\Models\Image;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Variation;
use App\Models\Detail;
use Illuminate\Support\Facades\File;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/products.json");
        $products = json_decode($json);

        foreach ($products as $data) {
            $product =  Product::create(['name' => $data->name,]);

            if (property_exists($data, "children")) {
                foreach ($data->children as $child)
                    Child::create(['product_id' => $product->id, 'name' => $child]);
            }

            if (property_exists($data, "variation")) {
                foreach ($data->variation as $variation)
                    Variation::create(['product_id' => $product->id, 'name' => $variation]);
            }

            if (property_exists($data, "images")) {
                foreach ($data->images as $imageable => $imageArr) {
                    foreach ($imageArr as $id => $images) {
                        foreach ($images as $image)
                            Image::create(['name' => $image, 'imageable_type' => $imageable, 'imageable_id' => $id]);
                    }
                }
            }

            if (property_exists($data, 'childVariations')) {
                foreach ($data->childVariations as $child => $variations) {
                    foreach ($variations as $variation)
                        ChildVariation::create([
                            'child_id' => $child, 'variation_id' => $variation, 'price' => rand(12000, 15000), 'stock' => rand(0, 10),
                            'product_id' => $product->id
                        ]);
                }
            }

            if (property_exists($data, 'details')) {
                foreach ($data->details as $detailableType => $detailArr) {
                    foreach ($detailArr as $detailableid => $details) {
                        foreach ($details as $detail)
                            Detail::create([
                                'detailable_type' => $detailableType,
                                'detailable_id' => $detailableid,
                                'detail' => $detail,
                            ]);
                    }
                }
            }

            if (property_exists($data, 'singleProduct')) {
                ChildVariation::create([
                    'price' => $data->singleProduct->price, 'stock' => rand(0, 10),
                    'product_id' => $product->id
                ]);
            }
        }
    }
}
