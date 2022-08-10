<?php

namespace App\Http\Controllers\PageController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        return view('auth.login');
    }

    public function register(Request $request)
    {
        return view('auth.login');
    }

    public function registerStore(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'role' => 'required',
            'date_birth' => 'required',
        ]);

        $data['password'] = bcrypt($data['password']);

        User::create($data);

        // return view('auth.login');
        return redirect('/login');
    }

    public function loginStore(Request $request)
    {
        $data = $request->validate([
            'email' => 'required:email:dns',
            'password' => 'required',
        ]);

        if(Auth::attempt($data)){
            $user = Auth::user();
            // dd($user->role);
            $request->session()->regenerate();

            // return redirect('/teacher');
            // return redirect()->intended('/teacher');

            if ($user->role == 'teacher') {
                return redirect()->intended('teacher');
            } elseif ($user->role == 'student') {
                return redirect()->intended('student');
            }
            return redirect()->intended('/');
        }

        return back()->with('error', 'Email atau Password salah');
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');
    }
}
