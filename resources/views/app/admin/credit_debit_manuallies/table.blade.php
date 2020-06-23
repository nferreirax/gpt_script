<section class="content">
    <div class="row">
        <div class="col-12">
            @include('app.admin.credit_debit_manuallies.credit_debit_balance')           
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                {{-- <div class="card-header">
                    <a class="btn btn-primary" href="{{ route('admin.creditDebits.create') }}">@lang('admin.ADD_NEW')</a>
            </div> --}}
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="creditDebitManuallies-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Wallet</th>
                                <th>Amount</th>
                                <th>Member Notes</th>
                                <th>Admin Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($creditDebitManuallies as $creditDebitManually)
                            <tr>
                                <td>{{ $creditDebitManually->id }}</td>
                                <td>{{ $creditDebitManually->user->name }}</td>
                                <td>{{ $creditDebitManually->wallet->name }}</td>
                                <td>{{ $creditDebitManually->amount }}</td>
                                <td>{{ $creditDebitManually->description }}</td>
                                <td>{{ $creditDebitManually->admin_notes }}</td>
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

