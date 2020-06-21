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
                        <h3 class="card-title">Credit Debit Manually</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    {!! Form::open(['route' => 'creditDebitManuallies.store']) !!}

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

