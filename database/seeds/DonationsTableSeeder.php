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
                'donors'=>3,
                'gsm'=>'0607070707',
                'address'=>'BP 70898 Casacomplexe Mohammed V',
                'city'=>'Grand Casablanca',
                'end_date' => '2020-08-18 13:30:00',
                'user_id'=>2,
                'created_at' => '2020-07-15 17:11:00',
                'updated_at' => '2020-07-15 17:11:00',
            ],
            [
                'id'         => 2,
                'type'      => 'AB-',
                'status'       => 'BENEVOLE',
                'donors'=> 100,
                'gsm'=>'0687960349',
                'address'=>'100, Boulevard Abdellah Ben Yacine',
                'city'=>'Grand Casablanca',
                'end_date' => '2020-08-18 13:30:00',
                'user_id'=> 2,
                'created_at' => '2020-07-15 17:11:00',
                'updated_at' => '2020-07-15 17:11:00',
            ],
            [
                'id'         => 3,
                'type'      => 'AB+',
                'status'       => 'URGENT',
                'donors'=> 50,
                'gsm'=>'0687964637',
                'address'=>'119, Bd Oued Loukouss, 1er étage Oulfa',
                'city'=>'Grand Casablanca',
                'end_date' => '2020-08-18 13:30:00',
                'user_id'=> 2,
                'created_at' => '2020-07-16 13:13:00',
                'updated_at' => '2020-07-16 13:13:00',
            ],[
                'id'         => 4,
                'type'      => 'A-',
                'status'       => 'BENEVOLE',
                'donors'=> 10,
                'gsm'=>'0787000349',
                'address'=>'187, Z.I. sud ouest, BP 106',
                'city'=>'Mohammedia',
                'end_date' => '2020-08-18 13:30:00',
                'user_id'=> 2,
                'created_at' => '2020-07-16 13:15:00',
                'updated_at' => '2020-07-16 13:15:00',
            ],[
                'id'         => 5,
                'type'      => 'B-',
                'status'       => 'URGENT',
                'donors'=> 30,
                'gsm'=>'0697960349',
                'address'=>'N 61 Lotissement Jawhara Lotissement Jawhara, El Jadida',
                'city'=>'El Jadida',
                'end_date' => '2020-08-18 13:30:00',
                'user_id'=> 2,
                'created_at' => '2020-07-16 13:16:00',
                'updated_at' => '2020-07-16 13:16:00',
            ],[
                'id'         => 6,
                'type'      => 'B+',
                'status'       => 'BENEVOLE',
                'donors'=> 4,
                'gsm'=>'0687010349',
                'address'=>'7 Avenue Hassan Ii',
                'city'=>'Tiznit',
                'end_date' => '2020-08-18 13:30:00',
                'user_id'=> 2,
                'created_at' => '2020-07-16 13:17:00',
                'updated_at' => '2020-07-16 13:17:00',
            ],[
                'id'         => 7,
                'type'      => 'O-',
                'status'       => 'URGENT',
                'donors'=> 10,
                'gsm'=>'0687990349',
                'address'=>'Rue Mouatamid Ibn Abbad Ain Sebaa',
                'city'=>'Grand Casablanca',
                'end_date' => '2020-08-18 13:30:00',
                'user_id'=> 2,
                'created_at' => '2020-07-16 13:19:00',
                'updated_at' => '2020-07-16 13:19:00',
            ],[
                'id'         => 8,
                'type'      => 'O+',
                'status'       => 'BENEVOLE',
                'donors'=> 40,
                'gsm'=>'0578960349',
                'address'=>'16 Rue Hussein I Hassan',
                'city'=>'Rabat',
                'end_date' => '2020-07-18 13:20:00',
                'user_id'=> 2,
                'created_at' => '2020-07-16 13:20:00',
                'updated_at' => '2020-07-16 13:20:00',
            ],
        ]; 

        Donation::insert($donations);
    }
}
