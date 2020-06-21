<div class="card-body">
    <!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>



<!-- Badge Field -->
<div class="form-group">
    {!! Form::label('badge', 'Badge:') !!}
    {!! Form::text('badge', null, ['class' => 'form-control']) !!}
</div>



<!-- Min Offers Field -->
<div class="form-group">
    {!! Form::label('min_offers', 'Min Offers:') !!}
    {!! Form::number('min_offers', null, ['class' => 'form-control']) !!}
</div>

<!-- Min Points Field -->
<div class="form-group">
    {!! Form::label('min_points', 'Min Points:') !!}
    {!! Form::number('min_points', null, ['class' => 'form-control']) !!}
</div>

<!-- Bonus Fixed Field -->
<div class="form-group">
    {!! Form::label('bonus_fixed', 'Bonus Fixed:') !!}
    {!! Form::number('bonus_fixed', null, ['class' => 'form-control']) !!}
</div>

<!-- Bonus Percentage Field -->
<div class="form-group">
    {!! Form::label('bonus_percentage', 'Bonus Percentage:') !!}
    {!! Form::number('bonus_percentage', null, ['class' => 'form-control']) !!}
</div>

<!-- Bonus Next Month Field -->
<div class="form-group">
    {!! Form::label('bonus_next_month', 'Bonus Next Month:') !!}
    {!! Form::number('bonus_next_month', null, ['class' => 'form-control']) !!}
</div>

<!-- Level Field -->
<div class="form-group">
    {!! Form::label('level', 'Level:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('level', 0) !!}
        {!! Form::checkbox('level', '1', null) !!}
    </label>
</div>


    <!-- Submit Field -->
    <div class="card-footer">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}    
    <a href="{{ route('achievementLevels.index') }}" class="btn btn-default">Cancel</a>
    </div>
</div>



