<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('products')->insert(
        	['name'=>'product1',
        	'description'=>'product1',
        	'stock'=>1,
        	'price'=>1.1]);
    	DB::table('products')->insert(
        	['name'=>'product2',
        	'description'=>'product2',
        	'stock'=>2,
        	'price'=>2.2]);
    	DB::table('products')->insert(
        	['name'=>'product3',
        	'description'=>'product3',
        	'stock'=>3,
        	'price'=>3.3]);
    	DB::table('products')->insert(
        	['name'=>'product4',
        	'description'=>'product4',
        	'stock'=>4,
        	'price'=>4.4]);
    	DB::table('products')->insert(
        	['name'=>'product5',
        	'description'=>'product5',
        	'stock'=>5,
        	'price'=>5.5]);
    	DB::table('products')->insert(
        	['name'=>'product6',
        	'description'=>'product6',
        	'stock'=>6,
        	'price'=>6.6]);
    	DB::table('products')->insert(
        	['name'=>'product7',
        	'description'=>'product7',
        	'stock'=>7,
        	'price'=>7.7]);
    }
}
