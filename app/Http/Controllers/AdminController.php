<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Post;

class AdminController extends Controller
{
    // public function adminhomes(){
    // 	$admins = Admin::all();
    // 	return view('homes',['admins' => $admins]);
    // }

    public function adminview(){
    	$admins = Admin::all();
    	return view('admin.view',['admins' => $admins]);
	}

    public function dashboard(){
        return view('layouts.dashboard');
    }
	
	public function admincreate(){
    	return view('admin.create');
    }

    // public function adminpost($id){
    // 	$admins = Admin::find($id);
    // 	return view('post',['admins' => $admins]);
    // }

    public function adminupdate($id){
    	$admins = Admin::find($id);
    	return view('admin.update',['admins' => $admins]);
    }

    public function admindelete($id){
    	Admin::where('id',$id)->delete();
    	return redirect('adminview');
    }

    public function admininsert(Request $request){

    	$admin = new Admin();
    	$admin->Category = $request->input(htmlspecialchars('Category'));
    	$admin->save();
    	return redirect('adminview')->with('info','Post Added Successfully');
    }

    public function adminedit(Request $request,$id){

    	$data = array('Category' => $request->input(htmlspecialchars('Category')));
    	Admin::where('id',$id)
    	->update($data);
    	return redirect('adminview')->with('info','Post Update Successfully');
    }
}
