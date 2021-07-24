<!DOCTYPE html>
<html>
<head>

<h1><span class="badge badge-secondary">Donor Registration</span></h1>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<body>
<div class="topnav">
   <button type="submit" class="btn btn-danger" button onclick="document.location='homepage.php' ">Home</button>
  <button type="submit" class="btn btn-danger" button onclick="document.location='new 1.php' ">Donor Registration</button> 
  <button type="submit" class="btn btn-danger" button onclick="document.location='searchbgroup.php' ">Search Blood group</button>
   <button type="submit" class="btn btn-danger" button onclick="document.location='sendrequest.php' ">Send Request</button>
  <button type="submit" class="btn btn-danger" button onclick="document.location='contactus.php' ">Contact us</button>
   <button type="submit" class="btn btn-danger" button onclick="document.location='aboutus.php' ">About us</button>
    <button type="submit" class="btn btn-danger" button onclick="document.location='camps.php' ">Camps</button>
</div>
<form action="regist.php" method='post'>
  <div class="container">
  <br>
<p>Please fill details to create an account.</p>
    <hr>
 <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="name" class="form-control" id="name" required>
	
	
    <label for="dob"><b>Date of Birth</b></label>
    <input type="date" placeholder="enter dob" name="dob" class="form-control" id="dob" required>
	
	<label for="gender"><b>Gender</b></label>
  <select name="gender" id="gender">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
	
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" class="form-control" id="email" required>
	
	<label for="phonenumber"><b>Phone number</b></label>
    <input type="text" placeholder="Enter Phone_number" name="phonenumber" class="form-control" id="phonenumber" required>
	
	<label for="bloodgroup"><b>Select blood group </b></label>
  <select name="bloodgroup" id="bloodgroup">
    <option value="A positive">A positive</option>
    <option value="A negative">A negative</option>
    <option value="B positive">B positive</option>
    <option value="B negative">B negative</option>
	<option value="AB positive">AB positive</option>
	<option value="AB negative">AB negative</option>
	<option value="O positive">O positive</option>
	<option value="O negative">O negative</option>
	
  </select>
  <br><br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" class="form-control" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="cpsw" class="form-control" id="cpsw" required>
	
	
	
	
	
     <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="btn btn-success">Register</button>
     
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>
</body>
</html>

