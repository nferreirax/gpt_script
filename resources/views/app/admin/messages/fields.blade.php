<div class="card-body">
    <!-- Sender Id Field -->
<div class="form-group">
    {!! Form::label('sender_id', 'Sender Id:') !!}
    {!! Form::number('sender_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Receiver Id Field -->
<div class="form-group">
    {!! Form::label('receiver_id', 'Receiver Id:') !!}
    {!! Form::number('receiver_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Related Message Field -->
<div class="form-group">
    {!! Form::label('related_message', 'Related Message:') !!}
    {!! Form::number('related_message', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>



<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Ip Field -->
<div class="form-group">
    {!! Form::label('ip', 'Ip:') !!}
    {!! Form::text('ip', null, ['class' => 'form-control']) !!}
</div>



<!-- Subject Field -->
<div class="form-group">
    {!! Form::label('subject', 'Subject:') !!}
    {!! Form::text('subject', null, ['class' => 'form-control']) !!}
</div>



<!-- Message Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('message', 'Message:') !!}
    {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
</div>

<!-- Read Field -->
<div class="form-group">
    {!! Form::label('read', 'Read:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('read', 0) !!}
        {!! Form::checkbox('read', '1', null) !!}
    </label>
</div>


<!-- Read Date Field -->
<div class="form-group">
    {!! Form::label('read_date', 'Read Date:') !!}
     <div class="input-group date" id="read_date" data-target-input="nearest">
      {!! Form::text('read_date', null, ['class' => 'form-control datetimepicker-input','id'=>'read_date','data-target'=>'#read_date']) !!}
                       
                        <div class="input-group-append" data-target="#read_date" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
   
</div>

@push('scripts')
    <script type="text/javascript">
    
        $('#read_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Deleted Inbox Field -->
<div class="form-group">
    {!! Form::label('deleted_inbox', 'Deleted Inbox:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('deleted_inbox', 0) !!}
        {!! Form::checkbox('deleted_inbox', '1', null) !!}
    </label>
</div>


<!-- Deleted Sent Field -->
<div class="form-group">
    {!! Form::label('deleted_sent', 'Deleted Sent:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('deleted_sent', 0) !!}
        {!! Form::checkbox('deleted_sent', '1', null) !!}
    </label>
</div>


<!-- Is Support Field -->
<div class="form-group">
    {!! Form::label('is_support', 'Is Support:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_support', 0) !!}
        {!! Form::checkbox('is_support', '1', null) !!}
    </label>
</div>


<!-- Is Answer Field -->
<div class="form-group">
    {!! Form::label('is_answer', 'Is Answer:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_answer', 0) !!}
        {!! Form::checkbox('is_answer', '1', null) !!}
    </label>
</div>


<!-- Is Archived Field -->
<div class="form-group">
    {!! Form::label('is_archived', 'Is Archived:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_archived', 0) !!}
        {!! Form::checkbox('is_archived', '1', null) !!}
    </label>
</div>


    <!-- Submit Field -->
    <div class="card-footer">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}    
    <a href="{{ route('messages.index') }}" class="btn btn-default">Cancel</a>
    </div>
</div>



