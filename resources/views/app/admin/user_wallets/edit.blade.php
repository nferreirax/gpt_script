@extends('adminlte::page')
@section('title', 'User Wallet')
@section('content_header')
    <h1>User Wallet</h1>
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
                        <h3 class="card-title">Edit User Wallet - #{{$userWallet->id}}</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    {!! Form::model($userWallet, ['route' => ['userWallets.update', $userWallet->id], 'method' => 'patch']) !!}

                        @include('app.admin.user_wallets.fields')

                   {!! Form::close() !!}

                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
@endsection