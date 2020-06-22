<div class="card-body">
    <!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Network Id Field -->
<div class="form-group">
    {!! Form::label('network_id', 'Network Id:') !!}
    {!! Form::number('network_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Credits Field -->
<div class="form-group">
    {!! Form::label('credits', 'Credits:') !!}
    {!! Form::number('credits', null, ['class' => 'form-control']) !!}
</div>

<!-- Credit Type Field -->
<div class="form-group">
    {!! Form::label('credit_type', 'Credit Type:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('credit_type', 0) !!}
        {!! Form::checkbox('credit_type', '1', null) !!}
    </label>
</div>


<!-- Txd Field -->
<div class="form-group">
    {!! Form::label('txd', 'Txd:') !!}
    {!! Form::text('txd', null, ['class' => 'form-control']) !!}
</div>



<!-- Credited Field -->
<div class="form-group">
    {!! Form::label('credited', 'Credited:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('credited', 0) !!}
        {!! Form::checkbox('credited', '1', null) !!}
    </label>
</div>


<!-- Offer Id Field -->
<div class="form-group">
    {!! Form::label('offer_id', 'Offer Id:') !!}
    {!! Form::number('offer_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Offer Name Field -->
<div class="form-group">
    {!! Form::label('offer_name', 'Offer Name:') !!}
    {!! Form::text('offer_name', null, ['class' => 'form-control']) !!}
</div>



<!-- Date Credited Field -->
<div class="form-group">
    {!! Form::label('date_credited', 'Date Credited:') !!}
     <div class="input-group date" id="date_credited" data-target-input="nearest">
      {!! Form::text('date_credited', null, ['class' => 'form-control datetimepicker-input','id'=>'date_credited','data-target'=>'#date_credited']) !!}
                       
                        <div class="input-group-append" data-target="#date_credited" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
   
</div>

@push('scripts')
    <script type="text/javascript">
    
        $('#date_credited').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

    <!-- Submit Field -->
    <div class="card-footer">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}    
    <a href="{{ route('offersHistories.index') }}" class="btn btn-default">Cancel</a>
    </div>
</div>



