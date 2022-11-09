<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\Classroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\SEOTools;
use Symfony\Contracts\Service\Attribute\Required;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        SEOTools::setTitle('Dashboard');
        
        return view('dashboard.student.home');
    }

    public function coridorClass()
    {
        SEOTools::setTitle('Kelas');

        $data = User::where('id', auth()->user()->id)->first();
        $class = $data->classroom->first();
        // dd($class);
        return view('dashboard.student.coridor-class', compact('data', 'class'));
    }

    public function exercise()
    {
        SEOTools::setTitle('Latihan');

        return view('dashboard.student.exercise');
    }

    public function joinClass(Request $request)
    {
        $request->validate([
            'id_class'          => 'required',
        ]);
        
        $get_classroom = Classroom::where('classroom', $request->id_class)->first();
        if(!$get_classroom){
            alert()->error('Kelas tidak ditemukan','Silahkan cek kembali id kelas')->showConfirmButton('Oke', '#7176FF');
            return back()->withInput();
        }

        $user_id = auth()->user()->id;
        $classroom_id   = Classroom::where('classroom', $request->id_class)->first()->id;
        
        DB::table('classroom_user')->insert([
            'classroom_id' => $classroom_id,
            'user_id' => $user_id,
        ]);

        return redirect()->back();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
