<div class="card-body">
    <!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>



<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Discount Field -->
<div class="form-group">
    {!! Form::label('price_discount', 'Price Discount:') !!}
    {!! Form::number('price_discount', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Discount Reason Field -->
<div class="form-group">
    {!! Form::label('price_discount_reason', 'Price Discount Reason:') !!}
    {!! Form::text('price_discount_reason', null, ['class' => 'form-control']) !!}
</div>



<!-- Value Field -->
<div class="form-group">
    {!! Form::label('value', 'Value:') !!}
    {!! Form::number('value', null, ['class' => 'form-control']) !!}
</div>

<!-- Cat Id Field -->
<div class="form-group">
    {!! Form::label('cat_id', 'Cat Id:') !!}
    {!! Form::number('cat_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Notify Admin Field -->
<div class="form-group">
    {!! Form::label('notify_admin', 'Notify Admin:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('notify_admin', 0) !!}
        {!! Form::checkbox('notify_admin', '1', null) !!}
    </label>
</div>


<!-- Asset Field -->
<div class="form-group">
    {!! Form::label('asset', 'Asset:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('asset', 0) !!}
        {!! Form::checkbox('asset', '1', null) !!}
    </label>
</div>


<!-- Image Path Field -->
<div class="form-group">
    {!! Form::label('image_path', 'Image Path:') !!}
    {!! Form::text('image_path', null, ['class' => 'form-control']) !!}
</div>



<!-- Qtd Available Field -->
<div class="form-group">
    {!! Form::label('qtd_available', 'Qtd Available:') !!}
    {!! Form::number('qtd_available', null, ['class' => 'form-control']) !!}
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
    <a href="{{ route('storeProducts.index') }}" class="btn btn-default">Cancel</a>
    </div>
</div>



