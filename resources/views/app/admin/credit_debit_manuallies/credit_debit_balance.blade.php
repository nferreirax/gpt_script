@section('css')
@parent
<link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
@endsection
{!! Form::open(['route' =>'creditDebitManuall.credit-debit']) !!}

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Credit/Debit User</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            {!!Form::label('user_id','Username')!!}
                            {!!Form::select('user_id', \App\Models\User::pluck('username', 'id') ,
                            null, ['class' => 'form-control select2']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('wallet_id','Wallet')!!}
                            {!!Form::select('wallet_id', \App\Models\Wallets::pluck('name', 'id') ,
                            null, ['class' => 'form-control select2']) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('type','Type')!!}
                            {!!Form::select('type', [1=>'Credit',2=>'Debit'] ,
                            null, ['class' => 'form-control select2']) !!}
                        </div>
                        <!-- Amount Field -->
                        <div class="form-group">
                            {!! Form::label('amount', 'Amount') !!}
                            {!! Form::number('amount', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <!-- Description Field -->
                        <div class="form-group col-sm-12 col-lg-12">
                            {!! Form::label('description','Member Notes') !!}
                            {!! Form::textarea('description', null, ['class' => 'form-control','rows'=>4,'placeholder'=>'Members will see this notes']) !!}
                        </div>
                        <!-- Admin Notes Field -->
                        <div class="form-group col-sm-12 col-lg-12">
                            {!! Form::label('admin_notes', 'Admin Notes') !!}
                            {!! Form::textarea('admin_notes', null, ['class' => 'form-control','rows'=>5,'placeholder'=>'Only admin ca see this notes']) !!}
                        </div>
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-md-12">
                        {{Form::button('Process',['type'=>'submit','class'=>'btn-lg btn-block btn-success'])}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}

@section('scripts')
@parent
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
<script type="text/javascript">
    $(function () {
    //Initialize Select2 Elements
    $('.select2').select2({
        theme: 'bootstrap4'
    })
});
</script>
@stop