
@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Create Transaction</h1>
        <form action="{{'transactons/'.$account_id}}" method="POST">
            @csrf
              <input type="hidden" name="account_id" value="{{$account_id}}">
            <div class="form-group">
                <label for="account_id">BankName</label>
                <select class="form-control" id="account_id" name="account_id">
                    @foreach ($account as $account)
                        <option value="{{ $account->id }}">{{ $account->bank }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="user_id">name</label>
                <select class="form-control" id="user_id" name="user_id">
                    @foreach ($userview as $user_id)
                        <option value="{{ $user_id->id }}">{{ $user_id->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select class="form-control" id="type" name="type">
                    <option value="income">Income</option>
                    <option value="expense">Expense</option>
                    <option value="transfer">Transfer</option>
                </select>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" class="form-control" id="category" name="category" required>
            </div>
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="text" class="form-control" id="amount" name="amount" required>
            </div>
            <div class="form-group">
                <label for="note">Note</label>
                <textarea class="form-control" id="note" name="note" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection












