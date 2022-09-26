<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
</head>
<body>

    @if ($numeroCasualeSuVista > 50)
        <h1>Il numero: {{$numeroCasualeSuVista}} è più grande di 50</h1>
    @else
        <h1>Il numero: {{$numeroCasualeSuVista}} è più piccolo o uguale a 50</h1>
    @endif

    <ul>
        @foreach ($listaStudentiSuVista as $singoloStudente)
            <li @if ($loop->first) style="color:red;" @endif >{{$singoloStudente}}</li>
        @endforeach
    </ul>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit excepturi similique facere ratione soluta quo! Impedit sint exercitationem iste a tenetur fugit pariatur nostrum quidem, magni id? Cumque, aspernatur praesentium.</p>

</body>
</html>
