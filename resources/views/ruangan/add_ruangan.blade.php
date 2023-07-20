@extends('.index')

@section('content')
    <div class="toolbar py-5 py-lg-5" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bold my-1 fs-3">Tambah Data Ruangan</h1>
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
                <div class="col-xl-8 mb-5 mb-xl-10">
                    <!--begin::Table widget 6-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade active show" id="kt_stats_widget_6_tab_1">
                                <!--begin::Table container-->
                                <div class="col-xl-12 mb-1">
                                    <form action="/ruangan/ruangan_save" id="kt_modal_new_card_form m-5" class="form">
                                        @csrf
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-5 fv-row">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                <span class="required">Nama Ruangan</span>
                                            </label>
                                            <input type="text" class="form-control form-control-solid"
                                                placeholder="Masukkan Nama" name="nama" required />
                                        </div>
                                        <div class="d-flex flex-column mb-5 fv-row">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                <span class="required">Kode RFID</span>
                                            </label>
                                            <input type="text" class="form-control form-control-solid"
                                                placeholder="Kode RFID" name="kode_rfid" />
                                        </div>

                                        <div class="d-flex flex-column mb-5 fv-row">
                                            <div class="col-md-12 fv-row">
                                                <label class="required fs-6 fw-semibold form-label mb-2">
                                                    Pemilik Ruangan</label>
                                                <select name="id_pengguna" class="form-select form-select-solid"
                                                    data-control="select2" data-hide-search="true"
                                                    data-placeholder="Pilih Pemilik Ruangan">
                                                    <option></option>
                                                    @foreach ($PenggunaList as $row)
                                                        <option value="{{ $row->id }}">{{ $row->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>

                                        <!--end::Input group-->
                                        <div class="text-center pt-15">
                                            <button type="reset" id="kt_modal_new_card_cancel"
                                                class="btn btn-light me-3">Kembali</button>
                                            <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                                                <span class="indicator-label">Tambah</span>
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
