<?php

use App\Donation;
use Illuminate\Database\Seeder;


class DonationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $donations = [
            [
                'id'         => 1,
                'type'      => 'A+',
                'status'       => 'URGENT',
                'donneurs'=>3,
                'gsm'=>'0607070707',
                'address'=>'BP 70898 Casacomplexe Mohammed V',
                'city'=>'Grand Casablanca',
                'user_id'=>2,
                'created_at' => '2020-07-15 17:11:00',
                'updated_at' => '2020-07-15 17:11:00',
            ],
            [
                'id'         => 2,
                'type'      => 'AB-',
                'status'       => 'BENEVOLE',
                'donneurs'=> 100,
                'gsm'=>'0687960349',
                'address'=>'100, Boulevard Abdellah Ben Yacine',
                'city'=>'Grand Casablanca',
                'user_id'=> 2,
                'created_at' => '2020-07-15 17:11:00',
                'updated_at' => '2020-07-15 17:11:00',
            ],
        ]; 

        Donation::insert($donations);
    }
}
