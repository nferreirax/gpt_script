<div class="table-responsive">
    <table id="table" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Name</th>
        <th>Symbol</th>
        <th>Sufix</th>
        <th>Prefix</th>
        <th>Sort</th>
        <th>Allow Deposits</th>
        <th>Active</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($wallets as $wallets)
                <tr>
                    <td>{{ $wallets->name }}</td>
            <td>{{ $wallets->symbol }}</td>
            <td>{{ $wallets->sufix }}</td>
            <td>{{ $wallets->prefix }}</td>
            <td>{{ $wallets->sort }}</td>
            <td>{{ $wallets->allow_deposits }}</td>
            <td>{{ $wallets->active }}</td>
                    <td>
                        {!! Form::open(['route' => ['wallets.destroy', $wallets->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('wallets.show', [$wallets->id]) }}" class='btn btn-default'><i class="fas fa-eye"></i></a>
                            <a href="{{ route('wallets.edit', [$wallets->id]) }}" class='btn btn-default'><i class="fas fa-edit"></i></a>
                            {!! Form::button('<i class="fas fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        <tfoot>
            <tr>
               <th>Name</th>
        <th>Symbol</th>
        <th>Sufix</th>
        <th>Prefix</th>
        <th>Sort</th>
        <th>Allow Deposits</th>
        <th>Active</th>
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

