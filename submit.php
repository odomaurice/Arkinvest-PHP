<?php




include('./config/db.config.php');



$transaction_id = $date_of_pay = $proof_of_pay =  $amount = '';
$errors = array('transaction_id' => '', 'date_of_pay' => '', 'proof_of_pay' => '', 'amount' => '');

if (isset($_POST['pay_proof'])) {

    // check transaction_id


    if (empty($_POST['transaction_id'])) {
        $errors['transaction_id'] = 'field is required <br/>';
    } else {
        $transaction_id = $_POST['transaction_id'];
    }

    // check proof_of_pay

    if (empty($_POST['proof_of_pay'])) {
        $errors['proof_of_pay'] = 'field is required <br/>';
    } else {
        $proof_of_pay = $_POST['proof_of_pay'];
    }



    // check date_of_pay
    if (empty($_POST['date_of_pay'])) {
        $errors['date_of_pay'] = 'field is required <br/>';
    } else {
        $date_of_pay = $_POST['date_of_pay'];
    }

    // check amount
    if (empty($_POST['amount'])) {
        $errors['amount'] = 'field is required <br/>';
    } else {
        $amount = $_POST['amount'];
    }

    //create sql


    $sql = "INSERT INTO payment_plan(transaction_id,date_of_pay, proof_of_pay,amount) VALUES('$transaction_id','$date_of_pay', '$proof_of_pay', '$amount')";

    $result = mysqli_query($conn, $sql);




    //save to DB and check
    if ($result) {
        //success
        header("location:submit.php#payment_final");
    } else {
        //error
        echo 'query error: ' . mysqli_error($conn);
    }





    if (array_filter($errors)) {
        //echo "errors in the form";
    } else {
        $plan = mysqli_real_escape_string($conn, $_POST['plan']);
        $amount = mysqli_real_escape_string($conn, $_POST['amount']);
        $transaction_id = mysqli_real_escape_string($conn, $_POST['transaction_id']);
        $date_of_pay = mysqli_real_escape_string($conn, $_POST['date_of_pay']);
        $proof_of_pay = mysqli_real_escape_string($conn, $_POST['proof_of_pay']);
    }
}






// submit form



$plan  = $amount_init = '';
$errors = array('plan' => '',  'amount_init' => '');

if (isset($_POST['submit'])) {



    // check plan
    if (empty($_POST['plan'])) {
        $errors['plan'] = 'field is required <br/>';
    } else {
        $plan = $_POST['plan'];
    }

    //check amount


    if (empty($_POST['amount_init'])) {
        $errors['amount_init'] = 'field is required <br/>';
    } else {


        $amount_init = $_POST['amount_init'];
    }






    if (array_filter($errors)) {
        //echo "errors in the form";
    } else {
        $plan = mysqli_real_escape_string($conn, $_POST['plan']);
        $amount_init = mysqli_real_escape_string($conn, $_POST['amount_init']);
    }
}

?>

<?php include('views/submit_views.php'); ?>







