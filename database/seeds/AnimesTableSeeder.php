<?php

use Illuminate\Database\Seeder;

class AnimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Anime::class, 10)->create();
    }
}
