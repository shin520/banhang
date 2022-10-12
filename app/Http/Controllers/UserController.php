<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use User;

class UserController extends Controller
{
    public function list(){
        $data = User::all();
        return view('users.list',  compact('data'));
    }
    public function create(Request $request){
        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->role = $request->role;
        $data->save();
        return redirect()->route('user.list');
    }
    public function edit(){
        $data = User::all();
        return view('users.edit',  compact('data'));
    }
    public function update(Request $request){
        $id = $request->id;
        $data  = User::find($id);
        // if($request->password){
        //     $data->password = $request->password;
        // }
        if($request->name){
            $data->name = $request->name;
        }
        elseif($request->email){
            $data->email = $request->email;
        }
        else{
            $data->role = $request->role;
        }

        $data -> save();
        return response()->json(["success" => "Cập nhật thành công", "error" => "Có lỗi xảy ra"]);
    }
    public function delete($id){
        $data = User::find($id);
        $data->delete();
        return redirect()->back();
    }
}
