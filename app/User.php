<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class User extends Model
{
    protected $table = 'user';
    public $timestamps = false;
    protected $hidden = ['password'];


    public static function generatePassword($password){
        $salt          = env('PASSWORD_SALT');
        $passwordChars = str_split($password);

        foreach ($passwordChars as $char) {
            $salt .= md5($char);
        }
        return md5($salt);
    }


    public static function getUserId(){
        return session('user_id');
    }


    public function getCreateTimeAttribute(){
        return Carbon::createFromTimestamp($this->attributes['create_time'])->toDateTimeString();
    }


}
