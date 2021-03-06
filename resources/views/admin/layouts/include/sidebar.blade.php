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
                            <a id="users" class="nav-link" href="{{ route('users') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Users
                            </a>

                            <a id="donations" class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseDonations" aria-expanded="false" aria-controls="collapseDonations">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-circle-dollar-to-slot"></i></div>
                                Donation
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseDonations" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" id="donationTypes" href="{{ route('donationTypes') }}">Donation Types</a>
                                    <a class="nav-link" id="viewDonations" href="{{ route('donations') }}">View Donations</a>
                                </nav>
                            </div>

                            <a id="pages" class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-pager"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    @php($pages = \App\Models\Page::all())
                                    @forelse($pages as $page)
                                        <a class="nav-link" id="page{{ $page->id }}" href="{{ route('page.view', $page->id) }}">{{ $page->title }}</a>
                                    @empty
                                        <a class="nav-link" id="page" href="{{ route('pages') }}">No Pages</a>
                                    @endforelse
                                </nav>
                            </div>


                            <div class="sb-sidenav-menu-heading">Controls</div>
                            <a class="nav-link" id="settings" href="{{ route('settings') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tools"></i></div>
                                Settings
                            </a>
                            <a class="nav-link" id="sliders" href="{{ route('sliders') }}">
                                <div class="sb-nav-link-icon"><i class="fa fa-sliders" aria-hidden="true"></i></i></div>
                                Sliders
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <span style="text-transform: capitalize">{{ auth()->user()->name ?? '' }}</span>
                    </div>
                </nav>
            </div>
