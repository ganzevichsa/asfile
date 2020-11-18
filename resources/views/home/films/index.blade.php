@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
          <div class="">
              @foreach($category_films as $categoryItem)
                <button class="dropdown-item" onclick="document.location='/home/films/category/{{$categoryItem->name}}'">{{$categoryItem->name}}</button>
              @endforeach
          </div>
        </div>
        <div class="col-md-9">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">Фильмы</li>
            </ol>
          </nav>
            @foreach($films as $filmItem)
              <button onclick="document.location='/home/film/{{$filmItem->id}}'" class="cardto btn-video-smartfon">
                <img src="{{ asset('images/films') }}/{{$filmItem->image}}" class="card-img-top">
                <div class="card-body">
                  <h6 class="card-title">{{$filmItem->name}}</h6>
                </div>
              </button>
            @endforeach
        </div>
    </div>
</div>
@endsection
