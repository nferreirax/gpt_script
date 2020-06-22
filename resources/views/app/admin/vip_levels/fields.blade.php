<div class="card-body">
    <!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>



<!-- Privmessage Field -->
<div class="form-group">
    {!! Form::label('privmessage', 'Privmessage:') !!}
    {!! Form::number('privmessage', null, ['class' => 'form-control']) !!}
</div>

<!-- Auto Min Reg Time Field -->
<div class="form-group">
    {!! Form::label('auto_min_reg_time', 'Auto Min Reg Time:') !!}
    {!! Form::number('auto_min_reg_time', null, ['class' => 'form-control']) !!}
</div>

<!-- Auto Points Hold Over Field -->
<div class="form-group">
    {!! Form::label('auto_points_hold_over', 'Auto Points Hold Over:') !!}
    {!! Form::number('auto_points_hold_over', null, ['class' => 'form-control']) !!}
</div>

<!-- Auto Points Hold Days Field -->
<div class="form-group">
    {!! Form::label('auto_points_hold_days', 'Auto Points Hold Days:') !!}
    {!! Form::number('auto_points_hold_days', null, ['class' => 'form-control']) !!}
</div>

<!-- Auto Min Earnings Field -->
<div class="form-group">
    {!! Form::label('auto_min_earnings', 'Auto Min Earnings:') !!}
    {!! Form::number('auto_min_earnings', null, ['class' => 'form-control']) !!}
</div>

<!-- Auto Max Earnings Field -->
<div class="form-group">
    {!! Form::label('auto_max_earnings', 'Auto Max Earnings:') !!}
    {!! Form::number('auto_max_earnings', null, ['class' => 'form-control']) !!}
</div>

<!-- Min Cashout Field -->
<div class="form-group">
    {!! Form::label('min_cashout', 'Min Cashout:') !!}
    {!! Form::number('min_cashout', null, ['class' => 'form-control']) !!}
</div>

<!-- Badge Field -->
<div class="form-group">
    {!! Form::label('badge', 'Badge:') !!}
    {!! Form::text('badge', null, ['class' => 'form-control']) !!}
</div>



<!-- Avatar Field -->
<div class="form-group">
    {!! Form::label('avatar', 'Avatar:') !!}
    {!! Form::text('avatar', null, ['class' => 'form-control']) !!}
</div>



<!-- Level Field -->
<div class="form-group">
    {!! Form::label('level', 'Level:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('level', 0) !!}
        {!! Form::checkbox('level', '1', null) !!}
    </label>
</div>


<!-- Ref Commissions Field -->
<div class="form-group">
    {!! Form::label('ref_commissions', 'Ref Commissions:') !!}
    {!! Form::number('ref_commissions', null, ['class' => 'form-control']) !!}
</div>

<!-- Store Pp Max 24 Field -->
<div class="form-group">
    {!! Form::label('store_pp_max_24', 'Store Pp Max 24:') !!}
    {!! Form::number('store_pp_max_24', null, ['class' => 'form-control']) !!}
</div>

<!-- Store Coupons Max 24 Field -->
<div class="form-group">
    {!! Form::label('store_coupons_max_24', 'Store Coupons Max 24:') !!}
    {!! Form::number('store_coupons_max_24', null, ['class' => 'form-control']) !!}
</div>

<!-- Enabled Field -->
<div class="form-group">
    {!! Form::label('enabled', 'Enabled:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('enabled', 0) !!}
        {!! Form::checkbox('enabled', '1', null) !!}
    </label>
</div>


    <!-- Submit Field -->
    <div class="card-footer">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}    
    <a href="{{ route('vipLevels.index') }}" class="btn btn-default">Cancel</a>
    </div>
</div>



