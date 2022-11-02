@extends('layouts.main')
@push('css')
    <link rel="stylesheet" href="{{ asset('/assets/cssbundle/bootstrapdatepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/cssbundle/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/cssbundle/jquerysteps.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/prismjs/prism.css') }}">
@endpush
@section('content')

            <div class="row g-3">
                <div class="col-12 mt-5">
                    <h6 class="card-title">Form Pendaftaran PPL</h6>
                    <div class="card">
                        <div class="card-body step-app h-wizard-demo4">
                            <ul class="step-steps">
                                <li data-step-target="step1"><span class="fa fa-credit-card"></span> Identitas Peserta</li>
                                <li data-step-target="step2"><span class="fa fa-user"></span> Alamat Selama PPL</li>
                                <li data-step-target="step3"><span class="fa fa-share-alt"></span> Program Studi</li>
                                <li data-step-target="step4"><span class="fa fa-share-alt"></span> Upload Berkas</li>
                                <li data-step-target="step5"><span class="fa fa-share-alt"></span> Pilihan Lokasi PPL</li>
                            </ul>
                            <div class="step-content">
                                <div class="step-tab-panel" data-step="step1">
                                    <form class="row g-2">
                                        <div class="col-md-4 col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" placeholder="Nim" name="nim"
                                                    required>
                                                <label>NIM</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" placeholder="Nama"
                                                    name="nama">
                                                <label>Nama</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" placeholder="Tempat Lahir"
                                                    name="tempat_lahir">
                                                <label class="form-label">Tempat Lahir</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control datepicker"
                                                    placeholder="Tanggal Lahir" name="tanggal_lahir">
                                                <label>Tanggal Lahir</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-floating">
                                                <select class="form-select" id="floatingSelect"
                                                    aria-label="Floating label select example" name="jenis_kelamin">
                                                    <option selected>Pilih Jenis Kelamin</option>
                                                    <option value="Pria">Pria</option>
                                                    <option value="Wanita">Wanita</option>
                                                </select>
                                                <label>Jenis Kelamin</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-floating">
                                                <select class="form-select form-control" id="floatingSelect"
                                                    aria-label="Floating label select example" name="status" required>
                                                    <option selected>Pilih Status</option>
                                                    <option value="Menikah">Menikah</option>
                                                    <option value="Belum Menikah">Belum Menikah</option>
                                                </select>
                                                <label>Jenis Kelamin</label>
                                            </div>
                                        </div>
                                    </form> <!-- .row end -->
                                </div>
                                <div class="step-tab-panel" data-step="step2">
                                    <form class="row g-2">
                                        <div class="col-md-6 col-12">
                                            <div class="form-floating">
                                                <select class="form-select" id="floatingSelect"
                                                    aria-label="Floating label select example" name="prov">
                                                    <option selected>Pilih Provinsi</option>
                                                    <option value="Aceh">Aceh</option>
                                                    <option value="Sumatera Utara">Sumatera Utara</option>
                                                </select>
                                                <label>Provinsi</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-floating">
                                                <select class="form-select" id="floatingSelect"
                                                    aria-label="Floating label select example" name="kab">
                                                    <option selected>Pilih Kabupaten/Kota</option>
                                                    <option value="Langsa">Langsa</option>
                                                    <option value="Medan">Medan</option>
                                                </select>
                                                <label>Kabupaten/Kota</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-floating">
                                                <select class="form-select" id="floatingSelect"
                                                    aria-label="Floating label select example" name="kec">
                                                    <option selected>Pilih Kecamatan</option>
                                                    <option value="Langsa Baro">Langsa Baro</option>
                                                    <option value="Medan Kota">Medan Kota</option>
                                                </select>
                                                <label>Kecamatan</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-floating">
                                                <select class="form-select" id="floatingSelect"
                                                    aria-label="Floating label select example" name="desa">
                                                    <option selected>Pilih Desa</option>
                                                    <option value="Paya Bujok Tunong">Paya Bujok Tunong</option>
                                                    <option value="Helvetia">Helvetia</option>
                                                </select>
                                                <label>Desa</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" placeholder="No HP"
                                                    name="no_hp" required>
                                                <label>No HP</label>
                                            </div>
                                        </div>
                                    </form> <!-- .row end -->
                                </div>
                                <div class="step-tab-panel" data-step="step3">
                                    <form class="row g-2">
                                        <div class="col-md-6 col-12">
                                            <div class="form-floating">
                                                <select class="form-select" id="floatingSelect"
                                                    aria-label="Floating label select example" name="fakultas">
                                                    <option selected>Pilih Fakultas</option>
                                                    <option value="Tarbiyah dan Ilmu Keguruan">Tarbiyah dan Ilmu Keguruan
                                                    </option>
                                                    <option value="Syariah">Syariah</option>
                                                </select>
                                                <label>Fakultas</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-floating">
                                                <select class="form-select" id="floatingSelect"
                                                    aria-label="Floating label select example" name="prodi">
                                                    <option selected>Pilih Prodi</option>
                                                    <option value="Pendidikan Matematika">Pendidikan Matematika</option>
                                                    <option value="Hukum Keluarga Islam">Hukum Keluarga Islam</option>
                                                </select>
                                                <label>Prodi</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-floating">
                                                <input type="number" class="form-control" placeholder="Isi dengan Angka"
                                                    name="semester">
                                                <label>Semester (isi dengan angka)</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-floating">
                                                <input type="number" class="form-control"
                                                    placeholder="Isi dengan Angka">
                                                <label>Unit (isi dengan angka)</label>
                                            </div>
                                        </div>
                                    </form> <!-- .row end -->
                                </div>
                                <div class="step-tab-panel" data-step="step4">
                                    <form class="row g-2">
                                        <div class="col-md-4 col-12">
                                            <label for="formFile" class="form-label">Foto</label>
                                            <input class="form-control" type="file" id="formFile">
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <label for="formFile" class="form-label">Bukti Pembayaran UKT</label>
                                            <input class="form-control" type="file" id="formFile">
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <label for="formFile" class="form-label">Transkrip Sementara</label>
                                            <input class="form-control" type="file" id="formFile">
                                        </div>

                                    </form> <!-- .row end -->
                                </div>
                                <div class="step-tab-panel" data-step="step5">
                                    <form class="row g-2">
                                        <div class="col-md-6 col-12">
                                            <div class="form-floating">
                                                <select class="form-select" id="floatingSelect"
                                                    aria-label="Floating label select example" name="prodi">
                                                    <option selected>Lokasi 1</option>
                                                    <option value="Pendidikan Matematika">Pendidikan Matematika</option>
                                                    <option value="Hukum Keluarga Islam">Hukum Keluarga Islam</option>
                                                </select>
                                                <label>Lokasi 1</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-floating">
                                                <select class="form-select" id="floatingSelect"
                                                    aria-label="Floating label select example" name="prodi">
                                                    <option selected>Lokasi 2</option>
                                                    <option value="Pendidikan Matematika">Pendidikan Matematika</option>
                                                    <option value="Hukum Keluarga Islam">Hukum Keluarga Islam</option>
                                                </select>
                                                <label>Lokasi 2</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="form-floating">
                                                <input class="form-control" type="text" id="">
                                                <label for="" class="form-label">Lokasi lainnya</label>
                                            </div>
                                        </div>

                                    </form> <!-- .row end -->
                                </div>
                            </div>
                            <div class="step-footer d-flex">
                                <button class="btn step-btn" data-step-action="prev">Prev</button>
                                <button class="btn step-btn" data-step-action="next">Next</button>
                                <button class="btn step-btn" data-step-action="finish">Finish</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- .row end -->

@endsection
@push('js')
    <script src="{{ asset('/assets/vendor/prismjs/prism.js') }}"></script>
    <script src="{{ asset('/assets/js/bundle/jquerysteps.bundle.js') }}"></script>
    <script>
        $('.h-wizard-demo4').steps({});
    </script>
    <script src="{{ asset('/assets/js/bundle/bootstrapdatepicker.bundle.js') }}"></script>
    <script>
        $('.datepicker').datepicker({});
    </script>
    <script src="{{ asset('/assets/js/bundle/select2.bundle.js') }}"></script>
    <script>
        // Select2 selectbox
        $('.select2').select2();
    </script>
@endpush
