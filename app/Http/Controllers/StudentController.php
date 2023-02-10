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
        return view('addstudent');
    }

    public function saveStudent(Request $request)
    {
       // dd($request->all());
        $request->validate([
'name'=>'required',
'email'=>'required|email',
'phone'=>'required',
'address'=>'required',


        ]);

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;

        $stu = new Student();

        $stu->Name = $name;
        $stu->Email = $email;
        $stu->Phone = $phone;
        $stu->Address = $address;

        $stu->save();
        return redirect()->back()->with('success', 'Save Successfully');




    }

    public function editStudent($id){
        $data = Student::where('StudentId', '=', $id)->first();
        return view('editstudent', compact('data'));
    }

    public function updateStudent(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'address'=>'required',
            
            
                    ]);
                    $id = $request->id;
                    $name = $request->name;
                    $email = $request->email;
                    $phone = $request->phone;
                    $address = $request->address;

        Student::where('StudentId', '=', $id)->update([
'name'=>$name,
'email'=>$email,
'phone'=>$phone,
'address'=>$address
        ]);
        return redirect()->back()->with('success', 'Updated Successfully');
    }

    public function deleteStudent($id){
        Student::where('StudentId', '=', $id)->delete();
        return redirect()->back()->with('success', 'Deleted Successfully');

    }
}
