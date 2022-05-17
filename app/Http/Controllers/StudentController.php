<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function register()
    {
    return view('student.register');
    }
      function store(Request $request)
      
      {
        $student =new student();
        $student->id = $request->id;
        $student->Fname = $request->Fname;
        $student->Mname = $request->Mname;
        $student->Lname = $request->Lname;
        $student->Email = $request->Email;
        $student->department = $request->department;
        $student->facaulity = $request->facaulity;
        $student->classyear = $request->classyear;
       $is_saved = $student->save();
      if($is_saved){
      echo "DATA SAVED SUCCESSFULLY.";
                 }
      else{
       echo "Sorry, try again something went wrong.";
         }
  
         
      }
      public function get_all()
  {
   $student = student::all();
   return view('student.list', compact('student'));
  }
  public function edit($id)
   {
   $student = student::find($id);
   return view('student.edit', compact('student'));
   }
   public function update(Request $request)
   {
   //Validate
   $request->validate(['name' => 'required' ]);
    $student = student::find($request->id);
    $student->Fname = $request->Fname;
        $student->Mname = $request->Mname;
        $student->Lname = $request->Lname;
        $student->Email = $request->Email;
        $student->department = $request->department;
        $student->facaulity = $request->facaulity;
        $student->classyear = $request->classyear;
    $student->save();
    return redirect('student/list');
    }
    public function delete($id)
   {
   student::where('id', $id)->delete();
   return redirect('student/list');
   }
  
   public function get_by_id($id)
   {
    $student = student::where('id', $id)->first();
    return view('student.search', compact('student'));
    }
}
