@extends('backend.layout.layout_default')

@section('content')
<section class=" app-content content">
    <!-- Default box -->
    
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Chi tiết lịch khám</h1>
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
                        <span>Chỉnh sửa lịch khám</span>
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
        <div class="col-8">
             <div class="card">
                <div class="card-body p-0">
                <h2 class="ps-2 pb-2 pt-2">Thông tin địa chỉ</h2>
                    <ul>
                        <li class="pb-1">Tên khách hàng : {{$book->name}}</li>
                        <li class="pb-1">Số điện thoại : {{$book->phoneNumber}}</li>
                        <li class="pb-1">Thời gian đặt lịch : {{$book->time}}</li>
                        <li class="pb-1">Triệu chứng : {{$book->symtom}}</li>
                    </ul>
                    <br>
                    <div class="wrap d-flex justify-content-between">
                        <form action="{{route('updatement',[$book->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <select name="status" id="status" class="btn btn-secondary btn-sm waves-effect waves-float waves-light">
                                <option value="1">Xác nhận lịch khám</option>
                                <option value="0">Gỡ xác nhận đơn hàng</option>
                            </select>
                            <button type="submit" class="btn btn-sm btn-secondary">Update lịch khám</button>
                        </form>
                       <div class="action">
                        <a href="{{route('get.orderAppointment')}}" class="btn btn-secondary waves-effect waves-float waves-light">Quay lại</a>
                       <a href="" class="btn btn-sm btn-icon delete-record btn btn-secondary waves-effect waves-float waves-light"  data-bs-toggle="modal" data-bs-target="#deleteProductModal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash font-medium-2 text-body">
                                <polyline points="3 6 5 6 21 6"></polyline>
                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                            </svg>
                        </a>
                        <div class="modal fade" id="deleteProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header flex-column">
                                        <div class="icon-box">
                                        </div>						
                                        <h4 class="modal-title w-100">Bạn có chắc không?</h4>	
                                    </div>
                                    <div class="modal-body">
                                        <p>Bạn có thực sự muốn xóa? Quá trình này không thể được hoàn tác.</p>
                                    </div>
                                    <div class="modal-footer justify-content-center">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Quay lại</button>
                                        <a href="{{route('deleteAppointment',[$book->id])}}"  type="button" class="btn btn-danger">Xóa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                       </div>
                   </div>
                </div>
                
            <div>
        </div>
    </div>
</div>
<!-- /.card -->
</section>
@endsection