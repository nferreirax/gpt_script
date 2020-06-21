<div class="table-responsive">
    <table id="table" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Name</th>
        <th>Badge</th>
        <th>Min Offers</th>
        <th>Min Points</th>
        <th>Bonus Fixed</th>
        <th>Bonus Percentage</th>
        <th>Bonus Next Month</th>
        <th>Level</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($achievementLevels as $achievementLevels)
                <tr>
                    <td>{{ $achievementLevels->name }}</td>
            <td>{{ $achievementLevels->badge }}</td>
            <td>{{ $achievementLevels->min_offers }}</td>
            <td>{{ $achievementLevels->min_points }}</td>
            <td>{{ $achievementLevels->bonus_fixed }}</td>
            <td>{{ $achievementLevels->bonus_percentage }}</td>
            <td>{{ $achievementLevels->bonus_next_month }}</td>
            <td>{{ $achievementLevels->level }}</td>
                    <td>
                        {!! Form::open(['route' => ['achievementLevels.destroy', $achievementLevels->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('achievementLevels.show', [$achievementLevels->id]) }}" class='btn btn-default'><i class="fas fa-eye"></i></a>
                            <a href="{{ route('achievementLevels.edit', [$achievementLevels->id]) }}" class='btn btn-default'><i class="fas fa-edit"></i></a>
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
        <th>Badge</th>
        <th>Min Offers</th>
        <th>Min Points</th>
        <th>Bonus Fixed</th>
        <th>Bonus Percentage</th>
        <th>Bonus Next Month</th>
        <th>Level</th>
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

