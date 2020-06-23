<div class="row mt-3">
    <div class="col-md-4 col-sm-12">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Global Settings</h3>
            </div>
            <div class="card-body">
                <div class="row ">
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::label('username', 'Username') !!} {!!
                            Form::text('username', null, ['class'
                            =>'form-control','placeholder'=>'Username']) !!}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Country</label>
                    <select class="form-control">
                        <option>Country Option</option>
                        <option>Country Option</option>
                    </select>
                </div>

                <div class="form-group">
                    {!!Form::label('email','Email')!!}
                    {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Email'])!!}
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!!Form::label('verified','Email Verified')!!}
                            {!!Form::select('verified',[0=>'No',1=>'Yes'],null,['class'=>'form-control'])!!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!!Form::label('is_admin','Is Admin?')!!}
                            {!!Form::select('is_admin',[0=>'No',1=>'Yes'],null,['class'=>'form-control'])!!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    {!!Form::label('sponsor_id','Sponsor')!!}
                    {!!Form::select('sponsor_id', \App\Models\User::pluck('username', 'id') ,
                    null, ['class' => 'form-control select2']) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="card card-primary">
            <div class="card-header with-border">
                <h3 class="card-title">Personal Settings</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    {!! Form::label('name',__('admin.NAME')) !!} {!! Form::text('name', null,
                    ['class' => 'form-control','placeholder'=>__('admin.ENAME')]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('national_id','National ID') !!} {!!
                    Form::text('national_id', null, ['class'
                    =>'form-control','placeholder'=>'National ID']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('tax_id_number','Tax ID') !!} {!!
                    Form::text('tax_id_number', null, ['class'
                    =>'form-control','placeholder'=>'Tax ID']) !!}
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            {!!Form::label('gender', 'Gender') !!}
                            {!!Form::select('gender',[1=>'Male',2=>'Female'],null,['class'=>'form-control'])!!}
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            {!! Form::label('phone', 'Phone Number') !!} {!!
                            Form::text('phone', null, ['class'
                            =>'form-control','placeholder'=>'Phone Number']) !!}
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            {!! Form::label('birth_date','Birth date') !!} {!!
                            Form::text('birth_date', null, ['class' =>'input-group date',
                            'class'=>'form-control pull-right','id' =>"datepicker",]) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('address', 'Address') !!} {!! Form::text('address',
                    null, ['class' =>'form-control','placeholder'=>'Address']) !!}
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            {!! Form::label('state', 'State') !!} {!! Form::text('state',
                            null, ['class' =>'form-control','placeholder'=>'State']) !!}
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            {!! Form::label('zip_code', 'Zip Code') !!} {!!
                            Form::text('zip_code', null, ['class' =>
                            'form-control','placeholder'=>'Zip Code']) !!}
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            {!! Form::label('city', 'City') !!} {!! Form::text('city',
                            null, ['class' => 'form-control','placeholder'=>'City']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-success">
            <div class="card-header with-border">
                <h3 class="card-title">Wallets</h3>
            </div>
            <div class="card-body">
                @if ($user->wallets)
                @foreach ($user->wallets as $wallet)
                <div class="form-group">
                    <label>@lang($wallet->wallet->name)</label>
                    <input type="text" class="form-control" id="points" placeholder="" value="{{$wallet->amount}}" disabled>
                </div>
                @endforeach
                @endif
               
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        {{Form::button('<i class="fas fa-plus-circle"></i> '.'Save',['type'=>'submit','class'=>'btn-lg btn-block btn-success'])}}
    </div>
    <div class="col-md-6">
        <a href="{{ route('users.index') }}" class="btn-lg btn-block btn-info text-center"><i
                class="fas fa-minus-circle"></i> Cancel</a>
    </div>

</div>