<div class="site-header__header-three-wrap clearfix">
            <div class="container">
               <header class="main-nav__header-three">
                  <nav class="header-navigation stricky">
                     <div class="main-nav__header-three__content-box clearfix">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div
                           class="main-nav__left main-nav__left-three float-left"
                        >
                           <div class="logo">
                              <a href="{{ 'home' }}"
                                 ><img
                                    src="{{ asset('assets/images/resources/logo.png') }}"
                                    alt=""
                              /></a>
                           </div>
                           <a href="#" class="side-menu__toggler">
                              <i class="fa fa-bars"></i>
                           </a>
                        </div>
                        <div
                           class="main-nav__main-navigation main-nav__main-navigation__three float-left clearfix"
                        >
                           <ul class="main-nav__navigation-box float-left">
                              <li id="home">
                                 <a href="{{ route('home') }}">Home</a>
                              </li>
                              <li id="about">
                                 <a href="{{ route('about') }}">About</a>
                              </li>
                              <li id="contact">
                                 <a href="{{ route('contact') }}">Contact</a>
                              </li>
                               <li id="donations">
                                 <a href="{{ route('donations') }}">Donations</a>
                               </li>
                               <li id="gallery">
                                 <a href="#">Gallery</a>
                               </li>
                           </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                        <div class="main-nav__right-three float-right">
                           <div class="main-nav__right__btn-one">
                              <a href="{{ route('donate') }}"
                                 ><i class="fas fa-heart"></i>Donate</a
                              >
                           </div>
                           <div class="main-nav__right__icon-cart-box">
                              <div class="dropdown">
                                  <span class="fa fa-user text-dark" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      @guest
                                        @if (Route::has('login'))

                                            <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        @endif
                                        @if (Route::has('register'))
                                            <hr class="dropdown-divider" />
                                            <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        @endif
                                    @else
                                        @if(auth()->user()->user_type == 1)
                                            <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
                                        @endif
                                        <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
                                        <hr class="dropdown-divider" />
                                        <a class="dropdown-item"
                                           href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                           {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                      @endguest
                                  </div>
                              </div>

                           </div>
                        </div>
                     </div>
                  </nav>
               </header>
            </div>
         </div>
