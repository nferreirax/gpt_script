@extends('adminlte::page')

@section('content')
    <section class="content-header">
        <h1>
            Wallets
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('app.admin.wallets.show_fields')
                    <a href="{{ route('wallets.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
