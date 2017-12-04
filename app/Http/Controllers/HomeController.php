<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
        return view('home');
    }
    public function profile()
    {
        return view('profile');
    }
    public function fix()
    {
        return view('fix');
    }
    public function postFix(Request $request,$idPerson)
    {
        $this->validate($request,[
            'name'=>'min:3|max:30',
             'password'=>'min:3|max:16',
                'passwordagain'=>'same:password'
        ],
            [
                'name.min'=>'Tên ít nhất 3 kí tự',
                'name.max'=>'Tên khẩu nhiều nhất 30 kí tự',
                'password.min'=>'Mật khẩu ít nhất 3 kí tự',
                    'password.max'=>'Mật khẩu nhiều nhất 30 kí tự',
                    'passwordagain.same'=>'Mật khẩu không khớp',
            ]);
        Auth::user()->password  = bcrypt($request->password);
         Auth::user()->name  = $request->name;
        Auth::user()->email  = $request->email;
        Auth::user()->weight  = $request->weight;
        Auth::user()->height = $request->height;
         Auth::user()->address  = $request->address;
         Auth::user()->age  = $request->age;
         Auth::user()->save() ;
        return redirect('fix/'.$idPerson)->with('thongbao','Sửa thành công');
    }
}
