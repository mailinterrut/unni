<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterBasic extends Controller
{
  public function index()
  { 
    return view('content.authentications.register');
  }
 
  public function store()
    { 
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]); 
        $user = User::create(request(['name', 'email', 'password']));
        auth()->login($user);   
        return redirect()->to('/dashboard');
    }
 

}
