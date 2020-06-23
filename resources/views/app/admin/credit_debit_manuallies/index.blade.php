@extends('adminlte::page')
@section('title', 'Credit Debit Manuallies')
@section('content_header')
    <h1>Credit Debit Manuallies</h1>
@stop

@section('content')

<section class="content">
    <div class="row">
        <div class="col-12">

            <div class="card">                          
                <div class="card-body">
                    <div class="clearfix"></div>

                    @include('flash::message')
                    @include('app.admin.credit_debit_manuallies.table')               
                </div>             
            </div>
        </div>
    </div>
</section>

@endsection
@section('css')

@stop
