@extends('dashboard.layout.template')
@section('content')
    <!-- start page content wrapper-->
    <div class="page-content-wrapper">
        <!-- start page content-->
        <div class="page-content">
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Edit Video</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0 align-items-center">
                            <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="home-outline"></ion-icon></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Video</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8 mx-auto">
                    <div class="card">
                        <div class="card-body p-4">
                            <form class="row g-3 needs-validation" action="/admin/videos/add" method="POST" validate
                                enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{ $data->id ?? '' }}">



                                <div class="col-md-12">
                                    <label for="bsValidation4" class="form-label">Video</label>
                                    <input type="file" class="form-control" id="bsValidation4" name="image">
                                </div>


                                <div class="col-md-12">
                                    <div class="d-md-flex d-grid align-items-center gap-3">
                                        <button type="submit" class="btn btn-primary px-4">Add & Update</button>
                                    </div>
                                </div>
                        </div>

                        </form>
                    </div>
                </div>
                <div class="col-xl-4">
                    @isset($data)
                        @if ($data->url)
                            <div class="col-md-12">
                                <label for="bsValidation4" class="form-label">Custom Video</label>
                                <br>
                                <video src="{{ asset('images/' . $data->url) }}" style="width:100%" controls></video>
                            </div>
                        @endif
                    @endisset
                </div>
            </div>
        </div>
    </div>
    <!--end row-->
@endsection
