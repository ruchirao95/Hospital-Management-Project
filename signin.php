<?php 
session_start();
include_once "dbconfig.php";
$login_msg=authenticate("anonymous");

if(isset($_REQUEST['submit']))
{
	
	$username=$_REQUEST['username'];
	$pwd=$_REQUEST['pwd'];
	if(isset($_REQUEST['remme']))
		$remme='yes';
	else 
		$remme='no';
	//echo "<Br />$username,$pwd,$remme";
	
	$sql="select count(*) from siteuser where username='$username' and pwd='$pwd'";
	$n=my_one($sql);
	if($n==1)
	{
		$_SESSION['sun']=$username;
		$_SESSION['spwd']=$pwd;
		if($remme=='yes')
		{
			setcookie('cun',$username,time()+60*60*24*7);
			setcookie('cpwd',$pwd,time()+60*60*24*7);
		}
		$sql="select role from siteuser where username='$username' and pwd='$pwd'";
		$role=my_one($sql);
		$target=$role."_db.php";
		echo "<br />Role is $role";
		
		header("Location:$target");
	}
	else
	{
		
		header("Location:login_error.php");
	}
}

?>

<html>
<head>
</head>
<body>
			
				<h2 class="title"><a href="#">SignIn</a></h2>
				<p class="meta">Existing users can authenticate  here</p>
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
					<td width='170'>Remember me</td>
					<td width='170'><input type='checkbox' name='remme' id='remme' value='yes' /></td>
					<td width='170'>
					<!-- spans for validation messages -->
					</td>
					</tr>
					
					<tr>
					<td width='510' colspan='3' align='center'>
					<input type='submit' name='submit' id='submit' value='SignIn' style="width:80px" />
					
					</td>
					</tr>
					</table>
					</form>

				</div>

</body>
</html>
