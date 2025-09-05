@extends('template')

@section('content')
    <div class="container-fluid mt-4">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>My Garden</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('dashboard_assets/assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">My Garden</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6 col-md-4" onclick="location.href = '/my-garden/detail?name=rose'" style="cursor: pointer">
                <div class="card">
                    <div class="blog-box blog-grid text-center product-box">
                        <div class="product-img"><img class="img-fluid top-radius-blog" src="{{asset('own_assets/images/mawar.png')}}" alt="">
                        </div>
                        <div class="blog-details-main">
                            <h3 class="blog-bottom-details">Rose</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4" onclick="location.href = '/my-garden/detail?name=sunflower'" style="cursor: pointer">
                <div class="card">
                    <div class="blog-box blog-grid text-center product-box">
                        <div class="product-img"><img class="img-fluid top-radius-blog" src="{{asset('own_assets/images/matahari.png')}}" alt="">
                        </div>
                        <div class="blog-details-main">
                            <h3 class="blog-bottom-details">Sunflower</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4" onclick="location.href = '/my-garden/detail?name=melati'" style="cursor: pointer">
                <div class="card">
                    <div class="blog-box blog-grid text-center product-box">
                        <div class="product-img"><img class="img-fluid top-radius-blog" src="{{asset('own_assets/images/melati.png')}}" alt="">
                        </div>
                        <div class="blog-details-main">
                            <h3 class="blog-bottom-details">Melati</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4" onclick="location.href = '/my-garden/detail?name=anggrek'" style="cursor: pointer">
                <div class="card">
                    <div class="blog-box blog-grid text-center product-box">
                        <div class="product-img"><img class="img-fluid top-radius-blog" src="{{asset('own_assets/images/anggrek.png')}}" alt="">
                        </div>
                        <div class="blog-details-main">
                            <h3 class="blog-bottom-details">Anggrek</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4" onclick="location.href = '/my-garden/detail?name=lidah-mertua'" style="cursor: pointer">
                <div class="card">
                    <div class="blog-box blog-grid text-center product-box">
                        <div class="product-img"><img class="img-fluid top-radius-blog" src="{{asset('own_assets/images/lidah.png')}}" alt="">
                        </div>
                        <div class="blog-details-main">
                            <h3 class="blog-bottom-details">Lidah Mertua</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4" onclick="location.href = '/my-garden/detail?name=keladi'" style="cursor: pointer">
                <div class="card">
                    <div class="blog-box blog-grid text-center product-box">
                        <div class="product-img"><img class="img-fluid top-radius-blog" src="{{asset('own_assets/images/keladi.png')}}" alt="">
                        </div>
                        <div class="blog-details-main">
                            <h3 class="blog-bottom-details">Keladi</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection