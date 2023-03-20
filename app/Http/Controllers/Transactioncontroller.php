<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;
use App\Models\Transaction;
use App\Models\Account;

use App\Models\userview;

class TransactionController extends Controller
{
    public function index($account_id)
    {
        $transaction = Transaction::where('account_id',$account_id)
        ->get();  

        $transaction = Transaction::with('userview')
        ->get();  
        $transaction = Transaction::with('account')
        ->get();  
      
        $userview = $this->getUsers();
        $account = $this->getAccounts();

        $transaction = Transaction::where('account_id',$account_id)->orderByDesc('created_at')->get();
        return view('helloshow' ,  ['transactions'=> $transaction, 'account_id'=>$account_id ], compact('userview', 'account')); 
        
    }


public function showTransaction($account_id)
{
    // $transactions = Transaction::all();
    $transaction = Transaction::whereIn('account_id', $account_id)->orderByDesc('created_at')->get();
    return view('transactionshow', ['transactions'=> $transaction, 'account_id'=>$account_id ], compact('transaction'));
}

    public function show()
    {
        // $transactions = Transaction::all();
        $transactions = Transaction::orderByDesc('created_at')->get();
        return view('index', compact('transactions'));
        
      
    }


    
    
    //ACCOUNT DATA GET
    protected function getAccounts()
    {
        return Account::all();
    }
    //ACCOUNT USER DATA GET
    protected function getUsers()
    {
        return userview::all();
    }
    public function create(Request $req)
    
    {

        
       
      
      $userview = userview::all();
      return view('helloshow' , compact('userview'));
        
    }






  public function store(Request $request,$account_id)
{
    // Create a new Transaction instance
    $transaction = new Transaction;

    // Set the transaction properties
    $transaction->account_id = $request->input('account_id');
    $transaction->userview_id = $request->input('user_id');
    $transaction->type = $request->input('type');
    $transaction->user_id = Auth::id();
    $transaction->category = $request->input('category');
    $transaction->amount = $request->input('amount');
    $transaction->note = $request->input('note');

    // Retrieve the account model
    $account = Account::find($transaction->account_id);
    
    $account->increment('Transaction');

    // Perform addition or subtraction based on the transaction type
    if($request->type == 'income')
    {
        $account->balance += $transaction->amount;
    }
    elseif($request->type == 'expense'|| $request->type == 'transfer' )
    {
        $account->Deduct = $account->Deduct + $transaction->amount;
        $account->balance -= $transaction->amount;
    }

    // Save the transaction and update the account balance
    DB::transaction(function () use ($transaction, $account) {
        $account->save();
        $transaction->save();
    });

    return redirect()->back()->with('status', 'Transaction Created Successfully');
    // Redirect the user back to the transaction index page
    
}

    

    

   



    function destroy(Request $request, $id){

        $transaction=Transaction::find($id);
        $account = Account::find($transaction->account_id);
        $account->decrement('Transaction');
        if($request->type === 'income')
        {
            $account->balance += $transaction->amount;
        }
        else{
        $account->balance -= $transaction->amount;
        }
    //    $accounts->save();
       DB::transaction(function () use ($transaction, $account) {
        $account->save();
        $transaction->save();
    });
             $transaction->delete();
             return redirect()->back()->with('status', 'Transaction Deleted Successfully');
    }





function formdata($account_id){
    $transaction= Transaction::where('account_id',$account_id)
    ->get();  ;
    
    return view('helloshow',['transactions'=>$transaction,'account_id'=>$account_id]);

}

function updateid($id){
    $transaction= Transaction::find($id);
    return view('updatetransaction',['transaction'=>$transaction]);
    }

    function update(Request $request){
        $transaction =Transaction::find($request->id);
  
        $transaction->type = 'income';
        $transaction->category = $request->input('category');
        $transaction->amount = $request->input('amount');
        $transaction->note = $request->input('note');

        $account = Account::find($transaction->account_id);
        if($request->type === 'income')
        {
            $account->balance += $transaction->amount;
        }
        else{
        $account->balance -= $transaction->amount;
        }
          
  
        

        DB::transaction(function () use ($transaction, $account) {
            $account->update();
            $transaction->update();
        });
            
     return redirect('index');
 
}


}