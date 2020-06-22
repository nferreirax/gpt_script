@extends('adminlte::page')

@section('content')
    <section class="content-header">
        <h1>
            Store Gift Cards
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('app.admin.store_gift_cards.show_fields')
                    <a href="{{ route('storeGiftCards.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
