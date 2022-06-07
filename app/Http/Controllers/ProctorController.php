<?php

namespace App\Http\Controllers;
use App\Models\Proctor;
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
         $proctor->materialid=$request->materialid;
        $proctor->id = $request->id;
        $proctor->block_no = $request->block_no;
        $proctor->dorm_no = $request->dorm_no;
        $proctor->dormitary_material = $request->dormitary_material;
       $is_saved = $proctor->save();
      if($is_saved){
      echo "PROCTOR DATA REGISTER SUCCESSFULLY.";
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
  public function edit($id)
   {
   $proctor = proctor::find($id);
   return view('proctor.edit', compact('proctor'));
   }
   public function update(Request $request)
   {
   //Validate
   $request->validate(['name' => 'required' ]);
    $proctor = proctor::find($request->id);
    $proctor->block_no = $request->block_no;
        $proctor->dorm_no = $request->dorm_no;
        $proctor->dormitary_material = $request->dormitary_material;
       $proctor->materialid=$request->materialid;
    $proctor->save();
    return redirect('proctor/list');
    }
    public function delete($id)
   {
   proctor::where('id', $id)->delete();
   return redirect('proctor/list');
   }
  
   public function get_by_id($id)
   {
    $proctor = proctor::where('id', $id)->first();
    return view('proctor.search', compact('proctor'));
    }
}
