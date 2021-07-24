<!DOCTYPE html>
<html>
<head>
<h1><span class="badge badge-secondary">SEND REQUEST</span></h1>

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
  <form action="registsr.php" method='post'>
  <div class="container">
 <p><b>PLEASE PROVIDE THE FOLLOWING INFORMATION</b></p>
 <hr>
 <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="name" class="form-control" id="name" required>
	
<label for="phnumber"><b>Phone number</b></label>
    <input type="text" placeholder="Enter phone number" name="phnumber" class="form-control" id="phnumber" required>
	
	 <label for="bgroup"><b>Select blood group</b></label>
  <select name="bgroup" id="bgroup">
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
  

	
	<label for="bydate"><b>Get it by</b></label>
    <input type="date" placeholder="Enter get it by" name="bydate" class="form-control" id="bydate" required>
	</hr>
	<br>
<button type="submit" class="btn btn-success">Send</button>
</div>
</form>
</body>
</html>