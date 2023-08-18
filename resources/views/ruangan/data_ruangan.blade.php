@extends('.index')

@section('content')
    <div class="toolbar py-5 py-lg-5" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bold my-1 fs-3">Data Ruangan</h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
            <!--begin::Button-->
            <a href="/ruangan/add_ruangan" class="btn btn-primary fw-bold" id="kt_toolbar_primary_button">Tambah
                Data</a>
            <!--end::Button-->
        </div>
        <!--end::Container-->
    </div>

    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <div class="content flex-row-fluid" id="kt_content">

            @if (Session::has('status'))
                <div class="alert alert-dismissible bg-primary d-flex flex-column flex-sm-row p-5 mb-10">
                    <!--begin::Icon-->
                    <i class="ki-duotone ki-shield-tick fs-2hx text-success me-4"><span class="path1"></span><span
                            class="path2"></span></i>
                    <!--end::Icon-->

                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column text-light pe-0 pe-sm-10">
                        <!--begin::Title-->
                        <h4 class="mb-2 light">Sukses</h4>
                        <!--end::Title-->
                        <!--begin::Content-->
                        <span> {{ Session::get('message') }}</span>
                        <!--end::Content-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Close-->
                    <button type="button"
                        class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto"
                        data-bs-dismiss="alert">
                        <i class="ki-duotone ki-cross fs-1 text-light"><span class="path1"></span><span
                                class="path2"></span></i>
                    </button>
                    <!--end::Close-->
                </div>
            @endif

            <div class="card">
                <!--begin::Card body-->
                <div class="card-body py-4">
                    <!--begin::Table-->
                    <div class="table-responsive">
                        <table class="table gs-7 gy-7 gx-7">
                            <thead>
                                <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                                    <th>No</th>
                                    <th>Ruangan</th>
                                    <th>Api Key</th>
                                    <th>Status</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ruanganList as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->nama }}</td>
                                        <td>{{ $row->apiKey }}</td>
                                        <td>{{ $row->status }}</td>
                                        <td>
                                            <a href="/erwin/public/ruangan/ruangan-delete/{{ $row->id }}"
                                                class="btn btn-sm btn-icon btn-danger"><i
                                                    class="las la-trash fs-2 text-dark"></i></a>
                                            <a href="/ruangan/ruangan-edit/{{ $row->id }}"
                                                class="btn btn-sm btn-icon btn-success"><i
                                                    class="las la-edit fs-2 "></i></a>
                                        </td>
                                    </tr>
                                @endforeach
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
