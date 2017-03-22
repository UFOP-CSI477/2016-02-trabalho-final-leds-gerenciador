<?php

namespace App\Http\Controllers;
use App\User;
use App\Aviso;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class MembroController extends Controller
{
  /**
 * Create a new controller instance.
 *
 * @return void
 */
 public function __construct(){
     //$this->middleware('auth', ['except' => 'index']);
     $this->middleware('auth');
 }

 public function index(){
     return view('adicionar.membro');
 }
/**
 * Get a validator for an incoming registration request.
 *
 * @param  array  $data
 * @return \Illuminate\Contracts\Validation\Validator
 */
protected function validator(array $data)
{
    return Validator::make($data, [
        'name' => 'required|max:255',
        'email' => 'required|email|max:255|unique:users',
        'password' => 'required|min:6|confirmed',
    ]);
}

/**
 * Create a new user instance after a valid registration.
 *
 * @param  array  $data
 * @return User
 */
 public function create()
 {
   return view('adicionar.membro');
 }


 public function store(Request $request)
 {
   $dados = ($request->all());
   dd($dados);
   User::create($request->all());
   return redirect('/produtos');
 }
}
