<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


        <li class="nav-item">
            <a href="/" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('karaokes.index') }}" class="nav-link">
                <i class="nav-icon fas fa-desktop"></i>
                <p>Karaoke</p>
                <i class="fas fa-angle-left right"></i>
            </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('karaokes.index') }}" class="nav-link">
                        <i class="nav-icon 	fas fa-pencil-alt"></i>
                            <p>Pesan Room </p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/riwayat" class="nav-link">
                            <i class="nav-icon 	fas fa-receipt"></i>
                            <p>Riwayat Booking</p>
                        </a>
                    </li>
                </ul>
        </li>

       @can('Ekspedisi - Melihat')
            <li class="nav-item">
                <a href="{{ route('ekspedisis.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-cubes"></i>
                    <p>Ekspedisi</p>
                </a>
            </li>
       @endcan
        <br>

        <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">
                <i class="nav-icon fas fa fa-sign-out-alt"></i>
                <p>Log Out</p>
            </a>
        </li>


    </ul>
</nav>
