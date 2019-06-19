<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;



class UserController extends Controller
{
    public function reg(){
        return view('user.reg');
    }
    public function login(){
        return view('user.login');
    }
    public function register(Request $request){
        $mobile = $request->get('mobile',null);
        $password = $request->get('password',null);


        if (empty($mobile)){
            return $this->error('请填写手机号');
        }
        if(!preg_match('/^\d{11}$/',$mobile)){
            return $this->error('请填写正确的手机号');
        }
        if(empty($password)){
            return $this->error('密码不能为空');
        }



            $user = User::where('mobile',$mobile)->first();
            if(!empty($user)){
                return $this->error('该用户已注册');
            }else{
                $user = new User();
            }
            $user->mobile = $mobile;
            $user->nickname = $mobile;
            $user->password = User::generatePassword($password);
            $user->create_time = time();
            $user->save();
            return $this->success('注册成功');

    }

    public function postLogin(Request $request){
        $mobile = $request->get('mobile');
        $password = User::generatePassword($request->get('password'));
        $user = User::where('mobile',$mobile)->first();
        if(empty($user)){
            return $this->error('该用户未注册');
        }
        if ($user->password != $password){
            return $this->error('密码错误');
        }
        session(['user_id'=>$user->id]);

        return $this->success('登录成功');
    }

    public function logout(){
        session()->forget('user_id');
        return $this->success('登出成功');

    }


    public function info(){
        $user_id = User::getUserId();
        $user = User::find($user_id);
        if (empty($user)){
            session()->forget('user_id');
            return $this->error('无此用户');
        }
        return $this->success($user);
    }

//    public function change(Request $request){
//        $nickname = $request->get('nickname',null);
//        $avatar = $request->get('avatar',null);
//        $password = $request->get('password',null);
//        $msg_code = $request->get('msg_code',null);
//        $user_id = User::getUserId();
//        $user = User::find($user_id);
//        try{
//            if (!empty($nickname)){
//                if (mb_strlen($nickname,'UTF-8') > 7){
//                    return $this->error('昵称最长为7个字');
//                }
//                $user->nickname = $nickname;
//            }
//            if (!empty($avatar)){
//                $user->avatar = $avatar;
//            }
//            if (!empty($password)){
////                if (empty($msg_code)){
////                        return $this->error('请填写短信验证码');
////                    }
////                    if ($msg_code != '7777'){
////                        $check_code = session('msg_code');
////                        if (empty($check_code)){
////                            return $this->error('请重新发送短信验证码');
////                        }
////                        if ($msg_code != $check_code){
////                            return $this->error('验证码错误');
////                        }
////                }
//                $user->password = User::generatePassword($password);
//            }
//            $user->save();
//            return $this->success('修改成功');
//        }catch (\Exception $exception){
//            return $this->error($exception->getMessage());
//        }


    }
