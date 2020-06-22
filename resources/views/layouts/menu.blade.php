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

<li class="{{ Request::is('messages*') ? 'active' : '' }}">
    <a href="{{ route('messages.index') }}"><i class="fa fa-edit"></i><span>Messages</span></a>
</li>

<li class="{{ Request::is('offersHistories*') ? 'active' : '' }}">
    <a href="{{ route('offersHistories.index') }}"><i class="fa fa-edit"></i><span>Offers Histories</span></a>
</li>

<li class="{{ Request::is('offersLogs*') ? 'active' : '' }}">
    <a href="{{ route('offersLogs.index') }}"><i class="fa fa-edit"></i><span>Offers Logs</span></a>
</li>

<li class="{{ Request::is('offerwallNetworks*') ? 'active' : '' }}">
    <a href="{{ route('offerwallNetworks.index') }}"><i class="fa fa-edit"></i><span>Offerwall Networks</span></a>
</li>

<li class="{{ Request::is('storeCategories*') ? 'active' : '' }}">
    <a href="{{ route('storeCategories.index') }}"><i class="fa fa-edit"></i><span>Store Categories</span></a>
</li>

<li class="{{ Request::is('storeGiftCards*') ? 'active' : '' }}">
    <a href="{{ route('storeGiftCards.index') }}"><i class="fa fa-edit"></i><span>Store Gift Cards</span></a>
</li>

<li class="{{ Request::is('storeOrders*') ? 'active' : '' }}">
    <a href="{{ route('storeOrders.index') }}"><i class="fa fa-edit"></i><span>Store Orders</span></a>
</li>

<li class="{{ Request::is('storeOrdersCryptos*') ? 'active' : '' }}">
    <a href="{{ route('storeOrdersCryptos.index') }}"><i class="fa fa-edit"></i><span>Store Orders Cryptos</span></a>
</li>

<li class="{{ Request::is('storeProducts*') ? 'active' : '' }}">
    <a href="{{ route('storeProducts.index') }}"><i class="fa fa-edit"></i><span>Store Products</span></a>
</li>

<li class="{{ Request::is('usersAchievements*') ? 'active' : '' }}">
    <a href="{{ route('usersAchievements.index') }}"><i class="fa fa-edit"></i><span>Users Achievements</span></a>
</li>

<li class="{{ Request::is('usersLoginLogs*') ? 'active' : '' }}">
    <a href="{{ route('usersLoginLogs.index') }}"><i class="fa fa-edit"></i><span>Users Login Logs</span></a>
</li>

<li class="{{ Request::is('userWallets*') ? 'active' : '' }}">
    <a href="{{ route('userWallets.index') }}"><i class="fa fa-edit"></i><span>User Wallets</span></a>
</li>

<li class="{{ Request::is('vipLevels*') ? 'active' : '' }}">
    <a href="{{ route('vipLevels.index') }}"><i class="fa fa-edit"></i><span>Vip Levels</span></a>
</li>

<li class="{{ Request::is('wallets*') ? 'active' : '' }}">
    <a href="{{ route('wallets.index') }}"><i class="fa fa-edit"></i><span>Wallets</span></a>
</li>

