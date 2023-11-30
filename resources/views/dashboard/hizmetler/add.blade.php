@extends('dashboard.layout.template')
@section('content')
    <!-- start page content wrapper-->
    <div class="page-content-wrapper">
        <!-- start page content-->
        <div class="page-content">
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Add New Item</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0 align-items-center">
                            <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="home-outline"></ion-icon></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Menü</li>
                        </ol>
                    </nav>
                </div>
                {{-- <div class="ms-auto">
                    <div class="btn-group">
                        <a href="/admin/hizmetler/detay/{{ $data->id ?? '' }}" class="btn btn-outline-primary">Sayfa
                            Düzenini Güncelle</a>
                    </div>
                </div> --}}
                @isset($data->services_details)
                    @php
                        $tr = [];
                        $ar = [];
                        $en = [];
                        foreach ($data->services_details as $value) {
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
            </div>
            <div class="row">
                <div class="col-xl-8 mx-auto">
                    <div class="card">
                        <div class="card-body p-4">
                            <form class="row g-3 needs-validation" action="/admin/hizmetler/add" method="POST" validate
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $data->id ?? '' }}">



                                <div class="col-md-4">
                                    <label for="bsValidation4" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="bsValidation4" name="image" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="bsValidation3" class="form-label">Category</label>
                                    <select name="category_id" id="" class="form-control"
                                        onchange="getSubCategory(this.value)" required>
                                        <option value="">Seçiniz</option>
                                        @foreach ($categories as $category)
                                            @isset($data)
                                                @if ($data->category_id == $category->id)
                                                    <option value="{{ $category->id }}" selected>
                                                        {{ $category->category_details[0]->title }}</option>
                                                @else
                                                    <option value="{{ $category->id }}">
                                                        {{ $category->category_details[0]->title }}</option>
                                                @endif
                                            @else
                                                <option value="{{ $category->id }}">{{ $category->category_details[0]->title }}
                                                </option>
                                            @endisset
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="bsValidation3" class="form-label">Sub Category</label>
                                    <select name="category_id" id="subcategory" class="form-control" required>
                                        <option value="">Seçiniz</option>
                                    </select>
                                </div>


                                <div class="col-md-4">
                                    <label for="bsValidation5" class="form-label">Price <small
                                            class="text-danger">(AED)</small></label>
                                    <input type="number" class="form-control " id="bsValidation5" name="price"
                                        placeholder="price" required value="{{ $data->price ?? '' }}" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="bsValidation5" class="form-label">Order <small
                                            class="text-danger"></small></label>
                                    <input type="number" class="form-control " id="bsValidation5" name="order"
                                        placeholder="1" required value="{{ $data->order ?? '' }}" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="bsValidation5" class="form-label w-100">Status <small
                                            class="text-danger"></small></label>
                                    <input type="checkbox" style="height: 30px; width:30px" id="bsValidation5"
                                        name="status" {{ isset($data->status) && $data->status ? 'checked' : 'false' }} required>
                                </div>
                                <hr>
                                <div class="col-xl-12">
                                    <div class="table-responsive">
                                        @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif

                                        <div class="d-flex" style="flex-wrap:wrap">
                                            <ul class="nav nav-tabs nav-danger" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#danger1"
                                                        role="tab" aria-selected="true">
                                                        <div class="d-flex align-items-center">
                                                            <div class="tab-icon">
                                                            </div>
                                                            <div class="tab-title">TR</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#danger2" role="tab"
                                                        aria-selected="false" tabindex="-1">
                                                        <div class="d-flex align-items-center">
                                                            <div class="tab-icon">
                                                            </div>
                                                            <div class="tab-title">AR</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#danger3"
                                                        role="tab" aria-selected="false" tabindex="-1">
                                                        <div class="d-flex align-items-center">
                                                            <div class="tab-icon">
                                                            </div>
                                                            <div class="tab-title">EN</div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>

                                            <div class="tab-content py-3 col-xl-12">
                                                <div class="tab-pane fade active show" id="danger1" role="tabpanel">
                                                    <input type="hidden" name="tr_id" value="{{ $tr->id ?? '' }}">
                                                    <div class="col-md-12">
                                                        <label for="bsValidation3" class="form-label">Title</label>
                                                        <input type="text" class="form-control" id="bsValidation3"
                                                            name="tr_title" placeholder="Başlık" required
                                                            value="{{ $tr->title ?? '' }}">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="bsValidation5" class="form-label">Summary</label>
                                                        <input class="form-control" id="bsValidation5" name="tr_summary"
                                                            placeholder="tr_summary" required
                                                            value="{{ $tr->summary ?? '' }}">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="bsValidation5" class="form-label">Content</label>
                                                        <textarea class="form-control" name="tr_content" placeholder="content" required>{{ $tr->content ?? '' }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="danger2" role="tabpanel">
                                                    <input type="hidden" name="ar_id" value="{{ $ar->id ?? '' }}">
                                                    <div class="col-md-12">
                                                        <label for="bsValidation3" class="form-label">Title</label>
                                                        <input type="text" class="form-control" id="bsValidation3"
                                                            name="ar_title" placeholder="Başlık" required
                                                            value="{{ $ar->title ?? '' }}">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="bsValidation5" class="form-label">Summary</label>
                                                        <input class="form-control" id="bsValidation5" name="ar_summary"
                                                            placeholder="ar_summary" required
                                                            value="{{ $ar->summary ?? '' }}">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="bsValidation5" class="form-label">Content</label>
                                                        <textarea class="form-control" id="bsValidation5" name="ar_content" placeholder="content" required>{{ $ar->content ?? '' }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="danger3" role="tabpanel">
                                                    <input type="hidden" name="en_id" value="{{ $en->id ?? '' }}">
                                                    <div class="col-md-12">
                                                        <label for="bsValidation3" class="form-label">Title</label>
                                                        <input type="text" class="form-control" id="bsValidation3"
                                                            name="en_title" placeholder="Başlık" required
                                                            value="{{ $en->title ?? '' }}">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="bsValidation5" class="form-label">Summary</label>
                                                        <input class="form-control" id="bsValidation5" name="en_summary"
                                                            placeholder="en_summary" required
                                                            value="{{ $en->summary ?? '' }}">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="bsValidation5" class="form-label">Content</label>
                                                        <textarea class="form-control" id="bsValidation5" name="en_content" placeholder="content" required>{{ $en->content ?? '' }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                        @if ($data->image)
                            <div class="col-md-12">
                                <label for="bsValidation4" class="form-label">Custom Image</label>
                                <br>
                                <img src="{{ asset('images/' . $data->image) }}" class="img-fluid" alt="">
                            </div>
                        @endif
                    @endisset
                </div>
            </div>
        </div>
    </div>

    <script>
        function getSubCategory(id) {
            return fetch(`/admin/hizmetler/subcategories/${id}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json(); // Burada yanıtı JSON formatına dönüştürüyoruz
                })
                .then(data => {
                    // Gelen veriyi seçim kutusuna yerleştirme işlemi
                    const selectBox = document.getElementById('subcategory'); // #subcategory ID'li selectbox
                    selectBox.innerHTML = ''; // Önceki seçenekleri temizleme
                    console.log(data);
                    // Gelen veri üzerinde döngü ile seçenekleri ekleme
                    data.categories.forEach(option => {
                        const optionElement = document.createElement('option');
                        optionElement.value = option.category_details[0].id; // Option'ın değeri
                        optionElement.textContent = option.category_details[0].title // Option'ın gösterilen metni
                        selectBox.appendChild(optionElement);
                    });
                })
                .catch(error => {
                    console.error('There has been a problem with your fetch operation:', error);
                });
        }

        // getSubCategory(5); 
    </script>
    <!--end row-->
@endsection
