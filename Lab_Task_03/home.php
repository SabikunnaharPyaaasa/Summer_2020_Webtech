<!DOCTYPE html>
<head>
	
</head>
<body>

<center>
	<form action = "vl.php" method = "POST">
	    <table width="30%" border="1">
	    	<tr height="70px">
	    		<td colspan="3" align="center">
	    			<h2>PERSON PROFILE</h2>
	    		</td>
	    	</tr>
				    <tr height="40px">
					    <td width = "150px">
						    <b>Name</b>
					    </td>
					    <td width = "350px">
					    	<input type="text" name="name" value="">
			
					    </td>
					    <td width = "50px"></td>
					
				    </tr>
				    <tr height="40px">
					    <td ><b>Email<b></td>
					    <td >
					    	<input type="email" name="email" value="">
					    </td>
					    <td ></td>
					
				    </tr>
				    <tr height="40px">
					    <td><b>Gender</b></td>
					    <td >
						    <input type="radio" name="gender" value="Male">Male
						    <input type="radio" name="gender" value="Female">Female
						    <input type="radio" name="gender" value="Other">Other
					    </td>
					     <td ></td>
					
				    </tr>
				    <tr height="40px">
					    <td><b>Date Of Birth</b></td>
					    <td >
						    <input type="text" size="1%"><b>/</b>
						    <input type="text" size="1%"><b>/</b>
					    	<input type="text" size="1%"> (dd/mm/yyyy)
					    </td>
					    <td ></td>
					
				    </tr>
				    <tr height="40px">
					    <td><b>Blood Group</b></td>
					    <td >
						    <select name="">
							    <option value="">A+</option>
						    	<option value="">A-</option>
							    <option value="">B+</option>
							    <option value="">B-</option>
							    <option value="">O+</option>
							    <option value="">0-</option>
							    <option value="">AB</option>
							    <option value="">AB-</option>

					    </td>
					    <td ></td>
					
				    </tr>
				    <tr height="40px">
					    <td><b>Degree</b></td>
					    <td >
						    <input type="checkbox" name="degree" value="">SSC
						    <input type="checkbox" name="degree" value="">HSC
						    <input type="checkbox" name="degree" value="">BSc.
						    <input type="checkbox" name="degree" value="">MSc.
					    </td>
					    <td ></td>
					
				    </tr>
				    <tr height="40px">
					    <td><b>Photo</b></td>
					    <td colspan="2">
						    <input type="button" name="" value="Browse..."> No file selected.
					    </td>
					
				    </tr>
				    <tr height="40px">
					    <td colspan = "3" align="center">
					    </td>
					
				    </tr>
				    <tr height="40px">
					    <td colspan = "3" align="Right">
						    <input type="submit" name="submit" value="Submit">
						    <input type="button" name="" value="Reset">
					    </td>
				    </tr>
			    </table>
			</form>

	    </center>


		
</body>
</html>
