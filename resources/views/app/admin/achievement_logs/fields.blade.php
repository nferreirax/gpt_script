<div class="card-body">
    <!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Level Id Field -->
<div class="form-group">
    {!! Form::label('level_id', 'Level Id:') !!}
    {!! Form::number('level_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Offers Field -->
<div class="form-group">
    {!! Form::label('offers', 'Offers:') !!}
    {!! Form::number('offers', null, ['class' => 'form-control']) !!}
</div>

<!-- Points Field -->
<div class="form-group">
    {!! Form::label('points', 'Points:') !!}
    {!! Form::number('points', null, ['class' => 'form-control']) !!}
</div>

<!-- Bonus Credited Field -->
<div class="form-group">
    {!! Form::label('bonus_credited', 'Bonus Credited:') !!}
    {!! Form::number('bonus_credited', null, ['class' => 'form-control']) !!}
</div>

    <!-- Submit Field -->
    <div class="card-footer">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}    
    <a href="{{ route('achievementLogs.index') }}" class="btn btn-default">Cancel</a>
    </div>
</div>



