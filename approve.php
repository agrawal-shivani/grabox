<?php
$user="login";
include 'check_con.php';

session_start();

if(isset($_SESSION['username']))
{
   $user=$_SESSION['username'];
    
$myid=$_GET['id'];
	

 $conn = mysqli_connect($servername, $username, $password, $dbname); 

  
$sql = "update vendor set approve=1 where id = '$myid'  ";
$result = mysqli_query($conn,$sql);
  

if (mysqli_query($conn,$sql))
 {    



                  $sql="select * from vendor where id = '$myid'  ";

                  $result=mysqli_query($conn,$sql);


                  if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                      $vuser = $row['user'];
                      
                      }
                      }  

                       if(!is_dir("vendors/$vuser")){                 
                          
                          mkdir("vendors/$vuser");
                                
                                  $sql = "CREATE TABLE vendor_$vuser( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                                                      name VARCHAR(30) ,
                                                                      mrate INT(20) ,
                                                                      orate INT(50),
                                                                      irate INT(50),
                                                                      field VARCHAR(50),
                                                                      info VARCHAR(50),
                                                                      image VARCHAR(50),
                                                                      approve INT(10)  NOT NULL DEFAULT '0' )";
                                  $result = mysqli_query($conn,$sql);

                                     if ($conn->query($sql) === TRUE) {  
                                        echo "Table CREATED successfully"; 
                                        } 
                                    else {     
                                        echo "Error creating table: " . $conn->error; 
                                      }  
                        }
                        else{
                            echo "Vendors dir already present";
                        }

  
  }

else 
   {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);

    }





mysqli_close($conn);
}
?>