<?php

use App\Post;

use Illuminate\Database\Seeder;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'id'         => 1,
                'title'      => 'How To Donate',
                'body'       => 'As the coronavirus spread across the country, the nation’s blood supply faced a dire shortage. Blood drives were canceled when businesses closed, and many people feared going into donation centers.

                Now, as hospitals resume elective surgeries and some Americans once again venture out of their homes, the rate of blood donations has yet to bounce back to previous levels.
                
                Chris Hrouda, president of biomedical services for the American Red Cross, which collects about 40 percent of the country’s blood donations, calls it a “staggering” drop in supply.
        
                “Our inventories have been cut in half,” Mr. Hrouda said. “We’re starting to get into a critical situation.”',
                'image_id'   => 2,
                'created_at' => '2020-06-30 00:30:00',
                'updated_at' => '2020-06-30 00:30:00',
            ],
            [
                'id'         => 2,
                'title'      => 'Advantages of blood donation',
                'body'       => 'Donating blood can help people with many health conditions, such as those who:

                have internal or external bleeding due to an injury
                have sickle cell disease or another illness that affects the blood
                are undergoing cancer treatment
                are undergoing surgery, such as cardiovascular or orthopedic surgery
                have an inherited blood disorder
                are undergoing a transplant
                need treatments involving plasma or other blood products',
                'image_id'   => 1,
                'created_at' => '2020-06-30 00:30:00',
                'updated_at' => '2020-06-30 00:30:00',
            ],
        ]; 

        Post::insert($posts);
    }
}
