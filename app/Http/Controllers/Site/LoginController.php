<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Metodo para validar Usuario
use Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function entrar(Request $req){
        
         $dados = $req->all();
         if(Auth::attempt(['email'=> $dados['email'],'password' => $dados['senha']])){
             return redirect()->route('cadastro.home');
        }
         //return redirect()->route('teste');
        // return 'erro!';
    }

    public function sair(){
        Auth::logout();
        return redirect()->route('teste');
    }
}
