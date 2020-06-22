<div class="card-body">
    <!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
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

<!-- Ip Field -->
<div class="form-group">
    {!! Form::label('ip', 'Ip:') !!}
    {!! Form::text('ip', null, ['class' => 'form-control']) !!}
</div>



<!-- Client Field -->
<div class="form-group">
    {!! Form::label('client', 'Client:') !!}
    {!! Form::text('client', null, ['class' => 'form-control']) !!}
</div>



<!-- Os Field -->
<div class="form-group">
    {!! Form::label('os', 'Os:') !!}
    {!! Form::text('os', null, ['class' => 'form-control']) !!}
</div>



<!-- Device Field -->
<div class="form-group">
    {!! Form::label('device', 'Device:') !!}
    {!! Form::text('device', null, ['class' => 'form-control']) !!}
</div>



<!-- Brand Field -->
<div class="form-group">
    {!! Form::label('brand', 'Brand:') !!}
    {!! Form::text('brand', null, ['class' => 'form-control']) !!}
</div>



<!-- Model Field -->
<div class="form-group">
    {!! Form::label('model', 'Model:') !!}
    {!! Form::text('model', null, ['class' => 'form-control']) !!}
</div>



<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', 0) !!}
        {!! Form::checkbox('status', '1', null) !!}
    </label>
</div>


    <!-- Submit Field -->
    <div class="card-footer">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}    
    <a href="{{ route('usersLoginLogs.index') }}" class="btn btn-default">Cancel</a>
    </div>
</div>



