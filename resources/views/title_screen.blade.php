<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sonic RPG</title>
    <link rel="stylesheet" href="{{ asset('css/title_screen.css') }}">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">
</head>

<body>

<audio id="title_music" src="{{ asset('audio/title_music.mp3') }}" preload="auto" loop></audio>

<div id="fade" class="fade-overlay"></div>
<div class="title-screen">
    <div class="logo"> 
        <img src="{{asset('Images/RPG_TITLE.png')}}" alt="Sonic Logo">
    </div>
    
    <div class="menu">
        <a href="/new_game" class="button">Jogar</a>
        <a href="/extras" class="button">Extras</a>
    </div>
</div>

<script src="{{ asset('js/title_music.js') }}">
</script>
</body>

<footer>
    <p>&copy; 2025 Bebos.SA</p>
</footer>
</html>
