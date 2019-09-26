<form class="form-inline" action="updateUser.php" method="POST">
  <div class="form-group">

    <label class="sr-only" for="username">new username</label>
    <input type="text" name="username" class="form-control" id="username">
  </div>
  <div class="form-group">
    <label class="sr-only" for="password">new password</label>
    <input type="password" name="password" class="form-control" id="password">
  </div>
  <div class="form-group">
    <label class="sr-only" for="email">new email</label>
    <input type="email" name="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label class="sr-only" for="phone">new phone</label>
    <input type="tel" name="phone" class="form-control" id="phone">
  </div>
  <button name="update_user" value="submit" type="submit" class="btn btn-default">Submit</button>
</form> 