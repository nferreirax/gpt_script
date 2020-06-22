<div class="table-responsive">
    <table id="table" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Name</th>
        <th>Privmessage</th>
        <th>Auto Min Reg Time</th>
        <th>Auto Points Hold Over</th>
        <th>Auto Points Hold Days</th>
        <th>Auto Min Earnings</th>
        <th>Auto Max Earnings</th>
        <th>Min Cashout</th>
        <th>Badge</th>
        <th>Avatar</th>
        <th>Level</th>
        <th>Ref Commissions</th>
        <th>Store Pp Max 24</th>
        <th>Store Coupons Max 24</th>
        <th>Enabled</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vipLevels as $vipLevel)
                <tr>
                    <td>{{ $vipLevel->name }}</td>
            <td>{{ $vipLevel->privmessage }}</td>
            <td>{{ $vipLevel->auto_min_reg_time }}</td>
            <td>{{ $vipLevel->auto_points_hold_over }}</td>
            <td>{{ $vipLevel->auto_points_hold_days }}</td>
            <td>{{ $vipLevel->auto_min_earnings }}</td>
            <td>{{ $vipLevel->auto_max_earnings }}</td>
            <td>{{ $vipLevel->min_cashout }}</td>
            <td>{{ $vipLevel->badge }}</td>
            <td>{{ $vipLevel->avatar }}</td>
            <td>{{ $vipLevel->level }}</td>
            <td>{{ $vipLevel->ref_commissions }}</td>
            <td>{{ $vipLevel->store_pp_max_24 }}</td>
            <td>{{ $vipLevel->store_coupons_max_24 }}</td>
            <td>{{ $vipLevel->enabled }}</td>
                    <td>
                        {!! Form::open(['route' => ['vipLevels.destroy', $vipLevel->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('vipLevels.show', [$vipLevel->id]) }}" class='btn btn-default'><i class="fas fa-eye"></i></a>
                            <a href="{{ route('vipLevels.edit', [$vipLevel->id]) }}" class='btn btn-default'><i class="fas fa-edit"></i></a>
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
        <th>Privmessage</th>
        <th>Auto Min Reg Time</th>
        <th>Auto Points Hold Over</th>
        <th>Auto Points Hold Days</th>
        <th>Auto Min Earnings</th>
        <th>Auto Max Earnings</th>
        <th>Min Cashout</th>
        <th>Badge</th>
        <th>Avatar</th>
        <th>Level</th>
        <th>Ref Commissions</th>
        <th>Store Pp Max 24</th>
        <th>Store Coupons Max 24</th>
        <th>Enabled</th>
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

