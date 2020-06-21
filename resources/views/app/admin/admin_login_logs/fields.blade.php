<div class="card-body">
    <!-- Admin Id Field -->
<div class="form-group">
    {!! Form::label('admin_id', 'Admin Id:') !!}
    {!! Form::number('admin_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Username Field -->
<div class="form-group">
    {!! Form::label('username', 'Username:') !!}
    {!! Form::text('username', null, ['class' => 'form-control']) !!}
</div>



<!-- Ip Field -->
<div class="form-group">
    {!! Form::label('ip', 'Ip:') !!}
    {!! Form::number('ip', null, ['class' => 'form-control']) !!}
</div>

<!-- Pass Field -->
<div class="form-group">
    {!! Form::label('pass', 'Pass:') !!}
    {!! Form::text('pass', null, ['class' => 'form-control']) !!}
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
    <a href="{{ route('adminLoginLogs.index') }}" class="btn btn-default">Cancel</a>
    </div>
</div>



