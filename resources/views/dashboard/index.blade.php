@extends('template')

@section('content')
    <div class="container-fluid mt-4">
        <div class="page-title">
            <div class="row mt-4">
                <div class="col-4">
                    <h4>Dashboard</h4>
                </div>
                <div class="col-8">
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
            <div class="col-xl-4 col-md-6 box-col-none" style="cursor: pointer" onclick="location.href = '/developers'">
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
            <div class="col-xl-4 col-md-6 box-col-none" style="cursor: pointer" onclick="location.href = '/my-garden'">
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
            <div class="col-xl-4 col-md-6 box-col-none" style="cursor: pointer"
                onclick="location.href = '/plants-histories'">
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

    <div class="container-fluid">
        <div class="row size-column">
            <div class="row">
                <div class="col-md-12 col-sm-6">
                    <div class="card">
                        <div class="card-header card-no-border total-revenue pb-0">
                            <h4>Device Informations</h4>
                            <div class="icon-menu-header">
                                <svg>
                                    <use href="../assets/svg/icon-sprite.svg#more-horizontal"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="table-responsive custom-scrollbar deliveries-percentage">
                                <table class="percentage-data w-100">
                                    <tbody>
                                        <tr>
                                            <td class="f-w-400 f-10">Battery Percentage</td>
                                            <td> : </td>
                                            <td>{{ $dataDevice['battery_percentage'] }}%</td>
                                        </tr>
                                        <tr>
                                            <td class="f-w-400 f-10">Last Connected</td>
                                            <td> : </td>
                                            <td>{{ \Carbon\Carbon::parse($dataDevice['last_connected'])->format('d M Y H:i') }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

