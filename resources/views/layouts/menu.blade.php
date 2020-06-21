<li class="{{ Request::is('admins*') ? 'active' : '' }}">
    <a href="{{ route('admins.index') }}"><i class="fa fa-edit"></i><span>Admins</span></a>
</li>

<li class="{{ Request::is('achievementLevels*') ? 'active' : '' }}">
    <a href="{{ route('achievementLevels.index') }}"><i class="fa fa-edit"></i><span>Achievement Levels</span></a>
</li>

