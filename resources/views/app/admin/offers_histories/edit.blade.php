@extends('adminlte::page')
@section('title', 'Offers History')
@section('content_header')
    <h1>Offers History</h1>
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
                        <h3 class="card-title">Edit Offers History - #{{$offersHistory->id}}</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    {!! Form::model($offersHistory, ['route' => ['offersHistories.update', $offersHistory->id], 'method' => 'patch']) !!}

                        @include('app.admin.offers_histories.fields')

                   {!! Form::close() !!}

                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
@endsection