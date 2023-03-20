# Expense Manager:mini project 
#Features:
* User Signup with valid Email and Password (min 8 chars)
* Send a Welcome Email
* User Login and Logout
* Upon successful signup, create a user’s default account
* Get list of accounts for the logged in user
* Add new account
* Edit Account Name
* Delete Account
* Add any user to my account (Add by entering the email)
* For the selected account, get the list of transactions ordered by the transaction date, descending. That means the latest transaction should be shown * first.
* Add a Transaction (Select: Account, Type: Income, Expense, Transfer, Category: )
* Edit a Transaction
* Delete a Transaction


# technology use 
* laravel
* node.js
* Html
* Css
* model
* Mysql
* bootstrap
* Mailtrap
* installation npm.



# creaet a signup page 
* name,email,password,conform password entry in user table and bank name and bank account number deafult entry in account table signup successfully in mail notification

# create login page
* enter currect email and password
* new user signup
* forget password
Sending a mail 
Forget password functionality with authentication.

 # First to create Dashboard design in Expense Manager :-
* Dashboard design show manage Account,Transaction, login user and logout user.

# Bank Account modules:-
Default entry in Signup page in bank name, and account number
create a controller
delete->validation and Update functionality
account table include in account user tabel store particular account user data
Use in a Reltionship
account:- id wise particular store data in account user and transaction
total balance add and subtraction in automattically entry in transaction table
all transaction store in account table particular id wise.
all deduct store in account table particular id wise.

# Account User:-
create a migration table
create a model
create controller
use foreign key 
create a Account user form page and Accoount user create table
Account user table connect in Account table.
delete functionality use -> in sweet alert laravel.
edit functionality
use relationship
validation

 # Transaction modules:-
Create a View page with Ui design
use relationship
select a income ,expense,transfer work in complate
use droup down in automatically account table in bankname and account number entry in automatically.
total balance,income,expense,transfer all functionality added.
Transaction table in store all data and particular user transaction wise data store.
delete transaction-> use validation
transactions ordered by the transaction date, descending the latest transaction should be shown first.


# how to use
* Clone the repository with git clone.
* Copy .env.example file to .env and edit database credentials there
* Run Composer install
* Run php artisan key:generate
* Run php artisan migrate --seed (It has some seeded data for your testing)
* npm run dev
* node install

