@extends('template')

@section('content')
    <div class="container-fluid mt-4">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>Plants Histories</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('dashboard_assets/assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Plants Histories</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <!-- Notifikasi 1 -->
            <div class="col-12">
                <div class="card mb-2 p-2 d-flex flex-row align-items-center">
                    <!-- Gambar tanaman -->
                    <div class="me-3">
                        <img src="{{ asset('own_assets/images/mawar.png') }}" alt="Rose" class="img-fluid rounded"
                            style="width: 60px; height: 60px;">
                    </div>
                    <!-- Detail notifikasi -->
                    <div class="flex-grow-1">
                        <h6 class="mb-1 fw-bold">Rose</h6>
                        <p class="mb-0 text-muted" style="font-size: 14px;">
                            Needs watering today. Make sure the soil is moist.
                        </p>
                        <small class="text-secondary">2 hours ago</small>
                    </div>
                </div>
            </div>

            <!-- Notifikasi 2 -->
            <div class="col-12">
                <div class="card mb-2 p-2 d-flex flex-row align-items-center">
                    <div class="me-3">
                        <img src="{{ asset('own_assets/images/matahari.png') }}" alt="Sunflower" class="img-fluid rounded"
                            style="width: 60px; height: 60px;">
                    </div>
                    <div class="flex-grow-1">
                        <h6 class="mb-1 fw-bold">Sunflower</h6>
                        <p class="mb-0 text-muted" style="font-size: 14px;">
                            Requires fertilizer this week for better growth.
                        </p>
                        <small class="text-secondary">Yesterday</small>
                    </div>
                </div>
            </div>

            <!-- Notifikasi 3 -->
            <div class="col-12">
                <div class="card mb-2 p-2 d-flex flex-row align-items-center">
                    <div class="me-3">
                        <img src="{{ asset('own_assets/images/melati.png') }}" alt="Melati" class="img-fluid rounded"
                            style="width: 60px; height: 60px;">
                    </div>
                    <div class="flex-grow-1">
                        <h6 class="mb-1 fw-bold">Melati</h6>
                        <p class="mb-0 text-muted" style="font-size: 14px;">
                            Prune dead leaves to maintain healthy growth.
                        </p>
                        <small class="text-secondary">3 days ago</small>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
