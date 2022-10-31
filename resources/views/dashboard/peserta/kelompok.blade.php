@extends('layouts.main')
@push('css')
    <link rel="stylesheet" href="/assets/vendor/prismjs/prism.css">
@endpush
@section('content')

            <div class="row g-3">
                <div class="col-xl-4 col-lg-6 col-md-12 align-items-center">

                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 align-items-center">
                    <div class="card mb-3 mt-3">
                        <div class="card-header">
                            <h6 class="card-title mb-0">Lokasi : (input Lokasi)</h6>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <img class="avatar rounded-circle" src="../assets/img/xs/avatar2.jpg" alt="">
                                <div class="flex-fill ms-3">
                                    <div class="h6 mb-0"><span>Chris Fox</span></div>
                                    <small class="text-muted">Nim</small>
                                </div>
                            </div>
                            <div class="d-flex mt-4">
                                <img class="avatar rounded-circle" src="../assets/img/xs/avatar1.jpg" alt="">
                                <div class="flex-fill ms-3">
                                    <div class="h6 mb-0"><span>Joge Lucky</span></div>
                                    <small class="text-muted">Nim</small>
                                </div>
                            </div>
                            <div class="d-flex mt-4">
                                <img class="avatar rounded-circle" src="../assets/img/xs/avatar3.jpg" alt="">
                                <div class="flex-fill ms-3">
                                    <div class="h6 mb-0"><span>Alexander</span></div>
                                    <small class="text-muted">Nim</small>
                                </div>
                            </div>
                            <div class="d-flex mt-4">
                                <img class="avatar rounded-circle" src="../assets/img/xs/avatar8.jpg" alt="">
                                <div class="flex-fill ms-3">
                                    <div class="h6 mb-0"><span>Robert</span></div>
                                    <small class="text-muted">Nim</small>
                                </div>
                            </div>
                            <div class="d-flex mt-4">
                                <img class="avatar rounded-circle" src="../assets/img/xs/avatar6.jpg" alt="">
                                <div class="flex-fill ms-3">
                                    <div class="h6 mb-0"><span>Nellie</span></div>
                                    <small class="text-muted">Nim</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">

                </div>
            </div>

@endsection
@push('js')
    <script src="/assets/vendor/prismjs/prism.js"></script>
@endpush
