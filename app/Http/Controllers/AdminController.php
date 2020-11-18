<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }

    public function panel()
    {
        return view('admin.panel');
    }

    public function editfilms()
    {
        $category = App\CategoryFilms::all();
        return view('admin.edit.films', compact('category'));
    }
    public function FilmsCategoryCreate(Request $request)
    {
        $category = new App\CategoryFilms;
        $category->name = $request->name;
        $category->save();

        return redirect('/admin/edit/films');
    }
    public function FilmsAdd(Request $request)
    {
        $film = new App\Films;
        $film->name = $request->name;
        $film->country = $request->country;
        $film->years = $request->years;
        $film->description = $request->description;
        $film->category = $request->category[0];
//        $film->category_to = $request->category[1];
//        $film->category_tre = $request->category[2];
//        if($request->hasFile('filename'))
//        {
//            $destinationPath=('films');
//            $file = $request->file('filename');
//            $filename=$file->getClientOriginalName();
////            $request->file('filename')->move($destinationPath,time().'_'.$filename);
//            $film->name2 = time().'_'.$filename;
//        }
        if($request->hasFile('img_filename'))
        {
            $destinationPath=('images\films');
            $file = $request->file('img_filename');
            $filename=$file->getClientOriginalName();
            $request->file('img_filename')->move($destinationPath,time().'_'.$filename);
            $film->image = time().'_'.$filename;
            $film->name2 = time().'_'.$filename;
        }
        $film->save();

        return redirect('/admin/edit/films');
    }

    public function editbooks()
    {
        $category = App\CategoryBooks::all();
        return view('admin.edit.books', compact('category'));
    }
    public function BooksCategoryCreate(Request $request)
    {
        $category = new App\CategoryBooks;
        $category->name = $request->name;
        $category->save();

        return redirect('/admin/edit/books');
    }
    public function BooksAdd(Request $request)
    {
        $library = new \App\Book;
        $library->name = $request->name;
        $library->author = $request->author;
        $library->category = $request->category;
        $library->description = $request->description;
        $library->status = $request->status;


        if($request->hasFile('filename'))
        {
            $destinationPath=storage_path('library');
            $file = $request->file('filename');
            $filename=$file->getClientOriginalName();
            $request->file('filename')->move($destinationPath,time().'_'.$filename);
            $library->name2 = time().'_'.$filename;
        }
        if($request->hasFile('img_filename'))
        {
            $destinationPath=('images\library');
            $file = $request->file('img_filename');
            $filename=$file->getClientOriginalName();
            $request->file('img_filename')->move($destinationPath,time().'_'.$filename);
            $library->image = time().'_'.$filename;
        }

        $library->save();

        return redirect('/admin/edit/books');
    }

    public function edittraining()
    {
//        $category = CategoryBook::all();
        return view('admin.edit.training');
    }
}
