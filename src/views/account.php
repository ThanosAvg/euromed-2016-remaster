
<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      
        <h4 class="modal-title" id="myModalLabel"><strong>Registration</strong></h4>
      </div>
      <div class="modal-body">
        <div id="register-alert"></div>    
        <form class="form-horizontal" id="register-form" action="<?=PUBLIC_ROOT?>/register" method="post">
            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Firstname</label>
                <div class="col-sm-8">
                    <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Enter firstname">
                </div>
            </div>  
            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Lastname</label>
                <div class="col-sm-8">
                    <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Enter lastname">
                </div>
            </div>
          <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-8">
              <input type="email" name="email" class="form-control" id="email" placeholder="ex: myname@example.com">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-8">
              <input type="password" name="password" class="form-control" id="password" placeholder="Choose your Password">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword" class="col-sm-2 control-label">Confirm password</label>
            <div class="col-sm-8">
              <input type="password" name="password_confirm" class="form-control" id="password_confirm" placeholder="Confirm Password">
            </div>
          </div>   
          <div class="checkbox" style="text-align: center">
            <label>
              <input type="checkbox" name="newsletter" id="newsletter" value="Newsletter" aria-label="...">Subscribe to Newsletter
            </label>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <input type="hidden" value="register" name="action">
              <input type="submit" class="btn btn-primary" value="Sign up">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>



<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                <h4 class="modal-title" id="loginModalLabel"><strong>Login</strong></h4>
            </div>
            <div class="modal-body">
                <div id="login-alert"></div>    
                <form class="form-horizontal" id="login-form" action="login" method="post">
                    <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-8">
                            <input type="email" name="email" class="form-control" id="login-email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-8">
                            <input type="password" name="password" class="form-control" id="login-password">
                        </div>
                    </div>
                    <span>You don't have an account? <a href="#" data-toggle="modal" data-target="#registerModal" data-dismiss="modal">Sign up</a></span>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="hidden" value="login" name="action">
                        <input type="submit" class="btn btn-primary" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
