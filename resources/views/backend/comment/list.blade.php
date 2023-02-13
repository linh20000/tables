@extends('backend.layout.layout_default')

@section('content')
<section class=" app-content content">
    <!-- Default box -->
    
    <div class="container-fluid">
        
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>{{$title}}</h1>
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
    <div class="card-header">
        <div class="btn-group">
            <table>
                <tbody>
                <tr>
                    <form action="{{route('admin.comment.search')}}" method="GET">
                        <td>
                            <input class="form-control" name="search" value="{{app("request")->input("search")}}" placeholder="Nhập" >
                        </td>
                        <td>
                            <button type="submit" class="btn btn-secondary">Tìm kiếm</button>
                        </td>
                        <td><a class="btn btn-secondary" href="{{route('comment.list')}}">Xóa tìm kiếm</a></td>
                    </form>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
    <div class="card-body border-bottom d-flex justify-content-between align-comments-center">
        <h4 class="card-title">Danh sách</h4>
    </div>
    <div class="card-body p-0">
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
                        <th style="width: 20%">
                            Bình luận
                        </th>
                        <th style="width: 10%">
                            Email
                        </th>
                        <th style="width: 5%">
                            Url
                        </th>
                        <th style="width: 15%">
                            Ngày tạo
                        </th>
                        <th style="width: 10%; text-align: right;" >
                            Tác vụ
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($comment as $comment)
                    <tr id="row" class="text-center">
                        <td>
                            {{$comment->id}}
                        </td>
                        <td> 
                            <a style="word-wrap: break-word;white-space: normal;overflow: hidden;display: -webkit-box;text-overflow: ellipsis;-webkit-box-orient: vertical;-webkit-line-clamp: 2; ">
                                {{$comment->author}}
                            </a>
                        </td>
                        <td> 
                            <a style="display:-webkit-box;word-wrap: break-word;white-space: normal;overflow: hidden;display: -webkit-box;text-overflow: ellipsis;-webkit-box-orient: vertical;-webkit-line-clamp: 2; ">
                                {!! $comment->comment !!}
                            </a>
                        </td>
                        <th>
                            {{$comment->email}}
                        </th>
                        <th>
                            {{$comment->url}}
                        </th>
                        <th>
                            {{$comment->created_at}}
                        </th>
                        <td class="project-actions" style="text-align: right; padding: 0 1.4rem;">
                            <a type="button" data-bs-toggle="modal" data-bs-target="#viewModal{{$comment->id}}" class="btn btn-sm btn-icon view-record">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"> <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/> <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/> </svg>
                            </a>
                            <a type="button" data-bs-toggle="modal" data-bs-target="#deleteModal{{$comment->id}}" class="btn btn-sm btn-icon delete-record">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash font-medium-2 text-body">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <div class="modal fade" id="deleteModal{{$comment->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <a href="deleteComment/{{$comment->id}}"  type="button" class="btn btn-danger">Xóa</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="viewModal{{$comment->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header flex-column">
                                    <div class="icon-box">
                                    </div>						
                                    <h4 class="modal-title w-100">Thông tin phản hồi Id: {{$comment->id}}</h4>	
                                </div>
                                <div class="modal-body">
                                    <b>Tên:</b> <span>{{$comment->author}}</span>
                                    <hr>
                                    <b>Bình luận:</b> <br> <span>{{$comment->comment}}</span>
                                    <hr>
                                    <b>Email:</b> <span>{{$comment->email}}</span>
                                    <hr>
                                    <b>Url:</b> <span>{{$comment->url}}</span>
                                </div>
                                <div class="modal-footer justify-content-center">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Quay lại</button>
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