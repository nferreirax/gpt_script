<!-- Session Id Field -->
<div class="form-group">
    {!! Form::label('session_id', 'Session Id:') !!}
    <p>{{ $admin->session_id }}</p>
</div>

<!-- Username Field -->
<div class="form-group">
    {!! Form::label('username', 'Username:') !!}
    <p>{{ $admin->username }}</p>
</div>

<!-- Password Field -->
<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    <p>{{ $admin->password }}</p>
</div>

<!-- Name First Field -->
<div class="form-group">
    {!! Form::label('name_first', 'Name First:') !!}
    <p>{{ $admin->name_first }}</p>
</div>

<!-- Name Last Field -->
<div class="form-group">
    {!! Form::label('name_last', 'Name Last:') !!}
    <p>{{ $admin->name_last }}</p>
</div>

<!-- Avatar Field -->
<div class="form-group">
    {!! Form::label('avatar', 'Avatar:') !!}
    <p>{{ $admin->avatar }}</p>
</div>

<!-- Active Field -->
<div class="form-group">
    {!! Form::label('active', 'Active:') !!}
    <p>{{ $admin->active }}</p>
</div>

<!-- Last Login Timestamp Field -->
<div class="form-group">
    {!! Form::label('last_login_timestamp', 'Last Login Timestamp:') !!}
    <p>{{ $admin->last_login_timestamp }}</p>
</div>

<!-- Failed Logins Field -->
<div class="form-group">
    {!! Form::label('failed_logins', 'Failed Logins:') !!}
    <p>{{ $admin->failed_logins }}</p>
</div>

<!-- Last Failed Login Field -->
<div class="form-group">
    {!! Form::label('last_failed_login', 'Last Failed Login:') !!}
    <p>{{ $admin->last_failed_login }}</p>
</div>

