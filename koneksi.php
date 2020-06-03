<?php 
$servername = "localhost";
$username = "id13884755_root";
$password = "CkbP(UW8G{K-HQM{";
$dbname   = "id13884755_dbsewamobil";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql="select*from tbmobil";
$result=$conn->query($sql);
$data=array();

if($result->num-rows>0){
    while($row=$result->fetch_assoc()){
        $data=$row;
    }
      
    }   else{
        echo"data kosong";}
}  
?>