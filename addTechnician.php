
<!-- Add Technician Modal -->
<form action="insertData.php" method="POST">
<div class="modal fade" id="addTechnicianModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"> Add a technician</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h6> You must fill every field before saving</h6>
      
            <div class="form-group"> 
                <label for="pcode">First name</label>
                <input type="text" name="fname" class="form-control">
            </div>
             <div class="form-group"> 
                <label for="pname"> Last name </label>
                <input type="text" name="lname" class="form-control">
            </div>
             <div class="form-group"> 
                <label for="pversion">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
             <div class="form-group"> 
                <label for="pdate"> Phone</label>
                <input type="text" name="phone" class="form-control">
            </div>
            <div class="form-group"> 
                <label for="pdate"> Password </label>
                <input type="password" name="password" class="form-control">
            </div>

       
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" name="addTechnician" value="Add Technician">
      </div>
    </div>
  </div>
</div>
 </form>

