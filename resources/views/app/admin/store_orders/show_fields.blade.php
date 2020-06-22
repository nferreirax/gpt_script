<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $storeOrders->user_id }}</p>
</div>

<!-- Product Id Field -->
<div class="form-group">
    {!! Form::label('product_id', 'Product Id:') !!}
    <p>{{ $storeOrders->product_id }}</p>
</div>

<!-- Card Id Field -->
<div class="form-group">
    {!! Form::label('card_id', 'Card Id:') !!}
    <p>{{ $storeOrders->card_id }}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $storeOrders->price }}</p>
</div>

<!-- Value Field -->
<div class="form-group">
    {!! Form::label('value', 'Value:') !!}
    <p>{{ $storeOrders->value }}</p>
</div>

<!-- Ip Field -->
<div class="form-group">
    {!! Form::label('ip', 'Ip:') !!}
    <p>{{ $storeOrders->ip }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $storeOrders->status }}</p>
</div>

<!-- Date Processed Field -->
<div class="form-group">
    {!! Form::label('date_processed', 'Date Processed:') !!}
    <p>{{ $storeOrders->date_processed }}</p>
</div>

