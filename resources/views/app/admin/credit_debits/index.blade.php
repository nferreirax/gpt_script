@extends('adminlte::page')
@section('title', 'Credit Debits')
@section('content_header')
    <h1>Credit Debits</h1>
@stop

@section('content')

<section class="content">
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> <a class="btn btn-primary pull-right" href="{{ route('creditDebits.create') }}">Add New</a></h3>
                </div>               
                <div class="card-body">
                    <div class="clearfix"></div>

                    @include('flash::message')
                    @include('app.admin.credit_debits.table')               
                </div>             
            </div>
        </div>
    </div>
</section>

@endsection
@section('css')

@stop
