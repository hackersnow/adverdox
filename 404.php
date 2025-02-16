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

            <!-- Error area start here -->
            <section class="error-area">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-5">
                            <div class="error__content">
                                <h1>404</h1>
                                <h2>Ooops! <br> Page Not Found</h2>
                                <p>This page dosen’t exist or was removed! <br>
                                    We suggest you back to home</p>
                                <a class='btn-three mt-40' href='contact.html'>Send us Message<i
                                        class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="error__image image">
                                <img src="assets/images/error/error-image.png" alt="image">
                                <h3 class="mt-50">Error 404!</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Error area end here -->

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