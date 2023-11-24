@extends('dashboard.layout.template')
@section('content')
    <!-- start page content wrapper-->
    <div class="page-content-wrapper">
        <!-- start page content-->
        <div class="page-content">
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Video</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0 align-items-center">
                            <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="home-outline"></ion-icon></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Video</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <a href="/admin/videos/add" class="btn btn-outline-primary">Add New</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="row row-cols-1 ">
                            @foreach ($data as $item)
                                <div class="col">
                                    <div class="card radius-10">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start gap-2">
                                                <video src="{{ asset('images/' . $item->image) }}"></video>
                                               
                                            </div>
                                            <div class="d-flex align-items-center mt-3">
                                                <a class="ms-auto"
                                                    href="/admin/videos/del/{{ $item->id }}">Delete</a>
                                                <a class="ms-auto" href="/admin/videos/add/{{ $item->id }}">show</a>
                                                <a class="ms-auto" href="/admin/videos/add/{{ $item->id }}">Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('dashboard/assets/js/jquery.min.js') }}"></script>

    <!--end row-->
@endsection
