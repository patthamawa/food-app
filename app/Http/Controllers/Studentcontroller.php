<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Studentcontroller extends Controller
{
//index -> list all student -- R
    public function index() {
    //$students = Student::all();
        $students = Student::getByFaculty(1);
        //var_dump($students);
        $MyName = "Por";
        return viwe('student.index')->with(
            compact([
                'students',
                'MyName'
            ]
            )
        );
    }
    //insert -> insert new student -- C
    public function create() {

    }
    //update -> update student info --U
    public function update($student_id) {

    }
    //delete -> delete exist student --D
    public function delete($student_id) {
        
    }
}

