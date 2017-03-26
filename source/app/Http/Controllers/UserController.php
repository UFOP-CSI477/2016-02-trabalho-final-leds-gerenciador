<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::find(Auth::user()->id);
        return view('users.index')->with('user', $user);
    }

    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show(User $user)
    {
        //
    }

   
    public function edit(User $user)
    {
        //
    }

    
    public function update(Request $request, User $user)
    {
    
    }

    
    public function destroy(User $user)
    {
        //
    }
}
