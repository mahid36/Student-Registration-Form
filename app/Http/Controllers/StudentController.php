<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function register_student() {
        return view('register');
    }

    public function register_store(Request $request) {
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students',
            'date_of_birth' => 'required|date',
            'address' => 'required|string|max:255',
            'contact' => 'required|string|max:20',
            'occupation' => 'nullable|string|max:100',
            'age' => 'nullable|integer|min:0',
            'gender' => 'nullable|string|max:10',
            'civil_status' => 'nullable|string|max:20',
            'citizenship' => 'nullable|string|max:50',
            'height' => 'nullable|numeric',
            'weight' => 'nullable|numeric',
            'religion' => 'nullable|string|max:50',
            'language' => 'nullable|string|max:50',
            'father_name' => 'nullable|string|max:100',
            'father_occupation' => 'nullable|string|max:100',
            'mother_name' => 'nullable|string|max:100',
            'mother_occupation' => 'nullable|string|max:100',
            'emergency_person' => 'nullable|string|max:100',
            'emergency_contact' => 'nullable|string|max:20',
        ]);

        // Save to database
        Student::create($request->all());

        // Redirect back with success message
        return redirect()->back()->with('success', 'Student Registered Successfully!');
    }
}
