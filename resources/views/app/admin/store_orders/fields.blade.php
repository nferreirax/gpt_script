<div class="card-body">
    <!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Product Id Field -->
<div class="form-group">
    {!! Form::label('product_id', 'Product Id:') !!}
    {!! Form::number('product_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Card Id Field -->
<div class="form-group">
    {!! Form::label('card_id', 'Card Id:') !!}
    {!! Form::number('card_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Value Field -->
<div class="form-group">
    {!! Form::label('value', 'Value:') !!}
    {!! Form::number('value', null, ['class' => 'form-control']) !!}
</div>

<!-- Ip Field -->
<div class="form-group">
    {!! Form::label('ip', 'Ip:') !!}
    {!! Form::text('ip', null, ['class' => 'form-control']) !!}
</div>



<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', 0) !!}
        {!! Form::checkbox('status', '1', null) !!}
    </label>
</div>


<!-- Date Processed Field -->
<div class="form-group">
    {!! Form::label('date_processed', 'Date Processed:') !!}
     <div class="input-group date" id="date_processed" data-target-input="nearest">
      {!! Form::text('date_processed', null, ['class' => 'form-control datetimepicker-input','id'=>'date_processed','data-target'=>'#date_processed']) !!}
                       
                        <div class="input-group-append" data-target="#date_processed" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
   
</div>

@push('scripts')
    <script type="text/javascript">
    
        $('#date_processed').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

    <!-- Submit Field -->
    <div class="card-footer">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}    
    <a href="{{ route('storeOrders.index') }}" class="btn btn-default">Cancel</a>
    </div>
</div>



