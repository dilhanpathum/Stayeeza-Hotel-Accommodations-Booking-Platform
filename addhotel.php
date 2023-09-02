<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Add Hotels</title>
    <link rel="icon" href="assets/img/logo-32x32.png" type="image/icon type">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles-book.css">
    <link rel="stylesheet" href="assets/css/styles-home.css">
</head>

<body>
    <nav class="navbar navbar-expand-md py-3 navbar-light"
        style="background: #343a40;margin-top: -6px;padding-bottom: 22px;margin-bottom: -3px;padding-top: 5px;height: 86px;">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><img
                    src="assets/img/stayeeza-low-resolution-logo-color-on-transparent-background%20(1).png" width="65"
                    height="58" style="padding-left: 0px;"></a><button data-bs-toggle="collapse" class="navbar-toggler"
                data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1"
                style="color: rgb(240,245,251);font-family: Montserrat, sans-serif;margin: -2px;margin-left: 12px;background: #343a40;padding: 12px;">
                <ul class="navbar-nav me-auto nav-clr">
                    <li class="nav-item"><a class="nav-link nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Hotels</a></li>
                    <li class="nav-item"><a class="nav-link  active " href="#">Dashboard</a></li>
                </ul><button class="btn btn-primary me-3" type="button" style="margin-right: 20px;">LOG
                    IN</button><button class="btn btn-primary me-3" type="button">REGISTER</button>
            </div>
        </div>
    </nav>

    <div class="col-12 d-flex mt-3">
        <div class="container-fluid d-flex justify-content-center">
            <form class="col-md-12 col-sm-12 col-lg-8">
                <div class="card shadow mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="mb-3"><label class="form-label" for="hotel_name"><strong>Hotel Name
                                        </strong></label><input class="form-control" type="text" id="service_name"
                                        placeholder="" name="service_name" required=""></div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col">
                                <div class="mb-3"><label class="form-label"
                                        for="Address"><strong>Address&nbsp;</strong></label><input class="form-control"
                                        type="text" id="address" placeholder="Address line 1" name="address"
                                        required=""></div>
                                <div><input class="form-control" type="text" id="address" placeholder="Address line 2"
                                        name="address" required=""></div>
                                &nbsp;
                                <div><input class="form-control" type="text" id="address" placeholder="Address line 3"
                                        name="address" required=""></div>
                            </div>

                        </div>
                        <div class="mb-3"><label class="form-label"
                                for="service_client_payment_validated"><strong>Number Of Rooms</strong></label>
                            <div class="form-group mb-3 col-xs-12 col-sm-6"><input class="form-control" type="number">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3"><label class="form-label" for="email"><strong>Hotel
                                        email</strong></label><input class="form-control" id="service_client_end_date-1"
                                    type="text" name="email" required=""></div>
                        </div>
                        <div class="col">
                            <div class="mb-3"><label class="form-label" for="phone_no"><strong>Hotel Phone
                                        No:</strong></label><input class="form-control" id="service_client_end_date-1"
                                    type="number" name="phone_no" required=""></div>
                        </div>

                        <div class="col">
                            <div class="mb-3"><label class="form-label" for="phone_no"><strong>Upload Hotel
                                        Photos:</strong></label>
                                <p>Click on the "Choose File" button to upload a file:</p>
                                <form action="/action_page.php">
                                    <input type="file" id="myFile" name="filename">

                                </form>

                                <div class="mb-3"><label class="form-label"
                                        for="service_client_payment_validated"><strong>Hotel
                                            Description</strong></label>
                                    <form action="/action_page.php">

                                        <textarea id="w3review" name="w3review" rows="4" cols="50"></textarea>
                                        <br>
                                        <input type="submit" value="Submit">
                                    </form>
                                </div>
                            </div>
                        </div>



                        <div class="text-end mb-3"><button class="btn btn-primary btn-lg " type="submit">Add
                                Hotel
                            </button></div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <footer>
        <div class="row">
            <div class="col-sm-6 col-md-4 col-xxl-3 footer-navigation col-sm-4">
                <h3><img src="assets/img/stayeeza-low-resolution-logo-color-on-transparent-background%20(1).png"
                        width="149" height="139"></h3>
                <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">About</a><strong> · </strong><a
                        href="#">Hotel</a><strong>&nbsp;</strong><a href="#"></a><a href="#"></a><strong> · </strong><a
                        href="#">Contact</a></p>
                <p class="company-name">Stayeeza © 2023 copyright</p>
            </div>
            <div class="col-sm-6 col-md-4 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p><span class="new-line-span">Passara Road</span> Badulla, Sri Lanka</p>
                </div>
                <div><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-start"> +94 775 123456</p>
                </div>
                <div class="align-items-center"><i class="fa fa-envelope footer-contacts-icon"></i>
                    <p> <a href="#" target="_blank">support@stayeeza.com</a></p>
                </div>
            </div>
            <div class="col-md-4 footer-about">
                <h4>About the company</h4>
                <p>Our website is your ultimate travel companion, offering a seamless experience from start to finish.
                    Discover a vast selection of accommodations and experiences tailored to your preferences. </p>
                <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i
                            class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i
                            class="fa fa-github"></i></a></div>
            </div>
        </div>
    </footer>
    <script src="https://kit.fontawesome.com/415a9991c1.js" crossorigin="anonymous"></script>


</body>

</html>