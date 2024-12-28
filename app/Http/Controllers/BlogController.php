<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function createPost(Request $request){
        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $incomingFields['user_id'] = auth()->id();

        Blog::create($incomingFields);
        return redirect('user/dashboard');
    }

    public function show()
    {
        $data = Blog::all();
        return view('admin.dashboard', ['blogs'=> $data]);
    } 

    public function viewBlog(Blog $blog)
    {
        return view('admin.view-blog', ['blog' => $blog]);
    }


    public function deleteBlog(Blog $blog){
        $blog->delete();
        return redirect('admin/dashboard');
    }

    public function myBlogs(){

        $user = Auth::user();

        $userid = $user->id;

        $data = Blog::where('user_id','=', $userid)->get();

        return view('user.myblogs', compact('data'));
    }

    public function editBlog(Blog $data){

        return view('user.edit-blog', compact('data'));
    }

    public function viewUserBlog(Blog $data){

        return view('user.view-blog', compact('data'));
    }

    public function deleteUserBlog(Blog $data){
        $data->delete();
        return redirect('/user/myblogs');
    }

    public function update_blog_data(Request $request, $id){

        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $data = Blog::find($id);

        $data->title = $request->title;
        $data->body = $request->body;

        $data->save();
        return redirect()->back()->with('message', 'Blog Updated Successfully.');
    }

    /**
     * read Blog
     */
    public function readBlog($id){

        $blog = DB::table('blogs')->where('id','=',$id)->get();
        $writer = DB::table('users')->where('id','=',$blog[0]->user_id)->get();

        $article = [$blog, $writer];
        return view('read-blog', ['article' => $article]);
    }
}
