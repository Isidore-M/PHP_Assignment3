
<!-- Add Technician Modal -->
<form action="insertData.php" method="POST">
<div class="modal fade" id="addCustomerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"> Add a Customer</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h6> You must fill every field before saving</h6>
      
            <div class="form-group"> 
                <label for="fname">First name</label>
                <input type="text" name="fname" class="form-control">
            </div>
             <div class="form-group"> 
                <label for="lname"> Last name </label>
                <input type="text" name="lname" class="form-control">
            </div>
             <div class="form-group"> 
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control">
            </div>
             <div class="form-group"> 
                <label for="city"> City</label>
                <input type="text" name="city" class="form-control">
            </div>
            <div class="form-group"> 
                <label for="state"> State </label>
                <input type="text" name="state" class="form-control">
            </div>
             <div class="form-group"> 
                <label for="postal"> Postal Code</label>
                <input type="text" name="postal" class="form-control">
            </div>
             <div class="form-group"> 
                <label for="country"> Country Code </label>
                <input type="text" name="country" class="form-control">
            </div>
              <div class="form-group"> 
                <label for="phone"> Phone Number </label>
                <input type="text" name="phone" class="form-control">
            </div>
              <div class="form-group"> 
                <label for="email"> Email </label>
                <input type="text" name="email" class="form-control">
            </div>
             <div class="form-group"> 
                <label for="email"> Password </label>
                <input type="password" name="password" class="form-control">
            </div>

       
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" name="addCustomer" value="Add Customer">
      </div>
    </div>
  </div>
</div>
 </form>

