<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Wurzelpark Arrach - Error</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

    </head>
    <body>
    <div class = "container">
        <div class="row">
            <div class = "col-md-3"><h3>Ein Fehler ist aufgetreten.</h3> </div>
        </div>

        <div class="row">
            <div class = "col-md-3">{!!  $error_message !!}</div>
        </div>

    </div>
    </body>
</html>
