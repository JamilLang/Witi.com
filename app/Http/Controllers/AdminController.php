<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use Hash;

class AdminController extends Controller
{
    public function list(){
        $data['header_title']='Admin List';
        return view('admin.admin.list',$data);

    }
    public function add(){
        $data['header_title']='Add New Admin';
        return view('admin.admin.add',$data);

    }
    public function insert(Request $request){
        dd($request->all() );
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = hash::make($request->password);
        $user->saved();

        return redirect('admin/admin/list')->with('success', "Admin Sucessfully Created");
    }
}
