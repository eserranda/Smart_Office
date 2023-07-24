@extends('.index')

@section('content')
    {{-- <div class="toolbar py-5 py-lg-5" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bold my-1 fs-3">Daftarkan Kartu RFID</h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->

        </div>
        <!--end::Container-->
    </div> --}}

    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Post-->
        <div class="content flex-row-fluid" id="kt_content">
            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-4 mb-xl-10">
                    <!--begin::Engage widget 3-->
                    <div class="card bg-primary h-md-70" data-bs-theme="light">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column pt-13 pb-5">
                            <!--begin::Heading-->
                            <div class="m-0">
                                <!--begin::Title-->
                                <h1 class="fw-semibold text-white text-center lh-lg mb-1">
                                    Scan Kartu
                                </h1>
                                <!--end::Title-->
                                {{-- <select class="form-select" aria-label="Select example">
                                    <option>Pilih RFID</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select> --}}
                                <!--begin::Illustration-->
                                <div class="flex-grow-1 bgi-no-repeat bgi-size-contain bgi-position-x-center card-rounded-bottom h-200px mh-200px my-5 mb-lg-12"
                                    style="background-image:url('/erwin/public/assets/media/svg/illustrations/easy/5.svg')">
                                </div>
                                <!--end::Illustration-->
                            </div>
                            <!--end::Heading-->
                            {{-- <input type="text" id='preview_id' class="form-control form-control-solid bg-secondary my-4"
                                placeholder="ID Kartu" readonly /> --}}
                            <!--begin::Links-->
                            <div class="text-center">
                                <button type="button" class="btn btn-dark me-10" id="scan">
                                    <span class="indicator-label">
                                        Scan Kartu
                                    </span>
                                    <span class="indicator-progress">
                                        Menghubungkan... <span
                                            class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                                <!--end::Link-->
                            </div>
                            <!--end::Links-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Engage widget 3-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-8 mb-5 mb-xl-10">
                    <!--begin::Table widget 6-->
                    <div class="card card-flush h-md-70">
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade active show" id="kt_stats_widget_6_tab_1">
                                <!--begin::Table container-->
                                <div class="col-xl-12 mb-1">
                                    <form id="kt_modal_new_card_form m-5" class="form" action="/erwin/public/rfid/store">
                                        @csrf
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-1 fv-row">
                                            <div class="row mb-4">
                                                <div class="col-md-12 fv-row">
                                                    <label class="required fs-6 fw-semibold form-label mb-2">Pilih
                                                        Ruangan</label>
                                                    <select name="id_ruangan" class="form-select form-select-solid"
                                                        data-hide-search="true" data-placeholder="Ruangan" id="id_ruangan">
                                                        <option selected disabled>Pilih Ruangan</option>
                                                        @foreach ($ruanganList as $row)
                                                            <option value="{{ $row->id }}">{{ $row->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column mb-1 fv-row">
                                            <div class="row mb-4">
                                                <div class="col-md-12 fv-row">
                                                    <label class="required fs-6 fw-semibold form-label mb-2">Pilih
                                                        Users</label>
                                                    <select name="id_pengguna" class="form-select form-select-solid"
                                                        data-control="select2" data-hide-search="true"
                                                        data-placeholder="Pengguna">
                                                        <option></option>
                                                        @foreach ($penggunaList as $row)
                                                            <option value="{{ $row->id }}">{{ $row->nama }}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-column mb-1 fv-row">
                                            <div class="row mb-4">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                    <span class="required">Kode Ruangan</span>
                                                </label>
                                                <input type="text" class="form-control form-control-solid"
                                                    placeholder="Kode Ruangan" name="apiKey" id="api_key" readonly />
                                            </div>
                                        </div>

                                        <div class="d-flex flex-column mb-1 fv-row">
                                            <div class="row mb-4">
                                                <!--begin::Label-->
                                                <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                    <span class="required">Nomor Kartu</span>
                                                </label>
                                                <input type="text" class="form-control form-control-solid"
                                                    placeholder="ID Cart" name="nomor_kartu" id="card_id" readonly />
                                            </div>
                                        </div>
                                        <!--end::Input group-->
                                        <div class="text-center">
                                            <a href="/erwin/public/rfid" class="btn btn-dark me-3">Kembali</a>

                                            <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                                                <span class="indicator-label">Simpan</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--end::Tap pane-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Post-->
    </div>




    <script>
        var selectRuangan = document.querySelector('select[name="id_ruangan"]');
        selectRuangan.addEventListener('change', function() {
            var idRuangan = selectRuangan.value;
            var data = {
                id_ruangan: idRuangan
            };
            var requestOptions = {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            };
            var url = '/erwin/public/get_kode_ruangan';
            fetch(url, requestOptions)
                .then(response => response.json())
                .then(data => {
                    var apiKey = data.data.apiKey; // Mengambil apiKey dari respons
                    var apiKeyInput = document.getElementById("api_key");
                    apiKeyInput.value = apiKey;
                    console.log(apiKey);
                })
                .catch(error => {
                    console.error(error);
                });
        });



        var button = document.getElementById("scan");
        button.addEventListener("click", function() {

            button.setAttribute("data-kt-indicator", "on");
            setTimeout(function() {
                button.removeAttribute("data-kt-indicator");
            }, 3000);
            var data = {
                mode: 1
            };
            var requestOptions = {
                method: "post",
                headers: {
                    "Content-Type": "application/json",

                },
                body: JSON.stringify(data)
            };

            var url = "/erwin/public/scan_kartu";
            fetch(url, requestOptions)
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                })
                .catch(error => {
                    console.error(error);
                });
        });

        document.addEventListener("DOMContentLoaded", function() {
            function fetchData() {
                var xhr = new XMLHttpRequest();
                xhr.open("GET", "/erwin/public/get_dataID");
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        var response = JSON.parse(xhr.responseText);
                        if (response.data !== null) {
                            var idCard = response.data.id_card;
                            var apiKey = response.data.apiKey;
                            var cardIdInput = document.getElementById("card_id");
                            // var apiKeyInput = document.getElementById("api_key");
                            cardIdInput.value = idCard;
                            // apiKeyInput.value = apiKey;
                            console.log("ID Card: " + idCard);
                            console.log("API Key: " + apiKey);
                        } else {
                            console.log("Respons tidak memiliki data");
                        }
                    } else {
                        alert('Terjadi kesalahan: ' + xhr.status);
                    }
                };
                xhr.send();
            }
            setInterval(fetchData, 3000);
        });
    </script>
@endsection
