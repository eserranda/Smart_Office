@extends('.index')

@section('content')
    <div class="toolbar py-5 py-lg-5" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bold my-1 fs-3">Tambah Data RFID</h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->

        </div>
        <!--end::Container-->
    </div>

    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Post-->
        <div class="content flex-row-fluid" id="kt_content">
            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-4 mb-xl-10">
                    <!--begin::Engage widget 3-->
                    <div class="card bg-primary h-md-100" data-bs-theme="light">
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
                                    style="background-image:url('/assets/media/svg/illustrations/easy/5.svg')">
                                </div>
                                <!--end::Illustration-->
                            </div>
                            <!--end::Heading-->
                            <input type="text" class="form-control form-control-solid bg-secondary my-4" placeholder="" /
                                readonly>
                            <!--begin::Links-->
                            <div class="text-center">
                                <!--begin::Link-->
                                <a class="btn btn-sm bg-white btn-color-gray-800 me-2">
                                    SCAN </a>
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
                    <div class="card card-flush h-xl-100">
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade active show" id="kt_stats_widget_6_tab_1">
                                <!--begin::Table container-->
                                <div class="col-xl-12 mb-1">
                                    <form id="kt_modal_new_card_form m-5" class="form" action="#">
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-1 fv-row">
                                            <div class="row mb-10">
                                                <div class="col-md-12 fv-row">
                                                    <label class="required fs-6 fw-semibold form-label mb-2">Pilih
                                                        Ruangan</label>
                                                    <select name="card_expiry_month" class="form-select form-select-solid"
                                                        data-control="select2" data-hide-search="true"
                                                        data-placeholder="Month">
                                                        <option></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column mb-1 fv-row">
                                            <div class="row mb-10">
                                                <div class="col-md-12 fv-row">
                                                    <label class="required fs-6 fw-semibold form-label mb-2">Pilih
                                                        Users</label>
                                                    <select name="card_expiry_month" class="form-select form-select-solid"
                                                        data-control="select2" data-hide-search="true"
                                                        data-placeholder="Month">
                                                        <option></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column mb-1 fv-row">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                <span class="required">Nomor Kartu</span>
                                            </label>
                                            <input type="text" class="form-control form-control-solid" placeholder=""
                                                name="card_name" />
                                        </div>
                                        <!--end::Input group-->
                                        <div class="text-center pt-15">
                                            <button type="reset" id="kt_modal_new_card_cancel"
                                                class="btn btn-light me-3">Discard</button>
                                            <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                                                <span class="indicator-label">Submit</span>
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
@endsection
