<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
