@extends('adminlte::page')
@section('title', 'Store Category')
@section('content_header')
    <h1>Store Category</h1>
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
                        <h3 class="card-title">Edit Store Category - #{{$storeCategory->id}}</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    {!! Form::model($storeCategory, ['route' => ['storeCategories.update', $storeCategory->id], 'method' => 'patch']) !!}

                        @include('app.admin.store_categories.fields')

                   {!! Form::close() !!}

                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
@endsection