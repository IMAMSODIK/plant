@extends('template')

@section('content')
    <div class="container-fluid mt-4">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>Garden</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('dashboard_assets/assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row size-column">
            <div class="col-xl-4 col-md-6 box-col-none" style="cursor: pointer">
                <div class="row">
                    <div class="col-md-12 col-sm-6">
                        <div class="card boost-up-card overflow-hidden">
                            <div class="p-4">
                                <div class="boostup-name row">
                                    <h6 class="text-white f-28 f-w-700 mb-2 z-1 ">Developers</h6>
                                    <p class="text-white f-14 f-w-500 col-9">
                                        Click here to explore the full list of developers and view their detailed profiles.
                                    </p>
                                </div>
                                <div class="img-boostup"><img class="img-boostup-img-1"
                                        src="{{ asset('dashboard_assets/assets/images/dashboard-3/boostup1.png') }}"
                                        alt="boostup"><img class="img-boostup-img-2"
                                        src="{{ asset('dashboard_assets/assets/images/dashboard-3/boostup2.png') }}"
                                        alt="boostup">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 box-col-none" style="cursor: pointer">
                <div class="row">
                    <div class="col-md-12 col-sm-6">
                        <div class="card boost-up-card overflow-hidden">
                            <div class="p-4">
                                <div class="boostup-name row">
                                    <h6 class="text-white f-28 f-w-700 mb-2 z-1 ">My Garden</h6>
                                    <p class="text-white f-14 f-w-500 col-9">
                                        Discover how your garden evolves over time and track every update.
                                    </p>
                                </div>
                                <div class="img-boostup"><img class="img-boostup-img-1"
                                        src="{{ asset('dashboard_assets/assets/images/dashboard-3/boostup1.png') }}"
                                        alt="boostup"><img class="img-boostup-img-2"
                                        src="{{ asset('dashboard_assets/assets/images/dashboard-3/boostup2.png') }}"
                                        alt="boostup">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 box-col-none" style="cursor: pointer">
                <div class="row">
                    <div class="col-md-12 col-sm-6">
                        <div class="card boost-up-card overflow-hidden">
                            <div class="p-4">
                                <div class="boostup-name row">
                                    <h6 class="text-white f-28 f-w-700 mb-2 z-1 ">Plants Histories</h6>
                                    <p class="text-white f-14 f-w-500 col-9">
                                        Click to view the complete history of your plants’ notifications.
                                    </p>
                                </div>
                                <div class="img-boostup"><img class="img-boostup-img-1"
                                        src="{{ asset('dashboard_assets/assets/images/dashboard-3/boostup1.png') }}"
                                        alt="boostup"><img class="img-boostup-img-2"
                                        src="{{ asset('dashboard_assets/assets/images/dashboard-3/boostup2.png') }}"
                                        alt="boostup">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
