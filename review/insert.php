<!DOCTYPE html><html><head>	<title>Insert Page page</title></head><body>	<center>		
   <?php	
   		
     include "config.php";
     /*echo "<pre>";
     print_r($_POST);
     echo "</pre>";
     die();*/
     $first_name =$_REQUEST['FirstName'];		
     $last_name =$_REQUEST['Lastname'];		
     $phone = $_REQUEST['Phone'];		
     $url = $_REQUEST['url'];       
     $sql="INSERT INTO registration VALUES (' ','$first_name',
			'$last_name','$phone','$url')";			
     if(mysqli_query($conn,$sql)){
     echo "<h3>data inserted</h3>";
     header("Location:/jonathan/index.php");
     }else{
	echo "ERROR: Hush! Sorry $sql."
	. mysqli_error($conn);
     }