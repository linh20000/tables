<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Form_comment;

use function JmesPath\search;

class BlogController extends Controller
{
    public function BlogList(){
        $blog = Blog::all();
        return view('backend.blog.list',
        ['title'=>'Danh sách Blog']
        , compact('blog'));    
    }

    public function createBlog(){
        return view('backend.blog.create', 
        ['title'=>'Thêm Blog']
        );
    }
    public function storeBlog(Request $request){
        $requi = [
            'name'  => 'required|max:255',
            'subname' => 'required|max:255',
            'description' => 'required',
            'seo_title' => 'required|max:255',
            'seo_description' => 'required|max:255',
            'seo_keyword' => 'required|max:255',
            'image'   => 'required'
        ];
        $messages = [
            'name.required'    => 'Nhập tên !!!',
            'subname.required'    => 'Nhập tên phụ !!!',
            'description.required'    => 'Nhập miêu tả !!!',
            'seo_title.required'    => 'Nhập tiêu đề - tìm kiếm !!!',
            'seo_description.required'    => 'Nhập mô tả !!!',
            'seo_keyword.required'    => 'Nhập từ khóa !!!',
            'image.required'  => 'Nhập ảnh !!!'
        ];
        $validate = $request->validate($requi, $messages);
        $data = $request->all();
        Blog::create($data);
        return redirect(route('blog.list'))->with('success', 'Thêm thành công...');
    }

    public function getUpdateBlog($id){
        $blog_detail = Blog::findOrFail($id);
        return view('backend.blog.update', 
        ['title'=>'Chỉnh sửa Blog']
        , compact('blog_detail'));
    }

    public function updateBlog(Request $request, $id){
        $blog = Blog::findOrFail($id);
        $data = $request->all();
        $blog->update($data);
        return redirect(route('blog.list'))->with('success', 'Chỉnh sửa thành công.');
    }

    public function deleteBlog($id){
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect(route('blog.list'))->with('success', 'Đã xóa.');
    }


    //comment
    public function viewComment(){
        $comment = Form_comment::all();
        return view('backend.comment.list',
        ['title'=>'Danh sách phản hồi']
        , compact('comment'));
    }
    public function deleteComment($id){
        $comment = Form_comment::findOrFail($id);
        $comment->delete();
        return redirect(route('comment.list'))->with('success', 'Đã xóa...');
    }
    public function search(Request $request){
        // dd($request->all());
        $comment = Form_comment::where('author', 'LIKE', '%'. $request->search .'%')->orWhere('email', 'LIKE', '%'. $request->search .'%')
        ->orWhere('comment', 'LIKE', '%'. $request->search .'%')->get();
        // dd($request);
        return view('backend.comment.list',['title'=>'Danh sách'],compact('comment'));
    }
}
