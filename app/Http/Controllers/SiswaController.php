<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class SiswaController extends Controller
{

    public function index(){

    $siswa = Student::all();
       return view('siswa', compact('siswa'));

    }

    public function add(){

        return view('add_siswa');
    }

    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function store(Request $request)
    {
        $data = Student::create([
            'nama' =>$request->nama,
            'alamat' =>$request->alamat,
            'jenis_kelamin' =>$request->jenis_kelamin,
        ]);

        return redirect()->route('siswa.index');
    }

    public function destroy($id)
    {
        $data = Student::find($id);
        $data->delete();
        return redirect()->route('siswa.index');
    }
}
