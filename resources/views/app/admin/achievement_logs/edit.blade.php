@extends('adminlte::page')
@section('title', 'Achievement Log')
@section('content_header')
    <h1>Achievement Log</h1>
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
                        <h3 class="card-title">Edit Achievement Log - #{{$achievementLog->id}}</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    {!! Form::model($achievementLog, ['route' => ['achievementLogs.update', $achievementLog->id], 'method' => 'patch']) !!}

                        @include('app.admin.achievement_logs.fields')

                   {!! Form::close() !!}

                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
@endsection