<div class="page-header">
    <div class="header-wrapper row m-0">
        {{-- <form class="form-inline search-full col" action="#" method="get">
            <div class="form-group w-100">
                <div class="Typeahead Typeahead--twitterUsers">
                    <div class="u-posRelative">
                        <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                            placeholder="Search Riho .." name="q" title="" autofocus>
                        <div class="spinner-border Typeahead-spinner" role="status"><span
                                class="sr-only">Loading... </span></div><i class="close-search"
                            data-feather="x"></i>
                    </div>
                    <div class="Typeahead-menu"> </div>
                </div>
            </div>
        </form> --}}
        <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"> <a href="index.html"><img class="img-fluid for-light"
                        src="{{ asset('dashboard_assets/assets/images/logo/logo_dark.png') }}" alt="logo-light"><img
                        class="img-fluid for-dark" src="{{ asset('dashboard_assets/assets/images/logo/logo.png') }}"
                        alt="logo-dark"></a></div>
            <div class="toggle-sidebar"> <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
            </div>
        </div>
        <div class="left-header col-xxl-5 col-xl-6 col-lg-5 col-md-4 col-sm-3 p-0">
            <div> <a class="toggle-sidebar" href="#"> <i class="iconly-Category icli"> </i></a>
                <div class="d-flex align-items-center gap-2 ">
                    <h4 class="f-w-600">Welcome {{ auth()->user()->name }}</h4><img class="mt-0"
                        src="{{ asset('dashboard_assets/assets/images/hand.gif') }}" alt="hand-gif">
                </div>
            </div>
            <div class="welcome-content d-xl-block d-none"><span class="text-truncate col-12">Manage all your plants easily within this application</span></div>
        </div>
        <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
            <ul class="nav-menus">
                {{-- <li class="d-md-block d-none">
                    <div class="form search-form mb-0">
                        <div class="input-group"><span class="input-icon">
                                <svg>
                                    <use href="{{ asset('dashboard_assets/assets/svg/icon-sprite.svg#search-header') }}"></use>
                                </svg>
                                <input class="w-100" type="search" placeholder="Search"></span></div>
                    </div>
                </li> --}}
                {{-- <li class="d-md-none d-block">
                    <div class="form search-form mb-0">
                        <div class="input-group"> <span class="input-show">
                                <svg id="searchIcon">
                                    <use href="{{ asset('dashboard_assets/assets/svg/icon-sprite.svg#search-header') }}"></use>
                                </svg>
                                <div id="searchInput">
                                    <input type="search" placeholder="Search">
                                </div>
                            </span></div>
                    </div>
                </li> --}}
                <li>
                    <button class="btn btn-primary" onclick="location.href='/dashboard'">
                        <i class="fa fa-tachometer text-white" aria-hidden="true"></i>
                        </svg><span class="">Dashboard</span></a>
                    </button>
                </li>
                <li class="onhover-dropdown">
                    <svg>
                        <use href="{{ asset('dashboard_assets/assets/svg/icon-sprite.svg#star') }}"></use>
                    </svg>
                    <div class="onhover-show-div bookmark-flip">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="front">
                                    <h6 class="f-18 mb-0 dropdown-title">Shorcut</h6>
                                    <ul class="bookmark-dropdown">
                                        <li>
                                            <div class="row">
                                                <div class="col-4 text-center" onclick="location.href = '/dashboard'">
                                                    <div class="bookmark-content">
                                                        <div class="bookmark-icon"><i class="fa fa-tachometer"
                                                                aria-hidden="true"></i></div>
                                                        <span>Dashboard</span>
                                                    </div>
                                                </div>
                                                <div class="col-4 text-center">
                                                    <div class="bookmark-content">
                                                        <div class="bookmark-icon"><i class="fa fa-user"
                                                                aria-hidden="true"></i>
                                                        </div><span>Profile</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="mode"><i class="moon" data-feather="moon"> </i></div>
                </li>
                <li class="onhover-dropdown notification-down">
                    <div class="notification-box">
                        <svg>
                            <use href="{{ asset('dashboard_assets/assets/svg/icon-sprite.svg#notification-header') }}">
                            </use>
                        </svg><span class="badge rounded-pill badge-secondary">4 </span>
                    </div>
                    <div class="onhover-show-div notification-dropdown">
                        <div class="card mb-0">
                            <div class="card-header">
                                <div class="common-space">
                                    <h4 class="text-start f-w-600">Notitications</h4>
                                    <div><span>4 New</span></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="notitications-bar">
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-aboutus" role="tabpanel"
                                            aria-labelledby="pills-aboutus-tab">
                                            <div class="user-message">
                                                <ul>
                                                    <li>
                                                        <div class="user-alerts">
                                                            <img class="user-image rounded-circle img-fluid me-2"
                                                                src="{{ asset('dashboard_assets/assets/images/dashboard/plants/plant1.jpg') }}"
                                                                alt="plant" />
                                                            <div class="user-name">
                                                                <div>
                                                                    <h6>
                                                                        <a class="f-w-500 f-14"
                                                                            href="/plants/detail/1">Aloe Vera</a>
                                                                    </h6>
                                                                    <span class="f-12"> needs watering today </span>
                                                                    <span class="f-12">20 min ago</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="user-alerts">
                                                            <img class="user-image rounded-circle img-fluid me-2"
                                                                src="{{ asset('dashboard_assets/assets/images/dashboard/plants/plant2.jpg') }}"
                                                                alt="plant" />
                                                            <div class="user-name">
                                                                <div>
                                                                    <h6>
                                                                        <a class="f-w-500 f-14"
                                                                            href="/plants/detail/2">Orchid</a>
                                                                    </h6>
                                                                    <span class="f-12"> requires sunlight adjustment
                                                                    </span>
                                                                    <span class="f-12">2 hours ago</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="user-alerts">
                                                            <img class="user-image rounded-circle img-fluid me-2"
                                                                src="{{ asset('dashboard_assets/assets/images/dashboard/plants/plant3.jpg') }}"
                                                                alt="plant" />
                                                            <div class="user-name">
                                                                <div>
                                                                    <h6>
                                                                        <a class="f-w-500 f-14"
                                                                            href="/plants/detail/3">Bonsai</a>
                                                                    </h6>
                                                                    <span class="f-12"> needs pruning and care </span>
                                                                    <span class="f-12">3 hours ago</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>

                                                <div class="user-message text-center">
                                                    <a class="f-w-700" href="javascript:void(0)">See all</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="profile-nav onhover-dropdown">
                    <div class="media profile-media">
                        <img class="b-r-10" src="{{asset('dashborad_assets/assets/images/dashboard/profile.png')}}" alt="">
                        <div class="media-body d-xxl-block d-none box-col-none">
                            <div class="d-flex align-items-center gap-2"> <span>{{auth()->user()->name}} </span><i
                                    class="middle fa fa-angle-down"> </i></div>
                            <p class="mb-0 font-roboto">{{auth()->user()->username}}</p>
                        </div>
                    </div>
                    <ul class="profile-dropdown onhover-show-div active">
                        <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg><span>My Profile</span></a></li>
                        <li><a class="btn btn-pill btn-outline-primary btn-sm" id="logout">Log Out</a></li>
                    </ul>
                </li>
            </ul>
            {{-- <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div> --}}
        </div>
    </div>
</div>
