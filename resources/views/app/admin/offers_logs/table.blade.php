<div class="table-responsive">
    <table id="table" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Network Id</th>
        <th>Network Type</th>
        <th>Transaction Id</th>
        <th>User Id</th>
        <th>Offer Id</th>
        <th>Message</th>
        <th>Ip</th>
        <th>Full Call</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($offersLogs as $offersLog)
                <tr>
                    <td>{{ $offersLog->network_id }}</td>
            <td>{{ $offersLog->network_type }}</td>
            <td>{{ $offersLog->transaction_id }}</td>
            <td>{{ $offersLog->user_id }}</td>
            <td>{{ $offersLog->offer_id }}</td>
            <td>{{ $offersLog->message }}</td>
            <td>{{ $offersLog->ip }}</td>
            <td>{{ $offersLog->full_call }}</td>
                    <td>
                        {!! Form::open(['route' => ['offersLogs.destroy', $offersLog->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('offersLogs.show', [$offersLog->id]) }}" class='btn btn-default'><i class="fas fa-eye"></i></a>
                            <a href="{{ route('offersLogs.edit', [$offersLog->id]) }}" class='btn btn-default'><i class="fas fa-edit"></i></a>
                            {!! Form::button('<i class="fas fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        <tfoot>
            <tr>
               <th>Network Id</th>
        <th>Network Type</th>
        <th>Transaction Id</th>
        <th>User Id</th>
        <th>Offer Id</th>
        <th>Message</th>
        <th>Ip</th>
        <th>Full Call</th>
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

