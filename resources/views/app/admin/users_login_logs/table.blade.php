<div class="table-responsive">
    <table id="table" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Username</th>
        <th>Password</th>
        <th>Ip</th>
        <th>Client</th>
        <th>Os</th>
        <th>Device</th>
        <th>Brand</th>
        <th>Model</th>
        <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usersLoginLogs as $usersLoginLog)
                <tr>
                    <td>{{ $usersLoginLog->user_id }}</td>
            <td>{{ $usersLoginLog->username }}</td>
            <td>{{ $usersLoginLog->password }}</td>
            <td>{{ $usersLoginLog->ip }}</td>
            <td>{{ $usersLoginLog->client }}</td>
            <td>{{ $usersLoginLog->os }}</td>
            <td>{{ $usersLoginLog->device }}</td>
            <td>{{ $usersLoginLog->brand }}</td>
            <td>{{ $usersLoginLog->model }}</td>
            <td>{{ $usersLoginLog->status }}</td>
                    <td>
                        {!! Form::open(['route' => ['usersLoginLogs.destroy', $usersLoginLog->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('usersLoginLogs.show', [$usersLoginLog->id]) }}" class='btn btn-default'><i class="fas fa-eye"></i></a>
                            <a href="{{ route('usersLoginLogs.edit', [$usersLoginLog->id]) }}" class='btn btn-default'><i class="fas fa-edit"></i></a>
                            {!! Form::button('<i class="fas fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        <tfoot>
            <tr>
               <th>User Id</th>
        <th>Username</th>
        <th>Password</th>
        <th>Ip</th>
        <th>Client</th>
        <th>Os</th>
        <th>Device</th>
        <th>Brand</th>
        <th>Model</th>
        <th>Status</th>
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

