<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Registrazione</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-04 p-t-45 p-b-50 font-poppins">
        <div class="wrapper wrapper--w790">
            <div class="card card-4">
            
                <div class="card-heading">
                    <h2 class="title">Registrazione</h2>
                </div>

                <div class="card-body">
                    <hr class="m-b-10" >
                    <p class="description">Si prega di immettere i propri dati personali per effettuare la registrazione, completando tutti i campi obbligatori, contrassegnati con il carattere "*"</p>
                    <hr class="m-b-25 m-t-10">

                    <!-- Form -->
                    <form id="form" action="POST">


                        <div class="row row-space">

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nome*</label>
                                    <input id="name"
                                        class="input--style-4 required" 
                                        type="text" 
                                        name="name"
                                        maxlength="50">
                                    <h6 id="nameError" class="notify"></h6>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Cognome*</label>
                                    <input id="surname" 
                                        class="input--style-4 required" 
                                        type="text" 
                                        name="surname"
                                        maxlength="50">
                                    <h6 id="surnameError" class="notify"></h6>
                                </div>
                            </div>

                        </div>
                        


                        <div class="row row-space">

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Data di Nascita*</label>
                                    <div class="input-group-icon">
                                        <input id="birthday"
                                            class="input--style-4 js-datepicker" 
                                            type="text"
                                            name="birthday"
                                            maxlength="10">
                                        <i class="zmdi 
                                            zmdi-calendar-note 
                                            input-icon js-btn-calendar">
                                        </i>
                                        <h6 id="birthdayError" class="notify"></h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Indirizzo*</label>
                                    <div class="input-group-icon">
                                        <input id="address"
                                            class="input--style-4" 
                                            type="text"
                                            name="address">
                                        <h6 id="addressError" class="notify"></h6>
                                    </div>
                                </div>
                            </div>
                        
                        </div>



                        <div class="row row-space">

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Numero Civico*</label>
                                    <input id="houseNumber" 
                                        class="input--style-4" 
                                        type="text" 
                                        name="houseNumber"
                                        maxlength="4">
                                    <h6 id="houseNumberError" class="notify"></h6>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Città*</label>
                                    <input id="city" 
                                        class="input--style-4" 
                                        type="text" 
                                        name="city"
                                        maxlength="50">
                                    <h6 id="cityError" class="notify"></h6>
                                </div>
                            </div>

                        </div>



                        <div class="row row-space">

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">NAP*</label>
                                    <input id="nap" 
                                        class="input--style-4" 
                                        type="text" 
                                        name="nap"
                                        maxlength="5">
                                    <h6 id="napError" class="notify"></h6>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">No. Telefono*</label>
                                    <input id="telephone" 
                                        class="input--style-4" 
                                        type="tel" 
                                        name="telephone"
                                        maxlength="50">
                                    <h6 id="telephoneError" class="notify"></h6>
                                </div>
                            </div>

                        </div>



                        <div class="row row-space">

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">E-Mail*</label>
                                    <input id="email" 
                                        class="input--style-4" 
                                        type="email"
                                        name="email"
                                        maxlength="50">
                                    <h6 id="emailError" class="notify"></h6>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Genere*</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">M
                                            <input type="radio" 
                                                checked="checked"
                                                value="M"
                                                name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">F
                                            <input type="radio"
                                                value="F"
                                                name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <!-- Buttons -->
                        <div class="row">
                            <div class="col-1">
                                <div class="input-group">
                                    <label class="label">Hobby</label>
                                    <textarea id="hobby"
                                        class="input--style-4 textarea" 
                                        type="text"
                                        name="hobby"
                                        maxlength="500"></textarea>
                                    <h6 id="hobbyError" class="notify"></h6>
                                </div>
                            </div> 
                        </div>


                        <div class="row">
                            <div class="col-1">
                                <div class="input-group">
                                    <label class="label">Professione</label>
                                    <textarea id="profession"
                                        class="input--style-4 textarea" 
                                        type="text"
                                        name="profession"
                                        maxlength="500"></textarea>
                                    <h6 id="professionError" class="notify"></h6>
                                </div>
                            </div> 
                        </div>


                        <hr class="m-b-25 m-t-25">

                        <div class="p-t-15">
                            <button id="register" 
                                class="btn btn--radius-2 btn--red" 
                                type="submit">
                                Registati
                            </button>
                            <button id="empty"
                                class="btn btn--radius-2 btn--red" 
                                type="reset">
                                Cancella
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
    <script src="js/Validators/validator.js"></script>
    <script src="js/Validators/name_validator.js"></script>
    <script src="js/Validators/house_number_validator.js"></script>
    <script src="js/Validators/nap_validator.js"></script>
    <script src="js/registration.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->