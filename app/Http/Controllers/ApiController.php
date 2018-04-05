<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Avatar;
use App\User;

class ApiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){}
    
    public function getAvatar($email){
        return Avatar::where('email',$email)->first();
    }
    
    public function getUser($id){
        return User::find($id);
    }
}