<div class="table-responsive">
    <table id="table" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Level Id</th>
        <th>Offers</th>
        <th>Points</th>
        <th>Bonus Credited</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($achievementLogs as $achievementLog)
                <tr>
                    <td>{{ $achievementLog->user_id }}</td>
            <td>{{ $achievementLog->level_id }}</td>
            <td>{{ $achievementLog->offers }}</td>
            <td>{{ $achievementLog->points }}</td>
            <td>{{ $achievementLog->bonus_credited }}</td>
                    <td>
                        {!! Form::open(['route' => ['achievementLogs.destroy', $achievementLog->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('achievementLogs.show', [$achievementLog->id]) }}" class='btn btn-default'><i class="fas fa-eye"></i></a>
                            <a href="{{ route('achievementLogs.edit', [$achievementLog->id]) }}" class='btn btn-default'><i class="fas fa-edit"></i></a>
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
        <th>Level Id</th>
        <th>Offers</th>
        <th>Points</th>
        <th>Bonus Credited</th>
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

