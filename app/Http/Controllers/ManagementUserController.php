<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
class ManagementUserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function profile()
    {
        $data= User::findOrFail(Auth::id());
        return view('users.profile',compact('data'));
    }

    public function actprofile(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.Auth::id(),
            'password' => 'confirmed'
        ]);

        $input = $request->all();
        if(empty($input['password'])){ 
            $input = \Arr::except($input,['password']);    
        }


        $data= User::findOrFail(Auth::id());
        $data->update($input);
        
        Session::flash('message', 'Update successfully!');
        Session::flash('alert-class', 'alert-success');
        return view('users.profile',compact('data'));
    }
}
