<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function addAvatar()
    {
        return view('addAvatar');
    }
    public function deleteAvatar($id)
    {
        $avatar = Avatar::findOrFail($id);
        $avatar->delete();
        return Redirect::to('avatars');
    }

    public function saveAvatar(Request $request)
    {
        $file = Input::file('img');
        $img = Image::make($file);
        Response::make($img->encode('jpeg'));

        Avatar::create([
            'user_id' => Auth::id(),
            'email' => $request->get('email'),
            'img' => $img,
        ]);
        return Redirect::to('avatars');
    }

}