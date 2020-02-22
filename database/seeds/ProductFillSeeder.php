<?php

use Illuminate\Database\Seeder;
use App\Models\ProductFill;

class ProductFillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productFill = factory(\App\Models\ProductFill::class, 30)->create();
    }
}
