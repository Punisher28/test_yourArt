<?php

use Illuminate\Database\Seeder;

class articlesseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'Name' => str_random(10),
            'Description' => str_random(100),
            'Image' => ('public\img\uploads-img-articles\nophoto.jpg'),
            'Price' => ('10000'),
            'Accessibility' => (true),
            'Author' => str_random(10),

        ]);
    }
}
