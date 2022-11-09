<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

       

        
    </head>
    <body>
        @foreach ($posts as $post )
        <div>
            <h2>{{$post->title}}</h2>
        </div>
            
        @endforeach

        {{$posts->links()}}
       
    </body>
</html>
