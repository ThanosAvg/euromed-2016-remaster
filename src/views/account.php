
<!-- Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Registration</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" id="register-form" action="register" method="post">
          <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Email*</label>
            <div class="col-sm-8">
              <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword" class="col-sm-2 control-label">Password*</label>
            <div class="col-sm-8">
              <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Choose your Password">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword" class="col-sm-2 control-label">Password*</label>
            <div class="col-sm-8">
              <input type="password" name="password_confirm" class="form-control" id="inputPassword" placeholder="Confirm Password">
            </div>
          </div> 
          <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Firstname*</label>
            <div class="col-sm-8">
              <input type="text" name="first_name" class="form-control" id="inputFirstname" placeholder="Enter firstname">
            </div>
          </div>  
          <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Lastname*</label>
            <div class="col-sm-8">
              <input type="text" name="last_name" class="form-control" id="inputLastname" placeholder="Enter lastname">
            </div>
          </div> 
          <div class="form-group">
            <label for="inputBirthday" class="col-sm-2 control-label">Date of Birth*</label>
            <div class="col-sm-8">
              <input type="text" name="birthday" class="form-control" id="inputBirthday" placeholder="Birthday">
            </div>
          </div> 
          <div class="form-group">
            <label for="Select" class="col-sm-2 control-label">Country*</label>
            <div class="col-sm-8">
              <select id="CountrySelect" name="country" class="form-control">
                <option>Albania</option>
                <option>USA</option>
                <option>Italy</option>
                <option>Greece</option>
                <option>cyprus</option>
                <option>5</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="Select" class="col-sm-2 control-label">City*</label>
            <div class="col-sm-8">
              <select id="CitySelect" name="city" class="form-control">
                <option>Athens</option>
                <option>USA</option>
                <option>Italy</option>
                <option>Greece</option>
                <option>Cyprus</option>
                <option>mplampla</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress" class="col-sm-2 control-label">Address*</label>
            <div class="col-sm-8">
              <input type="text" name="address" class="form-control" id="inputAddress" placeholder="Street, Number">
            </div>
          </div> 
          <div class="form-group">
            <label for="inputZIP" class="col-sm-2 control-label">ZIP Code*</label>
            <div class="col-sm-8">
              <input type="number" name="zip" class="form-control" id="inputLaststname" placeholder="ZIP Code">
            </div>
          </div> 
          <div class="form-group">
            <label for="inputPhone" class="col-sm-2 control-label">Phone*</label>
            <div class="col-sm-8">
              <input type="number" name="phone" class="form-control" id="inputPhone" placeholder="Phone">
            </div>
          </div> 
          <div class="checkbox">
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
