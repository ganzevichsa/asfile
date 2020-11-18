@extends('layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Редактор книг
                <small>Optional description</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <div class="col-md-6">
                {!! Form::open(array('route'=>'books.add','role'=>'form','files'=>true)) !!}
                <div class="box-body">

                    <div class="form-group">
                        {!! Form::label('name','Название книги') !!}
                        {!! Form::text('name', $value = null, $attributes = array('class'=>'form-control border1px','id'=>'img_name','required')) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('status','Статус') !!}
                        {!! Form::text('status', $value = null, $attributes = array('class'=>'form-control border1px','id'=>'img_name','required')) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('author','Автор') !!}
                        {!! Form::text('author', $value = null, $attributes = array('class'=>'form-control border1px','id'=>'img_name','required')) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('category','Категория') !!}
                        {{--                            {!! Form::select('category', $resultsto, $value = null, $attributes = array('class'=>'form-control','id'=>'img_name','required')) !!}--}}
                        <select class="form-control border1px" name="category" multiple="multiple">
                            <option selected="selected">Без категории</option>
                            @foreach ($category as $category_toItem)
                                <option value="{{ $category_toItem->name }}">{{ $category_toItem->name }}</option>
                            @endforeach
                        </select>
                        <small>Если вы не нашли категорию, выберите 'Без категории' и обратитесь к системному администратору</small>

                    </div>

                    <div class="form-group">
                        {!! Form::label('description','Описание книги') !!}
                        {!! Form::textarea('description', $value = null, $attributes = array('class'=>'form-control border1px','id'=>'img_description','required')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('filename','Загрузите книгу') !!}
                        {!! Form::file('filename') !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('img_filename','Загрузите изображение книги') !!}
                        {!! Form::file('img_filename') !!}
                    </div>



                    {!! Form::hidden('status',$value='active') !!}

                </div><!-- /.box-body -->

                <div class="box-footer">
                    {!! Form::submit('Добавить',$attributes=array('class'=>'btn btn-primary')) !!}
                </div>
                {!! Form::close() !!}

            </div>
            <div class="col-md-6">
                {!! Form::open(array('route'=>'books.category.create','role'=>'form','files'=>true)) !!}
                <div class="box-body">
                    <h5 class="card-title">Добавление категории к разделу фильмы</h5>
                    <div class="form-group">
                        {!! Form::label('name','Название категории') !!}
                        {!! Form::text('name', $value = null, $attributes = array('class'=>'form-control border1px','id'=>'img_name','required')) !!}
                    </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                    {!! Form::submit('Добавить',$attributes=array('class'=>'btn btn-primary')) !!}
                </div>
                {!! Form::close() !!}

            </div>
            <!--------------------------
              | Your Page Content Here |
              -------------------------->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
