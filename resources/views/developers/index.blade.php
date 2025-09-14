@extends('template')

@section('content')
    <div class="container-fluid mt-4">
        <div class="page-title">
            <div class="row mt-4">
                <div class="col-4">
                    <h4>Developers</h4>
                </div>
                <div class="col-8">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('dashboard_assets/assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Developers</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6 col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                <div class="card social-profile">
                    <div class="card-body">
                        <div class="social-img-wrap">
                            <div class="social-img"><img src="{{asset('own_assets/images/devs/arif.jpeg')}}" alt="profile">
                            </div>
                            <div class="edit-icon">
                                <svg>
                                    <use href="{{asset('dashboard_assets/assets/svg/icon-sprite.svg#profile-check')}}"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="social-details">
                            <h5 class="mb-1"><a href="#" style="font-size: 25px">Arif</a></h5><span
                                class="f-light">@rep_arif</span>
                            <ul class="card-social">
                                <li>
                                    <a href="https://www.instagram.com/rep_arif" target="_blank"><i class="fa fa-instagram" style="font-size: 20px"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                <div class="card social-profile">
                    <div class="card-body">
                        <div class="social-img-wrap">
                            <div class="social-img"><img src="{{asset('own_assets/images/devs/zakwan.jpeg')}}" alt="profile">
                            </div>
                            <div class="edit-icon">
                                <svg>
                                    <use href="{{asset('dashboard_assets/assets/svg/icon-sprite.svg#profile-check')}}"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="social-details">
                            <h5 class="mb-1"><a href="#" style="font-size: 25px">Zakwan</a></h5><span
                                class="f-light">@zakwanhrp</span>
                            <ul class="card-social">
                                <li>
                                    <a href="https://www.instagram.com/zakwanhrp" target="_blank"><i class="fa fa-instagram" style="font-size: 20px"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                <div class="card social-profile">
                    <div class="card-body">
                        <div class="social-img-wrap">
                            <div class="social-img"><img src="{{asset('dashboard_assets/assets/images/dashboard-3/profile.png')}}" alt="profile">
                            </div>
                            <div class="edit-icon">
                                <svg>
                                    <use href="{{asset('dashboard_assets/assets/svg/icon-sprite.svg#profile-check')}}"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="social-details">
                            <h5 class="mb-1"><a href="#" style="font-size: 25px">Fahriza</a></h5><span
                                class="f-light">9893745897</span>
                            <ul class="card-social">
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" style="font-size: 20px"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" style="font-size: 20px"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram" style="font-size: 20px"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                <div class="card social-profile">
                    <div class="card-body">
                        <div class="social-img-wrap">
                            <div class="social-img"><img src="{{asset('own_assets/images/devs/moan.jpeg')}}" alt="profile">
                            </div>
                            <div class="edit-icon">
                                <svg>
                                    <use href="{{asset('dashboard_assets/assets/svg/icon-sprite.svg#profile-check')}}"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="social-details">
                            <h5 class="mb-1"><a href="#" style="font-size: 25px">Moan</a></h5><span
                                class="f-light">@moannsgn_</span>
                            <ul class="card-social">
                                <li>
                                    <a href="https://www.instagram.com/moannsgn_" target="_blank"><i class="fa fa-instagram" style="font-size: 20px"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                <div class="card social-profile">
                    <div class="card-body">
                        <div class="social-img-wrap">
                            <div class="social-img"><img src="{{asset('own_assets/images/devs/talitha.jpeg')}}" alt="profile">
                            </div>
                            <div class="edit-icon">
                                <svg>
                                    <use href="{{asset('dashboard_assets/assets/svg/icon-sprite.svg#profile-check')}}"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="social-details">
                            <h5 class="mb-1"><a href="#" style="font-size: 25px">Talitha</a></h5><span
                                class="f-light">@talitharizq</span>
                            <ul class="card-social">
                                <li>
                                    <a href="https://www.instagram.com/talitharizq" target="_blank"><i class="fa fa-instagram" style="font-size: 20px"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                <div class="card social-profile">
                    <div class="card-body">
                        <div class="social-img-wrap">
                            <div class="social-img"><img src="{{asset('own_assets/images/devs/keysha.jpeg')}}" alt="profile">
                            </div>
                            <div class="edit-icon">
                                <svg>
                                    <use href="{{asset('dashboard_assets/assets/svg/icon-sprite.svg#profile-check')}}"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="social-details">
                            <h5 class="mb-1"><a href="#" style="font-size: 25px">Keysha</a></h5><span
                                class="f-light">@keyzhayura</span>
                            <ul class="card-social">
                                <li>
                                    <a href="https://www.instagram.com/keyzhayura" target="_blank"><i class="fa fa-instagram" style="font-size: 20px"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                <div class="card social-profile">
                    <div class="card-body">
                        <div class="social-img-wrap">
                            <div class="social-img"><img src="{{asset('own_assets/images/devs/rasyid.jpeg')}}" alt="profile">
                            </div>
                            <div class="edit-icon">
                                <svg>
                                    <use href="{{asset('dashboard_assets/assets/svg/icon-sprite.svg#profile-check')}}"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="social-details">
                            <h5 class="mb-1"><a href="#" style="font-size: 25px">Rasyid</a></h5><span
                                class="f-light">@rafieabdullah_</span>
                            <ul class="card-social">
                                <li>
                                    <a href="https://www.instagram.com/rafieabdullah_" target="_blank"><i class="fa fa-instagram" style="font-size: 20px"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
