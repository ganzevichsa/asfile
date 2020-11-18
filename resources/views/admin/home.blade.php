@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="bd-brand-logos">
            <button onclick="document.location='admin'" class="bd-brand-item hov">
              <span class="h1">Админ панель</span>
            </button>
            <button onclick="document.location='home/films'" class="bd-brand-item inverse">
              <span class="h1">Фильмы</span>
            </button>
            <button onclick="document.location='home/multfilms'" class="bd-brand-item hov">
              <span class="h1">Мультфильмы</span>
            </button>
          </div>
          <div class="bd-brand-logos ">
            <button onclick="document.location='home/books'" class="bd-brand-item bg-primary text-white">
              <span class="h1">Книги</span>
            </button>
            <button onclick="document.location='home/audiobooks'" class="bd-brand-item hov">
              <span class="h1">Аудиокники</span>
            </button>
            <button onclick="document.location='home/audiostories'" class="bd-brand-item bg-info text-white">
              <span class="h1">Аудиосказки</span>
            </button>
          </div>
            <div class="bd-brand-logos">
                <button onclick="document.location='home/musics'" class="bd-brand-item hov">
                    <span class="h1">Музыка</span>
                </button>
                <button onclick="document.location='home/training'" class="bd-brand-item inverse">
                    <span class="h1">Обучение</span>
                </button>
                <button onclick="document.location='home/online'" class="bd-brand-item hov">
                    <span class="h1">Онлайн</span>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
