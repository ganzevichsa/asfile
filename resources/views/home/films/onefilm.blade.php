@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            @foreach($category_films as $categoryItem)
                <button class="dropdown-item" onclick="document.location='/home/films/category/{{$categoryItem->name}}'">{{$categoryItem->name}}</button>
            @endforeach
        </div>
        <div class="col-md-9">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/home/films">Фильмы</a></li>
              <li class="breadcrumb-item active" aria-current="page">Фильм {{$films->name}}</li>
            </ol>
          </nav>
            <div class="image">
                <video width="100%" loop muted controls="true" playsinline preload="auto">
                    <source src="{{ asset('films/') }}/{{$films->name2}}" type='video/mp4;'>
                </video>
                @if($films->name3 != NULL)
                <video width="100%" loop muted controls="true" playsinline preload="auto">
                    <source src="{{ asset('films/') }}/{{$films->name3}}" type='video/mp4;'>
                </video>
                @endif
            </div>

        </div>
    </div>
</div>
@endsection
