<html>
<head>
<title>
Login Page
</title>
</head>

<!--link to search-->
<a href="<?php echo site_url('find') ?>">Search</a>

<body>
<!--user enters their username and password to enter the admin page-->
    <div id='login_form'>
	
        <form action="<?php echo site_url('login/login_validate');?>" method='post' name='validate'>
		
            <h2>Admin Login Page</h2>
            <br />  
            <label for='username'>Admin:</label> <input type='text' name='username' id='username' size='30'/>
			<br/><br/>
            <label for='password'>Password:</label> <input type='password' name='password' id='password' size='30'/>
			<br /> <br />       

	<!--login button-->			
      		<input type='Submit' value='Login' />            
        </form>
    </div>

</body>
</html>