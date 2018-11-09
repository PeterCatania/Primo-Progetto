<?php
    session_start();

    /**
     * Return a sequence of UTF-8 equivalent unicode values.
     */
    function replace_unicode_escape_sequence($match) {
        return mb_convert_encoding(pack('H*', $match[1]), 'UTF-8', 'UCS-2BE');
    }

    /**
     * Decode the unicode values present in a string.
     */
    function unicode_decode($str) {
        return preg_replace_callback('/\\\\u([0-9a-f]{4})/i', 'replace_unicode_escape_sequence', $str);
    }

    /**
     * Encode semicolumns present in a string.
     */
    function unicode_encode($v){
        $v = str_replace(";","\u003B",$v);
        return $v;
    }

    /**
     * Create if not exists files and folders, 
     * and add the data in csv
     */
    if(isset($_SESSION['name'])){
        //set timezone
        date_default_timezone_set('Europe/Zurich');
        
        //set data variables
        $dateHour = date('Y.m.d H:i:s', time());
        $date = date('Y.m.d', time());

        //get the path, were is this file
        $path = getcwd();
        //create folder "Registrazioni" if not exists 
        $dir = $path."/Registrazioni";
        if (!file_exists($dir)) {
            mkdir($dir, 0777, true);
        }

        //set the path of the csv file "Registrazioni_tutte.csv"
        $allReg = $dir . "/Registrazioni_tutte.csv";

        //set the header of the csv files 
        $header = "DataOra;Nome;Cognome;DataNascita;Indirizzo;NCivico;Citta;NAP;NTelefono;Email;Genere;Hobby;Professione";

        //create the csv file if not exists, and insert the header
        if(!file_exists($allReg)){
            $handle = fopen($allReg, "w");
            file_put_contents($allReg, $header, FILE_APPEND | LOCK_EX);
            fclose($handle);
        }

        //set the registration data as a csv row
        $data = 
            "\n".$dateHour.";".
            unicode_encode($_SESSION["name"]).";".
            unicode_encode($_SESSION["surname"]).";".
            unicode_encode($_SESSION["birthday"]).";".
            unicode_encode($_SESSION["address"]).";".
            unicode_encode($_SESSION["houseNumber"]).";".
            unicode_encode($_SESSION["city"]).";".
            unicode_encode($_SESSION["nap"]).";".
            unicode_encode($_SESSION["telephone"]).";".
            unicode_encode($_SESSION["email"]).";".
            unicode_encode($_SESSION["gender"]).";".
            unicode_encode($_SESSION["hobby"]).";".
            unicode_encode($_SESSION["profession"]
        );

        //insert the registration data in the csv
        file_put_contents($allReg, $data, FILE_APPEND | LOCK_EX);

        //set the path of the csv file "Registrazioni_aaaa.mm.gg.csv"
        $todayReg = $dir . "/Registrazioni_" . $date . ".csv";

        //create the file csv if not exists, and insert the header
        if(!file_exists($todayReg)){
            $handle = fopen($todayReg, "w");
            file_put_contents($todayReg, $header, FILE_APPEND | LOCK_EX);
            fclose($handle);
        }

        //insert the registration data in the csv file "Registrazioni_aaaa.mm.gg.csv"
        file_put_contents($todayReg, $data, FILE_APPEND | LOCK_EX);
    }

    /**
     * Print the registrations values in tables.
     */
    function showTodayRegistrations($todayReg,$header){

        //get all registration data of the current day, and transform in to an array
        $allData = substr(file_get_contents($todayReg), strlen($header));
        $rows = explode("\n", $allData);
        unset($rows[0]);
        $rows = array_reverse($rows);

        //set the fields name as an array
        $fieldsName = array(
            "Data e Ora",
            "Nome",
            "Cognome",
            "Data di nascita",
            "Indirizzo",
            "No. Civico",
            "Città",
            "NAP",
            "No. Telefono",
            "Email",
            "Genere",
            "Hobby",
            "Professione"
        );

        //print all tables of registration data
        foreach($rows as $row){
            echo "<table class='control-table'>";
            echo "<tr>";
            echo "<th>Campo</th>";
            echo "<th>Valore</th>";
            echo "</tr>";

            $fieldsData = explode(";", $row);
            for($i = 0; $i < count($fieldsData); $i++){
                echo "<tr>";
                echo "<td>".$fieldsName[$i]."</td>";
                echo "<td>".unicode_decode($fieldsData[$i])."</td>";
                echo "</tr>";
            }

            echo "</table>";
            echo "<br>";
        }
    }
    
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
                    <h2 class="title">Visualizzazione</h2>
                </div>

                <div class="card-body">
                    <hr class="m-b-15" >
                    <p class="description">
                        Le registrazioni di oggi          
                    </p>
                    <hr class="m-b-45 m-t-25">

                    <?php 
                    //Print all registrations in tables
                    if(isset($_SESSION['name'])){
                        showTodayRegistrations($todayReg,$header); 
                    }else{
                        echo'<script>
                                window.location.href = "home.html";
                            </script>';
                    }
                    ?>

                    <hr class="m-b-25 m-t-45">

                    <div class="btn-container p-t-15">
                        <a id="home" 
                            href="home.html" 
                            class="link-btn btn--radius-2 btn--red">
                            Home
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
