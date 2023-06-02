
<!doctype html>
<html lang="en">
  <head><?php include 'include/head.php'; ?></head>
  <body>
    <?php include 'include/navbar.php'; ?>
    <div class="login">
      <div class="row m-0">
        <div style="" class="col-lg-7 m-auto p-0">
            <div class="right">
              <div class="card bg-transparent border-0">
                <form method="POST" action="controller/controller.php" class="m-auto">
                  <h1 class="title_signin mt-4 mb-4">Change Password</h1>
                  <label>Enter your password to change</label>
                  <br><br>
                  <input type="hidden" name="code" value="<?php echo $_GET['code'] ?>">
                  <div class="form-group">
                    <label>Password*</label>
                    <div class="form-control rounded-0 pl-2 p-0 border-0" style="background-color: #E5E7E9;">
                      <input type="password" name="password" class="bg-transparent rounded w-100 h-100 border-0" style="outline: none;">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Confirm Password*</label>
                    <div class="form-control rounded-0 pl-2 pr-2 p-0 border-0 d-flex" style="place-items:center;background-color: #E5E7E9;">
                      <input id="password-field" type="password" name="confirmpassword" class="bg-transparent rounded w-100 h-100 border-0" style="outline: none;">
                    </div>
                  </div>
                  <br>
                  <div class="form-group">
                    <div class="form-control p-0 border-0">
                      <input type="submit" name="changepassword" class="rounded rounded-0 signin btn-lg text-white w-100 border-0" value="Change Password" style="outline: none;background-color: #6d4c41;" onclick="lsRememberMe()">
                    </div>
                  </div>
                </form>
              </div>
            </div>
        </div>
      </div>
    </div>
    
    <?php include 'include/footer.php'; ?>
  </body>
</html>