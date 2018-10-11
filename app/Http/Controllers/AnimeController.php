<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Anime;
Use Validator;

class AnimeController extends Controller
{
    public function index()
    {
      $animes = new Anime;
      $animes = Anime::where('id', '>', 0)->get();
      return view('animes', ['animes' => $animes]);
    }
}
