<?php

use Illuminate\Database\Seeder;

use App\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
        {
            DB::table('categories')->insert([
                'name' => str_random(10),
            ]);
        }
}
