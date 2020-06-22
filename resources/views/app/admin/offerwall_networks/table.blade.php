<div class="table-responsive">
    <table id="table" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Enabled</th>
        <th>Enabled Postback</th>
        <th>Name</th>
        <th>Url</th>
        <th>Logo Image</th>
        <th>Iframe Id</th>
        <th>Iframe Key</th>
        <th>Iframe Url</th>
        <th>Postback Ips</th>
        <th>Credit Wallet</th>
        <th>Credit Multiplier</th>
        <th>Order</th>
        <th>Payment Hold</th>
        <th>Payment Hold Over</th>
        <th>Ref Commissions</th>
        <th>Show Offerwalls</th>
        <th>Show Earn Passive</th>
        <th>Show Earn Surveys</th>
        <th>Show Earn Offerwalls</th>
        <th>Category</th>
        <th>Postback Method</th>
        <th>Postback Tid</th>
        <th>Postback Rate</th>
        <th>Postback Subid</th>
        <th>Postback Status</th>
        <th>Postback Value Reverse</th>
        <th>Postback Value Credit</th>
        <th>Postback Success</th>
        <th>Postback Error</th>
        <th>Postback Cname</th>
        <th>Postback Cid</th>
        <th>Postback Reversal Reason</th>
        <th>Postback Filter Duplicates</th>
        <th>Postback Signature</th>
        <th>Postback Signature Encryption</th>
        <th>Postback Signature Built</th>
        <th>Postback Url</th>
        <th>Postback Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($offerwallNetworks as $offerwallNetworks)
                <tr>
                    <td>{{ $offerwallNetworks->enabled }}</td>
            <td>{{ $offerwallNetworks->enabled_postback }}</td>
            <td>{{ $offerwallNetworks->name }}</td>
            <td>{{ $offerwallNetworks->url }}</td>
            <td>{{ $offerwallNetworks->logo_image }}</td>
            <td>{{ $offerwallNetworks->iframe_id }}</td>
            <td>{{ $offerwallNetworks->iframe_key }}</td>
            <td>{{ $offerwallNetworks->iframe_url }}</td>
            <td>{{ $offerwallNetworks->postback_ips }}</td>
            <td>{{ $offerwallNetworks->credit_wallet }}</td>
            <td>{{ $offerwallNetworks->credit_multiplier }}</td>
            <td>{{ $offerwallNetworks->order }}</td>
            <td>{{ $offerwallNetworks->payment_hold }}</td>
            <td>{{ $offerwallNetworks->payment_hold_over }}</td>
            <td>{{ $offerwallNetworks->ref_commissions }}</td>
            <td>{{ $offerwallNetworks->show_offerwalls }}</td>
            <td>{{ $offerwallNetworks->show_earn_passive }}</td>
            <td>{{ $offerwallNetworks->show_earn_surveys }}</td>
            <td>{{ $offerwallNetworks->show_earn_offerwalls }}</td>
            <td>{{ $offerwallNetworks->category }}</td>
            <td>{{ $offerwallNetworks->postback_method }}</td>
            <td>{{ $offerwallNetworks->postback_tid }}</td>
            <td>{{ $offerwallNetworks->postback_rate }}</td>
            <td>{{ $offerwallNetworks->postback_subid }}</td>
            <td>{{ $offerwallNetworks->postback_status }}</td>
            <td>{{ $offerwallNetworks->postback_value_reverse }}</td>
            <td>{{ $offerwallNetworks->postback_value_credit }}</td>
            <td>{{ $offerwallNetworks->postback_success }}</td>
            <td>{{ $offerwallNetworks->postback_error }}</td>
            <td>{{ $offerwallNetworks->postback_cname }}</td>
            <td>{{ $offerwallNetworks->postback_cid }}</td>
            <td>{{ $offerwallNetworks->postback_reversal_reason }}</td>
            <td>{{ $offerwallNetworks->postback_filter_duplicates }}</td>
            <td>{{ $offerwallNetworks->postback_signature }}</td>
            <td>{{ $offerwallNetworks->postback_signature_encryption }}</td>
            <td>{{ $offerwallNetworks->postback_signature_built }}</td>
            <td>{{ $offerwallNetworks->postback_url }}</td>
            <td>{{ $offerwallNetworks->postback_password }}</td>
                    <td>
                        {!! Form::open(['route' => ['offerwallNetworks.destroy', $offerwallNetworks->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('offerwallNetworks.show', [$offerwallNetworks->id]) }}" class='btn btn-default'><i class="fas fa-eye"></i></a>
                            <a href="{{ route('offerwallNetworks.edit', [$offerwallNetworks->id]) }}" class='btn btn-default'><i class="fas fa-edit"></i></a>
                            {!! Form::button('<i class="fas fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        <tfoot>
            <tr>
               <th>Enabled</th>
        <th>Enabled Postback</th>
        <th>Name</th>
        <th>Url</th>
        <th>Logo Image</th>
        <th>Iframe Id</th>
        <th>Iframe Key</th>
        <th>Iframe Url</th>
        <th>Postback Ips</th>
        <th>Credit Wallet</th>
        <th>Credit Multiplier</th>
        <th>Order</th>
        <th>Payment Hold</th>
        <th>Payment Hold Over</th>
        <th>Ref Commissions</th>
        <th>Show Offerwalls</th>
        <th>Show Earn Passive</th>
        <th>Show Earn Surveys</th>
        <th>Show Earn Offerwalls</th>
        <th>Category</th>
        <th>Postback Method</th>
        <th>Postback Tid</th>
        <th>Postback Rate</th>
        <th>Postback Subid</th>
        <th>Postback Status</th>
        <th>Postback Value Reverse</th>
        <th>Postback Value Credit</th>
        <th>Postback Success</th>
        <th>Postback Error</th>
        <th>Postback Cname</th>
        <th>Postback Cid</th>
        <th>Postback Reversal Reason</th>
        <th>Postback Filter Duplicates</th>
        <th>Postback Signature</th>
        <th>Postback Signature Encryption</th>
        <th>Postback Signature Built</th>
        <th>Postback Url</th>
        <th>Postback Password</th>
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

