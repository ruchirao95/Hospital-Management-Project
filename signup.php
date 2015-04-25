<?php 
session_start();
include_once "dbconfig.php";
$login_msg=authenticate("anonymous");
?>
<html>
<head><title> Login</title> </head>
<h2 class="title"><a href="#">SignUp</a></h2>
				<p class="meta">New users can register here</p>
				<div class="entry">
				<form method='post'>
					<table border='1' align='center' cellspacing='0' cellpadding='5' width='510'>
					<tr>
					<td width='170'>Enter username</td>
					<td width='170'><input type='text' name='username' id='username' maxlength='30' /></td>
					<td width='170'>
					<!-- spans for validation messages -->
					</td>
					</tr>
					<tr>
					<td width='170'>Enter password</td>
					<td width='170'><input type='password' name='pwd' id='pwd' maxlength='30' /></td>
					<td width='170'>
					<!-- spans for validation messages -->
					</td>
					</tr>
					<tr>
					<td width='170'>Enter first name</td>
					<td width='170'><input type='text' name='fname' id='fname' maxlength='30' /></td>
					<td width='170'>
					<!-- spans for validation messages -->
					</td>
					</tr>
					<tr>
					<td width='170'>Enter last name </td>
					<td width='170'><input type='text' name='lname' id='lname' maxlength='30' /></td>
					<td width='170'>
					<!-- spans for validation messages -->
					</td>
					</tr>
					<tr>
					<td width='170'>Enter date of birth</td>
					<td width='170'><input type='date' name='dob' id='dob' maxlength='30' /></td>
					<td width='170'>
					<!-- spans for validation messages -->
					</td>
					</tr>
					<tr>
					<td width='170'>Select Gender</td>
					<td width='170'>
					<input type='radio' name='gender' id='gender' value='male'  checked />Male
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type='radio' name='gender' id='gender' value='female'  />Female
					
					</td>
					<td width='170'>
					<!-- spans for validation messages -->
					</td>
					</tr>
					<tr>
					<td width='170'>Enter email</td>
					<td width='170'><input type='email' name='email' id='email' maxlength='30' /></td>
					<td width='170'>
					<!-- spans for validation messages -->
					</td>
					</tr>
					
					<tr>
					<td width='170'>Enter contact</td>
					<td width='170'><input type='text' name='contact' id='contact' maxlength='30' /></td>
					<td width='170'>
					<!-- spans for validation messages -->
					</td>
					</tr>
					<tr>
					<td width='170'>Address</td>
					<td width='170'><input type='text' name='add' id='add' maxlength='100' /></td>
					<td width='170'><tr> </td> </tr>
					
					
					<td width='170'>Enter guardian name </td>
					<td width='170'><input type='text' name='gname' id='gname' maxlength='30' /></td>
					<td width='170'><tr></td> </tr>
					
					
					<td width='170'>Enter guardian contact </td>
					<td width='170'><input type='text' name='gadd' id='gadd' maxlength='100' /></td>
					<td width='170'>
					<tr></td> </tr>
					<td width='170'>Select Hint Question</td>
					<td width='340' colspan='2'>
					
					<select name='hintq' id='hintq'>
					<option value='1'>Question 1...</option>
					<option value='2'>Question 2...</option>
					<option value='3'>Question 3...</option>
					<option value='4'>What is your pet's name</option>
					<option value='5'>Question 5...</option>
					</select>
					</td>
					
					</tr>
					<tr>
					<td width='170'>Enter hint answer</td>
					<td width='170'><input type='text' name='hinta' id='hinta' maxlength='30' /></td>
					<td width='170'>
					<!-- spans for validation messages -->
					</td>
					</tr>
					
					<tr>
					<td width='510' colspan='3' align='center'>
					<input type='submit' name='submit' id='submit' value='SignUp' style="width:80px" />
					
					</td>
					</tr>
					</table>
					</form>
					<?php
if(isset($_REQUEST['submit']))
{
	//fetch form data 
	$username=$_REQUEST['username'];
	$pwd=$_REQUEST['pwd'];
	$fname=$_REQUEST['fname'];
	$lname=$_REQUEST['lname'];
	$dob=$_REQUEST['dob'];
	$gender=$_REQUEST['gender'];
	$email=$_REQUEST['email'];
	$contact=$_REQUEST['contact'];
	$address=$_REQUEST['add'];
	$gname=$_REQUEST['gname'];
	$gaddress=$_REQUEST['gadd'];
	$hintq=$_REQUEST['hintq'];
	$hinta=$_REQUEST['hinta'];
	$role='patient';
	$active='yes';

	
		$sql="insert into siteuser values ('$username','$pwd','$fname','$lname','$dob','$gender','$email','$contact','$address','$gname','$gaddress','$hintq','$hinta','$role','$active')";
		$n=my_iud($sql);
		if($n>0)
			echo "<br />Signup Successful,<a href='signin.php'>Signin</a> to continue";
		else 
			echo "<br />Failed,try again";
	
	
	
}

?>

</body>
</html>
