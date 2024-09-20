<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //List Student
    function index(){
        $students = Student::all(); // ? SELECT * FROM Students

        return $students;
    }

    //Show Student
    function show($nis){
       $student =  Student::where('nis', $nis)->get();

       return $student;
    }

    //Create Student
    function create(Request $request){
        // Validation
        $validated = $request->validate([
            'name' => ['required'],
            'nis' => ['required', 'numeric'],
            'grade' => ['required'],
            'gender' => ['required'],
            'age' => ['required', 'numeric'],
        ]);

        // Save db
        $student = Student::create($validated);

        // return data
        return $student;
    }

    //Update Student
    function update(Request $request, $id){
          // Validation
          $validated = $request->validate([
            'name' => ['required'],
            'nis' => ['required', 'numeric'],
            'grade' => ['required'],
            'gender' => ['required'],
            'age' => ['required', 'numeric'],
        ]);

        $student = Student::find($id);
        $student->update($validated);
        $student->save();

        return $student;
        
    }
    //Destroy Student
    function destroy($id){
        $student = Student::find($id);
        $student->delete();

        return $student; 
    }
}
