@extends('backend.layout.layout_default')

@section('content')
<section class=" app-content content">
    <!-- Default box -->
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Thêm danh mục</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right justify-content-end">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active">{{$breadcrumb}}</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
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
<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body p-0">
                
                <form id="cerfitication" action="{{route('admin.updateCategory',[$category->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Thông tin</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group mt-1 mb-1">
                                        <label for="inputName" class="form-label mb-1">Tên</label>
                                        <input type="text" id="name" name="name" value="{{$category->name}}" class="form-control" placeholder="Nhập tên">
                                        @error('name')
                                        <span class="text-danger mt-1 d-block">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group mt-1 mb-1">
                                        <label for="inputName" class="form-label mb-1">Tiêu đề</label>
                                        <input type="text" id="title" name="title"  value="{{$category->title}}" class="form-control" placeholder="Nhập tiêu đề">
                                        @error('title')
                                        <span class="text-danger mt-1 d-block">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group mt-1 mb-1">
                                        <label for="parent_id" class="form-label mb-1">Danh mục</label>
                                        <select class="form-control custom-select" name="parent_id" id="parent_id" placeholder="">
                                            <option value="0">Danh mục lớn</option>
                                            {{-- @foreach($category_parent as $category_parent)
                                            <option value="{{$category_parent->id}}">{{$category_parent->name}}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                    <div class="form-group mt-1 mb-1">
                                        <label for="description" class="form-label mb-1">Miêu tả</label>
                                        <input type="text" id="description" name="description" value="{{$category->description}}" class="form-control" placeholder="Nhập tiêu đề">
                                        @if ($errors->has('description'))
                                            <span class="text-danger d-block mt-1">{{ $errors->first('description') }}</span>
                                        @endif
                                    </div>
                                     {{-- <div class="form-group">
                                        <label for="status">Trạng thái</label>
                                        <select class="form-control custom-select" name="status" id="status">
                                            <option value="1">Còn hàng</option>
                                            <option value="0">Hết hàng</option>
                                        </select>
                                    </div> --}}
                                    <div class="mt-3"></div>
                                    <div class="">
                                        <h3 class="card-title">Thông tin tìm kiếm</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mt-1 mb-1">
                                                <label for="seo_keyword" class="form-label mb-1">Seo keyword</label>
                                                <input type="text" id="seo_keyword" name="seo_keyword" value="{{$category->seo_keyword}}" class="form-control">
                                                @if ($errors->has('seo_keyword'))
                                                    <span class="text-danger d-block mt-1">{{ $errors->first('seo_keyword') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mt-1 mb-1">
                                                <label for="seo_description" class="form-label mb-1">Seo description</label>
                                                <input type="text" id="seo_description" name="seo_description" value="{{$category->seo_description}}" class="form-control">
                                                @if ($errors->has('seo_description'))
                                                    <span class="text-danger d-block mt-1">{{ $errors->first('seo_description') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mt-1 mb-1">
                                                <label for="seo_title" class="form-label mb-1">Seo title</label>
                                                <input type="text" id="seo_title" name="seo_title" value="{{$category->seo_title}}" class="form-control">
                                                @if ($errors->has('seo_title'))
                                                    <span class="text-danger d-block mt-1">{{ $errors->first('seo_title') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="thumbnail"  value="{{$category->thumbnail}}">
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12  ps-5 mb-2">
                            <a href" class="btn btn-secondary">Quay lại</a>
                            <input type="submit" value="Chỉnh sửa" class="btn btn-success float-right ms-2">
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-12">
        <div class="card card-app-design">
            <div class="card-body">
                <div id="imgList" 
                    style="
                        width: 230px;
                        height: 230px;
                        overflow: hidden;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        margin: 0 auto;
                        margin-bottom: 20px;
                    ">
                    <img style="width:100%; height:100%; border-radius:50%; object-fit:cover;" id="thumbnail_prev" src="{{$category->thumbnail ? $category->thumbnail : asset('empty/empty_img.png')}}"  alt="..">
                </div>
                <button class="btn btn-primary btn-toggle-sidebar w-100 waves-effect waves-float waves-light" id="popup-1-button">
                    <span class="align-middle">Chọn ảnh</span>
                </button>
                @if ($errors->has('thumbnail'))
                    <span class="text-danger d-block mt-1">{{ $errors->first('thumbnail') }}</span>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- /.card -->
</section>


<script>
    
    var button = document.getElementById( 'popup-1-button' );
    
    function selectFileWithCKFinder() {
        CKFinder.modal( {
            chooseFiles: true,
            width: 800,
            height: 600,
            onInit: function( finder ) {
                finder.on( 'files:choose', function( evt ) {
                    var file = evt.data.files.first();
                    var img = document.getElementById('thumbnail_prev')
                    var thumbnail = file.getUrl();
                    $('input[name="thumbnail"]').val(`{{env('APP_URL')}}${thumbnail}`);
                    img.src = `{{env('APP_URL')}}${thumbnail}`;    
                } );
            }
        } );
    }
    button.onclick =() => {
        selectFileWithCKFinder( 'ckfinder-input-1' );
    }
   
</script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace( 'summary-ckeditor' );
</script>
@endsection

@section('script')
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('ckfinder/ckfinder.js')}}" ></script>
@endsection