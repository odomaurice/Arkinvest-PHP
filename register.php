<?php

include('./templates/auth_header.php');

require_once('./config/db.config.php');

$first_name = $last_name = $user_name = $email = $password = $password_reset = $picture = '';
$errors = array('first_name' => '', 'last_name' => '', 'user_name' => '', 'email' => '', 'password' => '', 'password_reset' => '', 'picture' => '');


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // check first_name
  if (empty(trim($_POST['first_name']))) {
    $errors['first_name'] = 'firstname is required <br />';
  } else {
    $first_name = $_POST['first_name'];
    if (!preg_match('/^[a-zA-Z\s]+$/', $first_name)) {
      $errors['first_name'] = 'First name must be letters and spaces only';
    }
  }
  //check last_name

  if (empty(trim($_POST['last_name']))) {
    $errors['last_name'] = 'lastname is required <br />';
  } else {
    $last_name = $_POST['last_name'];
    if (!preg_match('/^[a-zA-Z\s]+$/', $last_name)) {
      $errors['last_name'] = 'Lastname must be letters and spaces only';
    }
  }

  // Validate username
  if (empty(trim($_POST["user_name"]))) {
    $user_name_err = "Please enter a username.";
  } elseif (!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["user_name"]))) {
    $user_name_err = "Username can only contain letters, numbers, and underscores.";
  } else {
    // Prepare a select statement
    $sql = "SELECT * FROM transact WHERE username = ?";


    if ($stmt = mysqli_prepare($conn, $sql)) {
      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "s", $param_user_name);

      // Set parameters
      $param_user_name = trim($_POST["user_name"]);

      // Attempt to execute the prepared statement
      if (mysqli_stmt_execute($stmt)) {
        /* store result */
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) == 1) {
          $user_name_err = "This username is already taken.";
        } else {
          $user_name = trim($_POST["user_name"]);
        }
      } else {
        echo "Oops! Something went wrong. Please try again later.";
      }

      // Close statement
      mysqli_stmt_close($stmt);
    }
  }

  //check email
  if (empty($_POST['email'])) {
    $errors['email'] = 'An email field is required <br />';
  } else {
    $email = $_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors['email'] = 'Please enter a valid email address';
    }
  }

  // Validate password
  if (empty(trim($_POST["password"]))) {
    $password_err = "Please enter a password.";
  } elseif (strlen(trim($_POST["password"])) < 6) {
    $password_err = "Password must have atleast 6 characters.";
  } else {
    $password = trim($_POST["password"]);
  }

  // Validate confirm password
  if (empty(trim($_POST["password_reset"]))) {
    $password_reset_err = "Please confirm password.";
  } else {
    $password_reset = trim($_POST["password_reset"]);
    if (empty($password_err) && ($password != $password_reset)) {
      $password_reset_err = "Password did not match.";
    }
  }

  // Check input errors before inserting in database
  if (empty($first_name_err) && empty($last_name_err) && empty($username_err) && empty($email_err) && empty($password_err) && empty($password_reset_err)) {

    // Prepare an insert statement
    $sql = "INSERT INTO transact (firstname, lastname,username, email, password, password_reset) VALUES (?,?,?,?,?,?)";

    if ($stmt = mysqli_prepare($conn, $sql)) {
      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "ssssss", $param_first_name, $param_last_name, $param_user_name, $param_email, $param_password, $param_password_reset);

      // Set parameters
      $param_first_name = $first_name;
      $param_last_name = $last_name;
      $param_username = $user_name;
      $param_email = $email;

      $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
      $param_password_reset = $password_reset;

      // Attempt to execute the prepared statement
      if (mysqli_stmt_execute($stmt)) {
        // Redirect to login page
        header("location: dashboard.php");
      } else {
        echo "Oops! Something went wrong. Please try again later.";
      }

      // Close statement
      mysqli_stmt_close($stmt);
    }
  }

  // Close connection
  mysqli_close($conn);
}


$title = 'Register';
?>

<title>Arkinvest||<?= $title; ?></title>


<?php include('./views/register_views.php'); ?>