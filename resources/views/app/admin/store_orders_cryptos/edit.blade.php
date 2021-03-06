@extends('adminlte::page')
@section('title', 'Store Orders Crypto')
@section('content_header')
    <h1>Store Orders Crypto</h1>
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
                        <h3 class="card-title">Edit Store Orders Crypto - #{{$storeOrdersCrypto->id}}</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    {!! Form::model($storeOrdersCrypto, ['route' => ['storeOrdersCryptos.update', $storeOrdersCrypto->id], 'method' => 'patch']) !!}

                        @include('app.admin.store_orders_cryptos.fields')

                   {!! Form::close() !!}

                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
@endsection