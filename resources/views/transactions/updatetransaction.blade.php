@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Transaction</h1>

        <form action="{{ route('transactions.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="account_id">Account</label>
                <select class="form-control" id="userview_id" name="userview_id">
                    @foreach ($accounts as $account)
                        <option value="{{ $account->id }}">{{ $account->name }}</option>
                        @if(isset($accounts))
                    @endforeach
                </select>
            </div>
            
            <div class="form-group">
                <label for="account_id">Account</label>
                <select class="form-control" id="account_id" name="account_id">
                    @foreach ($accounts as $account)
                        <option value="{{ $account->id }}">{{ $account->bank }}</option>
                        @if(isset($accounts))
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
                <input type="text" class="form-control" id="category" name="category">
            </div>

            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="text" class="form-control" id="amount" name="amount">
            </div>

            <div class="form-group">
                <label for="note">Note</label>
                <textarea class="form-control" id="note" name="note"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
@endif
@endif