<?php

include('./config/db.config.php');


// write query for all payment_plan
$sql = 'SELECT transaction_id, amount, date_of_pay, proof_of_pay, id FROM payment_plan ORDER BY date_of_pay';

// get the result set (set of rows)
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$payment_plan = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free the $result from memory (good practise)
mysqli_free_result($result);

// close connection
mysqli_close($conn);





// check GET request id param
if (isset($_GET['id'])) {

    // escape sql chars
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // make sql
    $sql = "SELECT * FROM payment_plan WHERE id = $id";

    // get the query result
    $result = mysqli_query($conn, $sql);

    // fetch result in array format
    $payment_plan = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);
}




?>



<?php include("./templates/user_header.php"); ?>
<title>Arkinvest||Dashboard</title>
</head>

<body cAlass="">
    <input type="checkbox" name="" id="nav-toggle">
    <div class="sidebar">

        <div class="sidebar-menu">




            <ul>

                <li>
                    <a class="active" href="#"><span class="las la-igloo"></span><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="submit.php"><span class="las la-upload"></span><span>Deposit</span></a>

                </li>
                <li>
                    <a href="submit.php"><span class="las la-download"></span><span>Withdrawal</span></a>
                </li>

                <li>
                    <a href="investment_plans.php"><span class="las la-coins"></span><span>Investment Plans</span></a>
                </li>
                <li>
                    <a href="#"><span class="las la-user-circle"></span><span>Account</span></a>
                </li>
                <li>
                    <a href="faq.php"><span class="las la-comments"></span><span>What's new?</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <div class="custom-color">
                    <h3 class="custom-color"><span class="font-lg custom-color">Ark</span>invest</h3>
                </div>

                <label class="mt-0 mr-1" for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                <!-- <div class="bg-purple">
                    <h3 class="text-white"><span class="font-xxl bg-purple">Ark</span>invest</h3>
                </div> -->
            </h2>


            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" name="" id="" placeholder="Search here">
            </div>
            <div class="user-wrapper">

                <div>
                    <button class="btn-info"><a href="logout.php">Log out</a></button>
                    <span class="status green"></span>
                </div>
            </div>
        </header>
        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>$0</h1>
                        <span>Current Balance</span>
                    </div>
                    <div>
                        <span class="las la-money-bill-alt"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>$0</h1>
                        <span>Total Deposits</span>
                    </div>
                    <div>
                        <span class="las la-clipboard feature-img"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>$0</h1>
                        <span>Total Withdraws</span>
                    </div>
                    <div>
                        <span class="las la-shopping-bag feature-img"></span>
                    </div>
                </div>
                <div class="card-single ">
                    <div>
                        <h1>$0</h1>
                        <span>Income</span>
                    </div>
                    <div>
                        <span class="las la-wallet"></span>
                    </div>
                </div>

            </div>


            <table class="mt-2" id="customers">
                <tr>
                    <th>TransactionID</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Pay Proof</th>
                    <th>More</th>
                </tr>


                <tr>




                    <?php foreach ($payment_plan as $plans) : ?>



                        <td><?php echo htmlspecialchars($plans['transaction_id']); ?></td>
                        <td><?php echo htmlspecialchars($plans['amount']); ?></td>
                        <td><?php echo htmlspecialchars (date($plans['date_of_pay'])); ?></td>
                        <td><?php echo htmlspecialchars($plans['proof_of_pay']); ?></td>
                        <td><a href="payment_details.php?id=<?php echo $plans['id'] ?>"> Info</a></td>

                </tr>


            <?php endforeach; ?>

            </table>













           


            <!-- <div class="m-3 p-10 bg-primary text-hover-orange">
  &copy CYCLEPAY 2022
</div> -->




</body>

</html>