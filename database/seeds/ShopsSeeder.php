<?php

use Illuminate\Database\Seeder;

class ShopsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert(
        	['name'=>'tienda1',
        	'description'=>'description1',
        	'password'=>'password1',
        	'email'=>'email1@gmail.com','likes'=>1]);
		DB::table('shops')->insert(
        	['name'=>'tienda2',
        	'description'=>'description2',
        	'password'=>'password2',
        	'email'=>'email2@gmail.com',
        	'likes'=>2]);
		DB::table('shops')->insert(
        	['name'=>'tienda3',
        	'description'=>'description3',
        	'password'=>'password3',
        	'email'=>'email3@gmail.com',
        	'likes'=>3]);
    }
}