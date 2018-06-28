<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register() {
        return view('users.register');
    }
    
    public function login() {
      
    }
    
    public function save() {
      $this->validate(request(), [
          'name' => 'required',
          'email' => 'required|email',
          'password' => 'required'
      ]);
      
      $user = User::create(request(['name', 'email', 'password', 'type']));
      
      auth()->login($user);
      
      return redirect()->home();
    }
    
    public function logout()
    {
      auth()->logout();
      redirect()->home();
    }
}
