<div class="table-responsive">
    <table id="table" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Wallet Id</th>
        <th>Amount</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($userWallets as $userWallet)
                <tr>
                    <td>{{ $userWallet->user_id }}</td>
            <td>{{ $userWallet->wallet_id }}</td>
            <td>{{ $userWallet->amount }}</td>
                    <td>
                        {!! Form::open(['route' => ['userWallets.destroy', $userWallet->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('userWallets.show', [$userWallet->id]) }}" class='btn btn-default'><i class="fas fa-eye"></i></a>
                            <a href="{{ route('userWallets.edit', [$userWallet->id]) }}" class='btn btn-default'><i class="fas fa-edit"></i></a>
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
        <th>Wallet Id</th>
        <th>Amount</th>
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

