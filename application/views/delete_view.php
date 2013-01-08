<html>
<head>
<title>
Delete Employee
</title>
</head>

<?php echo validation_errors() ?>

<!--back button-->
<script> function goBack() {window.history.back()} </script>
		<input type="button" value="Back" onclick="goBack()">

<!--user enters employee number to be deleted-->
<form action="<?php echo site_url('admin/delete');?>" method='post' name='process'>
            <h2>Delete Employee</h2>
			<b><p>Please Enter Details Of Employee To Be Deleted</p></b>        
            <label for='employeeno'>Employee Number:</label>
            <input type='text' name='employeeno' id='employeeno'  />
			<br/>                                     
			<br/>                                     
        <!--submit button-->
            <input type='Submit' value='Delete Employee' />            
        </form>
    </div>


</html>





