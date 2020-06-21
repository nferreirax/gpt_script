<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $achievementLog->user_id }}</p>
</div>

<!-- Level Id Field -->
<div class="form-group">
    {!! Form::label('level_id', 'Level Id:') !!}
    <p>{{ $achievementLog->level_id }}</p>
</div>

<!-- Offers Field -->
<div class="form-group">
    {!! Form::label('offers', 'Offers:') !!}
    <p>{{ $achievementLog->offers }}</p>
</div>

<!-- Points Field -->
<div class="form-group">
    {!! Form::label('points', 'Points:') !!}
    <p>{{ $achievementLog->points }}</p>
</div>

<!-- Bonus Credited Field -->
<div class="form-group">
    {!! Form::label('bonus_credited', 'Bonus Credited:') !!}
    <p>{{ $achievementLog->bonus_credited }}</p>
</div>

