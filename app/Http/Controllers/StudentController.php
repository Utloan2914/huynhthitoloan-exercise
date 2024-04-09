<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
   
    public function update(Request $request, Student $student)
    {
        $student->update($request->all());
        return response()->json($student);
    }


    public function destroy(Student $student)
    {
        $student->delete();
        return response()->json('Student deleted successfully');
    }


    public function getStudentsFromPhnomPenhOlderThan20()
    {
        $students = Student::where('location', 'Phnom Penh')->where('age', '>', 20)->get();
        return response()->json($students);
    }
}
