
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

<title>Document</title>
</head>
<body>


        <div class="container-fluid">
            <!-- Page Heading -->
            <h5 class="mb-2 text-gray-800">Transaction</h5>
            <!-- DataTales Example -->
            <div class="card shadow">
                <div class="card-header py-3 d-flex justify-content-between">
                    <div>

                        <button type="button" class="btn btn-primary float-end" data-toggle="modal"
                            data-target="#exampleModalLong">
                            Add
                            Transaction</button>
                    </div>

                    <div class=" container">

                    </div>
                </div>
                <div class=" card-body">
                    <div class="table-responsive">
                     
<table border="2" class="table table-bordered table-striped font-italic">
                            <thead>
                                <tr>

                                    <th>ID</th>
                                    <th>User Name</th>
                                    <th>Bank Name</th>
                                    <th>Amount</th>
                                    <th>Type</th>
                                    <th>Category</th>
                                    <th>Note</th>
                                    <th>Date</th>
                                    <th colspan="2">Action</th>



                                </tr>
                            </thead>
                            <tbody>


                                @foreach($transactions as $transaction)
                                <tr>

                                    <td>{{$transaction['id']}}</td>

                                   <td>{{$transaction->userview->name}}
                                   <td>{{$transaction->account->bank}}
                                    <td>{{$transaction['amount']}}</td>
                                    <td>{{$transaction['type']}}</td>
                                    <td>{{$transaction['category']}}</td>
                                    <td>{{$transaction['note']}}</td>
                                    <td>{{$transaction['created_at']}}</td>
                                    <td>


                                            <div class="dropdown">
                <button type="button" data-toggle="dropdown">
                    Action
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <button class="btn btn-primary" ><a class="text-white" type="button"
                            href="{{ url('editTransaction/'.$transaction->id) }}">Update</a>

                    </button>
                    <br>
                    <br>
                    <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this transaction?')"><a class="text-white" type="button"
                            href="{{ url('deletetransaction/'.$transaction->id) }}">Delete</a>

                    </button>

                                    </td>

                                </tr>
                                @endforeach

                            </tbody>


                        </table>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Transaction</h5>
                    </div>


                    <div class="modal-body">

                        <div class="form-horizontal">
                            <form action="{{'add_transaction/.$account_id'}}" method="POST">
                                @csrf

                                <input type="hidden" name="account_id" value="{{$account_id}}">
            <div class="form-group">
                <label for="user_id">Account User</label>
                <select class="form-control" id="user_id" name="user_id">

            
                @foreach($userview as $user_id)
                        <option value="{{ $user_id->id }}">{{ $user_id->name }}</option>
                        
                    @endforeach
                </select>
                <div class="form-group">
                <label for="account_id">Bank</label>
                <select class="form-control" id="account_id" name="account_id">
                @foreach($account as $account_id)
                        <option value="{{ $account_id->id }}">{{ $account_id->bank}}</option>
                        
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
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
