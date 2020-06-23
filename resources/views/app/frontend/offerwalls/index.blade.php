@extends('adminlte::page')

@section('title', 'ScopeBiz')

@section('content_header')
<h1 class="m-0 text-dark">Offerwalls</h1>
@stop


@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12">
                    @if (count($offerwalls) == 0)
                    <div class="alert alert-warning" role="alert">
                       There isn't available offerwalls
                    </div>
                    @else
                   

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        @php
                        $count = 0;
                        @endphp
                        @foreach ($offerwalls as $offerwall)
                        <li class="nav-item">
                            <a class="nav-link {{$count == 0 ? 'active' : ''}}" data-toggle="tab"
                                href="#a{{$offerwall->id}}">{{$offerwall->name}}</a>
                        </li>
                        @php
                        $count ++;
                        @endphp
                        @endforeach
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        @php
                        $count = 0;
                        @endphp
                        @foreach ($offerwalls as $offerwall)
                        <div class="tab-pane container {{$count == 0 ? 'active' : ''}}" id="a{{$offerwall->id}}">
                            <iframe src="{{$offerwall->iframe_url}}" frameborder="0" width="100%" height="1500"
                                scrolling="auto"></iframe>

                        </div>

                        @php
                        $count ++;
                        @endphp
                        @endforeach

                    </div>
                    @endif

                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</div>
@stop