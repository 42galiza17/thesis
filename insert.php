<?php
include 'connect.php';

extract($_POST);

// if (empty($_POST['officialPositionSend']) && empty($_POST['officialNameSend']) && empty($_POST['officialEmailSend']) && empty($_POST['officialPhoneSend']) && empty($_POST['officialAddressSend'])) {
//   echo '<script>alert("Please fill in all required fields.");</script>';
// }
// else{
  if(isset($_POST['officialPositionSend']) && isset($_POST['officialNameSend']) && isset($_POST['officialEmailSend']) && isset($_POST['officialPhoneSend']) && isset($_POST['officialAddressSend'])){
    
    $sql = "insert into `tblofficial` (position, name, email, phone, address) values ('$officialPositionSend', '$officialNameSend','$officialEmailSend','$officialPhoneSend', '$officialAddressSend') ";

    $result=mysqli_query($con, $sql);
}

// }

?>