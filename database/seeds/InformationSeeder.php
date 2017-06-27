<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'url' => '1',
            'name' => '1',
            'url_to_image' => '',
            'url_to_image2' => '',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Guide/Audio/HauptinfoWP.mp3',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '1',
            'locale' => 'de',
            'title' => 'Kontakt',
            'text' => 'Fam. Gerda und Erich Jankl<br/>Innerteuchen 2<br/>A-9543 Arriach<br/><br/>Mobil: 0043 (0) 650 21 22 880<br/>www.wurzelpark.at<br/>www.steinacher-hofladen.at<br/>E-Mail: steinacher.hofladen@aon.at<br/>',
        ]);

        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'url' => 'INFO01',
            'name' => 'INFO01',
            'url_to_image' => 'http://www.wurzelpark.at/App/Guide/Bilder/B1.JPG',
            'url_to_image2' => '',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Guide/Audio/DerHolzfotoapparat.mp3',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '2',
            'locale' => 'de',
            'title' => 'Der Holzfotoapparat',
            'text' => 'Der Holzfotoapparat wurde im Jahr 2010 von Erich Jankl mit der Motorsäge geschnitzt und danach mit einer speziellen Schleifscheibe nachgearbeitet.<br/>Er wurde aus Kastanienholz gefertigt.<br/><br/>Arbeitszeit ca. 1,5 Tage.<br/><br/>Mit diesem Fotoapparat kann man aber auch richtige Fotos machen.<br/>Einfach auf den Auslöser drücken und sich 3 Meter vor dem Apparat positionieren. <br/><br/>Die Fotos sind danach in etwa 5 Tagen online auf <a href="http://www.wurzelpark.at" target="_blank">www.wurzelpark.at</a> zu sehen.<br/>',
        ]);

        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'url' => 'INFO02',
            'name' => 'INFO02',
            'url_to_image' => '',
            'url_to_image2' => '',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Guide/Audio/Loewe.mp3',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '3',
            'locale' => 'de',
            'title' => 'Der Löwe',
            'text' => 'Der Löwe wurde von Erich Jankl im Jahr 2013 gefertigt.<br/>Dieser wurde maschinell in der eigenen Werkstätte hergestellt.<br/>Er wurde dann noch manuell fertig nachbearbeitet.',
        ]);
    }
}
