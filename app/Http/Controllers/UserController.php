<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Crypt;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){
            $data_user = user::where('username','LIKE','%' .$request->search.'%')->get();
            return view('user',compact('data_user'));
        }
        else {
            $data_user = user::all();
            return view('user',compact('data_user'));
        }

       
    }

    public function create_user()
    {
        return view('user.create_user');
    }
    public function insert_user(Request $request)
    {
        $this -> validate($request,[
            'name' => 'required',
            'username' =>'required|min:8',
            'password' =>'required|min:8',
            'phone' => 'required',
        ]);

        user::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
            'level' => $request->level,
            'jenis_kelamin' => $request->jenis_kelamin,                     
        ]);
        return redirect('user');
    }
    public function view_user($id)
    {
        $view_user = user::find($id);
        return view('user.view_user',compact('view_user'));
    }

    public function update_user(Request $request,$id)
    {
        $update_user = user::find($id);
        $this -> validate($request,[
            'name' => 'required',
            'username' =>'required|min:8',
            'password' =>'required|min:8',
            'phone' => 'required',
        ]);
        $update_user->update([
            'name' => $request->name,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
            'level' => $request->level,
            'jenis_kelamin' => $request->jenis_kelamin,                     
        ]);
        return redirect('user')->with('success','Data Berhasil Di Update');
    }

    public function delete_user($id)
    {
        $delete_user = user::find($id);
        $delete_user->delete();
        return redirect('user')->with('success','Data Berhasil Di Update');
    }
}
