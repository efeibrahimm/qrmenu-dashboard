@extends('dashboard.layout.template')
@section('content')
    <!-- start page content wrapper-->
    <div class="page-content-wrapper">
        <!-- start page content-->
        <div class="page-content">
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Menus</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0 align-items-center">
                            <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="home-outline"></ion-icon></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Menus</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <a href="/admin/hizmetler/add" class="btn btn-outline-primary">Add New</a>
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
                            @foreach ($data as $item1)
                                <h5>{{ $item1->category_details[0]->title ?? '' }}</h5>
                                <hr>
                                <div class=" row row-cols-lg-2 row-cols-xxl-4">
                                    @foreach ($item1->items as $item)
                                        <div class="col">
                                            <div class="card radius-10">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-start gap-2">
                                                        <div>
                                                            <p class="mb-0 fs-6">
                                                                {{ Str::substr($item->services_details[0]->title, 0, 20) ?? '' }}
                                                            </p>
                                                            @if ($item->status == 1)
                                                                <i class="lni lni-checkmark-circle"
                                                                    style="color: green; position:absolute; bottom:18px;left:20px; font-size:20px" title="Live"></i>
                                                            @else
                                                                <i class="lni lni-ban"
                                                                    style="color: red; position:absolute; bottom:18px;left:20px; font-size:20px" title="not live"></i>
                                                            @endif
                                                        </div>
                                                        <div
                                                            class="ms-auto widget-icon-small text-white bg-gradient-purple">
                                                            {{-- <ion-icon name="wallet-outline" role="img" class="md hydrated"
                                                        aria-label="wallet outline"></ion-icon> --}}
                                                            <img src="{{ asset('images/' . $item->image) }}"
                                                                style="width:35px; height:35px; border-radius:50%"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center mt-3">
                                                        <a class="ms-auto"
                                                            href="/admin/hizmetler/del/{{ $item->id }}">Delete</a>
                                                        <a class="ms-auto"
                                                            href="/admin/hizmetler/add/{{ $item->id }}">show</a>
                                                        <a class="ms-auto"
                                                            href="/admin/hizmetler/add/{{ $item->id }}">Edit</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

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
