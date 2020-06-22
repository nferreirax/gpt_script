@extends('adminlte::page')
@section('title', 'Users Achievement')
@section('content_header')
    <h1>Users Achievement</h1>
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
                        <h3 class="card-title">Edit Users Achievement - #{{$usersAchievement->id}}</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    {!! Form::model($usersAchievement, ['route' => ['usersAchievements.update', $usersAchievement->id], 'method' => 'patch']) !!}

                        @include('app.admin.users_achievements.fields')

                   {!! Form::close() !!}

                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
@endsection