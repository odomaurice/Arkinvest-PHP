<!DOCTYPE html>




<html>


<div class="row mt-5 justify-center">
    <div class="col-sm-8">
        <div class="card">
            <div class="card-body">

                <!-- Makes POST request to /register route -->

                <center><h5 class="custom-color mb-2">Hey, Welcome Again to Arkinvest</h5></center>


                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <div class="Container  justify-center">
                            <div class="form-group">
                                <label>Username</label>

                                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo htmlspecialchars($username); ?>">
                                <span class="invalid-feedback"><?php echo $username_err; ?></span>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                                <span class="invalid-feedback"><?php echo $password_err; ?></span>
                            </div>




                            <button class="btn-info" type="submit" name="submit">Submit
                            </button><br><br>

                            <input type="checkbox" name="" id="">
                            <a class="p-1 custom-color" href="/policy"> I agree to the terms</a>
                            <hr>
                            <a class="p-2 custom-color" href="register.php">Register New Membership</a>
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
  </div>

</div>
</div> -->

<div class="m-0 p-3  end-footer custom-color">
    &copy ARKINVEST 2022
</div>



<!-- <div class="m-0 p-3 bg-primary end-footer text-hover-orange">
  &copy CYCLEPAY 2022
</div> -->


</body>