<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
<form action ="/Php/forums/partials/_handleLogin.php" method ="post">
  <div class="form-group">
    <label for="exampleInputEmail1">username</label>
    <input type="text" class="form-control" id="loginEmail" name="loginEmail" aria-describedby="emailHelp">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="loginPass" id ="loginPass" class="form-control">
  </div>
  
  <button type="submit" class="btn btn-primary">Login</button>
</form>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      
    </div>
  </div>
</div>