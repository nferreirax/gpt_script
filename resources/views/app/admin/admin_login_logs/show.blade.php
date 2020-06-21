@extends('adminlte::page')

@section('content')
    <section class="content-header">
        <h1>
            Admin Login Log
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('app.admin.admin_login_logs.show_fields')
                    <a href="{{ route('adminLoginLogs.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
