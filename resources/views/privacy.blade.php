@extends('layouts.app')

@section('content')
    @include('layouts.errors')
    @include('layouts.error')
    @include('layouts.success')

    <h3>{{ __("messages.message_privacy") }}</h3>
    <hr>
    <h4>Grundlegendes</h4>
    <p>Diese Datenschutzerklärung soll die Nutzer dieser Website über die Art, den Umfang und den Zweck der Erhebung
        und Verwendung personenbezogener Daten durch den Websitebetreiber "Wurzelpark Arriach" informieren.</p>
    <p>Der Websitebetreiber nimmt Ihren Datenschutz sehr ernst und behandelt Ihre personenbezogenen Daten
        vertraulich und entsprechend der gesetzlichen Vorschriften. Da durch neue Technologien und die ständige
        Weiterentwicklung dieser Webseite Änderungen an dieser Datenschutzerklärung vorgenommen werden können,
        empfehlen wir Ihnen sich die Datenschutzerklärung in regelmäßigen Abständen wieder durchzulesen.</p>
    <p>Definitionen der verwendeten Begriffe (z.B. “personenbezogene Daten” oder “Verarbeitung”)
        finden Sie in Art. 4 DSGVO.</p>

    <h4>Cookies</h4>
    <p>Diese Website verwendet CSRF-Cookies um Website-übergreifende Anfragenfälschungen zu verhindern. Sind Sie als
        Benutzer eingeloggt, werden Session-Cookies verwendet um den Login Status Website-übergreifend zu
        gewährleisten.
        Gängige Browser bieten die Einstellungsoption, Cookies nicht zuzulassen. Hinweis: Es ist nicht gewährleistet,
        dass Sie auf alle Funktionen dieser Website ohne Einschränkungen zugreifen können, wenn Sie entsprechende
        Einstellungen vornehmen.</p>

    <h4>Erfassung und Verarbeitung personenbezogener Daten</h4>
    <p>Wenn Sie sich für den Quizweg registrieren, müssen Sie Ihren Namen, einen Benutzernamen, Ihre E-Mail-Adresse,
     ein Passwort, das Geburtsjahr sowie eine Sprache angeben. Die eingetragenen Daten müssen dabei von Ihnen
        korrekt eingetragen sein.</p>
    <p>Wir verarbeiten personenbezogene Daten nur nach ausdrücklicher Erlaubnis der betreffenden Nutzer und
        unter Einhaltung der geltenden Datenschutzbestimmungen.</p>
    <p>Die von Ihnen eingegebenen Daten werden dazu verwendet, um nach Abschluss des Quizweges eine Urkunde in Form
        einer PDF-Datei an Ihre E-Mail-Adresse zu senden. Diese beinhaltet Ihren Namen. Der Benutzername und das
        eingegebene Passwort werden ausschließlich zur eindeutigen Identifizierung beim Login verwendet. Das Passwort
        wird dabei verschlüsselt und nicht als Klartext gespeichert. Wir behalten uns vor, statistische Auswertungen
        über das Alter der TeilnehmerInnen des Quizweges vorzunehmen, dazu wird das Geburtsjahr des Quizteilnehmers
        benötigt. Die Eingabe der Sprache ist notwendig, um die Inhalte des Quizes, des Fotoalbums sowie der Postkarten-
        Generierung in der entsprechende Sprache anzubieten. 
    </p>

    <h4>Rechte des Nutzers</h4>
    <p>Sie haben als Nutzer das Recht, auf Antrag eine kostenlose Auskunft darüber zu erhalten, welche
        personenbezogenen Daten über Sie gespeichert wurden. Sie haben außerdem das Recht auf Berichtigung falscher
        Daten und auf die Verarbeitungseinschränkung oder Löschung Ihrer personenbezogenen Daten. Falls zutreffend,
        können Sie auch Ihr Recht auf Datenportabilität geltend machen. Sollten Sie annehmen, dass Ihre Daten
        unrechtmäßig verarbeitet wurden, können Sie eine Beschwerde bei der zuständigen Aufsichtsbehörde
        einreichen.</p>

    <h4>Löschung von Daten</h4>
    <p>Sofern Ihr Wunsch nicht mit einer gesetzlichen Pflicht zur Aufbewahrung von Daten
        (z. B. Vorratsdatenspeicherung) kollidiert, haben Sie ein Anrecht auf Löschung Ihrer Daten. Von uns
        gespeicherte Daten werden, sollten sie für ihre Zweckbestimmung nicht mehr vonnöten sein und es keine
        gesetzlichen Aufbewahrungsfristen geben, gelöscht. Falls eine Löschung nicht durchgeführt werden kann, da
        die Daten für zulässige gesetzliche Zwecke erforderlich sind, erfolgt eine Einschränkung der
        Datenverarbeitung. In diesem Fall werden die Daten gesperrt und nicht für andere Zwecke verarbeitet.
    </p>

    <h4>Widerspruchsrecht</h4>
    <p>Nutzer dieser Webseite können von ihrem Widerspruchsrecht Gebrauch machen und der Verarbeitung ihrer
        personenbezogenen Daten zu jeder Zeit widersprechen sowie die Löschung von Fotos, auf denen sie
        abgebildet sind, beantragen. Wenn Sie eine Berichtigung, Sperrung, Löschung oder
        Auskunft über die zu Ihrer Person gespeicherten personenbezogenen Daten wünschen oder Fragen
        bzgl. der Erhebung, Verarbeitung oder Verwendung Ihrer personenbezogenen Daten haben oder
        erteilte Einwilligungen widerrufen möchten, wenden Sie sich bitte an folgende E-Mail-Adresse:
        wurzelpark@gmail.com.
    </p>
    <hr>
@endsection
