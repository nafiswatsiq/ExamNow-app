<?php

namespace App\Http\Controllers\PageController;

use App\Models\User;
use App\Models\School;
use App\Models\UniqueId;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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

    // public function registerStoreSchool(Request $request)
    // {
    //     $data = $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|unique:users',
    //         'password' => 'required|min:8|required_with:confirm_password|same:confirm_password',
    //         'confirm_password' => 'required|min:8',
    //     ]);

    //     $randomNumber_1 = random_int(1000000, 9999999);
    //     $randomNumber_2 = random_int(1000000, 9999999);
    //     $randomNumber_3 = random_int(1000000, 9999999);

    //     $data['school_id'] = $randomNumber_1;
    //     $data['role'] = "school";
    //     $data['password'] = bcrypt($data['password']);
        
    //     $data_school['unique_id'] = $randomNumber_1;
    //     $data_school['unique_teacher'] = $randomNumber_2;
    //     $data_school['unique_student'] = $randomNumber_3;

    //     // dd($data_school);
    //     User::create($data);
    //     School::create($data_school);

    //     return redirect('/login');
    // }

    public function registerStoreTeacher(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:8|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'required|min:8',
        ]);

        
        $data['role'] = "teacher";
        $data['password'] = bcrypt($data['password']);
        
        User::create($data);

        // input unique id
        function randomInt(){
            $randomNumber = random_int(1000000, 9999999);
            return $randomNumber;
        }
        $unique['user_id'] = User::where('email', $data['email'])->first()->id;
        $unique['unique_teacher'] = randomInt();
        $unique['unique_student'] = randomInt();

        // UniqueId::create($unique);

        return redirect('/login');
    }

    public function loginStore(Request $request)
    {
        $data = $request->validate([
            'email' => 'required:email:dns',
            'password' => 'required',
        ]);

        // $user = School::where('email', $data['email'])->first();

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
        // elseif ($user) {
        //     if (Hash::check($request->password, $user->password)) {
        //         Session::put('user', $user);
        //         return redirect()->intended('teacher');
        //     } else {
        //         return back()->with('error', 'Email atau Password salah');
        //     }
        // }

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
