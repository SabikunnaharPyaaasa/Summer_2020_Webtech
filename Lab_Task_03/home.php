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
						    <input type="text" name="Date"  size="1%"><b>/</b>
						    <input type="text" name="Month"  size="1%"><b>/</b>
					    	<input type="text" name="Year"  size="1%"> (dd/mm/yyyy)
					    </td>
					    <td ></td>
					
				    </tr>
				    <tr height="40px">
					    <td><b>Blood Group</b></td>
					    <td >
						    <select name="">
							    <option value="+A">A+</option>
						    	<option value="-A">A-</option>
							    <option value="+B">B+</option>
							    <option value="-B">B-</option>
							    <option value="+O">O+</option>
							    <option value="-O">0-</option>
							    <option value="+AB">AB+</option>
							    <option value="-AB">AB-</option>

					    </td>
					    <td ></td>
					
				    </tr>
				    <tr height="40px">
					    <td><b>Degree</b></td>
					    <td >
						    <input type="checkbox" name="degree" value="SSC">SSC
						    <input type="checkbox" name="degree" value="HSC">HSC
						    <input type="checkbox" name="degree" value="BSc">BSc.
						    <input type="checkbox" name="degree" value="MSc">MSc.
					    </td>
					    <td ></td>
					
				    </tr>
				    <tr height="40px">
					    <td><b>Photo</b></td>
					    <td colspan="2">
						    <input type="file" name="file" value="Browse...">
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
