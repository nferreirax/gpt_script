<div class="table-responsive">
    <table id="table" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Amount</th>
        <th>Description</th>
        <th>Admin Notes</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($creditDebitManuallies as $creditDebitManually)
                <tr>
                    <td>{{ $creditDebitManually->user_id }}</td>
            <td>{{ $creditDebitManually->amount }}</td>
            <td>{{ $creditDebitManually->description }}</td>
            <td>{{ $creditDebitManually->admin_notes }}</td>
                    <td>
                        {!! Form::open(['route' => ['creditDebitManuallies.destroy', $creditDebitManually->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('creditDebitManuallies.show', [$creditDebitManually->id]) }}" class='btn btn-default'><i class="fas fa-eye"></i></a>
                            <a href="{{ route('creditDebitManuallies.edit', [$creditDebitManually->id]) }}" class='btn btn-default'><i class="fas fa-edit"></i></a>
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
        <th>Amount</th>
        <th>Description</th>
        <th>Admin Notes</th>
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

