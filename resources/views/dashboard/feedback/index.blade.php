@extends('dashboard.layout.template')
@section('content')
    <!-- start page content wrapper-->
    <div class="page-content-wrapper">
        <!-- start page content-->
        <div class="page-content">
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Feedback</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0 align-items-center">
                            <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="home-outline"></ion-icon></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Feedback</li>
                        </ol>
                    </nav>
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

                        <table id="example" class="table table-striped table-bordered"
                            style="width:100%; min-height:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Overall</th>
                                    <th>Food</th>
                                    <th>Service</th>
                                    <th>Ambiance</th>
                                    <th>Value</th>
                                    <th>Comment</th>
                                    <th>Created At </th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $item->name ?? '' }}</td>
                                        <td>{{ $item->email ?? '' }}</td>
                                        <td>{{ $item->overall ?? '' }}</td>
                                        <td>{{ $item->food ?? '' }}</td>
                                        <td>{{ $item->service ?? '' }}</td>
                                        <td>{{ $item->ambiance ?? '' }}</td>
                                        <td>{{ $item->value ?? '' }}</td>
                                        <td>{{ $item->comment ?? '' }}</td>

                                        <td>{{ $item->created_at ?? '' }}</td>
                                        <td>
                                            <a href=" feedback/del/{{ $item->id ?? '' }}" class="text-danger"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                                data-bs-original-title="Delete" aria-label="Delete">
                                                <ion-icon name="trash-outline" role="img" class="md hydrated"
                                                    aria-label="trash outline"></ion-icon>
                                            </a>

                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('dashboard/assets/js/jquery.min.js') }}"></script>

    <!--end row-->
@endsection
