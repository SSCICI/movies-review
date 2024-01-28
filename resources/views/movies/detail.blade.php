<!DOCTYPE html>

<div class="movie-detail">
    <p>{{ $movie['title'] }}</p>
    <p>{{ $movie['release_date'] }}</p>
    @if ($movie['poster_path'])
    <p><img src="https://image.tmdb.org/t/p/w200/{{ $movie['poster_path'] }}" class="card-img" alt=""></p>
    @endif
    <p>{{ $movie['overview'] }}</p>
    {{-- 投稿ページへのリンク --}}
    <a href="/posts/new/{{ $movie['id'] }}">投稿ページへ</a>
</div>