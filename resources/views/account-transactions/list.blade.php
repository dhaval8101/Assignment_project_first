<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Account Transactions</h1>
<a href="{{ route('account-transactions.create') }}">Create Transaction</a>
<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Account</th>
            <th>Category</th>
            <th>User</th>
            <th>Amount</th>
            <th>Note</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($transactions as $transaction)
            <tr>
                <td>{{ $transaction->type }}</td>
                <td>{{ $transaction->account->name }}</td>
                <td>{{ $transaction->category->name ?? '-' }}</td>
                <td>{{ $transaction->user->name }}</td>
                <td>{{ $transaction->amount }}</td>
                <td>{{ $transaction->note ?? '-' }}</td>
                <td>
                    <a href="{{ route('account-transactions.edit', $transaction->id) }}">Edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>