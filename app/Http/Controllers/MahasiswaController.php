<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;
  
use App\Models\Student;

class MahasiswaController extends Controller
{
   
    public function index()
    {
     $mahasiswa = Student::all();             
       $maxSkor = Student::max('skor');
       $minSkor = Student::min('skor');
       $rata2 = number_format(Student::average('skor'),3);
       
       
       //untuk tabel frekuensi
       $frekuensi = Student::select('skor', DB::raw('count(*) as frekuensi'))  //ambil skor, hitung banyak skor taruh di tabel frekuensi
                                ->groupBy('skor')                              //urutkan sesuai skor
                                ->get();
       $totalskor = Student::sum('skor');              
       $totalfrekuensi = Student::count('skor');        //karena total frekuensi = banyaknya skor yang ada

       return view('mahasiswa.index', ['mahasiswa' => $mahasiswa,
                            'max' => $maxSkor, 
                            'min' => $minSkor, 
                            'rata2' => $rata2,
                            'frekuensi' => $frekuensi,
                            'totalskor' => $totalskor,
                            'totalfrekuensi' => $totalfrekuensi]);    //tampilkan home.blade
        //$mahasiswa = DB::table('students')->get();
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

    public function operations($id)
    {
        return DB::table('students')->avg('id');
    }

}
