<div class="search">
    
    <form method="GET" action="{{ route('home') }}">
        <input type="text" name="looking_for" placeholder="Movie Title..." size="40x40">
        <button type="submit">search</button>
    </form>
</div>

<div class="movies-container">
    @foreach ($movies as $movie) 
        <div class="movie-data">
            <p>{{ $movie -> title }}</p>
            <a href="/movies/ {{ $movie -> id }}">
                @if ($movie -> poster_path)
                    <p>https://image.tmdb.org/t/p/w200/{{ $movie -> poster_path }}</p>
                @endif
            </a>
            <p><a href="/movies/{{ $movie -> id }}">詳細へ</a></p>
        </div>
    @endforeach
</div>