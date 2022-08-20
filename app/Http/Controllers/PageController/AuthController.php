<?php

namespace App\Http\Controllers\PageController;

use App\Models\User;
use App\Models\School;
use App\Models\UniqueId;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        return view('auth.login');
    }

    public function register(Request $request)
    {
        return view('auth.register-as');
    }

    public function registerStudent(Request $request)
    {
        return view('auth.as-student');
    }

    public function registerTeacher(Request $request)
    {
        return view('auth.as-teacher');
    }

    // public function registerSchool(Request $request)
    // {
    //     return view('auth.as-school');
    // }

    public function registerStoreTeacher(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:8|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'required|min:8',
            'name_class' => 'required',
        ]);

        // create classroom
        $classroom['name'] = $data['name_class'];
        $classroom['classroom'] = random_int(1000000, 9999999);
        Classroom::create($classroom);

        // create user
        $data['role'] = "teacher";
        $data['password'] = bcrypt($data['password']);
        $data['classroom_id'] = Classroom::where('classroom', $classroom['classroom'])->first()->id;
        $user = User::create($data);
        if($request->hasFile('avatar') && $request->file('avatar')->isValid()){
            $user->addMediaFromRequest('avatar')->toMediaCollection('avatar');
        }

        // create teacher
        $teacher['user_id'] = User::where('email', $data['email'])->first()->id;
        Teacher::create($teacher);

        alert()->success('Berhasil Mendaftar','Silahkan Login')->showConfirmButton('Oke', '#7176FF');
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

            $request->session()->regenerate();

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
     
        toast('Berhasil Keluar','success')->width('300px');
        return redirect('/');
    }
}
