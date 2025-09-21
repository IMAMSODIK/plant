@extends('template')

@section('content')
<div class="container-fluid mt-4">
    <div class="page-title">
        <div class="row mt-4">
            <div class="col-4">
                <h4>Plants Notifications</h4>
            </div>
            <div class="col-8">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">
                        <svg class="stroke-icon">
                            <use href="{{ asset('dashboard_assets/assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                        </svg></a>
                    </li>
                    <li class="breadcrumb-item">Notifications</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">

        {{-- Looping notifikasi --}}
        @forelse($notifications as $notif)
            <div class="col-12">
                <div class="card mb-2 p-2 d-flex flex-row align-items-center">
                    <div class="me-3">
                        <img src="{{ asset('dashboard_assets/assets/images/logo/logo.png') }}" 
                             alt="{{ $notif->plant_name }}" 
                             class="img-fluid rounded"
                             style="width: 60px; height: 60px;">
                    </div>
                    <div class="flex-grow-1">
                        <h6 class="mb-1 fw-bold">{{ $notif->plant_name }}</h6>
                        <p class="mb-0 text-muted" style="font-size: 14px;">
                            {{ $notif->message }}
                        </p>
                        <small class="text-secondary">
                            {{ $notif->created_at->diffForHumans() }}
                        </small>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center text-muted">
                <p>No notifications yet.</p>
            </div>
        @endforelse

    </div>
</div>
@endsection
