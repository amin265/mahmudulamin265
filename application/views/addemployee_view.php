<html>
<head>
<title>
Add Employee
</title>
<head>
<!--this form is to add new emlpoyees to the database.-->
<?php echo validation_errors() ?>


<form action="<?php echo site_url('admin/add');?>" method='post' name='add'>

<!--back button-->
<script> function goBack() {window.history.back()} </script>
<input type="button" value="Back" onclick="goBack()">
            
			<h2>Add Employee</h2>
			<b><p>Please Enter Details Of Employee To Be Added</p></b>
			
			<!--below user enters new employee details-->
            <label for='firstname'>FirstName:</label>
            <input type='text' name='firstname' id='firstname'  />
			<br/>
			<br/>
         
			<label for='lastname'>LastName:</label>
            <input type='text' name='lastname' id='lastname'  />
			<br/>
			<br/>
        
			<label for='gender'>Gender:</label>
			 
			<select name = 'gender' id = 'gender'>
		
				<option value="M">Male</option>
				<option value="F">Female</option>
				
			</select>
			</br>
			</br>
		         
        
			<label for='DOB'>Date Of Birth '(Year-Month-Date)':</label>
            <input type='text' name='DOB' id='DOB'  />
			<br/>
			<br/>
					
			<label for='department'>Department:</label>
			 
			<select name = 'department' id = 'department'>
		
				<option value="">Choose Department</option>
				<option value="d001">Marketing</option>
				<option value="d002">Finance</option>
				<option value="d003">Human Resources</option>
				<option value="d004">Production</option>
				<option value="d005">Development</option>
				<option value="d006">Quality Management</option>
				<option value="d007">Sales</option>
				<option value="d008">Research</option>
				<option value="d009">Customer Service</option>
				
			</select>
			
			<br/>
			<br/>
			
			<label for='title'>Job Title</label>
            <input type='text' name='title' id='title'  />
			<br/>
			<br/>
			
			<label for='salary'>Salary</label>
            <input type='text' name='salary' id='salary' />
			<br/>
			<br/>
                                      
        
            <input type='Submit' value='Add Employee' />            
        </form>
    </div>



</html>

