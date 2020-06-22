@extends('adminlte::page')
@section('title', 'Offerwall Networks')
@section('content_header')
    <h1>Offerwall Networks</h1>
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
                        <h3 class="card-title">Edit Offerwall Networks - #{{$offerwallNetworks->id}}</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    {!! Form::model($offerwallNetworks, ['route' => ['offerwallNetworks.update', $offerwallNetworks->id], 'method' => 'patch']) !!}

                        @include('app.admin.offerwall_networks.fields')

                   {!! Form::close() !!}

                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
@endsection