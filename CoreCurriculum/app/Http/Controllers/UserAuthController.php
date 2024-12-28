<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    public function returnPageIndex(){
        return view('UserAuth.index');
    }
    public function returnPageLogin(){
        return view('UserAuth.login');
    }
    public function returnPageCadastro(){
        return view('UserAuth.cadastro');
    }
    public function PostCadastro(Request $request){

        $modelUser = new User();
        $modelUser->name = $request->input('name');
        $modelUser->email = $request->input('email');
        $modelUser->password = Hash::make($request->input('password'));
        $modelUser->save();
        return redirect("loginPage");
    }
    public function PostLogin(){
        return "post login";
    }
}
