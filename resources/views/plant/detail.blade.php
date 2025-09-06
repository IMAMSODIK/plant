@extends('template')

@section('content')
    <div class="container-fluid mt-4">
        <div class="page-title">
            <div class="row mt-4">
                <div class="col-4">
                    <h4>Detail Plant</h4>
                </div>
                <div class="col-8">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('dashboard_assets/assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item"><a href="/my-garden">My Garden</a></li>
                        <li class="breadcrumb-item"><a href="/my-garden/detail?id={{$plant->garden->id}}">My Plants</a></li>
                        <li class="breadcrumb-item">Detail Plant</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="col-xl-12">
            <div class="card balance-box mb-0" data-id="{{ $plant->id }}">
                <div class="card-body">
                    <div class="balance-profile">
                        <div class="balance-img"><img src="{{ asset('storage') . '/' . $plant->garden->type_image }}" alt="{{ $plant->nama }}"
                                width="100%"></div>
                        {{-- <span class="f-light d-block" id="name"></span> --}}
                        <h5 class="mt-1" id="name">{{ $plant->nama }}</h5>
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
@endsection

@section('own_script')
    {{-- <script>
        $("#add-data").on("click", function() {
            $("#addFlowerTypeModal").modal("show");
        })

        $("#store").on("click", function(e) {
            e.preventDefault();
            let button = $(this);
            button.prop("disabled", true);

            let formData = new FormData();
            formData.append('_token', $("meta[name='csrf-token']").attr('content'));
            formData.append('name', $("#plant_name").val());
            formData.append('id', $("#garden_id").val());

            $.ajax({
                url: "/plant/store",
                method: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    button.prop("disabled", false);
                    if (response.status) {
                        sweetAlert(true, "Tanaman berhasil disimpan!");

                        const newCard = `
                            <div class="col-12 card-action" data-id="${response.data.id}" style="cursor: pointer">
                                <div class="card mb-2 p-2 d-flex flex-row align-items-center">
                                    <div class="me-3">
                                        <img src="{{ asset('storage') . '/' . $gambar }}" alt="${response.data.nama}"
                                            class="img-fluid rounded" style="width: 60px; height: 60px;">
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1 fw-bold">${response.data.nama}</h5>
                                    </div>
                                </div>
                            </div>
                            `;

                        $(".card-ctr").prepend(newCard);

                        $('#addFlowerTypeModal').modal('hide');
                        $('#flowerTypeForm')[0].reset();
                    } else {
                        sweetAlert(false, "Gagal menyimpan flower type: " + response.message);
                    }
                },
                error: function(xhr) {
                    button.prop("disabled", false);
                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        let message = '';
                        $.each(errors, function(key, val) {
                            message += `${val}\n`;
                        });
                        sweetAlert(false, message);
                    } else {
                        sweetAlert(false, "Terjadi kesalahan saat menyimpan data.");
                    }
                }
            });
        });

        $(document).on("click", ".card-action", function() {
            let id = $(this).data('id');

            location.href = `/plant/detail?id=${id}`
        })
    </script> --}}
@endsection
