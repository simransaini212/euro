<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TRAVELER - Free Travel Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php include ("./components/header.php"); ?>
    <!-- Booking Start -->
    <div class="container-fluid booking mt-5 pb-5">
        <div class="container pb-5">
            <div class="bg-light shadow" style="padding: 30px;">
                <div class="row align-items-center" style="min-height: 60px;">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>Zielort</option>
                                        <!-- States of Germany -->
                                        <optgroup label="Deutschland">
                                            <option value="1">Baden-Württemberg</option>
                                            <option value="2">Bayern</option>
                                            <option value="3">Berlin</option>
                                            <option value="4">Brandenburg</option>
                                            <option value="5">Bremen</option>
                                            <option value="6">Hamburg</option>
                                            <option value="7">Hessen</option>
                                            <option value="8">Mecklenburg-Vorpommern</option>
                                            <option value="9">Niedersachsen</option>
                                            <option value="10">Nordrhein-Westfalen</option>
                                            <option value="11">Rheinland-Pfalz</option>
                                            <option value="12">Saarland</option>
                                            <option value="13">Sachsen</option>
                                            <option value="14">Sachsen-Anhalt</option>
                                            <option value="15">Schleswig-Holstein</option>
                                            <option value="16">Thüringen</option>
                                        </optgroup>
                                        <!-- States of Switzerland -->
                                        <optgroup label="Schweiz">
                                            <option value="17">Aargau</option>
                                            <option value="18">Appenzell Ausserrhoden</option>
                                            <option value="19">Appenzell Innerrhoden</option>
                                            <option value="20">Basel-Landschaft</option>
                                            <option value="21">Basel-Stadt</option>
                                            <option value="22">Bern</option>
                                            <option value="23">Freiburg</option>
                                            <option value="24">Genf</option>
                                            <option value="25">Glarus</option>
                                            <option value="26">Graubünden</option>
                                            <option value="27">Jura</option>
                                            <option value="28">Luzern</option>
                                            <option value="29">Neuenburg</option>
                                            <option value="30">Nidwalden</option>
                                            <option value="31">Obwalden</option>
                                            <option value="32">Schaffhausen</option>
                                            <option value="33">Schwyz</option>
                                            <option value="34">Solothurn</option>
                                            <option value="35">St. Gallen</option>
                                            <option value="36">Tessin</option>
                                            <option value="37">Thurgau</option>
                                            <option value="38">Uri</option>
                                            <option value="39">Waadt</option>
                                            <option value="40">Wallis</option>
                                            <option value="41">Zug</option>
                                            <option value="42">Zürich</option>
                                        </optgroup>
                                    </select>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control p-4 datetimepicker-input"
                                            placeholder="Depart Date" data-target="#date1"
                                            data-toggle="datetimepicker" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <input type="text" class="form-control p-4 datetimepicker-input"
                                            placeholder="Return Date" data-target="#date2"
                                            data-toggle="datetimepicker" />
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary btn-block" type="submit"
                            style="height: 47px; margin-top: -2px;">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->


    <!-- Service Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Services</h6>
                <h1>Tours & Travel Services</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-route mx-auto mb-4"></i>
                        <h5 class="mb-2">Travel Guide</h5>
                        <p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est
                            amet labore</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-ticket-alt mx-auto mb-4"></i>
                        <h5 class="mb-2">Ticket Booking</h5>
                        <p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est
                            amet labore</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        <h5 class="mb-2">Hotel Booking</h5>
                        <p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est
                            amet labore</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-route mx-auto mb-4"></i>
                        <h5 class="mb-2">Travel Guide</h5>
                        <p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est
                            amet labore</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-ticket-alt mx-auto mb-4"></i>
                        <h5 class="mb-2">Ticket Booking</h5>
                        <p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est
                            amet labore</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        <h5 class="mb-2">Hotel Booking</h5>
                        <p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est
                            amet labore</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <?php include ("./components/testimonials.php");?>


    <?php include ("./components/footer.php"); ?>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>