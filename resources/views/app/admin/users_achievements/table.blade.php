<div class="table-responsive">
    <table id="table" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Offers</th>
        <th>Offers Last Month</th>
        <th>Points</th>
        <th>Points Last Month</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usersAchievements as $usersAchievement)
                <tr>
                    <td>{{ $usersAchievement->offers }}</td>
            <td>{{ $usersAchievement->offers_last_month }}</td>
            <td>{{ $usersAchievement->points }}</td>
            <td>{{ $usersAchievement->points_last_month }}</td>
                    <td>
                        {!! Form::open(['route' => ['usersAchievements.destroy', $usersAchievement->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('usersAchievements.show', [$usersAchievement->id]) }}" class='btn btn-default'><i class="fas fa-eye"></i></a>
                            <a href="{{ route('usersAchievements.edit', [$usersAchievement->id]) }}" class='btn btn-default'><i class="fas fa-edit"></i></a>
                            {!! Form::button('<i class="fas fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        <tfoot>
            <tr>
               <th>Offers</th>
        <th>Offers Last Month</th>
        <th>Points</th>
        <th>Points Last Month</th>
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

