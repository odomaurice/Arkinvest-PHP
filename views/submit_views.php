<!DOCTYPE html>
<html lang="en">

<head>

    <style>
        html {
            background-color: #9900ff;
        }

        .btn-info:hover {
            background-color: #9900ff;
            color: #fff;
            border-radius: 0.75rem;
            padding: 0.75rem;
            border-width: 1px;

        }

        .btn-info {
            background-color: #fff;
            color: #9900ff;
            border-radius: 0.75rem;
            padding: 0.75rem;
            border-width: 1px;
            border-style: solid;
        }

        .custom-color {
            color: #9900ff;
        }

        .custom-bg {
            background-color: #000;
            color: #fff;
        }

        .bg-purple {
            background-color: #9900ff;
            color: #fff;
        }

        .submit-header {
            display: flex;
            justify-content: space-between;
        }
    </style>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0">
    <link rel="stylesheet" href="public/css/index.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Arkinvest||Submit</title>
</head>

<body class="justify-center">

    <div class="sticky-top  submit-header">
        <div class="nav-container">
            <div class="display-f fav-div"> <img class="pb-3" src="public/images/favicon.jpeg" width="100px">

                <h2 class="logo custom-color text-hover-purple"><span class="font-xxl">Ark</span>invest</h2>
            </div>


        </div>
    </div>



    <form class="form" action="submit.php" method="post">
        <h3 class="mt-2 text-hover-purple p-3">Choose Plan</h3>
        <div class="form-group justify-center">
            <div class="Container  m-3 p-3 justify-center">

                <label>Choose Plan:</label>
                <input class=" text-blue" name="plan" type="text" <?php echo htmlspecialchars($plan) ?> placeholder="Please Enter A Plan(bronze, silver, gold, diamond)">
                <div class="text-danger"><?php echo $errors['plan']; ?></div>

                <label>Amount:</label>
                <input class=" text-blue" name="amount_init" type="number" <?php echo htmlspecialchars($amount_init) ?> /><br><br>
                <div class="text-danger"><?php echo $errors['amount_init']; ?></div>


                <script>
                    $(document).ready(function() {
                        $(".proceed").click(function() {
                            alert("Scroll down to complete payment")
                        });
                    });
                </script>





                <button id="proceed" class="btn-info custom-color waves-effect waves-light proceed" type="submit" name="submit">
                    <a id="proceed" class="custom-color" style="text-decoration: none ;">Proceed to pay</a>
                </button><br><br>

    </form>



    <!--COIN-LIB.IO SECTION START-->

    <div class="coinlib-widget">
        <section class="ts-features-col" style="margin-bottom: 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="coin-lib1" </div>

                            <div style="height:40px;">
                                <embed src="https://widget.coinlib.io/widget?type=horizontal_v2&amp;theme=light&amp;pref_coin_id=1505&amp;invert_hover=" width="100%" height="36" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;" </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
    <!--COINLIB.IO END SECTION-->



    <div class="card text-center">
        <div class="card-header">
            Payment methods:
        </div>
        <div id="payment_final" class="card-body">
            <img src="images/qr.jpg" alt="" width="100px">


            <p class="card-text">Please pay exactly <?php echo $amount_init ?> btc equivalent to</p>
            <p class="card-text text-hover-purple">bc1qlskw03pfz23wx9scwg2fwlaf08l7dstngp33kc</p>










        </div>

    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn-info p-2 m-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Submit Payment Details
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Submit Payment details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mb-2">
                    <form action="submit.php" method="post">
                        <label for="">Transaction Id*</label>
                        <input type="text" name="transaction_id" <?php echo $transaction_id; ?>><br><br>

                        <label for="">Date Of Payment*</label>
                        <input type="date" <?php echo $proof_of_pay ?> name="date_of_pay"><br><br>

                        <label for="">Payment proof</label>
                        <input type="file" <?php echo $proof_of_pay ?> name="proof_of_pay"><br><br>

                        <label for="">Amount*</label>
                        <input type="number" <?php echo $amount ?> name="amount"><br><br>

                        <div class="modal-footer mb-2">
                            <button type="button" class="btn-info mb-5" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="pay_proof" class="btn-info mb-5">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>




    <script>
        $("#proceed").click(function() {
            swal("Please!!!", "Scroll down to complete transaction", "success");
        })
    </script>











    <!-- <div class="m-3 p-10 bg-primary text-hover-orange">
  &copy CYCLEPAY 2022
</div> -->




</body>

</html>