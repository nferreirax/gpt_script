<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="users-table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Referrals</th>
                                    <th>Sponsor</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->total_team_members }}</td>
                                    <td>@if (isset($user->sponsor))
                                        {{ $user->sponsor->username }}
                                        @else
                                        -
                                        @endif
                                    </td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>@if($user->trashed())
                                        Deleted                                       
                                        @else
                                        Active
                                        @endif</td>
                                    <td>
                                        {!! Form::open(['route' => ['users.destroy', $user->id], 'method' =>
                                        'delete']) !!}
                                        <div class='btn-group'>
                                            
                                            {{-- <a href="{{ route('users.show', [$user->id]) }}"
                                                class='btn btn-default btn-xs'><i class="nav-icon far fa-eye"></i></a> --}}
                                            <a href="{{ route('users.edit', [$user->id]) }}"
                                                class='btn btn-default btn-xs'><i class="nav-icon far fa-edit"></i></a>
                                            {!! Form::button('<i class="nav-icon far fa-trash-alt"></i>', ['type' =>
                                            'submit', 'class' =>
                                            'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure you want
                                            delete this
                                            account?')"]) !!}
                                        </div>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@section('js')
<script>
    $(function () {
        $("#table").DataTable();                  
    });
</script>
@stop
@section('plugins.Datatables', true)

