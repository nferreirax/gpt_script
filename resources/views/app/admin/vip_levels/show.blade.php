@extends('adminlte::page')

@section('content')
    <section class="content-header">
        <h1>
            Vip Level
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('app.admin.vip_levels.show_fields')
                    <a href="{{ route('vipLevels.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
