<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\movies;

class moviesController extends Controller
{
    public function index(Request $request){
        $movie_title = $request->input('looking_for');
        
        if ($movie_title) {
            $url = "https://api.themoviedb.org/3/search/movie?api_key=" . config('services.tmdb.api_key') . "&language=ja&query=" . urlencode($movie_title);
        } else {
            $url = "https://api.themoviedb.org/3/movie/popular?api_key=" . config('services.tmdb.api_key') . "&language=ja";
        }
        $movies = Http::get($url)->json();
    
        return view('movies.index')->with(['movies' => $movies]);
    }
    
   public function detail($id){
        $url = "https://api.themoviedb.org/3/movie/" . $id . "?api_key=" .config('services.tmdb.api_key') . "&language=ja";
        $movie = Http::get($url)->json();
        
        return view('movies.detail', ['movie' => $movie]);
        
    }
    
}
