<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

// TODO: Import the Student model and the StudentResource
use App\Models\Student;
use App\Http\Resources\StudentResource;

class StudentController extends Controller
{
    public function index()
    {
        // TODO: Retrieve all Student data
        $students = Student::all();
        return new StudentResource(true, 'List of Student Data', $students);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'nim' => 'required|string|unique:students,nim',
            'major' => 'required|string',
            'faculty' => 'required|string',
            'profile_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $profile_photo = $request->file('profile_photo');
        $profile_photo->storeAs('profile_photo', $profile_photo->hashName());

        $students = Student::create([
            'name' => $request->name,
            'nim' => $request->nim,
            'major' => $request->major,
            'faculty' => $request->faculty,
            'profile_photo' => $profile_photo->hashName(),
        ]);

        // TODO: Return a StudentResource object with the arguments (true, 'Student Data Successfully Added!', $students)
        return new StudentResource(true, 'Student Data Successfully Added!', $students); 
    }

    public function show($id)
    {
        // TODO: Perform a search for student data based on the id
        $student = Student::find($id);

        if (!$student) {
            return response()->json(['message' => 'Student not found'], 404);
        }

        return new StudentResource(true, 'Student Details!', $student);
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);

        // TODO: Create a condition that if student data is not found, return 'Student not found' with a 404 status code
        if (!$student) {
        return response()->json(['message' => 'Student not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            // TODO: Create validation to update student data
            'name'         => 'required|string|max:255',
            'nim'          => 'required|string|unique:students,nim,' . $id,
            'major'        => 'required|string',
            'faculty'      => 'required|string',
                
        ]);

        // TODO: Create a condition that if validation fails, return error message(s) with a 422 status code
            if ($validator->fails()) {
        return response()->json($validator->errors(), 422);
        }


        if ($request->hasFile('profile_photo')) {

            Storage::delete('profile_photo/' . basename($student->profile_photo));

            $profile_photo = $request->file('profile_photo');
            $profile_photo->storeAs('profile_photo', $profile_photo->hashName());

            $student->update([
                'name' => $request->name,
                'nim' => $request->nim,
                'major' => $request->major,
                'faculty' => $request->faculty,
                'profile_photo' => $profile_photo->hashName(),
            ]);
        } else {

            $student->update([
                'name' => $request->name,
                'nim' => $request->nim,
                'major' => $request->major,
                'faculty' => $request->faculty,
            ]);
        }

        // TODO: Return a StudentResource object with the arguments (true, 'Student Data Successfully Updated!', $student)
         return new StudentResource(true, 'Student Updated Successfully!', $student); 
    }

    public function destroy($id)
    {
        $student = Student::find($id);

        if (!$student) {
            return response()->json(['message' => 'Student not found'], 404);
        }

        // TODO: Delete the image data
        if ($student->profile_photo && Storage::disk('public')->exists($student->profile_photo)) {
        Storage::disk('public')->delete($student->profile_photo);
        }    

        // TODO: Delete the student data
        $student->delete();

        return new StudentResource(true, 'Student Data Successfully Deleted!', null);
    }
}
