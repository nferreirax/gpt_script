<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $offersHistory->user_id }}</p>
</div>

<!-- Network Id Field -->
<div class="form-group">
    {!! Form::label('network_id', 'Network Id:') !!}
    <p>{{ $offersHistory->network_id }}</p>
</div>

<!-- Credits Field -->
<div class="form-group">
    {!! Form::label('credits', 'Credits:') !!}
    <p>{{ $offersHistory->credits }}</p>
</div>

<!-- Credit Type Field -->
<div class="form-group">
    {!! Form::label('credit_type', 'Credit Type:') !!}
    <p>{{ $offersHistory->credit_type }}</p>
</div>

<!-- Txd Field -->
<div class="form-group">
    {!! Form::label('txd', 'Txd:') !!}
    <p>{{ $offersHistory->txd }}</p>
</div>

<!-- Credited Field -->
<div class="form-group">
    {!! Form::label('credited', 'Credited:') !!}
    <p>{{ $offersHistory->credited }}</p>
</div>

<!-- Offer Id Field -->
<div class="form-group">
    {!! Form::label('offer_id', 'Offer Id:') !!}
    <p>{{ $offersHistory->offer_id }}</p>
</div>

<!-- Offer Name Field -->
<div class="form-group">
    {!! Form::label('offer_name', 'Offer Name:') !!}
    <p>{{ $offersHistory->offer_name }}</p>
</div>

<!-- Date Credited Field -->
<div class="form-group">
    {!! Form::label('date_credited', 'Date Credited:') !!}
    <p>{{ $offersHistory->date_credited }}</p>
</div>

