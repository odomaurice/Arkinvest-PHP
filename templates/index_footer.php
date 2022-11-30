<!-- FOOTER SECTION -->
<footer  class="footer-div bg-purple display-f">
    <div class="m-3 p-2 footer-child  text-lighten-4">
        <h3>COMPANY</h3>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="about_us.php">ABOUT US</a></li>
            <li><a href="our_services.php">OUR SERVICES</a></li>
        </ul>
    </div>
    <div class="m-3 p-2 footer-child bg-purple">
        <h3>USEFUL LINKS</h3>
        <ul>
            <li><a href="investment_plans.php">INVESTMENT PLANS</a></li>
            <li><a href="policy.php">POLICY</a></li>
        </ul>
    </div>
    <div class="m-3 p-2 footer-child bg-purple">
        <h3>CERTIFICATE</h3>
        <img width="100px" src="images/Cyclepay.jpg" alt="">
        </footer>
        <div class="m-0 p-3 bg-purple">
            &copy ARKINVEST

            <script>
                document.write(new Date().getFullYear())
            </script>
        </div>

        <!-- JQUERY LINK -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- CAROUSEL JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript">
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayingTimeout: 1000,
                animateIn: "fadeIn",
                animateOut: "fadeOut",
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    },
                    1400: {
                        items: 1
                    }
                }
            })
        </script>

        <script type="text/javascript">
            $('.sponsor_section').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayingTimeout: 1000,
                // animateIn: "fadeIn",
                // animateOut: "fadeOut",
                responsive: {
                    0: {
                        sponsor_item: 3
                    },
                    600: {
                        sponsor_items: 3
                    },
                    1000: {
                        sponsor_items: 3
                    },
                    1400: {
                        sponsor_items: 5
                    }
                }
            })
        </script>
        <script type="text/javascript">
            function getYear() {
                const date = new Date();

                const year = date.getFullYear();
            }
        </script>
        <script>
            $('.menu-toggle').click(function() {

                $('.site-nav').toggleClass('site-nav--open', 500);
                $(this).toggleClass('open');

            })
        </script>

        <script>
            $("#button-reply").click(function() {
                swal("Thanks for reaching out!", "Cyclepay replies within 24hrs, we will get back to you shortly!", "success");
            })
        </script>

        <!--Bootstrap Jquery-->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>