<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\DB;

class profileController extends Controller
{
    public function show(Request $request)
    {
        session_start();
        if ($request->input('email')!=null) {
            if ($this->login() === true) {
                $this->authUser($request);
                $id = $_SESSION['id'];
                $name = DB::table('user')->where('id_user', $id)->value('first_name');
                $_SESSION['login']=$name;
                return redirect()->route('usertype')->with('id', $id);
            } else {
                $email = $request->input('email');
                $salt = 'sflprt49fhi2';
                $password = md5(md5($request->input('password')) . $salt);
                $emailbd = DB::table('user')->where('email', $email)->value('email');
                $passwordbd = DB::table('user')->where('email', $email)->value('password');
                if (($email === $emailbd) && ($password === $passwordbd)) {
                    $this->authUser($request);
                    $id = $_SESSION['id'];
                    $name = DB::table('user')->where('email', $email)->value('first_name');
                    $_SESSION['login']=$name;
                    return redirect()->route('usertype')->with('id', $id);
                } else {
                    if (view()->exists('auth')) {
                        return redirect()->route('auth');
                    }
                }
            }
        }elseif($this->login() === true){
            $id = $_SESSION['id'];
            $name = DB::table('user')->where('id_user', $id)->value('first_name');
            $_SESSION['login']=$name;
            return redirect()->route('usertype')->with('id', $id);
        }else{
            if (view()->exists('auth')) {
                return redirect()->route('auth');
            }
        }
    }

    private function authUser(Request $request)
    {
        $_SESSION['Name'] = $request->input('email');
        setcookie("name", $request->input('email'), time() + 50000);
        $salt = 'sflprt49fhi2';
        $password = md5(md5($request->input('password')) . $salt);
        setcookie("password", $password, time() + 50000);
        $email = $request->input('email');
        $id = DB::table('user')->where('email', $email)->value('id_user');
        $_SESSION['id'] = $id;
    }

    private function login()
    {
        /*ini_set("session.use_trans_sid", true);*/
        if (isset($_SESSION['id'])) {
            if (isset($_COOKIE['name']) && isset($_COOKIE['password'])) //если cookie есть, то просто обновим время их жизни и вернём true
            {
                SetCookie("name", "", time() - 1, '/');
                SetCookie("password", "", time() - 1, '/');
                setcookie("name", $_COOKIE['name'], time() + 50000, '/');
                setcookie("password", $_COOKIE['password'], time() + 50000, '/');
                return true;
            } else { //иначе добавим cookie с логином и паролем, чтобы после перезапуска браузера сессия не слетала
                $id = $_SESSION['id'];
                $name = DB::table('user')->where('id_user', $id)->value('email');
                $password = DB::table('user')->where('id_user', $id)->value('password');
                if ($name!=null) //если получена одна строка
                {
                    setcookie("name", $name, time() + 50000, '/');
                    setcookie("password", $password, time() + 50000, '/');
                    return true;
                } else {
                    return false;
                }
            }
        } else //если сессии нет, то проверим существование cookie. Если они существуют, то проверим их валидность по БД
        {
            if (isset($_COOKIE['name']) && isset($_COOKIE['password'])) //если куки существуют.
            {
                $cockieName = $_COOKIE['name'];
                $name = DB::table('user')->where('id_user', $cockieName)->value('email');
                $password = DB::table('user')->where('id_user', $cockieName)->value('password');
                $id = DB::table('user')->where('id_user', $cockieName)->value('id_user');
                if ($name!=null && $password == $_COOKIE['password']) //если логин и пароль нашлись в БД
                {
                    $_SESSION['id'] = $id; //записываем в сесиию id
                    return true;
                } else //если данные из cookie не подошли, то удаляем эти куки
                {
                    SetCookie("name", "", time() - 360000, '/');
                    SetCookie("password", "", time() - 360000, '/');
                    return false;
                }
            } else //если куки не существуют
            {
                return false;
            }
        }
    }
}
