@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Transaction Form</h1>
        <form method="POST" action="{{'transactions/'.$account_id}}">
            @csrf
            <input type="hidden" name="account_id" value="{{$account_id}}">
            <div class="form-group">
                <label for="user_id">Account User</label>
                <select class="form-control" id="user_id" name="user_id">

            
                    @foreach ($userview as $user)
                        <option value="{{ $user_id->id }}">{{ $user->name }}</option>
                        
                    @endforeach
                </select>
                <div class="form-group">
                <label for="account_id">Bank</label>
                <select class="form-control" id="account_id" name="account_id">

             
                    @foreach ($accounts as $account)
                        <option value="{{ $account->id }}">{{ $account->bank}}</option>
                        
                    @endforeach
                </select>
            </div>

            
            <div class="form-group">
                <label for="type">Type</label>
                <select class="form-control" id="type" name="type">
                    <option value="income">Income</option>
                    <option value="expense">Expense</option>
                    <option value="expense">transfer</option>
                </select>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" class="form-control" id="category" name="category">
            </div>
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" class="form-control" id="amount" name="amount" step="0.01">
            </div>
            <div class="form-group">
                <label for="note">Note</label>
                <textarea class="form-control" id="note" name="note"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create Transaction</button>
        </form>
    </div>
@endsection
