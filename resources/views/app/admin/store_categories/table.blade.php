<div class="table-responsive">
    <table id="table" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Name</th>
        <th>Order</th>
        <th>Img</th>
        <th>Active</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($storeCategories as $storeCategory)
                <tr>
                    <td>{{ $storeCategory->name }}</td>
            <td>{{ $storeCategory->order }}</td>
            <td>{{ $storeCategory->img }}</td>
            <td>{{ $storeCategory->active }}</td>
                    <td>
                        {!! Form::open(['route' => ['storeCategories.destroy', $storeCategory->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('storeCategories.show', [$storeCategory->id]) }}" class='btn btn-default'><i class="fas fa-eye"></i></a>
                            <a href="{{ route('storeCategories.edit', [$storeCategory->id]) }}" class='btn btn-default'><i class="fas fa-edit"></i></a>
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
        <th>Order</th>
        <th>Img</th>
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

