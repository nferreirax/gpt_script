<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $storeProducts->name }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $storeProducts->description }}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $storeProducts->price }}</p>
</div>

<!-- Price Discount Field -->
<div class="form-group">
    {!! Form::label('price_discount', 'Price Discount:') !!}
    <p>{{ $storeProducts->price_discount }}</p>
</div>

<!-- Price Discount Reason Field -->
<div class="form-group">
    {!! Form::label('price_discount_reason', 'Price Discount Reason:') !!}
    <p>{{ $storeProducts->price_discount_reason }}</p>
</div>

<!-- Value Field -->
<div class="form-group">
    {!! Form::label('value', 'Value:') !!}
    <p>{{ $storeProducts->value }}</p>
</div>

<!-- Cat Id Field -->
<div class="form-group">
    {!! Form::label('cat_id', 'Cat Id:') !!}
    <p>{{ $storeProducts->cat_id }}</p>
</div>

<!-- Notify Admin Field -->
<div class="form-group">
    {!! Form::label('notify_admin', 'Notify Admin:') !!}
    <p>{{ $storeProducts->notify_admin }}</p>
</div>

<!-- Asset Field -->
<div class="form-group">
    {!! Form::label('asset', 'Asset:') !!}
    <p>{{ $storeProducts->asset }}</p>
</div>

<!-- Image Path Field -->
<div class="form-group">
    {!! Form::label('image_path', 'Image Path:') !!}
    <p>{{ $storeProducts->image_path }}</p>
</div>

<!-- Qtd Available Field -->
<div class="form-group">
    {!! Form::label('qtd_available', 'Qtd Available:') !!}
    <p>{{ $storeProducts->qtd_available }}</p>
</div>

<!-- Active Field -->
<div class="form-group">
    {!! Form::label('active', 'Active:') !!}
    <p>{{ $storeProducts->active }}</p>
</div>

