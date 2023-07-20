@extends('..index')

@section('content')
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Post-->
        <div class="content flex-row-fluid" id="kt_content">
            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-4 mb-xl-10">
                    <!--begin::List widget 17-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Status Koneksi</span>
                            </h3>
                            <!--end::Title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-0">
                            <!--begin::Content-->
                            <div class="d-flex flex-stack my-5">
                                <span class="text-gray-400 fs-7 fw-bold">RUANGAN</span>
                                <span class="text-gray-400 fw-bold fs-7">STATUS</span>
                            </div>
                            <!--end::Content-->

                            <!--begin::Item-->
                            @foreach ($dataRuangan as $row)
                                <div class="d-flex flex-stack">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center me-3">
                                        <!--begin::Icon-->
                                        {{-- <img src="assets/media/stock/ecommerce/14.gif" class="me-4 w-50px" alt="" /> --}}
                                        <!--end::Icon-->
                                        <!--begin::Section-->
                                        <div class="flex-grow-1">
                                            <a href="../../demo11/dist/apps/ecommerce/sales/details.html"
                                                class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">{{ $row->nama }}</a>
                                            <span
                                                class="text-gray-400 fw-semibold d-block fs-7">{{ $row->pengguna->nama }}</span>
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Value-->
                                    <span class="text-gray-800 fw-bold fs-6">
                                        <span class="badge badge-primary">{{ $row->status }}</span>
                                        <!--end::Value-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-4"></div>
                            @endforeach
                            <!--end::Separator-->

                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List widget 17-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-8 mb-5 mb-xl-10">
                    <!--begin::Table widget 6-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Status Ruangan</span>

                            </h3>

                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body">

                            <!--begin::Tab Content-->
                            <div class="tab-content">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade active show" id="kt_stats_widget_6_tab_1">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->

                                        <div class="table-responsive">
                                            <table class="table table-row-dashed table-row-gray-300 gy-7">
                                                <thead>
                                                    <tr class="fw-bold fs-6 text-gray-800">
                                                        <th>Ruangan</th>
                                                        <th>Status Dosen</th>
                                                        <th>Pintu</th>
                                                        <th>Lampu</th>
                                                        <th>AC</th>
                                                        <th>Sensor Gerak</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Ruangan 2</td>
                                                        <td>Sibuk</td>
                                                        <td>Terkunci</td>
                                                        <td>Menyala</td>
                                                        <td>Menyala</td>
                                                        <td>Aktif</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ruangan 3</td>
                                                        <td>Sibuk</td>
                                                        <td>Terkunci</td>
                                                        <td>Menyala</td>
                                                        <td>Menyala</td>
                                                        <td>Aktif</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ruangan 4</td>
                                                        <td>Sibuk</td>
                                                        <td>Terkunci</td>
                                                        <td>Menyala</td>
                                                        <td>Menyala</td>
                                                        <td>Aktif</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                            </div>
                            <!--end::Tab Content-->
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
@endsection
