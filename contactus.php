<!DOCTYPE html>
<html>
<head>
<h1><span class="badge badge-secondary">CONTACT US</span></h1>
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
<form action="registercontactus.php" method='post'>
  <div class="container">
  <p>LET US KNOW YOUR ISSUE</p>
 <hr>
<label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="name" class="form-control" id="name" required>
<label for="phnumber"><b>Phone number</b></label>
    <input type="text" placeholder="Enter phone number" name="phnumber" class="form-control" id="phnumber" required>
<label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter email id" name="email" class="form-control" id="email" required>
<label for="subject"><b>Subject</b></label>
    <input type="text" placeholder="Enter description" name="subject" class="form-control" id="subject"  required>
	</hr>
	<br>
<button type="submit" class="btn btn-success">Send</button>

</div>
</form>
</body>
</html>
