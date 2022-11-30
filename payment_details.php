<?php

include('./config/db.config.php');

if(isset($_POST['delete'])) {
    $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

    $sql = "DELETE FROM payment_plan WHERE id = $id_to_delete";

    if(mysqli_query($conn, $sql)) {
        //success
        header('Location: dashboard.php');
    } {
        //failure
        echo 'query error: ' . mysqli_error($conn);
    }
}

// check GET request id param
if (isset($_GET['id'])) {

    // escape sql chars
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // make sql
    $sql = "SELECT * FROM payment_plan WHERE id = $id";

    // get the query result
    $result = mysqli_query($conn, $sql);

    // fetch result in array format
    $plans = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);
}

?>



<!DOCTYPE html>
<html>

<?php include('templates/header.php'); ?>

<h2 class="custom-color justify-center m-3">DETAILS OF TRANSACTION</h2>

<div class="container card justify-center m-3 p-3">

    <?php if ($plans) : ?>

        <p class="card-body">Your transaction Id is: <?php echo $plans['transaction_id']; ?></p>
        <p class="card-body"> Deposited: <?php echo $plans['amount']; ?></p>
        <p class="card-body">Date of deposit: <?php echo date($plans['date_of_pay']); ?></p>
        <p class="card-body">Proof of payment: <?php echo $plans['proof_of_pay']; ?></p>

        <!-- DELETE FROM -->
        <form action="payment_details.php" method="post">
            <input type="hidden" name="id_to_delete" value="<?php echo $plans['id'] ?>">
            <input type="submit" name="delete" value="Delete" class="btn-info ml-2">
        </form>

    <?php else : ?>
        <h5>No such records exists.</h5>
    <?php endif ?>
</div>


</html>