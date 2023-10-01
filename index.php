<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
   </head>
   <body>
      <section>
         <div>
            sidebar
         </div>
         <div class="container">
            <h1>
               Baranggay OFficials
            </h1>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddUser">
            Add Baranggay Officials
            </button>

            <div id="search-container">
    <input type="text" id="search-input" placeholder="Search...">
    <button onclick="searchRecords()">Search</button>
</div>
<div id="record-container">
    <!-- Records will be displayed here -->
</div>
<div id="pagination-container">
    <!-- Pagination controls will be displayed here -->
</div>




            <!-- Add User Modal Start-->
            <div class="modal fade" id="modalAddUser" tabindex="-1" aria-labelledby="modalAddUserLabel" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalAddUserLabel">New Officials</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                        <form>
                           <div class="mb-3">
                              <label for="official-position" class="form-label">Position</label>
                              <select name="official-position" class="form-control" id="official-position" >
                                 <option value="Baranggay Captain">Baranggay Captain</option>
                                 <option value="Baranggay Kagawad">Baranggay Kagawad</option>
                                 <option value="Baranggay Secretary">Baranggay Secretary</option>
                                 <option value="Baranggay Treasurer">Baranggay Treasurer</option>
                                 <option value="SK Chairman">Sk Chairman</option>
                              </select>
                           </div>
                           <div class="mb-3">
                              <label for="official-name" class="form-label">Full Name</label>
                              <input type="text" class="form-control" id="official-name" name="official-name">
                           </div>
                           <div class="mb-3">
                              <label for="official-email" class="form-label">Email</label>
                              <input type="email" class="form-control" id="official-email" name="official-email">
                           </div>
                           <div class="mb-3">
                              <label for="official-phone" class="form-label">Contact No.</label>
                              <input type="number" class="form-control" id="official-phone" name="official-phone">
                           </div>
                           <div class="mb-3">
                              <label for="official-address" class="form-label">Address</label>
                              <input type="text" class="form-control" id="official-address" name="official-address">
                           </div>
                           <!-- <div class="mb-3">
                              <label for="official-start-term" class="form-label">Date Start Term</label>
                              <input type="date" id="start" name="official-start-term" value="2018-07-22" min="2018-01-01" max="2018-12-31" class="form-control" id="official-start-term"/>
                           </div>
                           <div class="mb-3">
                              <label for="official-end-term" class="form-label">Date End Term</label>
                              <input type="date" id="start" name="official-end-term" value="2018-07-22" min="2018-01-01" max="2018-12-31" class="form-control" id="official-end-term"/>
                           </div> -->
                        </form>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-danger" onclick="hideAddUserModal()" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" onclick="addUser()"  class="btn btn-primary">Add New User</button>
                     </div>
                  </div>
               </div>
            </div>

            <!--Update User Modal Start -->
            <div class="modal fade" id="modalUpdateUser" tabindex="-1" aria-labelledby="modalUpdateUserLabel" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalUpdateUserLabel">Edit User</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                        <form>
                           <div class="mb-3">
                              <label for="update-official-position" class="form-label">Position</label>
                              <select name="update-official-position" class="form-control" id="update-official-position" >
                                 <option value="Baranggay Captain">Baranggay Captain</option>
                                 <option value="Baranggay Kagawad">Baranggay Kagawad</option>
                                 <option value="Baranggay Secretary">Baranggay Secretary</option>
                                 <option value="Baranggay Treasurer">Baranggay Treasurer</option>
                                 <option value="SK Chairman">Sk Chairman</option>
                              </select>
                           </div>
                           <div class="mb-3">
                              <label for="update-official-name" class="form-label">Full Name</label>
                              <input type="text" class="form-control" id="update-official-name" name="update-official-name">
                           </div>
                           <div class="mb-3">
                              <label for="update-official-email" class="form-label">Email</label>
                              <input type="email" class="form-control" id="update-official-email" name="update-official-email">
                           </div>
                           <div class="mb-3">
                              <label for="update-official-phone" class="form-label">Contact No.</label>
                              <input type="number" class="form-control" id="update-official-phone" name="update-official-phone">
                           </div>
                           <div class="mb-3">
                              <label for="update-official-address" class="form-label">Address</label>
                              <input type="text" class="form-control" id="update-official-address" name="update-official-address">
                           </div>
                           <!-- <div class="mb-3">
                              <label for="official-start-term" class="form-label">Date Start Term</label>
                              <input type="date" id="start" name="official-start-term" value="2018-07-22" min="2018-01-01" max="2018-12-31" class="form-control" id="official-start-term"/>
                           </div>
                           <div class="mb-3">
                              <label for="official-end-term" class="form-label">Date End Term</label>
                              <input type="date" id="start" name="official-end-term" value="2018-07-22" min="2018-01-01" max="2018-12-31" class="form-control" id="official-end-term"/>
                           </div> -->
                        </form>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" onclick="updateDetailsUser()"  class="btn btn-primary">Update</button>
                        <input type="hidden" name="" id="hiddendata">


                     </div>
                  </div>
               </div>
            </div>
            <!--Update User Modal End -->

