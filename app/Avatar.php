<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Avatar extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    protected $fillable = [
        'user_id','title','status','email', 'img',
    ];
    
    public static function getStoragePath() {
        $userId = Auth::id();
        return base_path().'/public/storage/img/'.$userId.'/';
    }
    
    public static function deleteAvatar(Avatar $avatar) {
        $imgName = explode('/', $avatar->img)[4];
        $imgPath = Avatar::getStoragePath().$imgName;

        if (file_exists($imgPath)) {
            unlink($imgPath);
            $avatar->delete();
            return true;
        } else {
            return false;
        }
    }
}
