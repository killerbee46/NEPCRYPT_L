<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Read

        $posts = Post::all();
        // dd($posts);
        // $JSONfile = json_encode($posts);
        // dd($JSONfile);
        return view('admin.posts.postview',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addPost()
    {
        //CREATE
        return view('admin.posts.addform');
        
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addNewPost(Request $request)
    {
        //CREATE
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'profile_pic'=>'required'
        ]);

        if ($file = $request->file('profile_pic')) {
        $request->validate([
            'profile_pic' =>'mimes:jpg,jpeg,png,bmp'
        ]);
        $image = $request->file('profile_pic');
        $imgExt = $image->getClientOriginalExtension();
        $fullname = time().".".$imgExt;
        $result = $image->storeAs('images/posts',$fullname);
        }

        else{
            $fullname = 'images.jpg';
        }

        

        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->profile_pic = $fullname;
        $post->save();


        if($post){
            //Redirect with Flash message
            return redirect('admin/post/')->with('status', 'Post added Successfully!');
        }
        else{
            return redirect('admin/post/')->with('status', 'There was an error!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Read individual
        // $posts = Post::find(3)->get();
        $posts = Post::findOrFail($id);
        return view('admin.posts.show',compact('posts'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editPost($id)
    {
        //Update View
        $posts = Post::where('id',$id)->first();
        return view('admin.posts.editform',compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePost(Request $request, $id)
    {
        //Update
        $posts = Post::find($id)->first();

        $posts->title = $request->title;
        $posts->body = $request->body;
        $posts->profile_pic = $request->profile_pic;

        if($posts->save()){
            return redirect('admin/post')->with('status', 'Post edited Successfully!');
        }
        else{
            return redirect('admin/post/edit-post')->with('status', 'There was an error');

        }
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletePost($id)
    {
        $user = User::findOrFail($id);
        $user->status = 3;
        $result = $user->save();

        $posts= Post::orderBy('id','desc')->where('status','<=',1)->get();
        if ($result) {
        	return view('admin.user.postview',compact('posts'));
        }
        
    }
    public function searchPostForAdmin(Request $request){

        $searched=$request->searched;
        $posts= Post::orWhere('title','Like',"%$searched%"); //->orWhere('email','Like',"%$searched%")->orWhere('mobile','Like',"%$searched%")->get();
        return view('admin.posts.searchpostview',compact('posts','searched'));
    }
}