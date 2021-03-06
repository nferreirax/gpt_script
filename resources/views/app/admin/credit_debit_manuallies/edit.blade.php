@extends('adminlte::page')
@section('title', 'Credit Debit Manually')
@section('content_header')
    <h1>Credit Debit Manually</h1>
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
                        <h3 class="card-title">Edit Credit Debit Manually - #{{$creditDebitManually->id}}</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    {!! Form::model($creditDebitManually, ['route' => ['creditDebitManuallies.update', $creditDebitManually->id], 'method' => 'patch']) !!}

                        @include('app.admin.credit_debit_manuallies.fields')

                   {!! Form::close() !!}

                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
@endsection