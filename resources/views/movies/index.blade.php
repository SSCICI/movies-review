<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
<div class="search">
    
    <form method="GET" action="{{ route('home') }}">
        <input type="text" name="looking_for" placeholder="Movie Title..." size="40x40">
        <button type="submit">search</button>
    </form>
</div>

<div class="movies-container">
    @foreach ($movies["results"] as $movie)
        <div class="movie-data">
            <a href="/movies/ {{ $movie["id"] }}">
                @if ($movie["poster_path"])
                    <p><img src="https://image.tmdb.org/t/p/w200/{{ $movie['poster_path'] }}" class="card-img" alt=""></p>
                @endif
            </a>
            <p>{{ $movie["title"]}}</p>
            <p><a href="/movies/{{ $movie["id"]}}">詳細へ</a></p>
        </div>
    @endforeach
</div>

</body>
</html>