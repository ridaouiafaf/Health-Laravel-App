<?php

use App\Link;
use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $links=[
            [
                'id' =>1,
                'title'=>'AIDS Disease',
                'description'=>'Human immunodeficiency virus infection and acquired immune deficiency syndrome (HIV/AIDS) is a spectrum of conditions caused by infection with the human immunodeficiency virus (HIV). Following initial infection a person may not notice any symptoms, or may experience a brief period of influenza-like illness. Typically, this is followed by a prolonged period with no symptoms. If the infection progresses, it interferes more with the immune system, increasing the risk of developing common infections such as tuberculosis, as well as other opportunistic infections, and tumors which are otherwise rare in people who have normal immune function. These late symptoms of infection are referred to as acquired immunodeficiency syndrome (AIDS). This stage is often also associated with unintended weight loss.',
                'url'=>'https://en.wikipedia.org/wiki/HIV/AIDS',
                'created_at'=>'2020-06-30 00:30:00',
                'updated_at'=>'2020-06-30 00:30:00'
            ],
            [
                'id' =>2,
                'title'=>'Corona Virus',
                'description'=>'Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.

                Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.
                
                The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face. ',
                'url'=>'https://www.who.int/health-topics/coronavirus#tab=tab_1',
                'created_at'=>'2020-06-30 00:30:00',
                'updated_at'=>'2020-06-30 00:30:00'
            ],
        ];
        Link::insert($links);
    }
}
