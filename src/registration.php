<?php
    session_start();
    
    $name=$surname=$birthday=$address=
    $houseNumber=$city=$nap=$telephone=
    $email=$hobby=$profession="";

    //Where insert the validation script
    $script = "<script>\n";

    // If is allready registered fill with the corresponding values
    if (isset($_SESSION['name']) &&
        isset($_SESSION['surname']) &&
        isset($_SESSION['birthday']) &&
        isset($_SESSION['address']) &&
        isset($_SESSION['houseNumber']) &&
        isset($_SESSION['city']) &&
        isset($_SESSION['nap']) &&
        isset($_SESSION['telephone']) &&
        isset($_SESSION['email']) &&
        isset($_SESSION["gender"])
    ){
        $name = $_SESSION["name"];
        $surname = $_SESSION["surname"];
        $birthday = $_SESSION["birthday"];
        $address = $_SESSION["address"];
        $houseNumber = $_SESSION["houseNumber"];
        $city = $_SESSION["city"];
        $nap = $_SESSION["nap"];
        $telephone = $_SESSION["telephone"];
        $email = $_SESSION["email"];
        $gender = $_SESSION["gender"];

        $script .= (
            'setGender("'.$gender.'");
            name.validate();
            surname.validate();
            birthday.validate();
            address.validate();
            houseNumber.validate();
            city.validate();
            nap.validate();
            telephone.validate();
            email.validate();'
        );
    }

    if(isset($_SESSION['hobby'])){
        $hobby = $_SESSION["hobby"];
        $script .= "hobby.validate();";
    }

    if(isset($_SESSION['profession'])){
        $profession = $_SESSION["profession"];
        $script .= "profession.validate();";
    }

    $script .= "\n</script>";

    session_destroy();
?>

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
    <link rel="shortcut icon" type="image/png" href="icon.png"/>

    <!-- Font special for pages-->
    <link href="css/poppins.css" rel="stylesheet">

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
                    <hr class="m-b-15" >
                    <p class="description">
                    Si prega di immettere i propri dati personali per effettuare la registrazione,
                    completando tutti i <b>campi obbligatori</b> contrassegnati con il carattere "<b>*</b>"
                    </p>
                    <hr class="m-b-25 m-t-15">

                    <!-- Form -->
                    <form id="form" action="control.php" method="POST" >

                        <div class="row row-space">

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nome*</label>
                                    <input id="name"
                                        class="input--style-4 required" 
                                        type="text" 
                                        name="name"
                                        maxlength="50"
                                        value="<?php echo($name); ?>">
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
                                        maxlength="50"
                                        value="<?php print($surname);; ?>">
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
                                            class="input--style-4" 
                                            type="date"
                                            name="birthday"
                                            maxlength="8"
                                            value="<?php print($birthday); ?>">
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
                                            name="address"
                                            value="<?php print($address); ?>">
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
                                        maxlength="4"
                                        value="<?php print($houseNumber); ?>">
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
                                        maxlength="50"
                                        value="<?php print($city); ?>">
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
                                        maxlength="5"
                                        value="<?php print($nap); ?>">
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
                                        maxlength="50"
                                        value="<?php print($telephone); ?>">
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
                                        maxlength="50"
                                        value="<?php print($email); ?>">
                                    <h6 id="emailError" class="notify"></h6>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Genere*</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">M
                                            <input id="M" 
                                                type="radio" 
                                                value="M"
                                                name="gender"
                                                checked>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">F
                                            <input id="F"
                                                type="radio"
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
                                        maxlength="500"
                                        ><?php print($hobby); ?></textarea>
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
                                        maxlength="500"><?php print($profession); ?></textarea>
                                    <h6 id="professionError" class="notify"></h6>
                                </div>
                            </div> 
                        </div>


                        <hr class="m-b-25 m-t-25">

                        <div class="btn-container p-t-15">
                            <button id="register" 
                                class="btn btn--radius-2 btn--red m-r-30" 
                                type="submit">
                                Avanti
                            </button>
                            <button id="empty" 
                                class="btn btn--radius-2 btn--red m-r-30" 
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
    <script src="js/disableBackHistory"></script>
    <script src="js/Validators/validator.js"></script>
    <script src="js/Validators/date_validator.js"></script>
    <script src="js/registration.js"></script>

    <?php print($script); ?>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->