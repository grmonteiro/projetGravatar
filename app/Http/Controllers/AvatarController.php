<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Avatar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Http\Requests\StoreAvatar;

class AvatarController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $avatars = Avatar::where('user_id', Auth::id())->get();
        return view('avatars')->with('avatars', $avatars);
    }

    public function delete(Avatar $avatar) {
        
        if (Avatar::deleteAvatar($avatar)) {
            return redirect()->route('avatars');
        } else {
            return 'Deletion failed!';
        }
    }
    
    public function addAvatar() {
        return view('addAvatar');
    }

    public function store(StoreAvatar $request) {
        $userId = Auth::id();
        $img = $request->file('img');
        $imgName = $request->input('title').'.'.$img->getClientOriginalExtension();
        $imgPath = '/storage/img/'.$userId.'/'.$imgName;
        $status = $request->input('status');
        
        $img->move(
            Avatar::getStoragePath(), $imgName
        );

        Avatar::create([
            'user_id' => $userId,
            'title' => $imgName,
            'email' => $request->get('email'),
            'status' => $status,
            'img' => $imgPath
        ]);

        return redirect()->route('avatars');
    }
}