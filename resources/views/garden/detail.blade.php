@extends('template')

@section('content')
    <div class="container-fluid mt-4">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>My Plant</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('dashboard_assets/assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">My Plant</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            @foreach ($flowers as $flower)
                <div class="col-12 card-action" data-name="{{ $flower['name'] }}" style="cursor: pointer">
                    <div class="card mb-2 p-2 d-flex flex-row align-items-center">
                        <div class="me-3">
                            <img src="{{ asset('own_assets/images/' . $flower['image']) }}" alt="{{ $flower['name'] }}"
                                class="img-fluid rounded" style="width: 60px; height: 60px;">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-1 fw-bold">{{ $flower['name'] }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="modal fade show" id="exampleModalbalancebox" tabindex="-1" aria-labelledby="exampleModalbalancebox"
        style="display: none;" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="col-xl-12">
                    <div class="card balance-box mb-0">
                        <div class="card-body">
                            <div class="balance-profile">
                                <div class="balance-img"><img src="{{ asset('own_assets/images/' . $flower['image']) }}" alt="{{ $flower['name'] }}" width="100%"></div>
                                {{-- <span class="f-light d-block" id="name"></span> --}}
                                <h5 class="mt-1" id="name"></h5>
                                <ul>
                                    <li>
                                        <div class="balance-item info">
                                            <div class="balance-icon-wrap">
                                                <div class="balance-icon">
                                                    <i class="fa fa-tint text-info" style="font-size:20px;"></i>
                                                </div>
                                            </div>
                                            <div> <span class="f-12 f-light">Kelembapan Tanaman </span>
                                                <span class="badge badge-light-info rounded-pill">20 %</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="balance-item success">
                                            <div class="balance-icon-wrap">
                                                <div class="balance-icon">
                                                    <i class="fa fa-thermometer-half text-warning" style="font-size:20px;"></i>
                                                </div>
                                            </div>
                                            <div> <span class="f-12 f-light">Kelembapan Tanaman </span>
                                                <span class="badge badge-light-success rounded-pill">20 %</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('own_script')
    <script>
        $(document).on("click", ".card-action", function() {
            let name = $(this).data('name');
            $("#exampleModalbalancebox").modal("show");
            $("#name").text(name);
        })
    </script>
@endsection
