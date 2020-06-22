<div class="table-responsive">
    <table id="table" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Price Discount</th>
        <th>Price Discount Reason</th>
        <th>Value</th>
        <th>Cat Id</th>
        <th>Notify Admin</th>
        <th>Asset</th>
        <th>Image Path</th>
        <th>Qtd Available</th>
        <th>Active</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($storeProducts as $storeProducts)
                <tr>
                    <td>{{ $storeProducts->name }}</td>
            <td>{{ $storeProducts->description }}</td>
            <td>{{ $storeProducts->price }}</td>
            <td>{{ $storeProducts->price_discount }}</td>
            <td>{{ $storeProducts->price_discount_reason }}</td>
            <td>{{ $storeProducts->value }}</td>
            <td>{{ $storeProducts->cat_id }}</td>
            <td>{{ $storeProducts->notify_admin }}</td>
            <td>{{ $storeProducts->asset }}</td>
            <td>{{ $storeProducts->image_path }}</td>
            <td>{{ $storeProducts->qtd_available }}</td>
            <td>{{ $storeProducts->active }}</td>
                    <td>
                        {!! Form::open(['route' => ['storeProducts.destroy', $storeProducts->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('storeProducts.show', [$storeProducts->id]) }}" class='btn btn-default'><i class="fas fa-eye"></i></a>
                            <a href="{{ route('storeProducts.edit', [$storeProducts->id]) }}" class='btn btn-default'><i class="fas fa-edit"></i></a>
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
        <th>Description</th>
        <th>Price</th>
        <th>Price Discount</th>
        <th>Price Discount Reason</th>
        <th>Value</th>
        <th>Cat Id</th>
        <th>Notify Admin</th>
        <th>Asset</th>
        <th>Image Path</th>
        <th>Qtd Available</th>
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

