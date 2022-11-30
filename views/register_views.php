<!DOCTYPE html>


<html>




<div class="row mt-5 justify-center">
    <div class="col-sm-8">
        <div class="card">
            <div class="card-body">

                <!-- Makes POST request to /register route -->

                <center><h5 class="custom-color   mb-2">Hi!, Welcome To Arkinvest</h5></center>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <div class="Container  m-3 p-3 justify-center">

                            <label>Your Firstname:</label>
                            <input class="custom-color" name="first_name" type="text" value="<?php echo htmlspecialchars($first_name) ?>">
                            <div class="text-danger"><?php echo $errors['first_name']; ?></div>

                            <label>Your Lastname:</label>
                            <input class="custom-color" name="last_name" type="text" value="<?php echo htmlspecialchars($last_name) ?>" />
                            <div class="text-danger"><?php echo $errors['last_name']; ?></div> <br>
                            <label for="username">Your Username:</label>
                            <input class="custom-color" name="user_name" type="text" value="<?php echo htmlspecialchars($user_name) ?>" />
                            <div class="text-danger"><?php echo $errors['user_name']; ?></div>
                            <br>
                            <label for="email">Your Email:</label>
                            <input class="custom-color" name="email" type="email" value="<?php echo htmlspecialchars($email) ?>" /> <br>
                            <div class="text-danger"><?php echo $errors['email']; ?></div> <br>
                            <label for="password">Your Password:</label>
                            <input class="custom-color" name="password" type="password" value="<?php echo htmlspecialchars($password) ?>" />
                            <div class="text-danger"><?php echo $errors['password']; ?></div>
                            <br>
                            <label for="password_reset">Confirm your password:</label>
                            <input class="custom-color" name="password_reset" type="password" value="<?php echo htmlspecialchars($password_reset) ?>" />
                            <div class="text-danger"><?php echo $errors['password_reset']; ?></div>
                            <br>

                            <button class=" btn-info waves-effect waves-light" type="submit" name="submit">Submit
                                <i class="material-icons right"></i>
                            </button><br><br>
                            <input type="checkbox" name="" id=""><a class="p-1 custom-color" href="policy.php"> I agree to the terms</a>
                            <hr>
                            <a class="p-2 custom-color" href="login.php">I already have a membership</a>
                            <hr>
                </form>

            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- <div class="col-sm-4">
    <div class="card social-block">
      <div class="card-body">
        <a class="btn btn-block btn-social btn-google text-hover-orange text-white" href="/auth/google" role="button">
          <i class="fab fa-google text-hover-orange"></i>
          Sign Up with Google
        </a>
      </div>
    </div>
  </div> -->

</div>
</div>

<div class="m-0 p-3 end-footer custom-color">
    &copy ARKINVEST 2022
</div>
</body>