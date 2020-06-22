<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $wallets->name }}</p>
</div>

<!-- Symbol Field -->
<div class="form-group">
    {!! Form::label('symbol', 'Symbol:') !!}
    <p>{{ $wallets->symbol }}</p>
</div>

<!-- Sufix Field -->
<div class="form-group">
    {!! Form::label('sufix', 'Sufix:') !!}
    <p>{{ $wallets->sufix }}</p>
</div>

<!-- Prefix Field -->
<div class="form-group">
    {!! Form::label('prefix', 'Prefix:') !!}
    <p>{{ $wallets->prefix }}</p>
</div>

<!-- Sort Field -->
<div class="form-group">
    {!! Form::label('sort', 'Sort:') !!}
    <p>{{ $wallets->sort }}</p>
</div>

<!-- Allow Deposits Field -->
<div class="form-group">
    {!! Form::label('allow_deposits', 'Allow Deposits:') !!}
    <p>{{ $wallets->allow_deposits }}</p>
</div>

<!-- Active Field -->
<div class="form-group">
    {!! Form::label('active', 'Active:') !!}
    <p>{{ $wallets->active }}</p>
</div>

