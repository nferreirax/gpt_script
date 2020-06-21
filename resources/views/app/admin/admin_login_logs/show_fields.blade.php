<!-- Admin Id Field -->
<div class="form-group">
    {!! Form::label('admin_id', 'Admin Id:') !!}
    <p>{{ $adminLoginLog->admin_id }}</p>
</div>

<!-- Username Field -->
<div class="form-group">
    {!! Form::label('username', 'Username:') !!}
    <p>{{ $adminLoginLog->username }}</p>
</div>

<!-- Ip Field -->
<div class="form-group">
    {!! Form::label('ip', 'Ip:') !!}
    <p>{{ $adminLoginLog->ip }}</p>
</div>

<!-- Pass Field -->
<div class="form-group">
    {!! Form::label('pass', 'Pass:') !!}
    <p>{{ $adminLoginLog->pass }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $adminLoginLog->status }}</p>
</div>

