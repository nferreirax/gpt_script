@extends('adminlte::page')

@section('title',__('admin.DASHBOARD'))

@section('content')
<div class="container-fluid">
    <!-- Content Header (Page header) -->
    <!-- first independent row -->
   
    <!-- Second independent row -->
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Today's Stats</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>{{$countTotalMembersToday}}</h3>
                                <p>Users Registerd Today</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user-plus"></i>
                            </div>
                        <a href="{{route('users.index')}}" class="small-box-footer">More Info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>0</h3>
                                <p>Purchases Today</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-shopping-cart"></i>
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
                                <p>Offers Completed Today</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-money-bill-wave"></i>
                            </div>
                            <a href="#" class="small-box-footer">More Info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- third independent row(1+1) -->
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">All Time Stats</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>{{$countTotalMembers}}</h3>
                                <p>Total Users Registerd</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <a href="{{route('users.index')}}" class="small-box-footer">More Info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>0</h3>
                                <p>Total Purchases</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <a href="#" class="small-box-footer">More Info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                            <h3>0</h3>
                                <p>Total Profit</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-money-bill"></i>
                            </div>
                            <a href="#" class="small-box-footer">More Info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>{{ $balancesTotal }}</h3>
                                <p>Total Members Balance</p>
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
                            <h3>{{$pointsTotal}}</h3>
                                <p>Total Members Points</p>
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
                                <p>Total Offers Completed</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-money-bill"></i>
                            </div>
                            <a href="" class="small-box-footer">More Info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- Grafics -->
    
</div>
@endsection