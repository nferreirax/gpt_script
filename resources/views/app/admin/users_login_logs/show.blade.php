@extends('adminlte::page')

@section('content')
    <section class="content-header">
        <h1>
            Users Login Log
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('app.admin.users_login_logs.show_fields')
                    <a href="{{ route('usersLoginLogs.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
