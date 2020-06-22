<div class="card-body">
    <!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Wallet Id Field -->
<div class="form-group">
    {!! Form::label('wallet_id', 'Wallet Id:') !!}
    {!! Form::number('wallet_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Amount Field -->
<div class="form-group">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::number('amount', null, ['class' => 'form-control']) !!}
</div>

    <!-- Submit Field -->
    <div class="card-footer">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}    
    <a href="{{ route('userWallets.index') }}" class="btn btn-default">Cancel</a>
    </div>
</div>



