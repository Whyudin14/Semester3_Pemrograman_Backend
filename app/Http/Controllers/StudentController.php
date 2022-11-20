<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
    
        $student = Student::all();

        $data = [
            'message' => 'Get All Resource',
            'data' => $student,
        ];
        
        return response()->json($data, 200);
    }
        // post
    // public function store(Request $request){
    //     $input = [
    //         'nama' => $request->nama,
    //         'nim' => $request->nim,
    //         'email' => $request->email,
    //         'jurusan' => $request->jurusan,
    //     ];

    //     $student = Student::create($input);

    //     $data = [
    //         'message' => 'Student data successfully created',
    //         'data' => $student,
    //     ];

    //     return response()->json($data, 201);
    // }
    
    // //update
    // public function update(Request $request, $id){
    //     $input=[
    //         'nama' => $request->nama,
    //         'nim' => $request->nim,
    //         'email' => $request->email,
    //         'jurusan' => $request->jurusan,
    //    ];

    //    Student::find($id)->update($input);
    //    $student = Student::find($id);

    //    $data=[
    //     'message' => 'Student Berhasil Diupdate',
    //     'data' => $student,
    //    ];

    //    return response()->json($data,200);
    // }

    //delete
    // public function destroy($id){
    //     $student = Student::FindorFail($id);
    //     if($student->delete()){
    //         return response(["Berhasil Menghapus Data"]);
    //     }else{
    //         return response(["Berhasil Menghapus Data"]);
    //     }
    // }

    
    // mendapatkan detail resource
    // membuat method show
    public function show($id)
    {
        // cari data student
        $student = Student::find($id);

        if($student)
        {
            $data = [
                'message'=>'Get detail student',
                'data'=> $student,
            ];
    
            // mengembalikan data json dengan status code 200
            return response()->json($data, 200);
        }else {
            $data = [
                'message'=> 'Student not found',
            ];

            return response()->json($data, 404);
        }
    }

    public function store(Request $request){
        #menangkap request 
        $input = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan,
        ];
        #menggunakan student model untuk insert data
        $student = Student::create($input);
        $data = [
            'message' => 'Data student sukses dibuat',
            'data' => $student,
        ];

        #mengembalikan berupa data json yang status code nya 201
        return response()->json($data, 201);
    }

    // mengupdate resource student
    // method update
    public function update(Request $request, $id)
    {
        //cari data student yang ingin diupdate
        $student = Student::find($id);

        // mendapatkan data request
        if ($student)
        {
        $input = [
            'nama'=> $request->nama ?? $student->nama,
            'nim'=> $request->nim ?? $student->nim,
            'email'=> $request->email ?? $student->email,
            'jurusan'=> $request->jurusan ?? $student->jurusan,
        ];

        $student->update($input);

        $data = [
            'message'=>'Resource student updated',
            'data'=> $student,
        ];

        return response()->json($data, 200);
        }else {
            $data = [
                'message'=> 'Student not found',
            ];

            return response()->json($data, 404);
        }
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        if ($student)
        {
        $student->delete();

        $data = [ 
            'message'=> 'Student is deleted',
        ];

        return response()->json($data, 200);
        } else {
            $data = [
                'message'=> 'Student not found',
                'data'=> $student,
            ];

            return response()->json($data, 404);
        }
    }
}