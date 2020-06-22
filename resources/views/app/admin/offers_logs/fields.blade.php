<div class="card-body">
    <!-- Network Id Field -->
<div class="form-group">
    {!! Form::label('network_id', 'Network Id:') !!}
    {!! Form::number('network_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Network Type Field -->
<div class="form-group">
    {!! Form::label('network_type', 'Network Type:') !!}
    {!! Form::number('network_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Transaction Id Field -->
<div class="form-group">
    {!! Form::label('transaction_id', 'Transaction Id:') !!}
    {!! Form::text('transaction_id', null, ['class' => 'form-control']) !!}
</div>



<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Offer Id Field -->
<div class="form-group">
    {!! Form::label('offer_id', 'Offer Id:') !!}
    {!! Form::text('offer_id', null, ['class' => 'form-control']) !!}
</div>



<!-- Message Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('message', 'Message:') !!}
    {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
</div>

<!-- Ip Field -->
<div class="form-group">
    {!! Form::label('ip', 'Ip:') !!}
    {!! Form::text('ip', null, ['class' => 'form-control']) !!}
</div>



<!-- Full Call Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('full_call', 'Full Call:') !!}
    {!! Form::textarea('full_call', null, ['class' => 'form-control']) !!}
</div>

    <!-- Submit Field -->
    <div class="card-footer">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}    
    <a href="{{ route('offersLogs.index') }}" class="btn btn-default">Cancel</a>
    </div>
</div>