<!-- delete confirmation start -->
<div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this user?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"  onclick="closeDeleteConfirmationModal()" >Cancel</button>
        <button type="button" class="btn btn-danger" id="confirmDeleteBtn"  onclick="deleteUser()" >Delete</button>
      </div>
    </div>
  </div>
</div>

<!-- delete confirmation end -->



            <div id="displayDataTable"></div>
         </div>
         <!--  -->
      </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      <script>
         $(document).ready(function(){
           displayData();
         })
         
         // display function
         function displayData(){
           var displayData="true";
           $.ajax({
             url:"display.php",
             type:'post',
             data:{
               displaySend:displayData
             },
           success:function(data,status){
             $('#displayDataTable').html(data);
             var selectedValue = $('#official-position').val();
                  console.log('Selected Value:', selectedValue);
           }
           })
         }
         
         
         // add user
         function addUser(){
           var officialPositionAdd=$('#official-position').val();
           var officialNameAdd=$('#official-name').val();
           var officialEmailAdd=$('#official-email').val();
           var officialPhoneAdd=$('#official-phone').val(); 
           var officialAddressAdd=$('#official-address').val(); 
         
           if(officialPositionAdd === '' || officialNameAdd === '' || officialEmailAdd === '' || officialPhoneAdd === '' || officialAddressAdd === '' ){
            alert('Please fill in all required fields.');
            return false;
           }
           
           // var officialStartTermAdd=$('#official-start-term').val();
           // var officialEndTermAdd=$('#official-end-term').val();
           function hideAddUserModal() {
            $('#myModal').modal('hide');
        }
         
         // insert ajax
           $.ajax({
               url:"insert.php",
               type:'post',
               data:{
                 officialPositionSend:officialPositionAdd,
                 officialNameSend:officialNameAdd,
                 officialEmailSend:officialEmailAdd,
                 officialPhoneSend:officialPhoneAdd,
                 officialAddressSend:officialAddressAdd
                 // officialStartTermSend:officialStartTermAdd,
                 // officialEndTermSend:officialEndTermAdd
               },
               success:function(data,status){
                 // console.log(status);
                 $('#modalAddUser').modal("hide");
     
                 displayData();
                  //  $('#displayDataTable').html(data);
               }
               
           });
         }
         
         // delete user
function closeDeleteConfirmationModal(){
   $('#deleteConfirmationModal').modal('hide');

}

         function openDeleteConfirmationModal(deleteId) {
  $('#deleteConfirmationModal').modal('show');
  
  // Attach the deleteId to the Delete button
  $('#confirmDeleteBtn').data('deleteId', deleteId);
}


         function deleteUser(){
            var deleteId = $('#confirmDeleteBtn').data('deleteId');


           $.ajax({
             url:"delete.php",
             type:'post',
             data:{
               deleteSend:deleteId
             },
             success:function(data, status){
               displayData();
               $('#deleteConfirmationModal').modal('hide');
             }
           });
         }
         
  


          
         //update function
         function getDetailsUser(updateId){
          $('#hiddendata').val(updateId);

            
           $.post("update.php",{updateId:updateId},function(data,status){
            var userId=JSON.parse(data);           
              $('#update-official-position').val(userId.position); 
              $('#update-official-name').val(userId.name); 
              $('#update-official-email').val(userId.email); 
              $('#update-official-phone').val(userId.phone); 
              $('#update-official-address').val(userId.address); 
           });
           $('#modalUpdateUser').modal("show");
       
          }
         
// onclick update event click function
          function updateDetailsUser(){
              var updateofficialposition = $('#update-official-position').val(); 
              var updateofficialname = $('#update-official-name').val(); 
              var updateofficialemail = $('#update-official-email').val(); 
              var updateofficialphone = $('#update-official-phone').val(); 
              var updateofficialaddress = $('#update-official-address').val();
              var hiddendata=$('#hiddendata').val();

              if(updateofficialposition === '' || updateofficialname === '' || updateofficialemail === '' || updateofficialphone === '' || updateofficialaddress === '' ){
            alert('Please fill in all required fields.');
            return false;
           }
           
              $.post("update.php",{
                updateofficialposition:updateofficialposition,
                updateofficialname:updateofficialname,
                updateofficialemail:updateofficialemail,
                updateofficialphone:updateofficialphone,
                updateofficialaddress:updateofficialaddress,
                hiddendata:hiddendata

              },function(data,status){

                $('#modalUpdateUser').modal("hide");
                displayData();
              });
              
          }
      </script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
   </body>
</html>