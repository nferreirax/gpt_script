@extends('adminlte::page')

@section('content')
    <section class="content-header">
        <h1>
            Achievement Levels
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('app.admin.achievement_levels.show_fields')
                    <a href="{{ route('achievementLevels.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
