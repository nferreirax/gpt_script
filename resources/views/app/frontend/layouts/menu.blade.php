<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link">
        <i class="nav-icon fas fa-home"></i> <p> Dashboard</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('offerwalls') }}" class="nav-link {{ Request::is('offerwalls*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-envelope"></i>
        <p>
            Offerwalls
        </p>
    </a>
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
            <a href="#"
                class="nav-link {{ Request::is('creditDebits*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Financial Extract</p>
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
            <a href="#"
                class="nav-link {{ Request::is('storeCategories*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Products</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="#"
                class="nav-link {{ Request::is('storeGiftCards*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Your Orders</p>
            </a>
        </li>   
    </ul>
</li>


<li class="nav-item">
    <a href="" class="nav-link {{ Request::is('messages*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-envelope"></i>
        <p>
            Messages
        </p>
    </a>
</li>




