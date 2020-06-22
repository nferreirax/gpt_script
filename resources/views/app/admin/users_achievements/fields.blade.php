<div class="card-body">
    <!-- Offers Field -->
<div class="form-group">
    {!! Form::label('offers', 'Offers:') !!}
    {!! Form::number('offers', null, ['class' => 'form-control']) !!}
</div>

<!-- Offers Last Month Field -->
<div class="form-group">
    {!! Form::label('offers_last_month', 'Offers Last Month:') !!}
    {!! Form::number('offers_last_month', null, ['class' => 'form-control']) !!}
</div>

<!-- Points Field -->
<div class="form-group">
    {!! Form::label('points', 'Points:') !!}
    {!! Form::number('points', null, ['class' => 'form-control']) !!}
</div>

<!-- Points Last Month Field -->
<div class="form-group">
    {!! Form::label('points_last_month', 'Points Last Month:') !!}
    {!! Form::number('points_last_month', null, ['class' => 'form-control']) !!}
</div>

    <!-- Submit Field -->
    <div class="card-footer">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}    
    <a href="{{ route('usersAchievements.index') }}" class="btn btn-default">Cancel</a>
    </div>
</div>



