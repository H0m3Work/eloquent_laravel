<?php

use Illuminate\Database\Seeder;

class DogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     //    \DB::table('dogs')->truncate();
     //    \DB::table('dogs')->insert(['name' => 'Joe']);
    	// \DB::table('dogs')->insert(['name' => 'Jock']);
    	// \DB::table('dogs')->insert(['name' => 'Jane']);
    	// \DB::table('dogs')->insert(['name' => 'Jackie']);

    	// \App\Dog::truncate();
    	// \App\Dog::create(['name' => 'Joe']);
    	// \App\Dog::create(['name' => 'Joe']);
    	// \App\Dog::create(['name' => 'Joe']);
    	// \App\Dog::create(['name' => 'Joe']);
    	
    	\App\Dog::truncate();

    	(new Faker\Generator)->seed();

    	factory(App\Dog::class, 50)->create();
    }
}
