<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $userWallet->user_id }}</p>
</div>

<!-- Wallet Id Field -->
<div class="form-group">
    {!! Form::label('wallet_id', 'Wallet Id:') !!}
    <p>{{ $userWallet->wallet_id }}</p>
</div>

<!-- Amount Field -->
<div class="form-group">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{{ $userWallet->amount }}</p>
</div>

