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


    <title>Document</title>
</head>

<body>

    @if(session()->has('message'))
    <div class="alert alert-success" align="center">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{session()->get('message')}}

        @endif
    </div>

    <br>

    <a href="account" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Add Bank Account</a>

</body>

</html>



<table border="2" class="table table-bordered table-striped font-italic">
    <tr>
        <th>id</th>

        <th>Bank Name</th>
        <th>Account Number</th>
        <th>Account balance</th>
        <th>Transaction</th>
        <th>Deduct</th>
        <th>Button</th>
    </tr>
    <tr>

        @foreach($forms as $for)
        <td>
            {{$for['id']}}
        </td>

        <td>
            {{$for['bank']}}
        </td>
        <td>
            {{$for['number']}}
        </td>
        <td>
            {{$for['balance']}}
        </td>
        <td>
            {{$for['Transaction']}}
        </td>
        <td>
            {{$for['Deduct']}}
        </td>
        <td>
            <div class="dropdown">
                <button type="button" data-toggle="dropdown">
                    Action
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <button class="btn btn-primary" ><a class="text-white" type="button"
                            href={{'updatea/'.$for['id']}}>Update</a>

                    </button>
                    <br>
                    <br>
                    <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this transaction?')"><a class="text-white" type="button"
                            href={{'delete/'.$for['id']}}>Delete</a>

                    </button>

                    <br>
                    <br>
                    <button class="btn btn-success" ><a class="text-white" type="button"
                            href={{'usershow/'.$for['id']}}>User</a>

                    </button>
                    <br>
                    <br>
                    <button class="btn btn-warning"><a class="text-white" type="button"
                            href={{'helloshow/'.$for['id']}}>Transaction</a>

                    </button>

                </div>
            </div>

        </td>
        </td>
    </tr>


    @endforeach
</table>
<style>





</style>