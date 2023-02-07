@extends('backend.layout.layout_default')

@section('content')
<section class=" app-content content">
    <!-- Default box -->
    <div class="order_product">
        <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="card">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div>
                                <h3 class="fw-bolder mb-75"></h3>
                                <h3>Đơn hàng mới</h3>
                            </div>
                            <div class="avatar bg-light-primary p-50">
                                <span class="avatar-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user font-medium-4"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-9">
                    <div class="card">
                        <div class="card-body ps-1 pe-1">
                            {{-- <div class="pb-1 pt-1"></div> --}}
                            <div class="table-responsive-xl">
                                <table class="table table-striped projects">
                                    <thead>
                                        <tr class="text-center">
                                            <th style="width: 1%">
                                                Id
                                            </th>
                                            <th style="width: 10%">
                                                Tên
                                            </th>
                                            <th style="width: 10%">
                                                số điện thoại
                                            </th>
                                            <th style="width: 10%">
                                                Thời gian tạo
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $key => $order_list)
                                        <tr id="row" class="text-center">
                                            <td>
                                                {{$order_list->id}}
                                            </td>
                                            <td >
                                                <a style="word-wrap: break-word;white-space: normal;overflow: hidden;display: -webkit-box;text-overflow: ellipsis;-webkit-box-orient: vertical;-webkit-line-clamp: 2; ">
                                                    {{$order_list->name}}
                                                </a>
                                            </td>
                                            <td style="max-width:110px;"> 
                                                <a style="display:-webkit-box;word-wrap: break-word;white-space: normal;overflow: hidden;display: -webkit-box;text-overflow: ellipsis;-webkit-box-orient: vertical;-webkit-line-clamp: 2; ">
                                                    {{$order_list->phoneNumber}}
                                                </a>
                                            </td>
                                            <td class=""  style="max-width:150px;">
                                                <a style="display:-webkit-box;word-wrap: break-word;white-space: normal;overflow: hidden;display: -webkit-box;text-overflow: ellipsis;-webkit-box-orient: vertical;-webkit-line-clamp: 2; ">
                                                    {{$order_list->created_at}}
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-end align-items-center pt-2">
                                    <a href="{{route('showListOrder')}}" class="btn btn-success waves-effect waves-float waves-light">Xem tất cả</a>
                                </div>
                            </div>
                            <br>
                        </div>
                    <div>
                </div>
            </div>
        </div>
    </div>
    <div class="appointment">
        <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="card">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div>
                                <h3 class="fw-bolder mb-75"></h3>
                                <h3>Lịch hẹn mới </h3>
                            </div>
                            <div class="avatar bg-light-primary p-50">
                                <span class="avatar-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user font-medium-4"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-9">
                    <div class="card">
                        <div class="card-body ps-1 pe-1">
                            {{-- <div class="pb-1 pt-1"></div> --}}
                            <div class="table-responsive-xl">
                                <table class="table table-striped projects">
                                    <thead>
                                        <tr class="text-center">
                                            <th>
                                                Stt
                                            </th>
                                            <th>
                                                Tên
                                            </th>
                                            <th>
                                                Số điện thoại
                                            </th>
                                            <th>
                                                Thời gian tạo
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dataAppointment as $key => $newAppointment)
                                        <tr id="row" class="text-center">
                                            <td>
                                                {{$newAppointment->id}}
                                            </td>
                                            <td >
                                                <a style="word-wrap: break-word;white-space: normal;overflow: hidden;display: -webkit-box;text-overflow: ellipsis;-webkit-box-orient: vertical;-webkit-line-clamp: 2; ">
                                                    {{$newAppointment->name}}
                                                </a>
                                            </td>
                                            <td style="max-width:110px;"> 
                                                <a style="display:-webkit-box;word-wrap: break-word;white-space: normal;overflow: hidden;display: -webkit-box;text-overflow: ellipsis;-webkit-box-orient: vertical;-webkit-line-clamp: 2; ">
                                                    {{$newAppointment->phoneNumber}}
                                                </a>
                                            </td>
                                            <td class=""  style="max-width:150px;">
                                                <a style="display:-webkit-box;word-wrap: break-word;white-space: normal;overflow: hidden;display: -webkit-box;text-overflow: ellipsis;-webkit-box-orient: vertical;-webkit-line-clamp: 2; ">
                                                    {{$newAppointment->created_at}}
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-end align-items-center pt-2">
                                    <a href="{{route('get.orderAppointment')}}" class="btn btn-success waves-effect waves-float waves-light">Xem tất cả</a>
                                </div>
                            </div>
                            <br>
                        </div>
                    <div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.card -->
</section>
@endsection