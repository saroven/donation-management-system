<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{ route('home') }}" id="home">
                                <div class="sb-nav-link-icon"><i class="fas fa-home-alt"></i></div>
                                Home
                            </a>

                            <a class="nav-link" href="{{ route('dashboard') }}" id="dashboard">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Data</div>
                            <a id="users" class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseUsers" aria-expanded="false" aria-controls="collapseUsers">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Users
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseUsers" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" id="addUser" href="{{ route('addUser') }}">Add User</a>
                                    <a class="nav-link" id="manageUser" href="{{ route('users') }}">Manage User</a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Controls</div>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-tools"></i></div>
                                Settings
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <span style="text-transform: capitalize">{{ auth()->user()->name ?? '' }}</span>
                    </div>
                </nav>
            </div>