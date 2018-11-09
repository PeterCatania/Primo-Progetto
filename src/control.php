<?php
    session_start();

    //If not registered, takes to the initial page "home.html"
    if(!isset($_POST['name'])){
        echo'<script>
                window.location.href = "home.html";
            </script>';
    }

    //filter all values in the post variables
    function filter($v){
        htmlspecialchars($v, ENT_QUOTES);
        return $v;
    }
    $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    //impost all session variables
    $_SESSION["name"] = filter($_POST["name"]);
    $_SESSION["surname"] = filter($_POST["surname"]);
    $_SESSION["birthday"] = filter($_POST["birthday"]);
    $_SESSION["address"] = filter($_POST["address"]);
    $_SESSION["houseNumber"] = filter($_POST["houseNumber"]);
    $_SESSION["city"] = filter($_POST["city"]);
    $_SESSION["nap"] = filter($_POST["nap"]);
    $_SESSION["telephone"] = filter($_POST["telephone"]);
    $_SESSION["email"] = filter($_POST["email"]);
    $_SESSION["gender"] = filter($_POST["gender"]);
    $_SESSION["hobby"] = filter($_POST["hobby"]);
    $_SESSION["profession"] = filter($_POST["profession"]);
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
    <title>Controllo</title>

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

    <!-- Control Table CSS-->
    <link href="css/control_table.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-04 p-t-45 p-b-50 font-poppins">
        <div class="wrapper wrapper--w790">
            <div class="card card-4">
            
                <div class="card-heading">
                    <h2 class="title">Controllo</h2>
                </div>

                <div class="card-body">
                    <hr class="m-b-15" >
                    <p class="description">
                        Si consiglia di controllare i propri inserimenti, ad esempio per imprecisioni e mancanze               
                    </p>
                    <hr class="m-b-45 m-t-25">
                    <table class="control-table">
                        <tr class="table-header">
                            <th>Campo</th>
                            <th>Inserimento</td>
                        </tr>
                        <tr>
                            <th>Nome</th>
                            <td><?php print($_SESSION["name"]); ?></td>
                        </tr>
                        <tr>
                            <th>Cognome</th>
                            <td><?php print($_SESSION["surname"]); ?></td>
                        </tr>
                        <tr>
                            <th>Data di nascita</th>
                            <td><?php print($_SESSION["birthday"]); ?></td>
                        </tr>
                        <tr>
                            <th>Indirizzo</th>
                            <td><?php print($_SESSION["address"]); ?></td>
                        </tr>
                        <tr>
                            <th>No. Civico</th>
                            <td><?php print($_SESSION["houseNumber"]); ?></td>
                        </tr>
                        <tr>
                            <th>Città</th>
                            <td><?php print($_SESSION["city"]); ?></td>
                        </tr>
                        <tr>
                            <th>NAP</th>
                            <td><?php print($_SESSION["nap"]); ?></td>
                        </tr>
                        <tr>
                            <th>No. Telefono</th>
                            <td><?php print($_SESSION["telephone"]); ?></td>
                        </tr>
                        <tr>
                            <th>E-mail</th>
                            <td><?php print($_SESSION["email"]); ?></td>
                        </tr>
                        <tr>
                            <th>Genere</th>
                            <td><?php print($_SESSION["gender"]); ?></td>
                        <tr>
                            <th>Hobby</th>
                            <td><?php print($_SESSION["hobby"]); ?></td>
                        </tr>
                        <tr>
                            <th>Professione</th>
                            <td><?php print($_SESSION["profession"]); ?></td>
                        </tr>
                    </table>

                    <hr class="m-b-25 m-t-45">

                    <div class="btn-container p-t-15">
                        <a id="register"
                            href="view.php"
                            class="link-btn btn--radius-2 btn--red m-r-30">
                            Registra
                        </a>
                        <a id="correct" 
                            href="registration.php" 
                            class="link-btn btn--radius-2 btn--red m-r-30">
                            Correggi
                        </a>
                    </div>
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
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
