<div class="table-responsive">
    <table id="table" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Session Id</th>
        <th>Username</th>
        <th>Password</th>
        <th>Name First</th>
        <th>Name Last</th>
        <th>Avatar</th>
        <th>Active</th>
        <th>Last Login Timestamp</th>
        <th>Failed Logins</th>
        <th>Last Failed Login</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($admins as $admin)
                <tr>
                    <td>{{ $admin->session_id }}</td>
            <td>{{ $admin->username }}</td>
            <td>{{ $admin->password }}</td>
            <td>{{ $admin->name_first }}</td>
            <td>{{ $admin->name_last }}</td>
            <td>{{ $admin->avatar }}</td>
            <td>{{ $admin->active }}</td>
            <td>{{ $admin->last_login_timestamp }}</td>
            <td>{{ $admin->failed_logins }}</td>
            <td>{{ $admin->last_failed_login }}</td>
                    <td>
                        {!! Form::open(['route' => ['admins.destroy', $admin->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('admins.show', [$admin->id]) }}" class='btn btn-default'><i class="fas fa-eye"></i></a>
                            <a href="{{ route('admins.edit', [$admin->id]) }}" class='btn btn-default'><i class="fas fa-edit"></i></a>
                            {!! Form::button('<i class="fas fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        <tfoot>
            <tr>
               <th>Session Id</th>
        <th>Username</th>
        <th>Password</th>
        <th>Name First</th>
        <th>Name Last</th>
        <th>Avatar</th>
        <th>Active</th>
        <th>Last Login Timestamp</th>
        <th>Failed Logins</th>
        <th>Last Failed Login</th>
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

