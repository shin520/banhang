<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Customer;
use Country;

class CustomerController extends Controller
{
    public function list(){
        $data['country'] = Country::all();
        $data['customer'] = Customer::with('Country')->get();
        return view('customers.list',  compact('data'));
    } 
    public function create(Request $request){
        $data = new Customer();
        $data->name = $request->name;
        $data->country = $request->country;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->company = $request->company;
        $data->address = $request->address;
        $data->note = $request->note;
        $data->save();
        return redirect()->route('customer.list');
    }
    public function edit(Request $request){
        $data = Customer::all();
        return view('customers.list', compact('data'));
    }

    public function update(){
        $id = $request->id;
        $data = Customer::find($id);
        if($request->name){
            $data->name = $request->name; 
        }
        elseif($request->country){
            $data->country = $request->country; 
        }
        elseif($request->email){
            $data->email = $request->email; 
        }
        elseif($request->company){
            $data->company = $request->company; 
        }
        elseif($request->phone){
            $data->phone = $request->phone; 
        }
        elseif($request->address){
            $data->address = $request->address; 
        }
        else{
            $data->note = $request->note; 
        }
        $data->save();
        return response()->json(["success" => "Cập nhật thành công", "error" => "Có lỗi xảy ra"]);

    }
}
