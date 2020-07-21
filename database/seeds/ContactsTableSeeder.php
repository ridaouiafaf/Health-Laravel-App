<?php

use App\Contact;
use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contacts= [
            [
                'id' =>1,
                'name'=>'Sajiyya Al Agha',
                'email'=>'sajiyya98@gmail.com',
                'phone'=>'05.22.26.10.48',
                'subject'=>'Asking about provided services',
                'message'=>'Human immunodeficiency virus infection and acquired immune deficiency syndrome (HIV/AIDS) is a spectrum of conditions caused by infection with the human immunodeficiency virus (HIV). Following initial infection a person may not notice any symptoms, or may experience a brief period of influenza-like illness. Typically, this is followed by a prolonged period with no symptoms. If the infection progresses, it interferes more with the immune system, increasing the risk of developing common infections such as tuberculosis, as well as other opportunistic infections, and tumors which are otherwise rare in people who have normal immune function. These late symptoms of infection are referred to as acquired immunodeficiency syndrome (AIDS). This stage is often also associated with unintended weight loss.',
                'created_at'=>'2020-07-20 18:49:00',
                'updated_at'=>'2020-07-20 18:49:00'
            ],

            [
                'id' =>2,
                'name'=>'Kareem el Moradi',
                'email'=>'kareem.el.moradi@gmail.com',
                'phone'=>'06.24.42.02.49',
                'subject'=>'Requesting a beneficial link to be added',
                'message'=>'Ye to misery wisdom plenty polite to as. Prepared interest proposal it he exercise. My wishing an in attempt ferrars. Visited eat you why service looking engaged. At place no walls hopes rooms fully in. Roof hope shy tore leaf joy paid boy. Noisier out brought entered detract because sitting sir. Fat put occasion rendered off humanity has. 

                Full he none no side. Uncommonly surrounded considered for him are its. It we is read good soon. My to considered delightful invitation announcing of no decisively boisterous. Did add dashwoods deficient man concluded additions resources. Or landlord packages overcame distance smallest in recurred. Wrong maids or be asked no on enjoy. Household few sometimes out attending described. Lain just fact four of am meet high. ',
                'created_at'=>'2020-07-20 19:04:00',
                'updated_at'=>'2020-07-20 19:04:00'
            ],
            [
                'id' =>3,
                'name'=>'Mr.Delete',
                'email'=>'delete2020@gmail.com',
                'phone'=>'06.06.06.06.06',
                'subject'=>'This message was made to test deleting',
                'message'=>'surrounded considered for him are its. It we is read good soon. My to considered delightful invitation announcing of no decisively boisterous. Did add dashwoods deficient man concluded additions resources. Or landlord packages overcame distance smallest in recurred. Wrong maids or be asked no on enjoy. Household few sometimes out attending described. Lain just fact four of am meet high. ',
                'created_at'=>'2020-07-20 19:04:00',
                'updated_at'=>'2020-07-20 19:04:00'
            ],
        ];

        Contact::insert($contacts);
    }
}
