<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\ServiceRequest;
use Illuminate\Support\Facades\Auth;
use Storage;
use AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;


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

    public function personAdd(ServiceRequest $request) {
        $validated = $request->validated();
        $user = new User();
        $user->fill([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'department' => $request->department,
            'role' => $request->role,
            ])
            ->save();
        return redirect('/service');
    }

    public function loginafter(Request $request) {
        $user = Auth::user();
        return view('service.loginafter', ['user' => $user]);
    }
//研究開発部　メインページ
    public function main() {
        return view('service.main');
    }

//研究開発部　回覧資料
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

    public function deleteFile($showFile){
    Storage::disk('s3')->delete($showFile);
    return redirect('service_infile');
    }
//研究開発部　研修資料
    public function rd_files_ojt() {
        $showFiles = \Storage::disk('s3')->files('rd_ojt');
        return view('service.rd_files_ojt', compact('showFiles'));
    }

    public function rd_files_ojt_store(Request $request){
        $filePath = $request->file('file');
        $file_name = $request->file('file')->getClientOriginalName();
        $request->file('file')->storeAs('public/rd_ojt/',$file_name);
        Storage::disk('s3')->putFileAs('/rd_ojt' ,$filePath, $file_name, 'public');
        $showFiles = \Storage::disk('s3')->files('rd_ojt');
        return view('service.rd_files_ojt', compact('showFiles'));
    }

    public function rd_files_ojt_deleteFile($showFile){
        $showFile = "rd_ojt/"."$showFile";
        Storage::disk('s3')->delete($showFile);
        return redirect('service_rd_files_ojt');
    }

//営業部　メインページ
    public function sales_main() {
    return view('service.sales.sales_main');
}

//営業部　回覧資料
    public function sales_files_circulate() {
        $showFiles = \Storage::disk('s3')->files('sales_circulate');
        return view('service.sales.sales_files_circulate', compact('showFiles'));
    }

    public function sales_files_circulate_store(Request $request){
        $filePath = $request->file('file');
        $file_name = $request->file('file')->getClientOriginalName();
        $request->file('file')->storeAs('public/sales_circulate/',$file_name);
        Storage::disk('s3')->putFileAs('/sales_circulate' ,$filePath, $file_name, 'public');
        $showFiles = \Storage::disk('s3')->files('sales_circulate');
        return view('service.sales.sales_files_circulate', compact('showFiles'));
    }

    public function sales_files_circulate_deleteFile($showFile){
        $showFile = "sales_circulate/"."$showFile";
        Storage::disk('s3')->delete($showFile);
        return redirect('service_sales_files_circulate');
    }

//営業部　研修資料
    public function sales_files_ojt() {
        $showFiles = \Storage::disk('s3')->files('sales_ojt');
        return view('service.sales.sales_files_ojt', compact('showFiles'));
    }

    public function sales_files_ojt_store(Request $request){
        $filePath = $request->file('file');
        $file_name = $request->file('file')->getClientOriginalName();
        $request->file('file')->storeAs('public/sales_ojt/',$file_name);
        Storage::disk('s3')->putFileAs('/sales_ojt' ,$filePath, $file_name, 'public');
        $showFiles = \Storage::disk('s3')->files('sales_ojt');
        return view('service.sales.sales_files_ojt', compact('showFiles'));
    }

    public function sales_files_ojt_deleteFile($showFile){
        $showFile = "sales_ojt/"."$showFile";
        Storage::disk('s3')->delete($showFile);
        return redirect('service_sales_files_ojt');
    }

//総務部　メインページ
public function ganeral_main() {
    return view('service.general.general_main');
}
    
//総務部　回覧資料
    public function general_files_circulate() {
        $showFiles = \Storage::disk('s3')->files('general_circulate');
        return view('service.general.general_files_circulate', compact('showFiles'));
    }
    
    public function general_files_circulate_store(Request $request){
        $filePath = $request->file('file');
        $file_name = $request->file('file')->getClientOriginalName();
        $request->file('file')->storeAs('public/general_circulate/',$file_name);
        Storage::disk('s3')->putFileAs('/general_circulate' ,$filePath, $file_name, 'public');
        $showFiles = \Storage::disk('s3')->files('general_circulate');
        return view('service.general.general_files_circulate', compact('showFiles'));
    }

    public function general_files_circulate_deleteFile($showFile){
        $showFile = "general_circulate/"."$showFile";
        Storage::disk('s3')->delete($showFile);
        return redirect('service_general_files_circulate');
    }
    
//総務部　研修資料
    public function general_files_ojt() {
        $showFiles = \Storage::disk('s3')->files('general_ojt');
        return view('service.general.general_files_ojt', compact('showFiles'));
    }
    
        public function general_files_ojt_store(Request $request){
        $filePath = $request->file('file');
        $file_name = $request->file('file')->getClientOriginalName();
        $request->file('file')->storeAs('public/general_ojt/',$file_name);
        Storage::disk('s3')->putFileAs('/general_ojt' ,$filePath, $file_name, 'public');
        $showFiles = \Storage::disk('s3')->files('general_ojt');
        return view('service.general.general_files_ojt', compact('showFiles'));
    }

    public function general_files_ojt_deleteFile($showFile){
        $showFile = "general_ojt/"."$showFile";
        Storage::disk('s3')->delete($showFile);
        return redirect('service_general_files_ojt');
    }

    public function logOut(Request $request){
        Auth::logout();
        return redirect('service');
    }
}
