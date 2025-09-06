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
        <div class="row garden-ctr">
            @foreach ($gardens as $g)
                <div class="col-6 col-md-4">
                    <div class="card">
                        <div class="blog-box blog-grid text-center product-box"
                            onclick="location.href = '/my-garden/detail?id={{ $g->id }}'" style="cursor: pointer">
                            <div class="product-img"><img class="img-fluid top-radius-blog"
                                    src="{{ asset('storage') . '/' . $g->type_image }}" alt="">
                            </div>
                            <div class="blog-details-main">
                                <h3 class="blog-bottom-details">{{ $g->type_name }}</h3>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-danger delete" data-id="{{ $g->id }}"
                                style="width: 100%">Delete</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <button class="btn btn-primary rounded-circle shadow" id="add-data"
        style="position: fixed; bottom: 20px; right: 20px; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; z-index: 1050;">
        <i class="fa fa-plus" style="font-size: 24px; color: #fff;"></i>
    </button>


    <div class="modal fade" id="addFlowerTypeModal" tabindex="-1" aria-labelledby="addFlowerTypeLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="addFlowerTypeLabel">Add Flower Type</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form id="flowerTypeForm">
                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="type_name" class="form-label">Type Name</label>
                            <input type="text" name="type_name" id="type_name" class="form-control"
                                placeholder="Enter flower type name" required>
                        </div>

                        <div class="mb-3">
                            <label for="type_image" class="form-label">Image</label>
                            <input type="file" name="type_image" id="type_image" class="form-control" accept="image/*"
                                required>
                        </div>

                        <div class="mb-3 text-center">
                            <img id="imagePreview" src="#" alt="Image Preview" class="img-fluid rounded"
                                style="max-height: 150px; display: none; border:1px solid #ddd; padding:5px;">
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" id="store">Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

@section('own_script')
    <script>
        $("#add-data").on("click", function() {
            $("#addFlowerTypeModal").modal("show");
        })

        $('#type_image').on('change', function(event) {
            const file = this.files[0];
            if (file) {
                const preview = $('#imagePreview');
                preview.attr('src', URL.createObjectURL(file));
                preview.show();
            }
        });

        $("#store").on("click", function(e) {
            e.preventDefault();
            let button = $(this);
            button.prop("disabled", true);

            const typeImage = $('#type_image')[0].files[0];

            if (!typeImage) {
                sweetAlert(false, "Silakan pilih gambar terlebih dahulu.");
                button.prop("disabled", false);
                return;
            }

            let formData = new FormData();
            formData.append('_token', $("meta[name='csrf-token']").attr('content'));
            formData.append('type_name', $("#type_name").val());
            formData.append('type_image', typeImage);

            $.ajax({
                url: "/my-garden/store",
                method: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    button.prop("disabled", false);
                    if (response.status) {
                        sweetAlert(true, "Flower type berhasil disimpan!");

                        const newCard = `
                            <div class="col-6 col-md-4" onclick="location.href='/my-garden/detail?id=${encodeURIComponent(response.data.id)}'" style="cursor:pointer">
                                <div class="card">
                                    <div class="blog-box blog-grid text-center product-box">
                                        <div class="product-img">
                                            <img class="img-fluid top-radius-blog" src="/storage/${response.data.type_image}" alt="${response.data.type_name}">
                                        </div>
                                        <div class="blog-details-main">
                                            <h3 class="blog-bottom-details">${response.data.type_name}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            `;

                        $(".garden-ctr").prepend(newCard);

                        $('#addFlowerTypeModal').modal('hide');
                        $('#flowerTypeForm')[0].reset();
                        $('#imagePreview').hide();
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

        $(document).on("click", ".delete", function(e) {
            let button = $(this);
            button.prop("disabled", true);
            $('body').css('cursor', 'wait');

            let id = button.data('id');

            $.ajax({
                url: `/my-garden/delete`,
                method: 'POST',
                data: {
                    _token: $("meta[name='csrf-token']").attr('content'),
                    id: id
                },
                success: function(response) {
                    $('body').css('cursor', 'default');
                    if (response.status) {
                        sweetAlert(true, "Tanaman berhasil dihapus!");
                        button.closest('.col-6').remove();
                    } else {
                        sweetAlert(false, "Gagal menghapus tanaman.");
                        button.prop("disabled", false);
                    }
                },
                error: function() {
                    $('body').css('cursor', 'default');
                    sweetAlert(false, "Terjadi kesalahan.");
                    button.prop("disabled", false);
                }
            });
        });
    </script>
@endsection
