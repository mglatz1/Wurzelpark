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
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '1',
            'locale' => 'de',
            'title' => 'Kontakt',
            'text' => 'Fam. Gerda und Erich Jankl<br/>Innerteuchen 2<br/>A-9543 Arriach<br/><br/>Mobil: 0043 (0) 650 21 22 880<br/><a href="http://www.wurzelpark.at" target="_blank">wwww.wurzelpark.at</a><br/><a href="http://www.steinacher-hofladen.at" target="_blank">www.steinacher-hofladen.at</a><br/>E-Mail: <a href="mailto:steinacher.hofladen@aon.at" target="_top">steinacher.hofladen@aon.at</a><br/>',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Guide/Audio/HauptinfoWP.mp3',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '1',
            'locale' => 'en',
            'title' => 'Contakt',
            'text' => 'Gerda and Erich Jankl<br/>Innerteuchen 2<br/>A-9543 Arriach<br/><br/>mobile number: 0043 (0) 650 21 22 880<br/><a href="http://www.wurzelpark.at" target="_blank">wwww.wurzelpark.at</a><br/><a href="http://www.steinacher-hofladen.at" target="_blank">www.steinacher-hofladen.at</a><br/>email: <a href="mailto:steinacher.hofladen@aon.at" target="_top">steinacher.hofladen@aon.at</a><br/>',
            'url_to_audio' => '',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'url' => 'INFO01',
            'name' => 'INFO01',
            'url_to_image' => 'http://www.wurzelpark.at/App/Guide/Bilder/B1.JPG',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '2',
            'locale' => 'de',
            'title' => 'Der Holzfotoapparat',
            'text' => 'Der Holzfotoapparat wurde im Jahr 2010 von Erich Jankl mit der Motorsäge geschnitzt und danach mit einer speziellen Schleifscheibe nachgearbeitet.<br/>Er wurde aus Kastanienholz gefertigt.<br/><br/>Arbeitszeit ca. 1,5 Tage.<br/><br/>Mit diesem Fotoapparat kann man aber auch richtige Fotos machen.<br/>Einfach auf den Auslöser drücken und sich 3 Meter vor dem Apparat positionieren. <br/><br/>Die Fotos sind danach in etwa 5 Tagen online auf <a href="http://www.wurzelpark.at" target="_blank">www.wurzelpark.at</a> zu sehen.<br/>',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Guide/Audio/DerHolzfotoapparat.mp3',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'url' => 'INFO02',
            'name' => 'INFO02',
            'url_to_image' => '',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '3',
            'locale' => 'de',
            'title' => 'Der Löwe',
            'text' => 'Der Löwe wurde von Erich Jankl im Jahr 2013 gefertigt.<br/>Dieser wurde maschinell in der eigenen Werkstätte hergestellt.<br/>Er wurde dann noch manuell fertig nachbearbeitet.',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Guide/Audio/Loewe.mp3',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'url' => 'INFO03',
            'name' => 'INFO03',
            'url_to_image' => '',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '4',
            'locale' => 'de',
            'title' => 'Die Ameise',
            'text' => 'Ameisen nennt man auch die Polizei des Waldes. Sie haben eine ganz besondere Gesundheitsfunktion im Wald. Im Wurzelpark ist ein Steig danach benannt, da an diesem Steig besonders viele Ameisenhaufen anzutreffen sind.<br/><br/>Ich möchte dich bitten, keine Ameisenhaufen zu zerstören, da sie besonders wichtig für unsere Natur sind.<br/><br/>Diese Ameise wurde teilweise maschinell vorgearbeitet und danach durch Handarbeit fertig gestellt.',
            'url_to_audio' => '',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'url' => 'INFO04',
            'name' => 'INFO04',
            'url_to_image' => '',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '5',
            'locale' => 'de',
            'title' => 'Der Wurzelsepp',
            'text' => 'Diese Skulptur wurde im Jahr 2007 von Erich Jankl erstellt.<br/><br/>Bearbeitungsmethode:<br/>Mit Motorsäge, Nachbearbeitung mit Schleifscheiben.<br/><br/>Der Lärchenstamm wurde hoch von der Alm, aufwendig an diesen Standort transportiert. Der Baum aus dem diese Figur entstanden ist, war ca. 170 Jahre alt. Der Stamm hat im unteren Bereich einen Durchmesser von 1,4 Meter und ist ca. 4 Meter hoch.',
            'url_to_audio' => '',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'url' => 'INFO05',
            'name' => 'INFO05',
            'url_to_image' => '',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '6',
            'locale' => 'de',
            'title' => 'Der Harmonika-Michl ',
            'text' => 'Der Harmonika-Michel wurde im Jahr 2013 mit der Motorsäge geschnitzt.<br/>.<br/>Die feine Nachbearbeitung wurde mit dem Schnitzmesser und Schleifscheiben gemacht..<br/>.<br/>Die Figur besteht aus heimischem Kirschenholz.',
            'url_to_audio' => '',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'url' => 'INFO06',
            'name' => 'INFO06',
            'url_to_image' => '',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '7',
            'locale' => 'de',
            'title' => 'Der Laubfrosch',
            'text' => 'Weltweit gibt es ca. 5800 verschiedene Froscharten. Frösche ernähren sich in der Regel von lebenden Insekten, Gliedertieren, Weichtieren und Spinnen.<br/><br/>Diese Figur wurde teilweise maschinell vorgearbeitet und durch Hand nachbearbeitet.',
            'url_to_audio' => '',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'url' => 'INFO07',
            'name' => 'INFO07',
            'url_to_image' => '',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '8',
            'locale' => 'de',
            'title' => 'Papa Schlumpf',
            'text' => 'Eines der ersten aus Lärchenholz geschnitzten Figuren ist der Papa Schlumpf.<br/><br/>Diese Comic Figuren begeistern seit Jahrzehnten unser Kinder. Das war auch die Inspiration dafür, im Wurzelpark so eine Figur zu schaffen.',
            'url_to_audio' => '',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'url' => 'INFO08',
            'name' => 'INFO08',
            'url_to_image' => '',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '9',
            'locale' => 'de',
            'title' => 'Geisterkuh',
            'text' => 'In dieser Fichtenwurzel auf einfache Art eine erkennbare Gestalt zu fertigen, erforderte schon etwas Fantasie. Trotzdem sollte es einen Kopf aus einer Kuh erkennen lassen.',
            'url_to_audio' => '',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'url' => 'INFO09',
            'name' => 'INFO09',
            'url_to_image' => '',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '10',
            'locale' => 'de',
            'title' => 'Der Wurzeloktopus',
            'text' => 'Eine Inspiration zu gewinnen, aus einer Wurzel einen Oktupus entstehen zu lassen war eigentlich gar nicht so schwer. Durch die vielen Arme der Wurzel haben sich sozusagen die Arme des Tintenfisches schon ergeben. Man musste nur noch den Kopf des Oktopus schnitzen. Üblicherweise haben Oktopusse 8 Arme.',
            'url_to_audio' => '',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'url' => 'INFO10',
            'name' => 'INFO10',
            'url_to_image' => '',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '11',
            'locale' => 'de',
            'title' => 'Der Holzspielplatz mit Baumhaus',
            'text' => 'Für unsere kleinen Besucher wurde diese Holzspiellandschaft 2016 neu errichtet.<br/><br/>Wir wünschen viel Spaß!',
            'url_to_audio' => '',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'url' => 'INFO11',
            'name' => 'INFO11',
            'url_to_image' => '',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '12',
            'locale' => 'de',
            'title' => 'Das Ochsengespann',
            'text' => 'Der Holzkünstler Bernd Meschik aus Treffen am Ossiachersee hatte diese Figuren aus einer zusammengewachsenen Wurzel im Jahr 2002 gefertigt.<br/><br/>In der Zwischenzeit haben wir diese schon einmal neu geschliffen und gestrichen. Leider ist diese Figur schon in 2 Teile gebrochen. Diese Ochsen werden wohl auch das Ableben an diesem Standort haben.<br/><br/>Allgemeine Zusatzinformation: Es bleiben alle Skulpturen bis zum Verfall an Ihren Standorten. Es kommen dafür laufend neue Skulpturen und Figuren hinzu.',
            'url_to_audio' => '',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'url' => 'INFO12',
            'name' => 'INFO12',
            'url_to_image' => '',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '13',
            'locale' => 'de',
            'title' => 'Bewohner des Waldes',
            'text' => 'Diese Skulptur wurde von Erich Jankl aus Arriach hergestellt. Eine Motorsägenarbeit.<br/><br/>Diese Waldbewohner sind auch in unseren Wäldern üblichweise antzutreffen:<br/><ul><li>Der Waschbär</li><li>Der Specht</li><li>Die Eule</li></ul>',
            'url_to_audio' => '',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'url' => 'INFO13',
            'name' => 'INFO13',
            'url_to_image' => '',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '14',
            'locale' => 'de',
            'title' => 'Der Waldaligator',
            'text' => 'Der Holzstamm des Waldaligators ist der 2. Teil des Wurzelsepp im Eingangsbereich.<br/><br/>Es war eine echte Herausforderung diesen Stamm an diesen Standort zur bringen, da dieser Ort mit keinem schweren und starken Traktor zu erreichen ist. Somit wurde dieser Stamm mittels Seilwinde und Umlenktechnik an diese Stelle gezogen.',
            'url_to_audio' => '',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'url' => 'INFO14',
            'name' => 'INFO14',
            'url_to_image' => '',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '15',
            'locale' => 'de',
            'title' => 'Der Delphin',
            'text' => 'Der Delphin ist im Jahr 2008 entstanden.<br/><br/>Mittels Motorsäge wurde diese Figur geschnitten und bearbeitet.<br/><br/>Künstler: Erich Jankl',
            'url_to_audio' => '',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'url' => 'INFO15',
            'name' => 'INFO15',
            'url_to_image' => 'http://www.wurzelpark.at/App/Bilder/GeodatenBilder/Wurzelpark Geobild.jpg',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '16',
            'locale' => 'de',
            'title' => 'Was bietet der Wurzelpark?',
            'text' => 'Der Wurzelpark sollte ein Erholungsraum und gleichzeitig Wald- und Naturerlebnis für Groß und Klein bieten.<br/><br/>Neben ca. 30 Holzskulpturen, die von verschiedenen Künstlern gemacht wurden, sollte es eine kleine Entdeckungsreise in der Natur sein.<br/>Ganz wichtig zu erwähnen ist, dass es bei der Errichtung des Parkes kaum Eingriffe in die Natur gegeben hat. Lediglich der Hauptweg wurde mit einen kleinen Bagger gemacht.<br/><br/>Der Park wurde auch themenmäßig den natürlichen Gegebenheiten angepasst.<br/><br/>So wie sich im oberen Bereich des Parkes der Wasserlauf des Baches natürlich für den Wasserspielplatz angeboten hat, so ist im linken oberen Bereich der Hochmoorsteig angelegt. Im mittleren (trockenen) Bereich befindet sich der Vogelzwitschersteig. Drücke mindestens 7 Sekunden lang die Taste und höre die verschiedenen Vogelstimmen. Im linken unteren Bereich wirst du besonders viele Ameisenhaufen antreffen. Daher auch Ameisensteig genannt.<br/><br/>Mit der Quizrally verlässt du den Wurzelpark, jedoch kannst du auch dein Wissen über die Natur prüfen.<br/><br/>Die Quizrally erstreckt sich über einen Steig und Weg mit einer Länge von ca. 800 Meter. Du erhälst im Anschluss der Quizrally auf Wunsch einen kostenlosen Wurzeltaler.<br/><br/>Wir freuen uns natürlich, wenn du im Anschluss auch etwas hungrig bzw. durstig geworden bist und uns einen Besuch in der Buschenschenke abstatten würdest.<br/><br/>Ansonsten wünschen wir dir viel Spaß beim Erkunden, Spielen und Wandern.',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Guide/Audio/HauptinfoWP.mp3',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'url' => 'INFO16',
            'name' => 'INFO16',
            'url_to_image' => 'http://www.wurzelpark.at/App/Guide/Bilder/Wildsau.jpg',
            'url_to_image2' => 'http://www.wurzelpark.at/App/Guide/Bilder/Wildschweine.jpg'
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '17',
            'locale' => 'de',
            'title' => 'Die Wildsau',
            'text' => 'Die Wildsau geschnitzt aus einem Stück Lärchenholz. In der Natur ist eine Wildsau kein Schimpfwort, sondern ein  weiblichen Wildschwein, welches schon  Ferkel geboren hat.',
            'url_to_audio' => '',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'url' => 'INFO17',
            'name' => 'INFO17',
            'url_to_image' => 'http://www.wurzelpark.at/App/Guide/Bilder/Vogelzwitschersteig.jpg',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '18',
            'locale' => 'de',
            'title' => 'Vogelzwitschersteig',
            'text' => 'Am Vogelzwitschersteig hast du die Möglichkeit 10 heimische Vogelstimmen zu hören. Halte die Taste mindestens 7 Sekunden lang und danach so lange gedrückt, wie du die Vogelstimmen hören willst.',
            'url_to_audio' => '',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'url' => 'INFO18',
            'name' => 'INFO18',
            'url_to_image' => 'http://www.wurzelpark.at/App/Guide/Bilder/Holzbiene.jpg',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '19',
            'locale' => 'de',
            'title' => 'Holzbiene',
            'text' => 'Insekten größer darzustellen wie sie in der Natur vorkommen ist eine der größten Herausforderungen. Jedoch macht es dann Freude, wenn man das Ergebnis sieht. Diese Biene wurde im Jahr 2016 von Erich Jankl erschaffen.<br/><br/>Bienen gelten als sehr nützliche Insekten. Sie sind neben der Produktion von Honig vor allem für die Bestäubung von Pflanzen sehr wichtig.',
            'url_to_audio' => '',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'url' => 'INFO19',
            'name' => 'INFO19',
            'url_to_image' => 'http://www.wurzelpark.at/App/Guide/Bilder/HeulendeWoelfe.jpg',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '20',
            'locale' => 'de',
            'title' => 'Die heulenden Wölfe',
            'text' => 'Diese Figur entstammt aus einer Esche mit mehreren Stammverzweigungen.<br/><br/>Daher bestand die Möglichkeit zwei Wölfe aus einem Baum zu schnitzen.<br/><br/>Das schwierige daran war das sehr harte Holz der Esche. Diese Figur wurde ausschließlich mit der Motorsäge bearbeitet und hergestellt.<br/><br/>Erschaffungsjahr 2010',
            'url_to_audio' => '',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'url' => 'INFO20',
            'name' => 'INFO20',
            'url_to_image' => 'http://www.wurzelpark.at/App/Guide/Bilder/Pferdekoepfe.jpg',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '21',
            'locale' => 'de',
            'title' => 'Die Pferdeköpfe',
            'text' => 'Diese zwei Pferdeköpfe sind aus einem Kastanienbaum geschnitzt worden.<br/><br/>Dieser Baum hatte zwei Stammausläufer. Dadurch war es möglich, aus einem Baum zwei Köpfe in vollem Umfang zu schnitzen.',
            'url_to_audio' => '',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'url' => 'INFO21',
            'name' => 'INFO21',
            'url_to_image' => 'http://www.wurzelpark.at/App/Guide/Bilder/Edelweiss.jpg',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '22',
            'locale' => 'de',
            'title' => 'Das Edelweiß',
            'text' => 'Dieses Edelweiß wurde aus einer Lärchenwurzel geschaffen.<br/><br/>Die unüblich flache Ausbreitung der Lärchenwurzel hat es möglich gemacht daraus eine dem Edelweiß ähnliche Skulptur zu erschaffen.',
            'url_to_audio' => '',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'url' => 'INFO22',
            'name' => 'INFO22',
            'url_to_image' => '',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '23',
            'locale' => 'de',
            'title' => 'Informationen zur App Anwendung',
            'text' => 'Nun berücksichtige bitte, dass ein weißer QR-Code Teil des <b>Quizweges</b> ist, grüne QR-Codes sind Teil des <b>Wurzelguides</b>.<br/><br/>Viel Spaß!',
            'url_to_audio' => '',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);
    }
}
