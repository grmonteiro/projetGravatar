<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Avatar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
        $imgName = explode('/', $avatar->img)[4];
        $user = Auth::id();
        $imgPath = '/img/'.$user.'/'.$imgName;

        if (Storage::disk('public')->exists($imgPath)) {
            Storage::disk('public')->delete($imgPath);
            $avatar->delete();
            return redirect()->route('avatars');
        } else {
            return var_dump($imgPath);
        }
    }

    public function store(Request $request) {
        $userId = Auth::id();
        $img = $request->file('img');
        $imgName = $request->input('title').'.'.$img->getClientOriginalExtension();
        $imgPath = '/storage/img/'.$userId.'/'.$imgName;
        $status = $request->input('status');

        $img->move(
            base_path().'/public/storage/img/'.$userId.'/', $imgName
        );

        Avatar::create([
            'user_id' => $userId,
            'title' => $imgName,
            'email' => $request->get('email'),
            'status' => $status,
            'img' => $imgPath
        ]);

        return redirect()->route('avatars', array($imgName))->with('message', 'Image added!');
    }

    public function edit(Request $req) {

    }

}