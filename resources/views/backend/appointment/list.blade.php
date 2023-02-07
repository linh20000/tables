@extends('backend.layout.layout_default')

@section('content')
<section class=" app-content content">
    <!-- Default box -->
    
    <div class="container-fluid">
        
        <div class="row mb-2">
            <div class="col-sm-6">
                
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right justify-content-end">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active">{{$breadcrumb}}</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="card">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <h3 class="fw-bolder mb-75"></h3>
                            <h3>Tổng số lịch hẹn : {{$orderAppointment}}</h3>
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
        <div class="card">
            <div class="card-body p-0 pt-2">
                <div class="table-responsive-xl">
                    <table class="table table-striped projects">
                        <thead>
                            <tr class="text-center">
                                <th style="width: 1%">
                                    Stt
                                </th>
                                <th style="width: 10%">
                                    Tên
                                </th>
                                <th style="width: 10%">
                                    số điện thoại
                                </th>
                                <th style="width: 10%">
                                    Thời gian
                                </th>
                                <th style="width: 10%">
                                    Triệu chứng
                                </th>
                                <th style="width: 10%">
                                    Trạng thái
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $appointment)
                            <tr id="row" class="text-center">
                                <td>
                                    {{$appointment->id}}
                                </td>
                                <td >
                                    <a style="word-wrap: break-word;white-space: normal;overflow: hidden;display: -webkit-box;text-overflow: ellipsis;-webkit-box-orient: vertical;-webkit-line-clamp: 2; ">
                                        {{$appointment->name}}
                                    </a>
                                </td>
                                <td style="max-width:110px;"> 
                                    <a style="word-wrap: break-word;white-space: normal;overflow: hidden;display: -webkit-box;text-overflow: ellipsis;-webkit-box-orient: vertical;-webkit-line-clamp: 2; ">
                                        {{$appointment->phoneNumber}}
                                    </a>
                                </td>
                                <td style="max-width:110px;"> 
                                    <a style="display:-webkit-box;word-wrap: break-word;white-space: normal;overflow: hidden;display: -webkit-box;text-overflow: ellipsis;-webkit-box-orient: vertical;-webkit-line-clamp: 2; ">
                                        {{$appointment->time}}
                                    </a>
                                </td>
                                <td class=""  style="max-width:150px;">
                                    <a style="display:-webkit-box;word-wrap: break-word;white-space: normal;overflow: hidden;display: -webkit-box;text-overflow: ellipsis;-webkit-box-orient: vertical;-webkit-line-clamp: 2; ">
                                        {{$appointment->symptom}}
                                    </a>
                                </td>
                                <td class=""  style="max-width:150px;">
                                    <a style="display:-webkit-box;word-wrap: break-word;white-space: normal;overflow: hidden;display: -webkit-box;text-overflow: ellipsis;-webkit-box-orient: vertical;-webkit-line-clamp: 2; ">
                                        <p class="bg-success d-inline-block d-none ps-1 pe-1 mb-0 rounded text_success" style="color:#fff;" status="0">Đã xem</p>
                                        <p class="bg-danger d-inline-block  ps-1 pe-1 rounded mb-0 text_fail" style="color:#fff; " status="1">Chưa xem</p>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <br>
                    
            </div>
        <!-- /.card-body -->
        <div>
    </div>
</div>
<!-- /.card -->
</section>

<script>
    $('.text_success').each(function() {
        $(this).click(function() {
            $(this).addClass('d-none')
            $(this).next().removeClass('d-none')
        })
    })
    $('.text_fail').each(function() {
        $(this).click(function() {
            $(this).addClass('d-none')
            $(this).prev().removeClass('d-none')
        })
    })
</script>
@endsection