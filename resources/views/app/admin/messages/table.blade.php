<div class="table-responsive">
    <table id="table" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Sender Id</th>
        <th>Receiver Id</th>
        <th>Related Message</th>
        <th>Name</th>
        <th>Email</th>
        <th>Ip</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Read</th>
        <th>Read Date</th>
        <th>Deleted Inbox</th>
        <th>Deleted Sent</th>
        <th>Is Support</th>
        <th>Is Answer</th>
        <th>Is Archived</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($messages as $message)
                <tr>
                    <td>{{ $message->sender_id }}</td>
            <td>{{ $message->receiver_id }}</td>
            <td>{{ $message->related_message }}</td>
            <td>{{ $message->name }}</td>
            <td>{{ $message->email }}</td>
            <td>{{ $message->ip }}</td>
            <td>{{ $message->subject }}</td>
            <td>{{ $message->message }}</td>
            <td>{{ $message->read }}</td>
            <td>{{ $message->read_date }}</td>
            <td>{{ $message->deleted_inbox }}</td>
            <td>{{ $message->deleted_sent }}</td>
            <td>{{ $message->is_support }}</td>
            <td>{{ $message->is_answer }}</td>
            <td>{{ $message->is_archived }}</td>
                    <td>
                        {!! Form::open(['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('messages.show', [$message->id]) }}" class='btn btn-default'><i class="fas fa-eye"></i></a>
                            <a href="{{ route('messages.edit', [$message->id]) }}" class='btn btn-default'><i class="fas fa-edit"></i></a>
                            {!! Form::button('<i class="fas fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        <tfoot>
            <tr>
               <th>Sender Id</th>
        <th>Receiver Id</th>
        <th>Related Message</th>
        <th>Name</th>
        <th>Email</th>
        <th>Ip</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Read</th>
        <th>Read Date</th>
        <th>Deleted Inbox</th>
        <th>Deleted Sent</th>
        <th>Is Support</th>
        <th>Is Answer</th>
        <th>Is Archived</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</div>
@section('js')
<script>
    $(function () {
        $("#table").DataTable();                  
    });
</script>
@stop
@section('plugins.Datatables', true)

