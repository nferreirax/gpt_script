<!-- Order Id Field -->
<div class="form-group">
    {!! Form::label('order_id', 'Order Id:') !!}
    <p>{{ $storeOrdersCrypto->order_id }}</p>
</div>

<!-- Crypto Value Field -->
<div class="form-group">
    {!! Form::label('crypto_value', 'Crypto Value:') !!}
    <p>{{ $storeOrdersCrypto->crypto_value }}</p>
</div>

<!-- Crypto Send Field -->
<div class="form-group">
    {!! Form::label('crypto_send', 'Crypto Send:') !!}
    <p>{{ $storeOrdersCrypto->crypto_send }}</p>
</div>

<!-- Coin Field -->
<div class="form-group">
    {!! Form::label('coin', 'Coin:') !!}
    <p>{{ $storeOrdersCrypto->coin }}</p>
</div>

