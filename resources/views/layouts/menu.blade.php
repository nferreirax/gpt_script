<li class="{{ Request::is('admins*') ? 'active' : '' }}">
    <a href="{{ route('admins.index') }}"><i class="fa fa-edit"></i><span>Admins</span></a>
</li>

<li class="{{ Request::is('achievementLevels*') ? 'active' : '' }}">
    <a href="{{ route('achievementLevels.index') }}"><i class="fa fa-edit"></i><span>Achievement Levels</span></a>
</li>

<li class="{{ Request::is('achievementLogs*') ? 'active' : '' }}">
    <a href="{{ route('achievementLogs.index') }}"><i class="fa fa-edit"></i><span>Achievement Logs</span></a>
</li>

<li class="{{ Request::is('adminLoginLogs*') ? 'active' : '' }}">
    <a href="{{ route('adminLoginLogs.index') }}"><i class="fa fa-edit"></i><span>Admin Login Logs</span></a>
</li>

<li class="{{ Request::is('creditDebits*') ? 'active' : '' }}">
    <a href="{{ route('creditDebits.index') }}"><i class="fa fa-edit"></i><span>Credit Debits</span></a>
</li>

<li class="{{ Request::is('creditDebitManuallies*') ? 'active' : '' }}">
    <a href="{{ route('creditDebitManuallies.index') }}"><i class="fa fa-edit"></i><span>Credit Debit Manuallies</span></a>
</li>

