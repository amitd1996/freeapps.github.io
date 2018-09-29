<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Admin;

class PostController extends Controller
{
	// public function __construct()
    // {
    //     $this->middleware('auth')->except(['homes']);
    // }

    public function posthomes(){
    	$posts = Post::orderby('id','desc')->paginate(10);
    	return view('homes',['posts' => $posts]);
    }

    public function browser(){
        $posts = Post::orderby('id','desc')->paginate(10);
        return view('browser',['posts' => $posts]);
    }

    public function postview(){
    	$posts = Post::all();
    	return view('post.view',['posts' => $posts]);
    }

    public function create(){
		$posts = Post::all();
        return view('post.create',['posts' => $posts]);
	}

	// public function create()
	// {
	// 	$categor = Post::all();
	// 	return View('post.create',(['categor',$categor]));
	// }

    public function postread($id){
        $posts = Post::find($id);
        return view('post.view',['posts' => $posts]);
    }

    public function posts($id){
    	$posts = Post::find($id);
    	return view('posts',['posts' => $posts]);
    }

    public function postupdate($id){
    	$posts = Post::find($id);
    	return view('post.update',['posts' => $posts]);
    }

    public function postdelete($id){
    	Post::where('id',$id)->delete();
    	return redirect('postview');
    }

    public function postinsert(Request $request){

		$image = $request->file('Image');
		$image->move(public_path('images'). '/', $image->getClientOriginalName());

		// $image = $request->file('Image');
		// $destinationPath = 'public/images/';
		// $originalFile = $image->getClientOriginalName();
		// $image->storeAs($destinationPath, $originalFile);

		// if($request->file('Image')){
		// 	$filenameext = $request->file('Image')->getClientOriginalName();
		// 	$filename = pathinfo($filenameext, PATHINFO_FILENAME);
		// 	$extension = $request->file('Image')->getClientOriginalExtension();
		// 	$filenamestore = $filename.'_'.time().'.'.$extension;
		// 	$path = $request->file('Image')->storeAs('public/images', $filenamestore);
		// }

    	$post = new Post();
    	$post->Name = $request->input(htmlspecialchars('Name'));
		$post->Dlink = $request->input(htmlspecialchars('Dlink'));
		$post->Dlinkname = $request->input(htmlspecialchars('Dlinkname'));
		$post->Dlinksize = $request->input(htmlspecialchars('Dlinksize'));
    	$post->Date = $request->input(htmlspecialchars('Date'));
    	$post->Post = $request->input(htmlspecialchars('Post'));
    	$post->admin_id = $request->input(htmlspecialchars('admin_id'));
    	$post->Image = $image->getClientOriginalName();
    	$post->save();
    	return redirect('postview')->with('info','Post Added Successfully');
    }

    public function postedit(Request $request,$id){

    	$data = array('Name' => $request->input(htmlspecialchars('Name')),'Dlink' => $request->input(htmlspecialchars('Dlink')),'Dlinkname' => $request->input(htmlspecialchars('Dlinkname')),
		'Dlinksize' => $request->input(htmlspecialchars('Dlinksize')),'Date' => $request->input(htmlspecialchars('Date')),'Post' => $request->input(htmlspecialchars('Post')),'admin_id' => $request->input(htmlspecialchars('admin_id')));
    	Post::where('id',$id)->update($data);
    	return redirect('postview')->with('info','Post Update Successfully');
    }
}
