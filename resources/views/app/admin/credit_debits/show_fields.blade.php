<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $creditDebit->user_id }}</p>
</div>

<!-- Points Field -->
<div class="form-group">
    {!! Form::label('points', 'Points:') !!}
    <p>{{ $creditDebit->points }}</p>
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Type:') !!}
    <p>{{ $creditDebit->type }}</p>
</div>

<!-- Related Id Field -->
<div class="form-group">
    {!! Form::label('related_id', 'Related Id:') !!}
    <p>{{ $creditDebit->related_id }}</p>
</div>

