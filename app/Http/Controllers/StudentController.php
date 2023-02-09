<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function index(){
        $data = Student::get();
       // return $data;
        return View('studentlist', compact('data'));
    }
    public function addStudent(){
        return "Addstu";
    }
}
