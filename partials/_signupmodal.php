<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="signupmodal" tabindex="-1" aria-labelledby="signupmodal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
<form action ="/Php/forums/partials/_handleSignup.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">username</label>
    <input type="text" class="form-control" id="signupEmail" name="signupEmail" aria-describedby="emailHelp">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password"  id ="signupPassword" name="signupPassword" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" id ="signupcPassword" name="signupcPassword" class="form-control">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
      </div>
    </div>
  </div>
</div>