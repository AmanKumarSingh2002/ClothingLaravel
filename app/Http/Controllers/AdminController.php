<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //
    public function register(Request $request){
        $validator= Validator::make($request->all(),[
            'name'=>'required|max:111',
            'email'=>'required|email|max:111',
            'password'=>'required|min:4|confirmed',
            'terms'=>'accepted',
        ]);
        if($validator->fails()){
            $error=$validator->errors();
            return $error->all();
        }
        else{
            $admin=new Admin;
            $admin->name=$request->name;
            $admin->email=$request->email;
            $admin->number=$request->number;
            $admin->password=$request->password;
            if($admin->save()){
                return "your data registered";
            }
            else{
                return "data not insert";
            }
        }
       
    }

    public function loginverify(Request $request){
        $validator= Validator::make($request->all(),[
            'email'=>'reuired|email',
            'passowrd'=>'required'
        ]);
        $admin=Admin::where('email',$request->email)->first();
    }

}
