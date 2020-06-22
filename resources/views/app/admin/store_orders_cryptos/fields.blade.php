<div class="card-body">
    <!-- Order Id Field -->
<div class="form-group">
    {!! Form::label('order_id', 'Order Id:') !!}
    {!! Form::number('order_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Crypto Value Field -->
<div class="form-group">
    {!! Form::label('crypto_value', 'Crypto Value:') !!}
    {!! Form::number('crypto_value', null, ['class' => 'form-control']) !!}
</div>

<!-- Crypto Send Field -->
<div class="form-group">
    {!! Form::label('crypto_send', 'Crypto Send:') !!}
    {!! Form::number('crypto_send', null, ['class' => 'form-control']) !!}
</div>

<!-- Coin Field -->
<div class="form-group">
    {!! Form::label('coin', 'Coin:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('coin', 0) !!}
        {!! Form::checkbox('coin', '1', null) !!}
    </label>
</div>


    <!-- Submit Field -->
    <div class="card-footer">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}    
    <a href="{{ route('storeOrdersCryptos.index') }}" class="btn btn-default">Cancel</a>
    </div>
</div>



