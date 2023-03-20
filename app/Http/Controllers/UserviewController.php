<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\userview;
class UserviewController extends Controller
{
    
    public function index($account_id){
        $userview=userview::where('account_id',$account_id)->get();
        return view('usershow', ['user_show'=>$userview,'account_id'=>$account_id]);

    }

    
  function userview(Request $req ,$account_id){


    $req->validate([
            'name'=>'required',
    
            'email'=>'required',
            'number'=>'required'
        ]);
    $userview = new userview();
    $userview->name=$req->name;

    $userview->email=$req->email;
    $userview->number=$req->number;
    $userview->user_id=auth()->user()->id;
    $userview->accounts_id=$req->account_id;
    $userview->save();
    return redirect('usershow/'.$account_id);

}


function usershow($account_id){

    $data = userview::where('accounts_id',$account_id)->get();
       
  
    return view('usershow',['userdata'=>$data, 'account_id'=>$account_id]);

}


function delete($id){

    $userdata=userview::find($id);
    $userdata->delete();
    return redirect()->back()->with("message",'Data Deleted successfully');

 }

function viewdata($id){
    $data= userview::find($id);
    return view('dataupdate',['data'=>$data]);
    }
   function datauser(Request $req){
        $form =userview::find($req->id);
        $form->name=$req->name;
        
        $form->email=$req->email;
        $form->number=$req->number;
     
        $form->save();
        //  return redirect('usershow');
        return redirect('http://127.0.0.1:8000/usershow/usershow/{id}');
        
     }
}



