<?php

namespace App\Http\Controllers\PageController;

use App\Models\User;
use App\Models\Teacher;
use App\Models\Classroom;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Artesaos\SEOTools\Facades\SEOTools;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        SEOTools::setTitle('Masuk');
        return view('auth.login');
    }

    public function register(Request $request)
    {
        SEOTools::setTitle('Daftar');
        return view('auth.register-as');
    }

    public function registerStudent(Request $request)
    {
        SEOTools::setTitle('Daftar Siswa');
        return view('auth.as-student');
    }

    public function registerTeacher(Request $request)
    {
        SEOTools::setTitle('Daftar pengajar');
        return view('auth.as-teacher');
    }

    // public function registerSchool(Request $request)
    // {
    //     return view('auth.as-school');
    // }

    public function registerStoreTeacher(Request $request)
    {
        $data = $request->validate([
            'name'              => 'required',
            'email'             => 'required|unique:users',
            'password'          => 'required|min:8|required_with:confirm_password|same:confirm_password',
            'confirm_password'  => 'required|min:8',
        ]);

        // create user
        $user = new User();
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = bcrypt($request->password);
        $user->role     = 'teacher';
        $user->gender   = $request->gender;
        $user->save();
        
        if($request->hasFile('avatar') && $request->file('avatar')->isValid()){
            $user->addMediaFromRequest('avatar')->toMediaCollection('avatar');
        }

        // // create teacher
        // $teacher = new Teacher();
        // $teacher->user_id = User::where('email', $data['email'])->first()->id;
        // $teacher->save();

        alert()->success('Berhasil Mendaftar','Silahkan Login')->showConfirmButton('Oke', '#7176FF');
        return route('login');
    }
    public function registerStoreStudent(Request $request)
    {
        $data = $request->validate([
            'name'              => 'required',
            'email'             => 'required|unique:users',
            'password'          => 'required|min:8|required_with:confirm_password|same:confirm_password',
            'confirm_password'  => 'required|min:8',
            'id_class'          => 'required',
            'gender'            => 'required',
        ]);

        // create user
        $user = new User();
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = bcrypt($request->password);
        $user->role     = 'student';
        $user->gender   = $request->gender;
        $user->save();
        
        $classroom_id = Classroom::where('classroom', $request->id_class)->first()->id;
        $user->classroom()->attach($classroom_id);
        // dd($user);
        
        if($request->hasFile('avatar') && $request->file('avatar')->isValid()){
            $user->addMediaFromRequest('avatar')->toMediaCollection('avatar');
        }

        alert()->success('Berhasil Mendaftar','Silahkan Login')->showConfirmButton('Oke', '#7176FF');
        return route('login');
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
