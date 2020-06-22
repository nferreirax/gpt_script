@extends('adminlte::page')
@section('title', 'Offerwall Networks')
@section('content_header')
    <h1>Offerwall Networks</h1>
@stop

@section('content')

<section class="content">
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> <a class="btn btn-primary pull-right" href="{{ route('offerwallNetworks.create') }}">Add New</a></h3>
                </div>               
                <div class="card-body">
                    <div class="clearfix"></div>

                    @include('flash::message')
                    @include('app.admin.offerwall_networks.table')               
                </div>             
            </div>
        </div>
    </div>
</section>

@endsection
@section('css')

@stop
