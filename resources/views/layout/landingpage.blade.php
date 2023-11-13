@extends('/template.templatelandingpage')
@section('content')

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ThemeStarz">

    <title>Condio - Real Estate One Page & Landing Page version selector</title>
    <style>
        body { text-align: center; }
        .buttons a { margin: 0 10px; }
        img { max-width: 100%; }
    </style>
</head>

<body>

<div><img src="description/logo.png"></div>
<div><a href="index-fixed.html"><img src="description/computer.png"></a></div>
<div><img src="description/choose-version.png"></div>
<div class="buttons">
    <a href="index-fixed.html"><img src="description/fixed-navigation.png"></a>
    <a href="index-parallax.html"><img src="description/parallax.png"></a>
    <a href="index-video.html"><img src="description/video.png"></a>
    <a href="index-count-down.html"><img src="description/countdown.png"></a>
    <a href="index-map.html"><img src="description/map.png"></a>
</div>
</body>
</html>

@endsection
