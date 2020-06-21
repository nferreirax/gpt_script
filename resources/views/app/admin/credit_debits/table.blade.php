<div class="table-responsive">
    <table id="table" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Points</th>
        <th>Type</th>
        <th>Related Id</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($creditDebits as $creditDebit)
                <tr>
                    <td>{{ $creditDebit->user_id }}</td>
            <td>{{ $creditDebit->points }}</td>
            <td>{{ $creditDebit->type }}</td>
            <td>{{ $creditDebit->related_id }}</td>
                    <td>
                        {!! Form::open(['route' => ['creditDebits.destroy', $creditDebit->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('creditDebits.show', [$creditDebit->id]) }}" class='btn btn-default'><i class="fas fa-eye"></i></a>
                            <a href="{{ route('creditDebits.edit', [$creditDebit->id]) }}" class='btn btn-default'><i class="fas fa-edit"></i></a>
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
        <th>Points</th>
        <th>Type</th>
        <th>Related Id</th>
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

