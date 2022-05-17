<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProctorController extends Controller
{
    public function register()
    {
    return view('proctor.register');
    }
      function store(Request $request)
      
      {
        $proctor =new proctor();
        $proctor->block_no = $request->block_no;
        $proctor->dorm_no = $request->dorm_no;
        $proctor->dormitary_material = $request->dormitary_material;
       $is_saved = $proctor->save();
      if($is_saved){
      echo "DATA SAVED SUCCESSFULLY.";
                 }
      else{
       echo "Sorry, try again something went wrong.";
         }
  
         
      }
      public function get_all()
  {
   $proctor = proctor::all();
   return view('proctor.list', compact('proctor'));
  }
  public function edit($dorm_no)
   {
   $proctor = proctor::find($dorm_no);
   return view('proctor.edit', compact('proctor'));
   }
   public function update(Request $request)
   {
   //Valdorm_noate
   $request->valdorm_noate(['name' => 'required' ]);
    $proctor = proctor::find($request->dorm_no);
    $proctor->block_no = $request->block_no;
        $proctor->dorm_no = $request->dorm_no;
        $proctor->dormitary_material = $request->dormitary_material;
    $proctor->save();
    return redirect('proctor/list');
    }
    public function delete($dorm_no)
   {
   proctor::where('dorm_no', $dorm_no)->delete();
   return redirect('proctor/list');
   }
  
   public function get_by_dorm_no($dorm_no)
   {
    $proctor = proctor::where('dorm_no', $dorm_no)->first();
    return view('proctor.search', compact('proctor'));
    }
}
