<div class="card-body">
    <!-- Enabled Field -->
<div class="form-group">
    {!! Form::label('enabled', 'Enabled:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('enabled', 0) !!}
        {!! Form::checkbox('enabled', '1', null) !!}
    </label>
</div>


<!-- Enabled Postback Field -->
<div class="form-group">
    {!! Form::label('enabled_postback', 'Enabled Postback:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('enabled_postback', 0) !!}
        {!! Form::checkbox('enabled_postback', '1', null) !!}
    </label>
</div>


<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>



<!-- Url Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('url', 'Url:') !!}
    {!! Form::textarea('url', null, ['class' => 'form-control']) !!}
</div>

<!-- Logo Image Field -->
<div class="form-group">
    {!! Form::label('logo_image', 'Logo Image:') !!}
    {!! Form::text('logo_image', null, ['class' => 'form-control']) !!}
</div>



<!-- Iframe Id Field -->
<div class="form-group">
    {!! Form::label('iframe_id', 'Iframe Id:') !!}
    {!! Form::text('iframe_id', null, ['class' => 'form-control']) !!}
</div>



<!-- Iframe Key Field -->
<div class="form-group">
    {!! Form::label('iframe_key', 'Iframe Key:') !!}
    {!! Form::text('iframe_key', null, ['class' => 'form-control']) !!}
</div>



<!-- Iframe Url Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('iframe_url', 'Iframe Url:') !!}
    {!! Form::textarea('iframe_url', null, ['class' => 'form-control']) !!}
</div>

<!-- Postback Ips Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('postback_ips', 'Postback Ips:') !!}
    {!! Form::textarea('postback_ips', null, ['class' => 'form-control']) !!}
</div>

<!-- Credit Wallet Field -->
<div class="form-group">
    {!! Form::label('credit_wallet', 'Credit Wallet:') !!}
    {!! Form::number('credit_wallet', null, ['class' => 'form-control']) !!}
</div>

<!-- Credit Multiplier Field -->
<div class="form-group">
    {!! Form::label('credit_multiplier', 'Credit Multiplier:') !!}
    {!! Form::number('credit_multiplier', null, ['class' => 'form-control']) !!}
</div>

<!-- Order Field -->
<div class="form-group">
    {!! Form::label('order', 'Order:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('order', 0) !!}
        {!! Form::checkbox('order', '1', null) !!}
    </label>
</div>


<!-- Payment Hold Field -->
<div class="form-group">
    {!! Form::label('payment_hold', 'Payment Hold:') !!}
    {!! Form::number('payment_hold', null, ['class' => 'form-control']) !!}
</div>

<!-- Payment Hold Over Field -->
<div class="form-group">
    {!! Form::label('payment_hold_over', 'Payment Hold Over:') !!}
    {!! Form::number('payment_hold_over', null, ['class' => 'form-control']) !!}
</div>

<!-- Ref Commissions Field -->
<div class="form-group">
    {!! Form::label('ref_commissions', 'Ref Commissions:') !!}
    {!! Form::number('ref_commissions', null, ['class' => 'form-control']) !!}
</div>

<!-- Show Offerwalls Field -->
<div class="form-group">
    {!! Form::label('show_offerwalls', 'Show Offerwalls:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('show_offerwalls', 0) !!}
        {!! Form::checkbox('show_offerwalls', '1', null) !!}
    </label>
</div>


<!-- Show Earn Passive Field -->
<div class="form-group">
    {!! Form::label('show_earn_passive', 'Show Earn Passive:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('show_earn_passive', 0) !!}
        {!! Form::checkbox('show_earn_passive', '1', null) !!}
    </label>
</div>


<!-- Show Earn Surveys Field -->
<div class="form-group">
    {!! Form::label('show_earn_surveys', 'Show Earn Surveys:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('show_earn_surveys', 0) !!}
        {!! Form::checkbox('show_earn_surveys', '1', null) !!}
    </label>
</div>


<!-- Show Earn Offerwalls Field -->
<div class="form-group">
    {!! Form::label('show_earn_offerwalls', 'Show Earn Offerwalls:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('show_earn_offerwalls', 0) !!}
        {!! Form::checkbox('show_earn_offerwalls', '1', null) !!}
    </label>
</div>


<!-- Category Field -->
<div class="form-group">
    {!! Form::label('category', 'Category:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('category', 0) !!}
        {!! Form::checkbox('category', '1', null) !!}
    </label>
</div>


<!-- Postback Method Field -->
<div class="form-group">
    {!! Form::label('postback_method', 'Postback Method:') !!}
    {!! Form::text('postback_method', null, ['class' => 'form-control']) !!}
</div>



<!-- Postback Tid Field -->
<div class="form-group">
    {!! Form::label('postback_tid', 'Postback Tid:') !!}
    {!! Form::text('postback_tid', null, ['class' => 'form-control']) !!}
</div>



<!-- Postback Rate Field -->
<div class="form-group">
    {!! Form::label('postback_rate', 'Postback Rate:') !!}
    {!! Form::text('postback_rate', null, ['class' => 'form-control']) !!}
</div>



<!-- Postback Subid Field -->
<div class="form-group">
    {!! Form::label('postback_subid', 'Postback Subid:') !!}
    {!! Form::text('postback_subid', null, ['class' => 'form-control']) !!}
</div>



<!-- Postback Status Field -->
<div class="form-group">
    {!! Form::label('postback_status', 'Postback Status:') !!}
    {!! Form::text('postback_status', null, ['class' => 'form-control']) !!}
</div>



<!-- Postback Value Reverse Field -->
<div class="form-group">
    {!! Form::label('postback_value_reverse', 'Postback Value Reverse:') !!}
    {!! Form::text('postback_value_reverse', null, ['class' => 'form-control']) !!}
</div>



<!-- Postback Value Credit Field -->
<div class="form-group">
    {!! Form::label('postback_value_credit', 'Postback Value Credit:') !!}
    {!! Form::text('postback_value_credit', null, ['class' => 'form-control']) !!}
</div>



<!-- Postback Success Field -->
<div class="form-group">
    {!! Form::label('postback_success', 'Postback Success:') !!}
    {!! Form::text('postback_success', null, ['class' => 'form-control']) !!}
</div>



<!-- Postback Error Field -->
<div class="form-group">
    {!! Form::label('postback_error', 'Postback Error:') !!}
    {!! Form::text('postback_error', null, ['class' => 'form-control']) !!}
</div>



<!-- Postback Cname Field -->
<div class="form-group">
    {!! Form::label('postback_cname', 'Postback Cname:') !!}
    {!! Form::text('postback_cname', null, ['class' => 'form-control']) !!}
</div>



<!-- Postback Cid Field -->
<div class="form-group">
    {!! Form::label('postback_cid', 'Postback Cid:') !!}
    {!! Form::text('postback_cid', null, ['class' => 'form-control']) !!}
</div>



<!-- Postback Reversal Reason Field -->
<div class="form-group">
    {!! Form::label('postback_reversal_reason', 'Postback Reversal Reason:') !!}
    {!! Form::text('postback_reversal_reason', null, ['class' => 'form-control']) !!}
</div>



<!-- Postback Filter Duplicates Field -->
<div class="form-group">
    {!! Form::label('postback_filter_duplicates', 'Postback Filter Duplicates:') !!}
    {!! Form::text('postback_filter_duplicates', null, ['class' => 'form-control']) !!}
</div>



<!-- Postback Signature Field -->
<div class="form-group">
    {!! Form::label('postback_signature', 'Postback Signature:') !!}
    {!! Form::text('postback_signature', null, ['class' => 'form-control']) !!}
</div>



<!-- Postback Signature Encryption Field -->
<div class="form-group">
    {!! Form::label('postback_signature_encryption', 'Postback Signature Encryption:') !!}
    {!! Form::text('postback_signature_encryption', null, ['class' => 'form-control']) !!}
</div>



<!-- Postback Signature Built Field -->
<div class="form-group">
    {!! Form::label('postback_signature_built', 'Postback Signature Built:') !!}
    {!! Form::text('postback_signature_built', null, ['class' => 'form-control']) !!}
</div>



<!-- Postback Url Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('postback_url', 'Postback Url:') !!}
    {!! Form::textarea('postback_url', null, ['class' => 'form-control']) !!}
</div>

<!-- Postback Password Field -->
<div class="form-group">
    {!! Form::label('postback_password', 'Postback Password:') !!}
    {!! Form::text('postback_password', null, ['class' => 'form-control']) !!}
</div>



    <!-- Submit Field -->
    <div class="card-footer">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}    
    <a href="{{ route('offerwallNetworks.index') }}" class="btn btn-default">Cancel</a>
    </div>
</div>



