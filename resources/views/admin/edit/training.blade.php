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


            </div>
            <div class="col-md-6">
                {!! Form::open(array('role'=>'form')) !!}
                <div class="box-body">
                    <h5 class="card-title">Добавление категории к разделу обучение</h5>
                    <div class="form-group">
                        {!! Form::label('name','Название категории') !!}
                        {!! Form::text('name', $value = null, $attributes = array('class'=>'form-control border1px','id'=>'img_name','required')) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('color','Цвет кнопки категории') !!}
                        <select class="form-control border1px" name="category[]" multiple="multiple">

                            <option style="background: #3490dc" value="primary">primary</option>
                            <option style="background: #38c172" value="primary">success </option>
                            <option style="background: #e3342f" value="primary">danger </option>
                            <option style="background: #ffed4a" value="primary">warning  </option>
                            <option style="background: #6cb2eb" value="primary">info   </option>
                            <option style="background: #343a40" value="primary">dark    </option>
                            <option style="color: #3490dc" value="primary">link   </option>
                            <option style="color: #212529" value="primary">light    </option>
                        </select>
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
