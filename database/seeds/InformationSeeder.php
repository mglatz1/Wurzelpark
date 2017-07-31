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
            'url_to_image' => '',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '17',
            'locale' => 'de',
            'title' => 'Der Frosch',
            'text' => 'Diese Skulptur wurde von Herrn Süssenbacher aus Himmelberg im Jahr 2004 geschnitzt.<br/>Reine Handarbeit.',
            'url_to_audio' => '',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'url' => 'INFO17',
            'name' => 'INFO17',
            'url_to_image' => 'http://www.wurzelpark.at/App/Guide/Bilder/Wildsau.jpg',
            'url_to_image2' => 'http://www.wurzelpark.at/App/Guide/Bilder/Wildschweine.jpg'
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '18',
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
            'url' => 'INFO18',
            'name' => 'INFO18',
            'url_to_image' => 'http://www.wurzelpark.at/App/Guide/Bilder/Vogelzwitschersteig.jpg',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '19',
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
            'url' => 'INFO19',
            'name' => 'INFO19',
            'url_to_image' => 'http://www.wurzelpark.at/App/Guide/Bilder/Holzbiene.jpg',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '20',
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
            'url' => 'INFO20',
            'name' => 'INFO20',
            'url_to_image' => 'http://www.wurzelpark.at/App/Guide/Bilder/HeulendeWoelfe.jpg',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '21',
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
            'url' => 'INFO21',
            'name' => 'INFO21',
            'url_to_image' => 'http://www.wurzelpark.at/App/Guide/Bilder/Pferdekoepfe.jpg',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '22',
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
            'url' => 'INFO22',
            'name' => 'INFO22',
            'url_to_image' => 'http://www.wurzelpark.at/App/Guide/Bilder/Edelweiss.jpg',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '23',
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
            'url' => 'INFO23',
            'name' => 'INFO23',
            'url_to_image' => '',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '24',
            'locale' => 'de',
            'title' => 'Informationen zur App Anwendung',
            'text' => 'Nun berücksichtige bitte, dass ein weißer QR-Code Teil des <b>Quizweges</b> ist, grüne QR-Codes sind Teil des <b>Wurzelguides</b>.<br/><br/>Viel Spaß!',
            'url_to_audio' => '',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'url' => 'INFO24',
            'name' => 'INFO24',
            'url_to_image' => '',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '25',
            'locale' => 'de',
            'title' => 'Informationen zum Quizwanderweg',
            'text' => 'Willst du am Quizwanderweg teilnehmen scanne bitte die weißen QR Codes und beantworte die Fragen.<br/><br/>Entlang des Quizweges sind 12 Stationen zu finden.<br/><br/>Am Ende der Quizwanderung drückst du rechts oben im Menü auf den Button "Quizweg beenden". Danach erhältst du eine schöne Erinnerungsurkunde an deine E-mail Adresse gesendet.<br/><br/>Wir wünschen dir viel Spaß!',
            'url_to_audio' => '',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information')->insert([
        'created_at' => Carbon::now(),
        'url' => 'INFO26',
        'name' => 'INFO26',
        'url_to_image' => 'http://www.wurzelpark.at/App/Guide/Bilder/BilderVogelzwitschersteig/Grünspecht.jpg',
        'url_to_image2' => ''
    ]);

        DB::table('information_translations')->insert([
            'information_id' => '26',
            'locale' => 'de',
            'title' => 'Grünspecht',
            'text' => 'Der Grünsprecht ist ein Standvogel.<br/><br/><b>Lebensraum</b>: Laubmischwälder,  Streuobstwiesen, Feldgehölze;<br/><br/><b>Brutzeit</b>: April bis Juli in selbst geschlagenen oder vorhandenen Baumhöhlen.<br/><br/><b>Nahrung</b>: Ameisen, Insekten,  Beeren.',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Guide/Audio/Vogelstimmen/Grünspecht.mp3',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => 'https://youtu.be/8WNiCH5gA4A'
        ]);

        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'url' => 'INFO27',
            'name' => 'INFO27',
            'url_to_image' => 'http://www.wurzelpark.at/App/Guide/Bilder/BilderVogelzwitschersteig/Kuckuck.jpg',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '27',
            'locale' => 'de',
            'title' => 'Kuckuck',
            'text' => '<b>Lebensraum</b>: Laubwälder und Parks. Ist ein Zugvogel, überwintert im tropischen Afrika.<br/><br/><b>Brutzeit</b>: Mai bis Juli. Ist einziger heimischer Brutparasit (legt das Ei in ein Singvogelnest und wirft die Eier des Wirtes hinaus).<br/><br/><b>Nahrung</b>: Ernährt sich von Schmetterlingsraupen.',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Guide/Audio/Vogelstimmen/Kuckuck.mp3',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => 'https://youtu.be/oyTB-QP0X8U'
        ]);

        DB::table('information')->insert([
        'created_at' => Carbon::now(),
        'url' => 'INFO28',
        'name' => 'INFO28',
        'url_to_image' => 'http://www.wurzelpark.at/App/Guide/Bilder/BilderVogelzwitschersteig/Kohlmeise.jpg',
        'url_to_image2' => ''
    ]);

        DB::table('information_translations')->insert([
            'information_id' => '28',
            'locale' => 'de',
            'title' => 'Kohlmeise',
            'text' => 'Die Kohlmeise ist ein Standvogel.<br/><br/><b>Lebensraum</b>: Wälder, Gehölze, Parks;<br/><br/><b>Brutzeit</b>: März bis Juli; Nest in Baumhöhlen oder Nistkästen.<br/><br/><b>Nahrung</b>: Insekten und Samen.',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Guide/Audio/Vogelstimmen/Kohlmeise.mp3',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'url' => 'INFO29',
            'name' => 'INFO29',
            'url_to_image' => 'http://www.wurzelpark.at/App/Guide/Bilder/BilderVogelzwitschersteig/Kolkrabe.jpg',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '29',
            'locale' => 'de',
            'title' => 'Kolkrabe',
            'text' => 'Der Kolkrabe ist ein Standvogel.<br/><br/><b>Lebensraum</b>: Alpen und Vorland, Nordostdeutschland;<br/><br/><b>Brutzeit</b>: Februar bis Juni. Nest in Felswänden und Bäumen 4 bis 6 Eier.  Brutdauer 20 bis 21 Tage.<br/><br/><b>Nahrung</b>: Tierisch und pflanzlich.',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Guide/Audio/Vogelstimmen/Kolkrabe.mp3',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'url' => 'INFO30',
            'name' => 'INFO30',
            'url_to_image' => 'http://www.wurzelpark.at/App/Guide/Bilder/BilderVogelzwitschersteig/Schleiereule.jpg',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '30',
            'locale' => 'de',
            'title' => 'Schleiereule',
            'text' => 'Die Schleiereule ist eine sehr helle, langbeinige Eule und ein Standvogel.<br/><br/><b>Lebensraum</b>: In waldarmen Siedlungsgebieten.<br/><br/><b>Brutzeit</b>: Von März bis Juli in Dachböden und Kirchtürmen.<br/><br/><b>Nahrung</b>: Als Jäger von Mäusen und Ratten wird die Schleiereule vielerorts in Mitteleuropa von Landwirten geschätzt.',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Guide/Audio/Vogelstimmen/Schleiereule.mp3',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'url' => 'INFO31',
            'name' => 'INFO31',
            'url_to_image' => 'http://www.wurzelpark.at/App/Guide/Bilder/BilderVogelzwitschersteig/Waldkauz.jpg',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '31',
            'locale' => 'de',
            'title' => 'Waldkauz',
            'text' => 'Der Waldkauz ist ein Standvogel.<br/><br/><b>Lebensraum</b>: Lichte Wälder, Gehölze mit genug Höhlen;<br/><br/><b>Brutzeit</b>: März bis Juni; nistet in Baum oder Felshöhlen, Mauerlöchern.<br/><br/><b>Nahrung</b>: Jagt Kleinsäuger Vögel und Amphibien; ist Nachtaktiv.',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Guide/Audio/Vogelstimmen/Waldkauz.mp3',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'url' => 'INFO32',
            'name' => 'INFO32',
            'url_to_image' => 'http://www.wurzelpark.at/App/Guide/Bilder/BilderVogelzwitschersteig/Rauchschwalbe.jpg',
            'url_to_image2' => 'http://www.wurzelpark.at/App/Guide/Bilder/BilderVogelzwitschersteig/Rauchschwalbe2.jpg'
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '32',
            'locale' => 'de',
            'title' => 'Rauchschwalbe',
            'text' => 'Die Rauchschwalbe ist ein Zugvogel.<br/><br/><b>Lebensraum</b>: In Dörfern und offener  Kulturlandschaft; überwintert südlich der Sahara.<br/><br/><b>Brutzeit</b>: Mai bis August; 2-3 Bruten.<br/><br/><b>Nahrung</b>: Fliegende Kleininsekten.',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Guide/Audio/Vogelstimmen/Rauchschwalbe.mp3',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'url' => 'INFO33',
            'name' => 'INFO33',
            'url_to_image' => 'http://www.wurzelpark.at/App/Guide/Bilder/BilderVogelzwitschersteig/Mäusebussard.jpg',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '33',
            'locale' => 'de',
            'title' => 'Mäusebussard',
            'text' => 'Der Mäusebussard ist ein Standvogel.<br/><br/><b>Lebensraum</b>: offenes Kulturland, Wälder, Feldgehölze;<br/><br/><b>Brutzeit</b>: März bis Juli. Horst hoch in den Bäumen am Waldrand.<br/><br/><b>Nahrung</b>: Ansitzjäger auf Kleinsäuger, Jungvögel, Reptilien, Amphibien und auch Aas.',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Guide/Audio/Vogelstimmen/Mäusebussard.mp3',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'url' => 'INFO34',
            'name' => 'INFO34',
            'url_to_image' => 'http://www.wurzelpark.at/App/Guide/Bilder/BilderVogelzwitschersteig/Haussperling.jpg',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '34',
            'locale' => 'de',
            'title' => 'Haussperling',
            'text' => '<b>Brutzeit</b>: Ende April bis Ausgust.<br/><br/><b>Lebensraum</b>: In Nischen und Höhlen, fast auf der ganzen Welt verbreitet außer in Tropen.<br/><br/><b>Nahrung</b>: Sämereien',
            'url_to_audio' => 'http://www.wurzelpark.at/App/Guide/Audio/Vogelstimmen/Haussperling.mp3',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'url' => 'INFO36',
            'name' => 'INFO36',
            'url_to_image' => 'http://www.wurzelpark.at/App/Guide/Bilder/Feldhase.jpg',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '35',
            'locale' => 'de',
            'title' => 'Der Feldhase',
            'text' => 'Der Feldhase ist ein Säugetier aus der Familie der Hasen. Die Art besiedelt offene und halboffene Landschaften. Das natürliche Verbreitungsgebiet umfasst weite Teile der südwestlichen Paläarktis; durch zahlreiche Einbürgerungen kommt die Art heute jedoch auf fast allen Kontinenten vor. Aufgrund der starken Intensivierung der Landwirtschaft ist der Bestand des Feldhasen in vielen Regionen Europas rückläufig. Die Schutzgemeinschaft Deutsches Wild erklärte den Feldhasen für das Jahr 2001 und erneut 2015 zum Tier des Jahres.',
            'url_to_audio' => '',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);

        DB::table('information')->insert([
            'created_at' => Carbon::now(),
            'url' => 'INFO37',
            'name' => 'INFO37',
            'url_to_image' => '',
            'url_to_image2' => ''
        ]);

        DB::table('information_translations')->insert([
            'information_id' => '36',
            'locale' => 'de',
            'title' => 'Der Fotopoint',
            'text' => 'Gehe auf die Webseite <a href="http://www.wurzelpark.at" target="_blank">wwww.wurzelpark.at</a>. Dort kannst du die Bilder abrufen.',
            'url_to_audio' => '',
            'url_to_video' => '',
            'url_to_pdf' => '',
            'url_to_youtube' => ''
        ]);
    }
}
