@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="">
                    @foreach($category_books as $categoryItem)
                        <button class="dropdown-item" onclick="document.location='/home/books/category/{{$categoryItem->name}}'">{{$categoryItem->name}}</button>
                    @endforeach
                </div>
            </div>
            <div class="col-md-9">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Книги</li>
                    </ol>
                </nav>
                @foreach($books as $booksItem)
                    <button onclick="document.location='/home/book/{{$booksItem->id}}'" class="cardto btn-video-smartfon">
                        <img src="{{ asset('images/library') }}/{{$booksItem->image}}" class="card-img-top">
                        <div class="card-body">
                            <h6 class="card-title">{{$booksItem->name}}</h6>
                        </div>
                    </button>
                @endforeach
            </div>
        </div>
    </div>
@endsection
