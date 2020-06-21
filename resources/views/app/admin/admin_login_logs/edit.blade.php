@extends('adminlte::page')
@section('title', 'Admin Login Log')
@section('content_header')
    <h1>Admin Login Log</h1>
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
                        <h3 class="card-title">Edit Admin Login Log - #{{$adminLoginLog->id}}</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    {!! Form::model($adminLoginLog, ['route' => ['adminLoginLogs.update', $adminLoginLog->id], 'method' => 'patch']) !!}

                        @include('app.admin.admin_login_logs.fields')

                   {!! Form::close() !!}

                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
@endsection