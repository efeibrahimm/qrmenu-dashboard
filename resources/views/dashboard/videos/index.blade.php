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
                {{-- <div class="ms-auto">
                    <div class="btn-group">
                        <a href="/admin/videos/add" class="btn btn-outline-primary">Add New</a>
                    </div>
                </div> --}}
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
                                <div class="col col-xl-6">

                                    <div class="card radius-10">
                                        @if ($item->type == 'banner')
                                            <i class="" style="color: green; font-size:20px; margin-left:20px" title="Live">
                                                Banner</i>
                                        @else
                                            <i class="" style="color: green; font-size:20px; margin-left:20px" title="Live"> Popup</i>
                                        @endif
                                        <div class="card-body">

                                            <div class="d-flex align-items-start gap-2">
                                                <video src="{{ asset('images/' . $item->url) }}" style="width: 100%"
                                                    controls></video>

                                            </div>
                                            <div class="d-flex align-items-center mt-3">
                                                @if ($item->visible == 1)
                                                    Live : <i class="lni lni-checkmark-circle"
                                                        style="color: green; position:absolute; bottom:18px;left:55px; font-size:20px"
                                                        title="Live"></i>
                                                @else
                                                    Live : <i class="lni lni-ban"
                                                        style="color: red; position:absolute; bottom:18px;left:55px; font-size:20px"
                                                        title="not live"></i>
                                                @endif
                                                <a class="ms-auto" href="/admin/videos/change/{{ $item->id }}">Change
                                                    Visible</a>
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
