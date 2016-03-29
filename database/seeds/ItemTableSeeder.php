<?php

use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        for ($i=0; $i < 11; $i++) {

        	factory(App\Item::class,1)->create([
        		'user_id' => App\USer::orderBy(DB::raw('RAND()'))->first()->id,
        	]);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
