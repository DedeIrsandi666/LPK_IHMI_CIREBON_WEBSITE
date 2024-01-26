<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserRequest;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserEditRequest;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        return view('login', ['title' => 'Login']);
    }
    public function authenticate(Request $request)
    {
        $credential = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required']
        ]);
        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->intended('welcome');
        }
        return back()->with('loginError', 'Login Failed');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        //request()->session()->invalide();


        return redirect()->to('/login');
    }


    public function create()
    {
        return view('user.create');
    }

    public function store(UserCreateRequest $request)
    {
        //  $validated = $request->validate([
        //     'name' => 'required|max:100',
        //     'email' => 'required|max:100',
        //     'password' => 'regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*#?&]/|max:100'
        // ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);

        return redirect('user-show')->with('success','Data berhasil disimpan');
    }

    public function update(UserEditRequest $request, $id_user)
    {        
        $user = User::findOrfail($id_user);
        $user->update($request->all());

        return redirect('user-show')->with('success','Data berhasil diubah');
    }

    public function show() {
        $users = User::latest()->paginate(5);
        return view('user.index', ['users'=>$users])->with('i',(request()->input('page',1)-1)*5);
    }

    public function destroy($id_user)
    {
        $deleteuser = DB::table('users')->where('id_user', $id_user)->delete();
        return redirect('user-show')->with('success','Data berhasil dihapus');
    }

    public function edit(Request $request, $id_user){
        $users = User::findOrFail($id_user);
        return view('user.edit', ['users'=>$users]);
    }
}
