<!-- Offers Field -->
<div class="form-group">
    {!! Form::label('offers', 'Offers:') !!}
    <p>{{ $usersAchievement->offers }}</p>
</div>

<!-- Offers Last Month Field -->
<div class="form-group">
    {!! Form::label('offers_last_month', 'Offers Last Month:') !!}
    <p>{{ $usersAchievement->offers_last_month }}</p>
</div>

<!-- Points Field -->
<div class="form-group">
    {!! Form::label('points', 'Points:') !!}
    <p>{{ $usersAchievement->points }}</p>
</div>

<!-- Points Last Month Field -->
<div class="form-group">
    {!! Form::label('points_last_month', 'Points Last Month:') !!}
    <p>{{ $usersAchievement->points_last_month }}</p>
</div>

