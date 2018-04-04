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
    
    public function getAvatar(){
        return Avatar::all();
    }
    
    public function getUser($id){
        return User::find($id);
    }
}