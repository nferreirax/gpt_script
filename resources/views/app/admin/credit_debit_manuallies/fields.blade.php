<div class="card-body">
    <!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Amount Field -->
<div class="form-group">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::number('amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Admin Notes Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('admin_notes', 'Admin Notes:') !!}
    {!! Form::textarea('admin_notes', null, ['class' => 'form-control']) !!}
</div>

    <!-- Submit Field -->
    <div class="card-footer">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}    
    <a href="{{ route('creditDebitManuallies.index') }}" class="btn btn-default">Cancel</a>
    </div>
</div>



