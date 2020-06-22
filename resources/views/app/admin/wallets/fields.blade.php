<div class="card-body">
    <!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>



<!-- Symbol Field -->
<div class="form-group">
    {!! Form::label('symbol', 'Symbol:') !!}
    {!! Form::text('symbol', null, ['class' => 'form-control']) !!}
</div>



<!-- Sufix Field -->
<div class="form-group">
    {!! Form::label('sufix', 'Sufix:') !!}
    {!! Form::text('sufix', null, ['class' => 'form-control']) !!}
</div>



<!-- Prefix Field -->
<div class="form-group">
    {!! Form::label('prefix', 'Prefix:') !!}
    {!! Form::text('prefix', null, ['class' => 'form-control']) !!}
</div>



<!-- Sort Field -->
<div class="form-group">
    {!! Form::label('sort', 'Sort:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('sort', 0) !!}
        {!! Form::checkbox('sort', '1', null) !!}
    </label>
</div>


<!-- Allow Deposits Field -->
<div class="form-group">
    {!! Form::label('allow_deposits', 'Allow Deposits:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('allow_deposits', 0) !!}
        {!! Form::checkbox('allow_deposits', '1', null) !!}
    </label>
</div>


<!-- Active Field -->
<div class="form-group">
    {!! Form::label('active', 'Active:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('active', 0) !!}
        {!! Form::checkbox('active', '1', null) !!}
    </label>
</div>


    <!-- Submit Field -->
    <div class="card-footer">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}    
    <a href="{{ route('wallets.index') }}" class="btn btn-default">Cancel</a>
    </div>
</div>



