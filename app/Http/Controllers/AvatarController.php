<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Avatar;
use Illuminate\Support\Facades\Auth;

class AvatarController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avatars = Avatar::where('user_id', Auth::id())->get();
        return view('avatars')->with('avatars', $avatars);
    }

    public function deleteAvatar($id)
    {
        $avatar = Avatar::findOrFail($id);
        $avatar->delete();
        return Redirect::to('avatars');
    }

    public function store(Request $request)
    {
        $imgName = $request->input('title').'.jpg';
        $imgPath = base_path().'/public/img/'.$imgName;
        $userId = Auth::id();

        $request->file('img')->move(
            base_path().'/public/img/'.$userId.'/', $imgName
        );

        // Avatar::create([
        //     'user_id' => $userId,
        //     'email' => $request->get('email'),
        //     'img' => $imgPath,
        // ]);

        return redirect()->route('avatars', array($imgName))->with('message', 'Image added!');
    }

}