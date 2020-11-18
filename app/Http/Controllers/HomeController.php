<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function not()
     {

       return view('home.not');
     }

    public function films()
    {
      $films = App\Films::all();
      $category_films = App\CategoryFilms::all();

      return view('home.films.index', compact('films','category_films'));
    }

    public function filmOne($id)
    {
      $films = App\Films::find($id);
      $category_films = App\CategoryFilms::all();

      return view('home.films.onefilm', compact('id','category_films', 'films'));
    }

    public function showCategoryFilms($cat_slug)
    {
      $category_films = App\CategoryFilms::all();
      $films = App\Films::where('category', $cat_slug)->orWhere('category_to', $cat_slug)->orWhere('category_tre', $cat_slug)->get();

      return view('home.films.showcategory', compact('films','category_films'));
    }

    public function books()
    {
      $books = App\Books::all();
      $category_books = App\CategoryBooks::all();

      return view('home.books.index', compact('books','category_books'));
    }

    public function booksOne($id)
    {
      $books = App\Books::find($id);
      $category_books = App\CategoryBooks::all();

      return view('home.books.onebook', compact('id','category_books', 'books'));
    }

    public function showCategoryBooks($cat_slug)
    {
      $category_books = App\CategoryBooks::all();
      $books = App\Books::where('category', $cat_slug)->get();

      return view('home.books.showcategory', compact('books','category_books'));
    }

    public function downloadBook($file_name) {
        $file_path = storage_path("library". "\\" .$file_name);
        return response()->download($file_path);
    }
}
