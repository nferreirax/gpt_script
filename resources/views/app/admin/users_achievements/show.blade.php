@extends('adminlte::page')

@section('content')
    <section class="content-header">
        <h1>
            Users Achievement
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('app.admin.users_achievements.show_fields')
                    <a href="{{ route('usersAchievements.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
