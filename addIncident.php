<form action="insertData.php" method="POST">
<div class="modal fade" id="addIncidentModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5>Create Incident</h5>
        <button type="button" class="btn-close"
                data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <div class="form-group mb-2">
            <label>Product Code</label>
            <input type="text" name="productCode" class="form-control">
        </div>

        <div class="form-group mb-2">
            <label>Customer ID</label>
            <input type="number" name="customerID" class="form-control">
        </div>

        <div class="form-group mb-2">
            <label>Date Opened</label>
            <input type="date" name="dateOpened" class="form-control">
        </div>

        <div class="form-group mb-2">
            <label>Date Closed</label>
            <input type="date" name="dateClosed" class="form-control">
        </div>

        <div class="form-group mb-2">
            <label>Title</label>
            <input type="text" name="title" class="form-control">
        </div>

        <div class="form-group mb-2">
            <label>Description</label>
            <textarea name="description"
                      class="form-control"></textarea>
        </div>

      </div>

      <div class="modal-footer">
        <input type="submit"
               name="addIncident"
               class="btn btn-success"
               value="Create Incident">
      </div>

    </div>
  </div>
</div>
</form>