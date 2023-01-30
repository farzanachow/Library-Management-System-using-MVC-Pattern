<html>

<head>

<title> FORM PAGE </title>
<link rel="stylesheet" type="text/css" href="../View/styleform.css">
</head>

<body>

<h1> STUDENT FORM PAGE</h1><br><br><br><br><br><br><br><br><br>
<form action="form.php" method="post">
	FIRSTNAME:<input type="text" name="fname">&nbsp&nbsp&nbsp&nbsp&nbsp LASTNAME:<input type="text" name="lname"><br><br><br>
	ADDRESS:<input type="text" name="address"></br><br><br>
	AGE:<input type="number" name="age"><br><br><br>
	BOOKNAME:<input type="text" name="bname"><br><br><br>
	PHONENUMBER:<input type="number" name="pnum"><br><br><br><br><br><br>
	<input type="submit" name="submit">
	

</form>
<?php
	include "DBconnect.php";
	if(isset($_POST['submit']))
	{
        $sql = " INSERT INTO studentinfo(FIRSTNAME,LASTNAME,ADDRESS,AGE,BOOKNAME,PHONENUMBER) 
		VALUES ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['address']."','".$_POST['age']."','".$_POST['bname']."','".$_POST['pnum']."')";
		if ($conn->query($sql)=== TRUE) {
			echo "STUDENT INSERTED";
		}
		else{
			echo "error".$conn->error;
		}

	}



	?>



</body>

</html>