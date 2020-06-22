<div class="table-responsive">
    <table id="table" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Name</th>
        <th>Product Id</th>
        <th>Value</th>
        <th>Link</th>
        <th>Active</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($storeGiftCards as $storeGiftCards)
                <tr>
                    <td>{{ $storeGiftCards->name }}</td>
            <td>{{ $storeGiftCards->product_id }}</td>
            <td>{{ $storeGiftCards->value }}</td>
            <td>{{ $storeGiftCards->link }}</td>
            <td>{{ $storeGiftCards->active }}</td>
                    <td>
                        {!! Form::open(['route' => ['storeGiftCards.destroy', $storeGiftCards->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('storeGiftCards.show', [$storeGiftCards->id]) }}" class='btn btn-default'><i class="fas fa-eye"></i></a>
                            <a href="{{ route('storeGiftCards.edit', [$storeGiftCards->id]) }}" class='btn btn-default'><i class="fas fa-edit"></i></a>
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
        <th>Product Id</th>
        <th>Value</th>
        <th>Link</th>
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

