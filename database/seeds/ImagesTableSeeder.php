<?php

use App\Image;
use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
            [
                'id'         => 1,
                'imgName'    => 'image-1593048002.jpg',
                'created_at' => '2020-06-30 00:30:00',
                'updated_at' => '2020-06-30 00:30:00',
            ],
            [
                'id'         => 2,
                'imgName'    => 'image-1593048042.jpg',
                'created_at' => '2020-06-30 00:30:00',
                'updated_at' => '2020-06-30 00:30:00',
            ],
        ];

        Image::insert($images);
    }
}
