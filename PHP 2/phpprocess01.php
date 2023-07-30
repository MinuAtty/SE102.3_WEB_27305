<html>
<head>
  <title>Registration Data</title>
  <style>
    
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }
    table {
      border-collapse: collapse;
    }
    th, td {
      border: 1px solid #ddd;
      padding: 8px;
    }
  </style>
</head>
<body>
  <h2>Registration Data</h2>
  
  <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") 
	{
      $firstname = $_POST["firstname"];
      $lastname = $_POST["lastname"];
	  $username = $_POST["username"];
	  $password = $_POST["password"];
	  $gender = $_POST["gender"];
	  $academicYear = $_POST["academicYear"];
	  $email = $_POST["email"];
	  $phoneNo = $_POST["phoneNo"];
    }
    ?>
	
  <table>
    <tr>
      <th> First Name </th>
	  <td> <?php echo $firstname; ?> </td>";
	</tr>
	
	<tr>
	  <th> Last Name </th>
	  <td> <?php echo $lastname; ?> </td>";
	</tr>
	
	<tr>
	  <th> Username </th>
	  <td> <?php echo $username; ?> </td>";
	</tr>
	
	<tr>
	  <th> Password </th>
	  <td> <?php echo $password; ?> </td>";
	</tr>
	
	<tr>
	  <th> Gender </th>
	  <td> <?php echo $gender; ?> </td>";
	</tr>
	
	<tr>
	  <th> Academic Year </th>
	  <td> <?php echo $academicYear; ?> </td>";
	</tr>
	
	<tr>
	  <th> Email </th>
	  <td> <?php echo $email; ?> </td>";
	</tr>
	
	<tr>
	  <th> Phone No </th> 
      <td> <?php echo $phoneNo; ?> </td>";	  
    </tr>
  </table>
</body>
</html>
