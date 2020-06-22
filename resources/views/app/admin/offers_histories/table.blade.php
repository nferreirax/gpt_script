<div class="table-responsive">
    <table id="table" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Network Id</th>
        <th>Credits</th>
        <th>Credit Type</th>
        <th>Txd</th>
        <th>Credited</th>
        <th>Offer Id</th>
        <th>Offer Name</th>
        <th>Date Credited</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($offersHistories as $offersHistory)
                <tr>
                    <td>{{ $offersHistory->user_id }}</td>
            <td>{{ $offersHistory->network_id }}</td>
            <td>{{ $offersHistory->credits }}</td>
            <td>{{ $offersHistory->credit_type }}</td>
            <td>{{ $offersHistory->txd }}</td>
            <td>{{ $offersHistory->credited }}</td>
            <td>{{ $offersHistory->offer_id }}</td>
            <td>{{ $offersHistory->offer_name }}</td>
            <td>{{ $offersHistory->date_credited }}</td>
                    <td>
                        {!! Form::open(['route' => ['offersHistories.destroy', $offersHistory->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('offersHistories.show', [$offersHistory->id]) }}" class='btn btn-default'><i class="fas fa-eye"></i></a>
                            <a href="{{ route('offersHistories.edit', [$offersHistory->id]) }}" class='btn btn-default'><i class="fas fa-edit"></i></a>
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
        <th>Network Id</th>
        <th>Credits</th>
        <th>Credit Type</th>
        <th>Txd</th>
        <th>Credited</th>
        <th>Offer Id</th>
        <th>Offer Name</th>
        <th>Date Credited</th>
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

