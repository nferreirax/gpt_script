<div class="table-responsive">
    <table id="table" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Product Id</th>
        <th>Card Id</th>
        <th>Price</th>
        <th>Value</th>
        <th>Ip</th>
        <th>Status</th>
        <th>Date Processed</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($storeOrders as $storeOrders)
                <tr>
                    <td>{{ $storeOrders->user_id }}</td>
            <td>{{ $storeOrders->product_id }}</td>
            <td>{{ $storeOrders->card_id }}</td>
            <td>{{ $storeOrders->price }}</td>
            <td>{{ $storeOrders->value }}</td>
            <td>{{ $storeOrders->ip }}</td>
            <td>{{ $storeOrders->status }}</td>
            <td>{{ $storeOrders->date_processed }}</td>
                    <td>
                        {!! Form::open(['route' => ['storeOrders.destroy', $storeOrders->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('storeOrders.show', [$storeOrders->id]) }}" class='btn btn-default'><i class="fas fa-eye"></i></a>
                            <a href="{{ route('storeOrders.edit', [$storeOrders->id]) }}" class='btn btn-default'><i class="fas fa-edit"></i></a>
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
        <th>Product Id</th>
        <th>Card Id</th>
        <th>Price</th>
        <th>Value</th>
        <th>Ip</th>
        <th>Status</th>
        <th>Date Processed</th>
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

