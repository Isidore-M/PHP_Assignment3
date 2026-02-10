
<!-- Add Product Modal -->
<form action="insertData.php" method="POST">
<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"> Add a product</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <h6> You must fill every field before saving</h6>
      
            <div class="form-group"> 
                <label for="pcode"> Product code</label>
                <input type="text" name="pcode" class="form-control">
            </div>
             <div class="form-group"> 
                <label for="pname"> Name </label>
                <input type="text" name="pname" class="form-control">
            </div>
             <div class="form-group"> 
                <label for="pversion"> Version</label>
                <input type="text" name="pversion" class="form-control">
            </div>
             <div class="form-group"> 
                <label for="pdate"> Release Date</label>
                <input type="date" name="pdate" class="form-control" placeholder="Year-Month-Day">
            </div>

       
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" name="addProduct" value="Add product">
      </div>
    </div>
  </div>
</div>
 </form>

