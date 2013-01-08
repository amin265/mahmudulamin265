<html>
<head>
<title>
Login Page
</title>
</head>
 <form name="input" action="<?php echo site_url('find/findemp') ?>" method="get">
	
	<!--back button-->

		<script> function goBack() {window.history.back()} </script>
		<input type="button" value="Back" onclick="goBack()">


	<h1>General Search</h1>
	<b><p>Please enter search details.</b></p>
	
	<!--user enters search to seacrh the database-->
 First Name: <input type="text" name="firstname" id="firstname">
 <br/>
 <br/>
 Last Name: <input type="text" name="lastname" id="lastname">
 <br/>
 <br/>
 Department: <input type="text" name="department" id="department">
 <br/>
 <br/>
 Job Title: <input type="text" name="title" id="title">
 <br/>
 <br/>
 
 <!--search button-->
 <input type="submit" id="search_button" value="Search">
	
 </form>
	
	
	
</html>

