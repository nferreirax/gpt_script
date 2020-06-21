<div class="table-responsive">
    <table id="table" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Admin Id</th>
        <th>Username</th>
        <th>Ip</th>
        <th>Pass</th>
        <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($adminLoginLogs as $adminLoginLog)
                <tr>
                    <td>{{ $adminLoginLog->admin_id }}</td>
            <td>{{ $adminLoginLog->username }}</td>
            <td>{{ $adminLoginLog->ip }}</td>
            <td>{{ $adminLoginLog->pass }}</td>
            <td>{{ $adminLoginLog->status }}</td>
                    <td>
                        {!! Form::open(['route' => ['adminLoginLogs.destroy', $adminLoginLog->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('adminLoginLogs.show', [$adminLoginLog->id]) }}" class='btn btn-default'><i class="fas fa-eye"></i></a>
                            <a href="{{ route('adminLoginLogs.edit', [$adminLoginLog->id]) }}" class='btn btn-default'><i class="fas fa-edit"></i></a>
                            {!! Form::button('<i class="fas fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        <tfoot>
            <tr>
               <th>Admin Id</th>
        <th>Username</th>
        <th>Ip</th>
        <th>Pass</th>
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

