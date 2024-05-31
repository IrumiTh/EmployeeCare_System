<?php      
    $host = "localhost";  
    $user = $_GET['user'];  
    $password = "password";  
    $db_name = "empcare_hr";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
	
    $sql=$_GET['query'];
    
    if (preg_match("/SELECT/",$sql)){
	$result=mysqli_query($con, $sql) or die('Cannot run: Previlege Violated');
	echo "<table border='1'>";
    	echo "<tr>";
    	while ($fieldInfo = mysqli_fetch_field($result)) {
            echo "<th>{$fieldInfo->name}</th>";
    	}
    	echo "</tr>";
    	while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            foreach ($row as $field => $value) {
            	echo "<td>{$value}</td>";
            }
            echo "</tr>";
    	}
    	echo "</table>";
    }else if(mysqli_query($con, $sql)){
	echo "Query '$sql' executed successfully!";
    }else{
	die('Cannot run: Previlege Violated');
    }
    mysqli_close($con);
    
	
?>


