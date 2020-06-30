<?php

use App\Service;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            [
                'id'         => 1,
                'name'       => 'Consulting',
                'created_at' => '2020-06-30 00:30:00',
                'updated_at' => '2020-06-30 00:30:00',
            ],
            [
                'id'         => 2,
                'name'       => 'Treatment',
                'created_at' => '2020-06-30 00:30:00',
                'updated_at' => '2020-06-30 00:30:00',
            ],
            [
                'id'         => 3,
                'name'       => 'Chekcing',
                'created_at' => '2020-06-30 00:30:00',
                'updated_at' => '2020-06-30 00:30:00',
            ],
            [
                'id'         => 4,
                'name'       => 'Nursing',
                'created_at' => '2020-06-30 00:30:00',
                'updated_at' => '2020-06-30 00:30:00',
            ],
        ]; 

        Service::insert($services);
        // factory(\App\Service::class, 10)->create();
    }
}
