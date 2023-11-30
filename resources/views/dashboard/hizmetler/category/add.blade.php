@extends('dashboard.layout.template')
@section('content')
    <!-- start page content wrapper-->
    <div class="page-content-wrapper">
        <!-- start page content-->
        <div class="page-content">
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Category Add</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0 align-items-center">
                            <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="home-outline"></ion-icon></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Categories</li>
                        </ol>
                    </nav>
                </div>
            </div>

            @isset($data->category_details)
                @php
                    $tr = [];
                    $ar = [];
                    $en = [];
                    foreach ($data->category_details as $value) {
                        if ($value['language'] == 'tr') {
                            $tr = $value;
                        }
                        if ($value->language == 'en') {
                            $en = $value;
                        }
                        if ($value->language == 'ar') {
                            $ar = $value;
                        }
                    }

                @endphp
            @endisset
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="card">
                        <div class="card-body p-4">
                            <form class="row g-3 needs-validation" action="/admin/hizmetler/kategori/add" method="POST"
                                validate enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $data->id ?? '' }}">
                                <div class="col-md-12">
                                    <label for="bsValidation3" class="form-label">Title EN</label>
                                    <input type="text" class="form-control" id="bsValidation3" required name="en_title"
                                        placeholder="Title" required value="{{ $en->title ?? '' }}">
                                </div>
                                <div class="col-md-12">
                                    <label for="bsValidation3" class="form-label">Title AR</label>
                                    <input type="text" class="form-control" id="bsValidation3" required name="ar_title"
                                        placeholder="Title" required value="{{ $ar->title ?? '' }}">
                                </div>
                                <div class="col-md-12">
                                    <label for="bsValidation3" class="form-label">Title TR</label>
                                    <input type="text" class="form-control" id="bsValidation3" required name="tr_title"
                                        placeholder="Title" required value="{{ $tr->title ?? '' }}">
                                </div>
                                <div class="col-md-12 pb-0 pt-0">
                                    <label for="bsValidation3" class="form-label">Order</label>
                                    <input type="number" class="form-control" id="bsValidation3" required name="order"
                                        placeholder="1" required value="{{ $data->order ?? '' }}">
                                </div>
                                <input type="hidden" name="tr_id" value="{{ $tr->id ?? '' }}">
                                <input type="hidden" name="en_id" value="{{ $en->id ?? '' }}">
                                <input type="hidden" name="ar_id" value="{{ $ar->id ?? '' }}">
                                <div class="col-md-12">
                                    <label for="bsValidation3" class="form-label"></label>
                                    {{-- <hr>
                                    If it is a subcategory, please specify which category it is a subcategory of. If not, please specify which category it is a subcategory of.
                                    leave it blank
                                    <hr> --}}
                                    <select name="parent_id" id="" class="form-control" required>
                                        <option value="">Seçiniz</option>
                                        @foreach ($allCategory as $category)
                                            @isset($data)
                                                @if ($data->category_id == $category->id)
                                                    <option value="{{ $category->id }}" selected>
                                                        {{ $category->category_details[0]->title }}</option>
                                                @else
                                                    <option value="{{ $category->id }}">
                                                        {{ $category->category_details[0]->title }}</option>
                                                @endif
                                            @else
                                                <option value="{{ $category->id }}">
                                                    {{ $category->category_details[0]->title }}</option>
                                            @endisset
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <div class="d-md-flex d-grid align-items-center gap-3">
                                        <button type="submit" class="btn btn-primary px-4">Add </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->
@endsection
