<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Info Guide</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

</head>
<body>
<div class="row">
    <div class = "col-md-3"><h3>{{ $info_item->information }}</h3> </div>
</div>

<div class="row">
    <div class = "col-md-3">{!!  $info_item->infotext !!}</div>
</div>

<div class="row">
@if($info_item->guidebildpfad != null)
    <div><img src="{{$info_item->guidebildpfad}}" alt="Bild" /></div>
@endif
</div>

<div class="row">
@if($info_item->guidepdfpfad != null)
    <div><a href="{{$info_item->guidepdfpfad}}">PDF</a></div>
@endif
</div>

<div class="row">
@if($info_item->guidebildpfad2 != null)
    <div><img src="{{$info_item->guidebildpfad2}}" alt="Bild2" /></div>
@endif
</div>

<div class="row">
@if($info_item->guideaudiopfad != null)
    <audio controls>
        <source src="{{$info_item->guideaudiopfad}}" type="audio/mp3">Audio not available on your device</audio>
@endif
</div>

<div class="row">
@if($info_item->guidevideopfad != null)
    <video controls>
        <source src="{{$info_item->guidevideopfad}}" type="video/mp4">Audio not available on your device</video>
@endif
</div>

</body>
</html>
