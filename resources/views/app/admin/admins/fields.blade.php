<div class="card-body">
    <!-- Session Id Field -->
<div class="form-group">
    {!! Form::label('session_id', 'Session Id:') !!}
    {!! Form::text('session_id', null, ['class' => 'form-control']) !!}
</div>



<!-- Username Field -->
<div class="form-group">
    {!! Form::label('username', 'Username:') !!}
    {!! Form::text('username', null, ['class' => 'form-control']) !!}
</div>



<!-- Password Field -->
<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Name First Field -->
<div class="form-group">
    {!! Form::label('name_first', 'Name First:') !!}
    {!! Form::text('name_first', null, ['class' => 'form-control']) !!}
</div>



<!-- Name Last Field -->
<div class="form-group">
    {!! Form::label('name_last', 'Name Last:') !!}
    {!! Form::text('name_last', null, ['class' => 'form-control']) !!}
</div>



<!-- Avatar Field -->
<div class="form-group">
    {!! Form::label('avatar', 'Avatar:') !!}
    {!! Form::text('avatar', null, ['class' => 'form-control']) !!}
</div>



<!-- Active Field -->
<div class="form-group">
    {!! Form::label('active', 'Active:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('active', 0) !!}
        {!! Form::checkbox('active', '1', null) !!}
    </label>
</div>


<!-- Last Login Timestamp Field -->
<div class="form-group">
    {!! Form::label('last_login_timestamp', 'Last Login Timestamp:') !!}
    {!! Form::number('last_login_timestamp', null, ['class' => 'form-control']) !!}
</div>

<!-- Failed Logins Field -->
<div class="form-group">
    {!! Form::label('failed_logins', 'Failed Logins:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('failed_logins', 0) !!}
        {!! Form::checkbox('failed_logins', '1', null) !!}
    </label>
</div>


<!-- Last Failed Login Field -->
<div class="form-group">
    {!! Form::label('last_failed_login', 'Last Failed Login:') !!}
    {!! Form::number('last_failed_login', null, ['class' => 'form-control']) !!}
</div>

    <!-- Submit Field -->
    <div class="card-footer">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}    
    <a href="{{ route('admins.index') }}" class="btn btn-default">Cancel</a>
    </div>
</div>



