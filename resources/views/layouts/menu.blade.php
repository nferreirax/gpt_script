<li class="nav-item">
    <a href="{{ route('admin.dashboard') }}" class="nav-link">
        <i class="nav-icon fas fa-home"></i> <p> Dashboard</p>
    </a>
</li>
<li
    class="nav-item has-treeview menu {{ Request::is('usersLoginLogs*') || Request::is('users*') || Request::is('userWallets*') ? 'menu-open active' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-user"></i>
        <p>Users<i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item  ">
            <a href="{{ route('users.index') }}"
                class="nav-link {{ Request::is( 'users/*') || Request::is( 'users') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage Users</p>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="{{ route('userWallets.index') }}"
                class="nav-link {{ Request::is( 'userWallets*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Users Balance</p>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="{{ route('usersLoginLogs.index') }}"
                class="nav-link {{ Request::is( 'usersLoginLogs*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Users Login Logs</p>
            </a>
        </li>
    </ul>
</li>
<li
    class="nav-item has-treeview {{ Request::is('creditDebits*') || Request::is('creditDebitManuallies*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-money-check-alt"></i>
        <p>
            Financial
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('creditDebits.index') }}"
                class="nav-link {{ Request::is('creditDebits*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Financial Extract</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('creditDebitManuallies.index') }}"
                class="nav-link {{ Request::is('creditDebitManuallies*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Credit/Debit Manual Log</p>
            </a>
        </li>
    </ul>
</li>


<li
    class="nav-item has-treeview {{ Request::is('offersHistories*') || Request::is('offersLogs*') || Request::is('offerwallNetworks*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-tasks"></i>
        <p>
            Offerwalls
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('offersHistories.index') }}"
                class="nav-link {{ Request::is('offersHistories*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Offewalls History</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('offersLogs.index') }}" class="nav-link {{ Request::is('offersLogs*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Offerwalls Postback Log</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('offerwallNetworks.index') }}"
                class="nav-link {{ Request::is('offerwallNetworks*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Offerwalls Networks</p>
            </a>
        </li>
    </ul>
</li>

<li
    class="nav-item has-treeview {{ Request::is('storeCategories*') || Request::is('storeGiftCards*') || Request::is('storeOrdersCryptos*')  || Request::is('storeProducts*') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-store"></i>
        <p>
            Store
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('storeCategories.index') }}"
                class="nav-link {{ Request::is('storeCategories*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Store Categories</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('storeGiftCards.index') }}"
                class="nav-link {{ Request::is('storeGiftCards*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Store Gift Cards</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('storeOrders.index') }}"
                class="nav-link {{ Request::is('storeOrders*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Store Orders</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('storeOrdersCryptos.index') }}"
                class="nav-link {{ Request::is('storeOrdersCryptos*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Store Orders Cryptos</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('storeProducts.index') }}"
                class="nav-link {{ Request::is('storeProducts*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Store Products</p>
            </a>
        </li>
    </ul>
</li>


<li class="nav-item">
    <a href="{{ route('messages.index') }}" class="nav-link {{ Request::is('messages*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-envelope"></i>
        <p>
            Messages
        </p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('vipLevels.index') }}" class="nav-link {{ Request::is('vipLevels*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tree"></i>
        <p>
            Vip Levels
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('achievementLevels.index') }}" class="nav-link {{ Request::is('achievementLevels*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-th"></i>
        <p>
            Achievement Levels
        </p>
    </a>
</li>
<li
    class="nav-item has-treeview menu {{ Request::is('admin/wallets/*') || Request::is('admin/settings*') ? 'menu-open active' : '' }}">
    <a href="#" class="nav-link ">
        <i class="nav-icon fas fa-cogs"></i>
        <p>Settings<i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview ">
        <li class="nav-item ">
            <a href="{{ route('wallets.index') }}" class="nav-link {{ Request::is('wallets*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon "></i>
                <p>WALLETS</p>
            </a>
        </li>
        <li class="nav-item ">
            <a href="{{ route('admins.index') }}" class="nav-link {{ Request::is('admins*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon "></i>
                <p>Admins</p>
            </a>
        </li>     
    </ul>
</li>




