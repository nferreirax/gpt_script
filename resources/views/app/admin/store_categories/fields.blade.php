<div class="card-body">
    <!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>



<!-- Order Field -->
<div class="form-group">
    {!! Form::label('order', 'Order:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('order', 0) !!}
        {!! Form::checkbox('order', '1', null) !!}
    </label>
</div>


<!-- Img Field -->
<div class="form-group">
    {!! Form::label('img', 'Img:') !!}
    {!! Form::text('img', null, ['class' => 'form-control']) !!}
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
    <a href="{{ route('storeCategories.index') }}" class="btn btn-default">Cancel</a>
    </div>
</div>



