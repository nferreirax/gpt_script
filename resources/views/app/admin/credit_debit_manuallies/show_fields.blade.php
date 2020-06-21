<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $creditDebitManually->user_id }}</p>
</div>

<!-- Amount Field -->
<div class="form-group">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{{ $creditDebitManually->amount }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $creditDebitManually->description }}</p>
</div>

<!-- Admin Notes Field -->
<div class="form-group">
    {!! Form::label('admin_notes', 'Admin Notes:') !!}
    <p>{{ $creditDebitManually->admin_notes }}</p>
</div>

