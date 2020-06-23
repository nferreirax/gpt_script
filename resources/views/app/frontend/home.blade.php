@extends('adminlte::page')

@section('title', 'ScopeBiz')

@section('content_header')
<h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12">

                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>0</h3>
                                    <p>Balance</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-money-bill"></i>
                                </div>
                                <a href="{{ route('userWallets.index') }}" class="small-box-footer">More Info <i
                                        class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>0</h3>
                                    <p>Points</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-asterisk"></i>
                                </div>
                                <a href="#" class="small-box-footer">More Info <i
                                        class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>0</h3>
                                    <p>Wthdraw</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-money-bill"></i>
                                </div>
                                <a href="" class="small-box-footer">More Info <i
                                        class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                   
                        <div class="row">
                          <div class="col-12">
                            <div class="card">
                              <div class="card-content">
                                <div class="card-body card-dashboard">
                                  <h4 class="mb-0">@lang('Account Log')</h4>
                                  <div class="table-responsive">
                                    <table id="table" class="table table-bordered table-striped">
                                      <thead>
                                        <tr>                                        
                                          <th>@lang('Amount')</th>                                         
                                          <th>@lang('Wallet')</th>
                                          <th>@lang('Date')</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($financialExtract as $extract)
                                        <tr>
                                          <td>
                                            {{$extract->amount}}
                                          </td>                                         
                                          
                                          <td>
                                            {{$extract->wallet->name}}
                                          </td>
                                          <td>
                                            {{$extract->created_at}}
                                          </td>
                                        </tr>
                                        @endforeach
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    




                </div>
                <!-- /.card -->

            </div>
        </div>
    </div>
</div>
@stop
@section('js')
<script>
    $(function () {
        $("#table").DataTable();                  
    });
</script>
@stop
@section('plugins.Datatables', true)