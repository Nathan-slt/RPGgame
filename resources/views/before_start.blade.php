<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sonic RPG - Start Screen</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DotGothic16&display=swap" rel="stylesheet">

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: black;
            font-family: "DotGothic16", sans-serif;
        }
        .start-button {
            color: white;
            font-size: 80px;
            transition: 0.2s;
            text-decoration: none;
        }
        .start-button:hover {
            transform: scale(1.05);
        }
        .start-button:active {
            color: rgb(0, 217, 255);
        }
    </style>
</head>

<body>

    <a href="/title_screen?play=1" class="start-button">Começar</a>

</body>
</html>