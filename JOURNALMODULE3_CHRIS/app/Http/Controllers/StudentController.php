<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Create a student object with dummy data (name, nim, email, major, faculty, picture)
        // - Send that object to the 'profile' view
        $student = [
            'name' =>  'Christhofer Risaldy Kobong',
            'studentid' => '102022340376',
            'email' => 'crishtoferrisaldi@gmail.com',
            'major' => 'Information System',
            'faculty' => 'Industrial Engineering',
            'picture' => 'images/fotowad.png'
            
        ];

        return view('profile', ['student' => $student]);
    }
}
