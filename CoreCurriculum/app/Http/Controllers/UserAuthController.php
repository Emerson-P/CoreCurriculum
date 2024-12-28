<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
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
        return redirect()->route("login");
    }
    public function PostLogin(Request $request){

        $credentials = $request->only('email', 'password');
        if (FacadesAuth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('HomePage');
        }
    }
}
