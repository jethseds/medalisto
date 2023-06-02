
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
                  <h1 class="title_signin mt-4 mb-4">Sign In</h1>
                  <label>Enter your email and password to sign in</label>
                  <br><br>
                  <div class="form-group">
                    <label>Email*</label>
                    <div class="form-control rounded-0 pl-2 p-0 border-0" style="background-color: #E5E7E9;">
                      <input type="text" name="email" id="email" placeholder="johndoe@email.com" class="bg-transparent rounded w-100 h-100 border-0" style="outline: none;">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Password*</label>
                    <div class="form-control rounded-0 pl-2 pr-2 p-0 border-0 d-flex" style="place-items:center;background-color: #E5E7E9;">
                      <input id="password-field" type="password" name="password" placeholder="********" class="bg-transparent rounded w-100 h-100 border-0" style="outline: none;">
                      <i toggle="#password-field" class="fas fa-eye text-muted toggle-password"></i>
                    </div>
                  </div>
                  <br>
                  <div>
                    <div class="kmli-form-group float-left">
                      <input type="checkbox" id="kmli" class="kmli_input">
                      <label for="kmli" class="kmli_label small">Keep me logged in</label>
                    </div>
                    <div class="float-right">
                      <a href="forgetpassword.php" class="text-muted text-decoration-none small">Forgot Password?</a>
                    </div>
                  </div>
                  <br><br>
                  <div class="form-group">
                    <div class="form-control p-0 border-0">
                      <input type="submit" name="signin" class="rounded rounded-0 signin btn-lg text-white w-100 border-0" value="Sign in" style="outline: none;background-color: #6d4c41;" onclick="lsRememberMe()">
                    </div>
                  </div>
                  <br>
                  <div>
                    <a href="register.php" class="small text-muted text-decoration-none">Create an account?</a>
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