<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\account;
class AccountController extends Controller
{
    function adddata(Request $req){


        $req->validate([
      
        
                'bank'=>'required',
                'number'=>'required',
                'balance'=>'required'
            ]);
        $account = new account();


        $account->bank=$req->bank;
        $account->number=$req->number;
        $account->balance=$req->balance;
        $account->Transaction=$req->Transaction;
        $account->Deduct=$req->Deduct;
        $account->user_id=auth()->user()->id;
        $account->save();
    return redirect('display');
    }

    function formdata(){
        $data= account::all();
            
        return view('display',['forms'=>$data]);
        return redirect('display');
    }

    function delete($id){

        $form=account::find($id);
        $form->delete();
        return redirect()->back()->with("message",'Data Deleted successfully');

    
    }

    
    function updateshow($id){
        $data= account::find($id);
        return view('update',['data'=>$data]);
        }
       function update(Request $req){


        $req->validate([
      
        
            'bank'=>'required',
            'number'=>'required',
            'balance'=>'required'
         
        ]);

            $form =account::find($req->id);

            
            $form->bank=$req->bank;
            $form->number=$req->number;
            $form->balance=$req->balance;
     
            $form->Transaction=$req->Transaction;
            $form->Deduct=$req->Deduct;
         
            $form->save();
            return redirect('display');
            
    }


      public function store(Request $request)
    {
        $account = new Account();

        $account->name = $request->input('name');
        $account->number = $request->input('number');

        $account->user_id=auth()->user()->id;
        $account->save();

        return redirect()->route('accounts.index');
    }
    

}

