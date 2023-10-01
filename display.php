<?php
include 'connect.php';

if(isset($_POST['displaySend'])){
   $table='
   <table class="table table-striped table-hover">
   <thead class="thead-dark">
    <tr>
      <th scope="col">ID No.</th>
      <th scope="col">Position</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Operations</th>
    </tr>
   </thead>   <tbody> ';
   $sql="Select * from `tblofficial`";
   $result=mysqli_query($con,$sql);
   $number=1; 
   while($row=mysqli_fetch_assoc($result)){
      $id=$row['id'];
      $position=$row['position'];
      $name=$row['name'];
      $email=$row['email'];
      $phone=$row['phone'];
      $address=$row['address'];

      $table.='
      <tr>
      <th scope="row"> ' . $number . '</th>    
      <td>'.$position.'</td>  
      <td>'.$name.'</td>  
      <td>'.$email.'</td>  
      <td>'.$phone.'</td>  
      <td>'.$address.'</td>  
      <td> 
      <button class="m-1 btn btn-dark" onclick="getDetailsUser('.$id.')">Update</button> 
      <button class="m-1 btn btn-danger" onclick="openDeleteConfirmationModal('.$id.')">Delete</button>
      </td>  
      </tr>';
      $number++;
   }
   
   $table.='</tbody></table>';
   echo $table;
}


?>