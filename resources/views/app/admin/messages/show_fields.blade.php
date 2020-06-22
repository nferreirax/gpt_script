<!-- Sender Id Field -->
<div class="form-group">
    {!! Form::label('sender_id', 'Sender Id:') !!}
    <p>{{ $message->sender_id }}</p>
</div>

<!-- Receiver Id Field -->
<div class="form-group">
    {!! Form::label('receiver_id', 'Receiver Id:') !!}
    <p>{{ $message->receiver_id }}</p>
</div>

<!-- Related Message Field -->
<div class="form-group">
    {!! Form::label('related_message', 'Related Message:') !!}
    <p>{{ $message->related_message }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $message->name }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $message->email }}</p>
</div>

<!-- Ip Field -->
<div class="form-group">
    {!! Form::label('ip', 'Ip:') !!}
    <p>{{ $message->ip }}</p>
</div>

<!-- Subject Field -->
<div class="form-group">
    {!! Form::label('subject', 'Subject:') !!}
    <p>{{ $message->subject }}</p>
</div>

<!-- Message Field -->
<div class="form-group">
    {!! Form::label('message', 'Message:') !!}
    <p>{{ $message->message }}</p>
</div>

<!-- Read Field -->
<div class="form-group">
    {!! Form::label('read', 'Read:') !!}
    <p>{{ $message->read }}</p>
</div>

<!-- Read Date Field -->
<div class="form-group">
    {!! Form::label('read_date', 'Read Date:') !!}
    <p>{{ $message->read_date }}</p>
</div>

<!-- Deleted Inbox Field -->
<div class="form-group">
    {!! Form::label('deleted_inbox', 'Deleted Inbox:') !!}
    <p>{{ $message->deleted_inbox }}</p>
</div>

<!-- Deleted Sent Field -->
<div class="form-group">
    {!! Form::label('deleted_sent', 'Deleted Sent:') !!}
    <p>{{ $message->deleted_sent }}</p>
</div>

<!-- Is Support Field -->
<div class="form-group">
    {!! Form::label('is_support', 'Is Support:') !!}
    <p>{{ $message->is_support }}</p>
</div>

<!-- Is Answer Field -->
<div class="form-group">
    {!! Form::label('is_answer', 'Is Answer:') !!}
    <p>{{ $message->is_answer }}</p>
</div>

<!-- Is Archived Field -->
<div class="form-group">
    {!! Form::label('is_archived', 'Is Archived:') !!}
    <p>{{ $message->is_archived }}</p>
</div>

