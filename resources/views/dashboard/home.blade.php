@extends('dashboard.layout.template')
@section('content')
    <!-- start page content wrapper-->
    <!-- start page content wrapper-->
    <div class="page-content-wrapper">
        <!-- start page content-->
        <div class="page-content">

            <!--start breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Dashboard</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0 align-items-center">
                            <li class="breadcrumb-item"><a href="javascript:;">
                                    <ion-icon name="home-outline"></ion-icon>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">QRBon</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->


            <div class="row row-cols-1 row-cols-lg-2 row-cols-xxl-4">
                <div class="col">
                    <div class="card radius-10">
                        <a href="/admin/hizmetler">
                            <div class="card-body">
                                <div class="d-flex align-items-start gap-2">
                                    <div>
                                        <p class="mb-0 fs-6">Total Menu Item</p>
                                    </div>
                                    <div class="ms-auto widget-icon-small text-white bg-gradient-purple">
                                        <ion-icon name="menu-outline"></ion-icon>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-3">
                                    <div>
                                        <h4 class="mb-0">{{ $totalMenuItem ?? '' }}</h4>
                                    </div>
                                    {{-- <div class="ms-auto">+6.32%</div> --}}
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10">
                        <a href="/admin/hizmetler/kategori">
                            <div class="card-body">
                                <div class="d-flex align-items-start gap-2">
                                    <div>
                                        <p class="mb-0 fs-6">Total Category</p>
                                    </div>
                                    <div class="ms-auto widget-icon-small text-white bg-gradient-info">
                                        <ion-icon name="bug-outline"></ion-icon>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-3">
                                    <div>
                                        <h4 class="mb-0">{{ $category ?? '' }}</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10">
                        <a href="/admin/feedback">
                            <div class="card-body">
                                <div class="d-flex align-items-start gap-2">
                                    <div>
                                        <p class="mb-0 fs-6">Total Feedback</p>
                                    </div>
                                    <div class="ms-auto widget-icon-small text-white bg-gradient-danger">
                                        <ion-icon name="star-outline"></ion-icon>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-3">
                                    <div>
                                        <h4 class="mb-0">{{ $feedback ?? '' }}</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xxl-4">
                <div class="col">
                    <div class="card radius-10">
                        <a href="/admin/hizmetler/add">
                            <div class="card-body">
                                <div class="d-flex align-items-start gap-2">
                                    <div>
                                        <p class="mb-0 fs-6">Add New Menu Item</p>
                                    </div>
                                    <div class="ms-auto widget-icon-small text-white bg-gradient-purple">
                                        <ion-icon name="add-outline"></ion-icon>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-3">
                                    <div>
                                        <h4 class="mb-0"><a class="btn btn-primary">Add New</a></h4>
                                    </div>
                                    {{-- <div class="ms-auto">+6.32%</div> --}}
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10">
                        <a href="/admin/hizmetler/kategori/add">
                            <div class="card-body">
                                <div class="d-flex align-items-start gap-2">
                                    <div>
                                        <p class="mb-0 fs-6">Add New Category</p>
                                    </div>
                                    <div class="ms-auto widget-icon-small text-white bg-gradient-info">
                                        <ion-icon name="add-outline"></ion-icon>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-3">
                                    <div>
                                        <h4 class="mb-0">
                                            <h4 class="mb-0"><a class="btn btn-primary">Add New</a></h4>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10">
                        <a href="/admin/videos">
                            <div class="card-body">
                                <div class="d-flex align-items-start gap-2">
                                    <div>
                                        <p class="mb-0 fs-6">Edit Videos</p>
                                    </div>
                                    <div class="ms-auto widget-icon-small text-white bg-gradient-danger">
                                        <ion-icon name="add-outline"></ion-icon>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-3">
                                    <div>
                                        <h4 class="mb-0">
                                            <h4 class="mb-0"><a class="btn btn-primary">Edit Videos</a></h4>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
            <!--end row-->
            <!--end row-->

        </div>
    </div>
    <!-- end page content-->
    </div>
    <!--end page content wrapper-->
@endsection
