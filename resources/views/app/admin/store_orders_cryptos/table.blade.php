<div class="table-responsive">
    <table id="table" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Order Id</th>
        <th>Crypto Value</th>
        <th>Crypto Send</th>
        <th>Coin</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($storeOrdersCryptos as $storeOrdersCrypto)
                <tr>
                    <td>{{ $storeOrdersCrypto->order_id }}</td>
            <td>{{ $storeOrdersCrypto->crypto_value }}</td>
            <td>{{ $storeOrdersCrypto->crypto_send }}</td>
            <td>{{ $storeOrdersCrypto->coin }}</td>
                    <td>
                        {!! Form::open(['route' => ['storeOrdersCryptos.destroy', $storeOrdersCrypto->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('storeOrdersCryptos.show', [$storeOrdersCrypto->id]) }}" class='btn btn-default'><i class="fas fa-eye"></i></a>
                            <a href="{{ route('storeOrdersCryptos.edit', [$storeOrdersCrypto->id]) }}" class='btn btn-default'><i class="fas fa-edit"></i></a>
                            {!! Form::button('<i class="fas fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        <tfoot>
            <tr>
               <th>Order Id</th>
        <th>Crypto Value</th>
        <th>Crypto Send</th>
        <th>Coin</th>
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

