<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function index(Request $request) {
        $user = Auth::user();
        $param = ['user' => $user];
        return view('service.index', $param);
    }

    public function getAuth(Request $request) {
        $param = ['message' => 'ログインしてください。'];
        return view('service.auth_login', $param);
    }

    public function postAuth(Request $request) {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email,
        'password' => $password])) {
        $msg = 'ログインしました。'; //実際はメインページにリダイレクトさせる
        } else {
        $msg = 'ログインに失敗しました。';
        }
        return view('service.auth_login', ['message' => $msg]);
    }

    public function index_admin() {
        return view('service.index_admin');
    }

    public function main() {
        return view('service.main');
    }

    public function infile() {
        return view('service.infile');
    }
    
}
