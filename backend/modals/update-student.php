<div class="modal fade" id="update-new-student" tabindex="-1" role="dialog" aria-labelledby="update-new-studentLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Update new Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="update.php" method="POST" >
      <div class="modal-body">
        <input type="number" name="id" id="id" hidden>
          <div>
              <label for="#">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
            </div>
            <div class="form-group">
              <label for="#">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="#">Phone</label>
              <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter number phone">
            </div>
            <div class="form-group">
              <label for="#">Enroll Number</label>
              <input type="number" class="form-control" id="enroll_number" name="enroll_number" >
            </div>
            <div class="form-group">
              <label for="#">Date of admission</label>
              <input type="date" class="form-control" id="date" name="date" >
            </div>
          </div>
          <div class="modal-footer">
            <!-- <button type="submit" class="btn btn-primary">ADD STUDENT</button> -->
            <button type="submit" class="btn btn-primary">Save student</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="reset" class="btn btn-danger" >reset</button>
          </div>
        </form>
    </div>
  </div>
</div>
<script>
  function setStudentData(id){
    const Modal = document.getElementById("update-new-student");
    const row = document.querySelector('tr[data-id="'+id+'"]');
console.log(Modal);
    const name = row.querySelector('td[role="name"]').textContent;
    const email = row.querySelector('td[role="email"]').textContent;
    const phone = row.querySelector('td[role="phone"]').textContent;
    const enrole_number = row.querySelector('td[role="enrole_number"]').textContent;
    const date = row.querySelector('td[role="date"]').textContent;

    Modal.querySelector('#name').value = name;
    Modal.querySelector('#email').value = email;
    Modal.querySelector('#phone').value = phone;
    Modal.querySelector('#enroll_number').value = enrole_number;
    Modal.querySelector('#date').value = date;
    Modal.querySelector("#id").value = id;
  }
</script>