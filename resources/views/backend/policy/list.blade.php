@extends('backend.layout.layout_default')

@section('content')
<section class=" app-content content">
    <!-- Default box -->
    
    <div class="container-fluid">
        
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Quản lý chính sách</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right justify-content-end">
                    <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active">{{$title}}</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    @if(session()->has('mess'))
        <div class="txt pb-2 pt-2 ps-2 alert alert-success h3">
        {{ session()->get('mess') }}
        </div>
    @endif
    @if(session()->has('success'))
    <div class="txt pb-2 pt-2 ps-2 alert alert-success h3">
    {{ session()->get('success') }}
    </div>
    @endif
    <script>
        setTimeout(()=> {
            $('.txt').addClass('d-none')
        },2000)
    </script>
<div class="card">
    <div class="card-body border-bottom d-flex justify-content-between align-items-center">
        <h4 class="card-title">Danh sách</h4>
        <a href="{{route('policy.create')}}"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
           Thêm mới
        </button></a>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive-xl">
            <table class="table table-striped projects">
                <thead>
                    <tr class="text-center">
                        <th style="width: 1%">
                            Id
                        </th>
                        {{-- <th style="width: 10%">
                            Ảnh
                        </th> --}}
                        <th style="width: 10%">
                            Tên
                        </th>
                        <th style="width: 15%">
                            Mô tả
                        </th>
                        <th style="width: 10%">
                            Ngày tạo
                        </th>
                        <th style="width: 10%">
                            Ngày cập nhật
                        </th>
                        <th style="width: 5%;" >
                            Tác vụ
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($policy as $item)
                    <tr id="row" class="text-center">
                        <td>
                            {{$item->id}}
                        </td>
                        {{-- <td >
                            <div style="max-width:110px; min-width:150px; max-height:80px; overflow:hidden; display:flex;">
                                <img style="width:100%;" src="{{$item->thumbnail ? $item->thumbnail : asset('upload_thumbnail/empty_img.png')}}" alt="">
                            </div>
                        </td> --}}
                        <td style="max-width:110px;"> 
                            <a style="word-wrap: break-word;white-space: normal;overflow: hidden;display: -webkit-box;text-overflow: ellipsis;-webkit-box-orient: vertical;-webkit-line-clamp: 2; ">
                                {{$item->name}}
                            </a>
                        </td>
                        <td style="max-width:110px;"> 
                            <a style="display:-webkit-box;word-wrap: break-word;white-space: normal;overflow: hidden;display: -webkit-box;text-overflow: ellipsis;-webkit-box-orient: vertical;-webkit-line-clamp: 2; ">
                                {!! $item->description !!}
                            </a>
                        </td>
                        <th>
                            {{$item->created_at}}
                        </th>
                        <th>
                            {{$item->updated_at}}
                        </th>
                        <td class="project-actions" style="">
                            <a href="{{route('policy.getUpdate', [$item->id])}}" class="btn btn-sm btn-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit font-medium-2 text-body">
                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                </svg>
                            </a>
                            <a type="button" data-bs-toggle="modal" data-bs-target="#deleteModal{{$item->id}}" class="btn btn-sm btn-icon delete-record">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash font-medium-2 text-body">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <div class="modal fade" id="deleteModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <a href="deletePolicy/{{$item->id}}"  type="button" class="btn btn-danger">Xóa</a>
                                </div>
                            </div>
                        </div>
                    </div>
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
@endsection