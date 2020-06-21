<div class="card-body">
    <!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Points Field -->
<div class="form-group">
    {!! Form::label('points', 'Points:') !!}
    {!! Form::number('points', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::number('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Related Id Field -->
<div class="form-group">
    {!! Form::label('related_id', 'Related Id:') !!}
    {!! Form::number('related_id', null, ['class' => 'form-control']) !!}
</div>

    <!-- Submit Field -->
    <div class="card-footer">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}    
    <a href="{{ route('creditDebits.index') }}" class="btn btn-default">Cancel</a>
    </div>
</div>



