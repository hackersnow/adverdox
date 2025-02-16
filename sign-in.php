<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenshark - Startup Agency HTML Template</title>
    <?php include_once('includes/header_link_inc.php'); ?>
</head>

<body>

    <?php include_once('includes/header_inc.php'); ?>

    <div class="ScrollSmoother-content">

        <main>

            <!-- Signin area start here -->
            <section class="signin-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xxl-7">
                            <div class="signin__item">
                                <h3>Sign In to Your Account</h3>
                                <form action="#">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" placeholder="Enter your name here">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" placeholder="Enter your password">
                                    <a href="#0" class="btn-three mt-15 w-100 text-center">Sign in</a>
                                </form>
                                <div class="info">
                                    <p class="line1">Or <a href='reset-password.html'>Forgot Password?</a></p>
                                    <p class="line2">Don’t have an account? <a href='sign-up.html'>SIGN UP</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Signin area end here -->

        </main>

        <?php include_once('includes/footer_inc.php'); ?>

    </div>

    <!-- Back to top btn area start here -->
    <button id="back-top" class="btn-backToTop">
        <i class="fa-solid fa-chevron-up"></i>
    </button>
    <!-- Back to top btn area end here -->
    <?php include_once('includes/footer_link_inc.php'); ?>
</body>

</html>