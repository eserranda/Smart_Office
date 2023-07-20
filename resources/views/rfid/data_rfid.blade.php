@extends('.index')

@section('content')
    <div class="toolbar py-5 py-lg-5" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bold my-1 fs-3">Data RFID</h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
            <!--begin::Button-->
            <a href="/add_rfid" class="btn btn-primary fw-bold" id="kt_toolbar_primary_button">Tambah Data</a>
            <!--end::Button-->
        </div>
        <!--end::Container-->
    </div>

    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <div class="content flex-row-fluid" id="kt_content">
            <div class="card">
                <!--begin::Card body-->
                <div class="card-body py-4">
                    <!--begin::Table-->
                    <div class="table-responsive">
                        <table class="table gs-7 gy-7 gx-7">
                            <thead>
                                <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                                    <th>No</th>
                                    <th>Nomor Kartu</th>
                                    <th>Ruangan</th>
                                    <th>Pemilik Ruangan</th>
                                    <th>Status</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>324324234324</td>
                                    <td>Ruangan 1</td>
                                    <td>Wendyato</td>
                                    <td>Aktif</td>
                                    <td></td>
                                </tr>
                                {{-- <tr>
                                    <td>2</td>
                                    <td>34324234234</td>
                                    <td>Ruangan 2</td>
                                    <td>Erick</td>
                                </tr> --}}
                            </tbody>
                        </table>
                    </div>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
        </div>
    </div>
@endsection
