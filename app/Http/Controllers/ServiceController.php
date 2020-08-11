<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Storage; 

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

    public function store(Request $request){
        $file_name = $request->file('file')->getClientOriginalName();
        $request->file('file')->storeAs('public',$file_name);
        $contents = Storage::get('public/'.$file_name);
        Storage::disk('s3')->put($file_name, $contents, 'public');
        return back()->with(['file_name' => $file_name]);
    }

    
    
}
