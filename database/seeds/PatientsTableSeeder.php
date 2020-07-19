<?php

use App\Patient;
use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $patients= [
            [
                'id'         => 1,
                'name'       => 'Mohammed Mansori',
                'phone'      => '0647382949',
                'email'      => 'mohammed@examlpe.com',
                'user_id'    => 1,
                'created_at' => '2020-07-19 02:06:15',
                'updated_at' => '2020-07-19 02:06:15',
            ],
            [
                'id'         => 2,
                'name'       => 'Nassima El Hour',
                'phone'      => '0747382911',
                'email'      => 'nasima@yahoo.fr',
                'user_id'    => 2,
                'created_at' => '2020-07-19 02:06:15',
                'updated_at' => '2020-07-19 02:06:15',
            ],
            [
                'id'         => 3,
                'name'       => 'Said Lechgar',
                'phone'      => '0747002911',
                'email'      => 'said@outlook.fr',
                'user_id'    => 3,
                'created_at' => '2020-07-19 02:06:15',
                'updated_at' => '2020-07-19 02:06:15',
            ],
            [
                'id'         => 4,
                'name'       => 'Mansor Dahbi',
                'phone'      => '0648982911',
                'email'      => 'mansor89@gmail.com',
                'user_id'    => 4,
                'created_at' => '2020-07-19 02:06:15',
                'updated_at' => '2020-07-19 02:06:15',
            ],
           
        ];
        
        Patient::insert($patients);
    }
}
