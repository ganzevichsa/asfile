@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                @foreach($category_books as $categoryItem)
                    <button class="dropdown-item" onclick="document.location='/home/books/category/{{$categoryItem->name}}'">{{$categoryItem->name}}</button>
                @endforeach
            </div>
            <div class="col-md-9">
                <div class="" style="padding-top: 40px">
                    <div class="">
                        <div class="user-profile m-t-15">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="user-photo m-b-30">
                                        <img class="img-responsive" src="{{ asset('images/library/'.$books->image) }}" alt="" style="max-width: 100%">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="user-profile-name dib">{{$books->name}}</div>
                                    <div class="custom-tab user-profile-tab">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#1" aria-controls="1" role="tab" data-toggle="tab">About</a></li>
                                        </ul>
                                        <div class="tab-content" style="margin-top: 25px">
                                            <div role="tabpanel" class="tab-pane active" id="1">
                                                <div class="contact-information">
                                                    <div class="phone-content">
                                                        <span class="contact-title">Автор:</span>
                                                        <span class="phone-number">{{$books->author}}</span>
                                                    </div>
                                                    <div class="phone-content">
                                                        <span class="contact-title">Категория:</span>
                                                        <span class="phone-number">{{$books->category}}</span>
                                                    </div>
                                                    <div class="phone-content">
                                                        <span class="contact-title">Описание книги:</span>
                                                        <span class="phone-number">{{$books->description}}</span>
                                                    </div>
                                                </div>
                                                <div class="prdt_add_to_cart">
                                                    <a href="{{ route('upload_download',['filename' => $books->name2]) }}" type="button" class="btn btn-primary btn-rounded  m-l-5">Скачать</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
