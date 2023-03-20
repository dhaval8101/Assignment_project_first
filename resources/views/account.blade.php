<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   
    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">  
  <form id="contact" style="margin-top:50%;width:500px;height:600px" action="" method="POST">
    @csrf
    <h2>Account Form</h2>
    <br>

     
<br>
    <fieldset>
      <input placeholder="Your Bank Name" type="text" name="bank" tabindex="2">
    </fieldset>
	
	<span class="text-danger" style="color:red">
                        
                        @error('bank')
                        {{$message}}
                        @enderror
                        </span>
    
    <fieldset>
	<br>
      <input placeholder="Your Account Number" type="text" name="number" >
    </fieldset>
	<span class="text-danger" style="color:red">
                        
                        @error('number')
                        {{$message}}
                        @enderror
                        </span>

						<br>
						<fieldset>
      <input placeholder="Your Account Balance" type="text" name="balance" tabindex="2">
    </fieldset>
	
	<span class="text-danger" style="color:red">
                        
                        @error('balance')
                        {{$message}}
                        @enderror
                        </span>
    <br>
    <fieldset>
	<fieldset>
      <input placeholder="Total Transaction " type="text" name="Transaction" tabindex="2">
    </fieldset>
	
    <fieldset>
		<br>
		<fieldset>
      <input placeholder="Total Deduct " type="text" name="Deduct" tabindex="2">
    </fieldset>
	<br>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
 
  
</div>

  </body>
<style>

@import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600);

* {
	margin:0;
	padding:0;
	box-sizing:border-box;
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	-webkit-font-smoothing:antialiased;
	-moz-font-smoothing:antialiased;
	-o-font-smoothing:antialiased;
	font-smoothing:antialiased;
	text-rendering:optimizeLegibility;
}

body {
	font-family:"Open Sans", Helvetica, Arial, sans-serif;
	font-weight:300;
	font-size: 12px;
	line-height:30px;
	color:#777;
	background:white;
}

.container {
	max-width:400px;
	width:100%;
	margin:0 auto;
	position:relative;
}

#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea, #contact button[type="submit"] { font:400 12px/16px "Open Sans", Helvetica, Arial, sans-serif; }

#contact {
	background:#F9F9F9;
	padding:25px;
	margin:50px 0;
}

#contact h2 {
	color: #F96;
	display: block;
	font-size: 30px;
	font-weight: 400;
}

#contact h4 {
	margin:5px 0 15px;
	display:block;
	font-size:13px;
}

fieldset {
	border: medium none !important;
	margin: 0 0 10px;
	min-width: 100%;
	padding: 0;
	width: 100%;
}

#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea {
	width:100%;
	border:1px solid #CCC;
	background:#FFF;
	margin:0 0 5px;
	padding:10px;
}

#contact input[type="text"]:hover, #contact input[type="email"]:hover, #contact input[type="tel"]:hover, #contact input[type="url"]:hover, #contact textarea:hover {
	-webkit-transition:border-color 0.3s ease-in-out;
	-moz-transition:border-color 0.3s ease-in-out;
	transition:border-color 0.3s ease-in-out;
	border:1px solid #AAA;
}

#contact textarea {
	height:100px;
	max-width:100%;
  resize:none;
}

#contact button[type="submit"] {
	cursor:pointer;
	width:100%;
	border:none;
	background:#0CF;
	color:#FFF;
	margin:0 0 5px;
	padding:10px;
	font-size:15px;
}

#contact button[type="submit"]:hover {
	background:#09C;
	-webkit-transition:background 0.3s ease-in-out;
	-moz-transition:background 0.3s ease-in-out;
	transition:background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active { box-shadow:inset 0 1px 3px rgba(0, 0, 0, 0.5); }

#contact input:focus, #contact textarea:focus {
	outline:0;
	border:1px solid #999;
}
::-webkit-input-placeholder {
 color:#888;
}
:-moz-placeholder {
 color:#888;
}
::-moz-placeholder {
 color:#888;
}
:-ms-input-placeholder {
 color:#888;
}
#form_login {
    left: 50%;
    top: 50%;
    margin-left: -25%;
    position: absolute;
    margin-top: -25%;
}
</style>




	