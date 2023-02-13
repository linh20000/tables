@extends('backend.layout.layout_default')

@section('content')
    <div class="app-content content ">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ $title }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right justify-content-end">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">{{ $title }}</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
        @if (session()->has('mess'))
            <div class="txt pb-2 pt-2 ps-2 alert alert-success h3">
                {{ session()->get('mess') }}
            </div>
        @endif
        @if (session()->has('success'))
            <div class="txt pb-2 pt-2 ps-2 alert alert-success h3">
                {{ session()->get('success') }}
            </div>
        @endif
        <script>
            setTimeout(() => {
                $('.txt').addClass('d-none')
            }, 2000)
        </script>
        <div class="card">
            <div class="card-body border-bottom d-flex justify-content-between align-items-center">
                <h4 class="card-title">Danh sách</h4>
                <a href="{{ route('service.create') }}"><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        Thêm mới
                    </button></a>
            </div>
            <div class="card-datatable table-responsive pt-0">
                <table class="user-list-table table">
                    <thead class="table-light">
                        <tr>
                            <th style="width: 1%; text-align: center;">
                                Id
                            </th>
                            <th style="width: 5%">
                                Tên
                            </th>
                            <th style="width: 15%">
                                Ảnh
                            </th>
                            <th style="width: 5%">
                                Seo title
                            </th>
                            <th style="width: 10%">
                                Ngày tạo
                            </th>
                            <th style="width: 10%">
                                Ngày cập nhật
                            </th>
                            <th style="width: 10%; text-align: right;">
                                Tác vụ
                            </th>
                        </tr>
                        @foreach ($service as $service)
                            <tr>
                                <th style="text-align: center;">{{ $service->id }}</th>
                                <th>{{ $service->name }}</th>
                                <th><img src="{{ $service->image }}" alt=""
                                        style="width:100%; height: 130px; object-fit: cover;"></th>
                                <th>{{ $service->seo_title }}</th>
                                <th>
                                    {{ $service->created_at }}
                                </th>
                                <th>
                                    {{ $service->updated_at }}
                                </th>
                                <th style="text-align: right;">
                                    <a href="{{ route('service.getUpdate', $service->id) }}" class="btn btn-info btn-sm">Sửa</a>
                                    <a type="button" class="btn btn-danger btn-sm confirm-color"
                                        data-id="/admin/service/deleteservice/{{ $service->id }}">Xóa</a>
                                </th>
                            </tr>
                        @endforeach
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection
