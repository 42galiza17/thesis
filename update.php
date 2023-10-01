<?php
include 'connect.php';

if(isset($_POST['updateId'])){
   $user_id=$_POST['updateId'];
   
  $sql ="Select * from `tblofficial` where id=$user_id";
  $result=mysqli_query($con, $sql);
  $response=array();
  while($row=mysqli_fetch_assoc($result)){
   $response=$row;
  };

  echo json_encode($response);
}else{
   $response['status']=200;
   $response['message']="invalid or data not found";
}



//update query
if(isset($_POST['hiddendata'])){
   $unique_id=$_POST['hiddendata'];
   $position=$_POST['updateofficialposition'];
   $name=$_POST['updateofficialname'];
   $email=$_POST['updateofficialemail'];
   $phone=$_POST['updateofficialphone'];
   $address=$_POST['updateofficialaddress'];

   $sql= "update `tblofficial` set position='$position',name='$name', email='$email', phone='$phone', address='$address' where id='$unique_id'";

   $result=mysqli_query($con,$sql);
}
   ?>