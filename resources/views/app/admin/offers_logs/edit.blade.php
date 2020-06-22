@extends('adminlte::page')
@section('title', 'Offers Log')
@section('content_header')
    <h1>Offers Log</h1>
@stop
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            @include('adminlte-templates::common.errors')
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Offers Log - #{{$offersLog->id}}</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    {!! Form::model($offersLog, ['route' => ['offersLogs.update', $offersLog->id], 'method' => 'patch']) !!}

                        @include('app.admin.offers_logs.fields')

                   {!! Form::close() !!}

                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
@endsection