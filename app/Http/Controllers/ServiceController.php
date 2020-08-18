<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Storage;
use AuthenticatesUsers;

class ServiceController extends Controller
{
    public function index(Request $request) {
        if (Auth::check()) {
            return redirect('service_loginafter');
        }
        return view('service.index');
        
    }

    public function postIndex(Request $request) {
        $name = $request->name;
        $password = $request->password;
        if (Auth::attempt(['name' => $name,
        'password' => $password])) {
        return redirect('service_loginafter');
        } else {
        $msg = 'ログインに失敗しました。入力内容に誤りがないか確認して下さい。';
        }
        return view('service.index', ['message' => $msg]);
    }

    public function index_admin() {
        return view('service.index_admin');
    }

    public function newperson(Request $request) {
        if (Auth::check()) {
            return redirect('service_loginafter');
        }
        return view('service.newperson');   
    }

    public function loginafter(Request $request) {
        $user = Auth::user();
        return view('service.loginafter', ['user' => $user]);
    }

    public function main() {
        return view('service.main');
    }

    public function infile() {
        $showFiles = Storage::disk('s3')->files('/');
        return view('service.infile', compact('showFiles'));
    }

    public function store(Request $request){
        $file_name = $request->file('file')->getClientOriginalName();
        $request->file('file')->storeAs('public',$file_name);
        $contents = Storage::get('public/'.$file_name);
        Storage::disk('s3')->put($file_name, $contents, 'public');
        $showFiles = Storage::disk('s3')->files('/');
        return view('service.infile', compact('showFiles'));
    }

    public function logOut(Request $request){
        Auth::logout();
        return redirect('service');
    }
}
