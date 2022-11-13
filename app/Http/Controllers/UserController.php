<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Mobile;
use Validator;
use App\MyApp;

class UserController extends Controller
{
    public function saveMobileNo(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'mobile_no' => 'required|max:191',
            'iagree' => 'required|max:191',
            'email' => 'required|unique:admins,email,'.$req->input('email'),
            'password' => 'required|max:191',
        ]);
        if($validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages(),
            ]);
        }else{
            $model = new Admin ;
            $model->role = $req->input('role');
            $model->name = strtolower($req->input('name'));
            $model->email = strtolower($req->input('email'));
            $model->password = Hash::make($req->input('password')); 
            
            if($model->save()){
                return response()->json([
                    'status'=>200,
                ]);
            }
        }
    }
}
