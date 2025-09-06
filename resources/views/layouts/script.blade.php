<!-- latest jquery-->
<script src="{{ asset('dashboard_assets/assets/js/jquery.min.js') }}"></script>
<!-- Bootstrap js-->
<script src="{{ asset('dashboard_assets/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
<!-- feather icon js-->
<script src="{{ asset('dashboard_assets/assets/js/icons/feather-icon/feather.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/icons/feather-icon/feather-icon.js') }}"></script>
<!-- scrollbar js-->
<script src="{{ asset('dashboard_assets/assets/js/scrollbar/simplebar.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/scrollbar/custom.js') }}"></script>
<!-- Sidebar jquery-->
<script src="{{ asset('dashboard_assets/assets/js/config.js') }}"></script>
<!-- Plugins JS start-->
<script src="{{ asset('dashboard_assets/assets/js/sidebar-menu.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/sidebar-pin.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/slick/slick.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/slick/slick.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/header-slick.js') }}"></script>
{{-- <script src="{{ asset('dashboard_assets/assets/js/chart/apex-chart/apex-chart.js') }}"></script> --}}
<script src="{{ asset('dashboard_assets/assets/js/chart/apex-chart/stock-prices.js') }}"></script>
<!-- Range Slider js-->
<script src="{{ asset('dashboard_assets/assets/js/range-slider/rSlider.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/rangeslider/rangeslider.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/prism/prism.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/clipboard/clipboard.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/counter/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/counter/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/counter/counter-custom.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/custom-card/custom-card.js') }}"></script>
<!-- calendar js-->
<script src="{{ asset('dashboard_assets/assets/js/calendar/fullcalender.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/calendar/custom-calendar.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/dashboard/dashboard_2.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/animation/wow/wow.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/datatable/datatables/datatable.custom.js') }}"></script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="{{ asset('dashboard_assets/assets/js/script.js') }}"></script>
<script src="{{ asset('dashboard_assets/assets/js/theme-customizer/customizer.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    function sweetAlert(status, message){
        if(status){
            Swal.fire({
                title: "Success",
                text: message,
                icon: "success"
            });
        }else{
            Swal.fire({
                title: "Error",
                text: message,
                icon: "error"
            });
        }
    }

    function confirmationAlert(id, url){
        Swal.fire({
                title: "Apakah anda yakin?",
                text: "Data yang dihapus tidak dapat dikembalikan",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Hapus"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: url,
                        method: 'POST',
                        data: {
                            '_token': $("meta[name='csrf-token']").attr('content'),
                            'id': id
                        },
                        success: function(response){
                            if(response.status){
                                sweetAlert(response.status, 'Data berhasil dihapus');
                                setTimeout(() => location.reload(), 1000);
                            }else{
                                sweetAlert(response.status, response.message);
                            }
                        },
                        error: function(response){
                            sweetAlert(response.status, response.message);
                        }
                    })
                }
            });
    }
</script>

<script>
    new WOW().init();

    $("#logout").on("click", function() {
        let token = $("meta[name='csrf-token']").attr('content');
        $.ajax({
            url: '/logout',
            method: 'POST',
            data: {
                "_token": token
            },
            success: function(response) {
                location.href = '/login'
            },
            error: function(response) {
                alert(response.message);
            }
        })
    })

    function closeModal(element) {
        element.modal("hide");
    }
</script>
{{-- fungsi tanggal --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script>
    function formatTanggal(data) {
        moment.locale('id');
        return data ? moment(data).format('DD MMMM YYYY HH:mm') + ' WIB' : '-';
    }

    function formatTanggalBooking(data) {
        moment.locale('id');
        return data ? moment(data).format('DD MMMM YYYY') : '-';
    }

    function formatRupiah(angka) {
        if (!angka) return 'Tidak ada data';

        return 'Rp. ' + angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
    }
</script>

<script type="module">
    // Import the functions you need from the SDKs you need
    import {
        initializeApp
    } from "https://www.gstatic.com/firebasejs/12.2.1/firebase-app.js";
    import {
        getAnalytics
    } from "https://www.gstatic.com/firebasejs/12.2.1/firebase-analytics.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries

    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
        apiKey: "AIzaSyAvD3denIKetu-SoQKqizch85ASsXe4hEg",
        authDomain: "smart-pot-soil.firebaseapp.com",
        databaseURL: "https://smart-pot-soil-default-rtdb.asia-southeast1.firebasedatabase.app",
        projectId: "smart-pot-soil",
        storageBucket: "smart-pot-soil.firebasestorage.app",
        messagingSenderId: "876493991000",
        appId: "1:876493991000:web:b3380dc34fbfaaee7dae2d",
        measurementId: "G-19JWHNN92X"
    };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const analytics = getAnalytics(app);
</script>

<script src="https://www.gstatic.com/firebasejs/10.8.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/10.8.0/firebase-auth.js"></script>
<script>
    const firebaseConfig = {
        /* config dari step 2 */ };
    firebase.initializeApp(firebaseConfig);
</script>

@yield('own_script')
